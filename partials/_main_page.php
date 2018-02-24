<?php include_once 'engines/flashes.php'; ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.css">
    <script src="node_modules/jquery/dist/jquery.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.js"></script>
    <link rel="stylesheet" href="stylesheets/f-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="stylesheets/style.css">
    <link rel="stylesheet" href="stylesheets/todolists.css">
    <link rel="stylesheet" href="stylesheets/helpers.css">
    <title>to do list</title>
    <script src="scripts/script.js"></script>
  </head>
  <body>
    <header>
      <div class="container-fluid">
        <div class="row">
          <?php include_once 'partials/_header_for_guest.php' ?>
        </div>
      </div>
    </header>
    <main>
      <div class="container-fluid">
        <div class="row">
          <?php setFlash() ?>
          <div class="authentication col-xs-12">
            <?php include_once 'partials/_registration_form.php' ?>
            <?php include_once 'partials/_login_form.php' ?>
          </div>
        </div>
      </div>
    </main>
    <footer></footer>
    <script src='scripts/render.js'></script>
  </body>
</html>
