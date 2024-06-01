<?php include_once('layout/header.php'); ?>

<main>
  <div class="container-login">
    <h1>Greppeltocht <?= date('Y') ?></h1>

    <form action="authenticate.php" method="post">
      <input type="text" name="username" placeholder="Gebruikersnaam">
      <input type="password" name="password" placeholder="Wachtwoord">

      <button type="submit">
        Inloggen
      </button>

    </form>
  </div>

  <img src="/img/mario.webp" />
</main>

<?php include_once('layout/footer.php'); ?>
