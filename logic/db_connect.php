<?php
require_once('config.php');

function db_connect() {
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
        return $con;
    } catch (mysqli_sql_exception $e) {
        error_log($e->getMessage());
        exit('Failed to connect to MySQL.');
    }
}
?>
