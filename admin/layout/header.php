<?php require_once('authenticate.php'); ?>

<!DOCTYPE html>
<html lang="nl">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Greppeltocht</title>
    <link rel="stylesheet" href="../admin/style.css">
    <link rel="icon" href="./favicon.ico" type="image/x-icon">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Patua+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">

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
          <a href="/admin/">
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
