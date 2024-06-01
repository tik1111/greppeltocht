<?php
    session_start();

    require_once('../config.php');

    $DATABASE_HOST = 'localhost';
    $DATABASE_USER = $_CONFIG['db_user'];
    $DATABASE_PASS = $_CONFIG['db_password'];
    $DATABASE_NAME = $_CONFIG['db_name'];
    // Try and connect using the info above.
    $con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);

    if ( mysqli_connect_errno() ) {
        // If there is an error with the connection, stop the script and display the error.
        exit('Failed to connect to MySQL: ' . mysqli_connect_error());
    }

    if ( !isset($_POST['username'], $_POST['password']) ) {
        // Could not get the data that should have been sent.
        exit('Please fill both the username and password fields!');
    }
