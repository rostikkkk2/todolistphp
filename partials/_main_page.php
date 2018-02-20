<?php include_once 'engines/flashes.php'; ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="stylesheets/f-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="stylesheets/style.css">
    <link rel="stylesheet" href="stylesheets/todolists.css">
    <link rel="stylesheet" href="stylesheets/helpers.css">
    <title>to do list</title>
    <script src="scripts/script.js"></script>
  </head>
  <body>
    <?php include_once 'partials/_header_for_guest.php' ?>
    <main>
      <?php setFlash() ?>
      <section class="authentication">
        <?php include_once 'partials/_registration_form.php' ?>
        <?php include_once 'partials/_login_form.php' ?>
      </section>
    </main>
    <footer></footer>
    <script src='scripts/render.js'></script>
  </body>
</html>
