<?php
  session_start();
  if (isset($_SESSION['id']) && !empty($_SESSION['id'])){
    include_once 'partials/_todolists_page.php';
  }else{
    $_SESSION['error'] = 'You must authorize!';
    header('Location: http://todolist.com');
  }
?>
