<?php
    header('Cache-Control: no-cache, must-revalidate');
    header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');
    header('Content-type: application/json');

    require_once(__DIR__.'/../../admin/layout/authenticate.php');

    $response_array['data'] = [
        'team_id' => $_SESSION['id'],
        'time' => time(),
        'latitude' => $_GET['latitude'],
        'longitude' => $_GET['longitude'],
    ];

    $response_array['image'] = '../admin/includes/qrcode.php?s=qr&d='. urlencode(json_encode($response_array['data'])) . '&sf=8&ms=r';
    $response_array['time'] = date('d-m-Y H:i:s', time());

    echo json_encode($response_array);
?>
