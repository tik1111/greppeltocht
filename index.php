<?php require_once('../config.php'); ?>

<?php include_once('header.php'); ?>

<main>
  <div class="container-login">
    <h1>Greppeltocht <?= date('Y') ?></h1>

    <form action="">
      <input type="text" name="username" placeholder="Gebruikersnaam">
      <input type="password" name="password" placeholder="Wachtwoord">

      <button type="submit">
        Inloggen
      </button>

      <pre>
        <?php print_r($_CONFIG); ?>
      </pre>

    </form>
  </div>

  <img src="/img/mario.webp" />
</main>

<?php include_once('footer.php'); ?>
