<?php include_once('layout/header.php'); ?>

<main>
    <div class="content">
        <h1>Opdrachten</h1>

        <form action="">
            <input id="single" type="text" size="255">

            <button type="button" class="button qrcode-reader" id="openreader-single"
                data-qrr-target="#single"
                data-qrr-audio-feedback="false">
                Scan code
            </button>

        </form>

        <!-- https://blog.minhazav.dev/research/html5-qrcode -->

        <!-- https://github.com/mauntrelio/qrcode-reader -->
    </div>
</main>

<?php include_once('layout/footer.php'); ?>
