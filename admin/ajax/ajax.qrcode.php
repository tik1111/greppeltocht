<?php
    header('Cache-Control: no-cache, must-revalidate');
    header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');
    header('Content-type: application/json');

    require_once('/admin/authenticate.php');

    $response_array['data'] = [
        'team_id' => $_SESSION['id'],
        'time' => time(),
    ];

    $response_array['image'] = '../admin/includes/qrcode.php?s=qr&d='. urlencode(json_encode($response_array['data'])) . '&sf=8&ms=r';

    echo json_encode($response_array);
?>
