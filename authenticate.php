<?php
session_start();
require_once('../config.php');

// Ensure error reporting is disabled in production
error_reporting(0);
ini_set('display_errors', 0);

// Secure session settings
ini_set('session.cookie_httponly', 1);
ini_set('session.cookie_secure', 1);
ini_set('session.use_strict_mode', 1);

// Ensure database config values are set
if (!isset($_CONFIG['db_user'], $_CONFIG['db_password'], $_CONFIG['db_name'])) {
    exit('Database configuration not set.');
}

$DATABASE_HOST = 'localhost';
$DATABASE_USER = $_CONFIG['db_user'];
$DATABASE_PASS = $_CONFIG['db_password'];
$DATABASE_NAME = $_CONFIG['db_name'];

// Try to connect using the info above
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
try {
    $con = new mysqli($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
    $con->set_charset('utf8mb4');
} catch (mysqli_sql_exception $e) {
    error_log($e->getMessage());
    exit('Failed to connect to MySQL.');
}

if (!isset($_POST['username'], $_POST['password'])) {
    exit('Please fill both the username and password fields!');
}

// Prepare SQL to prevent SQL injection
if ($stmt = $con->prepare('SELECT id, password FROM accounts WHERE username = ?')) {
    $stmt->bind_param('s', $_POST['username']);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        $stmt->bind_result($id, $password);
        $stmt->fetch();

    // Prepare our SQL, preparing the SQL statement will prevent SQL injection.
    if ($stmt = $con->prepare('SELECT id, password, role FROM accounts WHERE username = ?')) {
        // Bind parameters (s = string, i = int, b = blob, etc), in our case the username is a string so we use "s"
        $stmt->bind_param('s', $_POST['username']);
        $stmt->execute();
        // Store the result so we can check if the account exists in the database.
        $stmt->store_result();

        if ($stmt->num_rows > 0) {
            $stmt->bind_result($id, $password, $role);
            $stmt->fetch();
            // Account exists, now we verify the password.
            // Note: remember to use password_hash in your registration file to store the hashed passwords.
            if (password_verify($_POST['password'], $password)) {
                // Verification success! User has logged-in!
                // Create sessions, so we know the user is logged in, they basically act like cookies but remember the data on the server.
                session_regenerate_id();
                $_SESSION['loggedin'] = TRUE;
                $_SESSION['name'] = $_POST['username'];
                $_SESSION['id'] = $id;
                $_SESSION['role'] = $role;

                // Incorrect password
                header('Location: /admin/');
	            exit;
            } else {
                // Incorrect password
                header('Location: /?error=1');
	            exit;
            }
        } else {
            // Incorrect password
            header('Location: /?error=1');
            exit;
        }
    } else {
        // Incorrect username
        header('Location: /?error=1');
        exit;
    }

    $stmt->close();
} else {
    error_log('Failed to prepare the SQL statement.');
    exit('Internal server error.');
}

$con->close();
?>
