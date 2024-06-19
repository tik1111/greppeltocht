<?php
    include '../admin/includes/qrcode.php';

    $data = [
        'team_id'=> '1',
        'time'=> time()
    ];
?>


<div class="popup-overlay"></div>
<div class="popup-container">
    <pre>
        <?php print_r($data); ?>
    </pre>

    <img src="../admin/includes/qrcode.php?s=qr&d=<?= urlencode(json_encode($data)) ?>&sf=8&ms=r">
</div>
