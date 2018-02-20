<?php
  session_start();
  if (isset($_SESSION['id']) && !empty($_SESSION['id'])){
    header('Location: http://todolist.com/todolists.php');
  }else{
    include_once 'partials/_main_page.php';
  }
?>
