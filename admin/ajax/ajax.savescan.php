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

    // $response_array['data'] = [
    //     'team_id' => $_SESSION['id'],
    //     'time' => time(),
    //     'latitude' => $_GET['latitude'],
    //     'longitude' => $_GET['longitude'],
    // ];

    // $response_array['image'] = '../admin/includes/qrcode.php?s=qr&d='. urlencode(json_encode($response_array['data'])) . '&sf=8&ms=r';
    // $response_array['time'] = date('d-m-Y H:i:s', time());

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

    echo $sql;


    $response_array['data'] = $data;

    $response_array['succes'] = true;

    echo json_encode($response_array);
?>
