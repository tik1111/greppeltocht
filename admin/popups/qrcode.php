<?php
    include '../includes/qrcode.php';

    $data = 'TEST';
    $options = [];

    $generator = new QRCode($data, $options);

    /* Output directly to standard output. */
    $generator->output_image();

    /* Create bitmap image. */
    $image = $generator->render_image();
    imagepng($image);
    imagedestroy($image);
?>


<div class="popup-overlay"></div>
<div class="popup-container">

</div>
