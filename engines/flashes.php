<?php
  function setFlash() {
    session_start();
    if (isset($_SESSION['error']) && !empty($_SESSION['error'])){
      $flash_type = 'error';
      include_once('partials/_flash.php');
      $_SESSION['error'] = '';
    }elseif (isset($_SESSION['success']) && !empty($_SESSION['success'])){
      $flash_type = 'success';
      include_once('partials/_flash.php');
      $_SESSION['success'] = '';
    }
  }
?>
