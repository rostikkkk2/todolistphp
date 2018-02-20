<?php
  session_start();
  if (isset($_POST['title']) && isset($_POST['todolist_id'])){
    if (!empty($_POST['title']) && !empty($_POST['todolist_id'])){
      $title = $_POST['title'];
      $todolist_id = $_POST['todolist_id'];
      addTask($title, $todolist_id);
    }else{
      $_SESSION['error'] = 'Title cant be empty';
      header('Location: http://todolist.com/todolists.php');
    }
  }else{
    $_SESSION['error'] = 'You are not authorized for this action';
    header('Location: http://todolist.com');
  }

  function addTask($title, $todolist_id) {
    $connect = mysqli_connect('localhost', 'denis', 'denis', 'todolist');
    $query = "INSERT INTO `tasks`(title, todolist_id) VALUES('$title', '$todolist_id')";
    $result = mysqli_query($connect, $query);
    if ($result) {
      $_SESSION['success'] = 'Task created';
    }else{
      $_SESSION['error'] = 'Something went wrong while creating';
    }
    header('Location: http://todolist.com/todolists.php');
  }

?>
