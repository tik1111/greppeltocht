<?php
    header('Cache-Control: no-cache, must-revalidate');
    header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');
    header('Content-type: application/json');

    require_once(__DIR__.'/../../admin/layout/authenticate.php');

    require_once(__DIR__.'/../../../config.php');

    $DATABASE_HOST = 'localhost';
    $DATABASE_USER = $_CONFIG['db_user'];
    $DATABASE_PASS = $_CONFIG['db_password'];
    $DATABASE_NAME = $_CONFIG['db_name'];

    $con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);

    $data = json_decode($_POST['data'], true);
    $sql = "
        INSERT INTO
            finds
        SET
            hider_id = '".$data['team_id']."',
            seeker_id = '".$_SESSION['id']."',
            datetime = '".$data['team_id']."',
            latitude = '".$data['latitude']."',
            longitude = '".$data['longitude']."'
    ";
    mysqli_query($con, $sql );

    $response_array['succes'] = true;

    echo json_encode($response_array);
?>
