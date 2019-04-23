<?php
  session_start();
  if (isset($_POST['title_task']) && !empty($_POST['title_task'])){
    $title_task = $_POST['title_task'];
    $id = $_POST['id'];
    changeTitleInDB($id, $title_task);
    if (changeTitleInDB($id, $title_task)) {
      $_SESSION['success'] = 'Your title task changed';
      header('Location: http://todolist.com/todolists.php');
    }
  }else{
    $_SESSION['error'] = 'You are not authorized for this action';
    header('Location: http://todolist.com');
  }

  function changeTitleInDB($id, $title_task){
    $connect = mysqli_connect('localhost', 'denis', 'denis', 'todolist');
    if ($connect) {
      $query = "UPDATE `tasks` SET `title` = '$title_task' WHERE `id` = '$id';";
      $result = mysqli_query($connect, $query);
      return true;
    }else {
      return false;
    }
  }
?>
