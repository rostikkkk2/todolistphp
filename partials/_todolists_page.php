<?php include_once 'engines/flashes.php'; ?>
<?php include_once 'engines/todolist/select.php'; ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="node_modules/jquery/dist/jquery.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.js"></script>
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.css">
    <link rel="stylesheet" href="stylesheets/f-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="stylesheets/style.css">
    <link rel="stylesheet" href="stylesheets/todolists.css">
    <link rel="stylesheet" href="stylesheets/helpers.css">
    <script src="scripts/todo_actions.js"></script>
    <title>to do list</title>
  </head>
  <body>
    <header>
      <div class="container-fluid">
        <div class="row">
          <?php include_once 'partials/_header_for_authorized.php' ?>
        </div>
      </div>
    </header>
    <main>
      <div class="container-fluid">
        <div class="row">
          <?php setFlash() ?>
          <div class="flash-js">  </div>
          <section class="todolists">
            <h1>GrowUp Todo</h1>
            <div class="todolists_wrapper">
              <?php
              foreach(selectTodolists() as $todolist){
                include 'partials/todolist/_todolist.php';
              }
              ?>
            </div>
            <form action="engines/todolist/create.php" method="post">
              <button type="submit" class="add-todolist">
                <i class="fa fa-plus fa-lg" aria-hidden="true"></i>
                Add new todo
              </button>
            </form>
          </section>
        </div>
      </div>
    </main>
    <footer></footer>
    <script src='scripts/render.js'></script>
  </body>
</html>
