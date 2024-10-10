<?php require_once('authenticate.php'); ?>

<!DOCTYPE html>
<html lang="nl">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Greppeltocht</title>
    <link rel="stylesheet" href="../admin/css/style.css">
    <link rel="stylesheet" href="../admin/css/qrcode-reader.css">

    <link rel="icon" href="./favicon.ico" type="image/x-icon">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Patua+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin=""/>
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js" integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>

    <script src="https://cdn.jsdelivr.net/npm/@tsparticles/confetti@3.0.3/tsparticles.confetti.bundle.min.js"></script>

    <link rel="manifest" href="../manifest.json">
  </head>
  <body>
    <nav class="navigation">
      <ul>
        <li>
          <a href="/admin/">
            <i class="fas fa-home"></i>
          </a>
        </li>
        <li>
          <a href="/admin/tasks.php">
            <i class="fas fa-tasks"></i>
          </a>
        </li>
        <li>
          <a href="/admin/logout.php">
            <i class="fas fa-sign-out-alt"></i>
          </a>
        </li>
      </ul>
    </nav>

    <div class="buttons">
      <?php if ($_SESSION['role'] == 1 || $_SESSION['role'] == 2) { ?>
        <span class="button" data-action="show_qr">
          <i class="fas fa-qrcode"></i>
        </span>
      <?php } ?>

      <?php if ($_SESSION['role'] == 1 || $_SESSION['role'] == 3) { ?>
        <button type="button" class="button qrcode-reader" id="openreader-single"
          data-qrr-target="#data"
          data-qrr-audio-feedback="true">
            <i class="fas fa-plus"></i>
        </button>
      <?php } ?>
    </div>
