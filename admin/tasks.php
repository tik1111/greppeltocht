<?php include_once('layout/header.php'); ?>

<main>
    <h1>Opdrachten</h1>

    <form action="">
        <input id="single" type="text" size="50">

        <button type="button" class="qrcode-reader" id="openreader-single"
            data-qrr-target="#single"
            data-qrr-audio-feedback="false"
            data-qrr-qrcode-regexp="^https?:\/\/">
            Read QRCode
        </button>

    </form>

    <!-- https://blog.minhazav.dev/research/html5-qrcode -->

    <!-- https://github.com/mauntrelio/qrcode-reader -->
</main>

<?php include_once('layout/footer.php'); ?>
