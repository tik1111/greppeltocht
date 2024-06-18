<?php include_once('layout/header.php'); ?>

<main>
    <div class="title">
        <h1>Opdrachten</h1>
    </div>

    <div class="content">
        <form action="">
            <input id="single" type="text" size="255">

            <button type="button" class="button qrcode-reader" id="openreader-single"
                data-qrr-target="#single"
                data-qrr-audio-feedback="true">
                Scan code
            </button>

        </form>

        <!-- https://blog.minhazav.dev/research/html5-qrcode -->

        <!-- https://github.com/mauntrelio/qrcode-reader -->

        <img src="includes/qrcode.php?s=qr&d=HELLO%20WORLD&sf=8&ms=r">
    </div>
</main>

<?php include_once('layout/footer.php'); ?>
