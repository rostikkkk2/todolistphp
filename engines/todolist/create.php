<?php
  session_start();

  if (isset($_SESSION['id']) && !empty($_SESSION['id'])){
    $default_title = 'My todolist';
    $user_id = $_SESSION['id'];
    addTodolist($user_id, $default_title);
  }else{
    $_SESSION['error'] = 'You are not authorized for this action';
    header('Location: http://todolist.com');
  }

  function addTodolist($user_id, $title) {
    $connect = mysqli_connect('localhost', 'denis', 'denis', 'todolist');
    $query = "INSERT INTO `todolists`(title, user_id) VALUES('$title', '$user_id')";
    $result = mysqli_query($connect, $query);
    if ($result) {
      $_SESSION['success'] = 'Todolist created';
    }else{
      $_SESSION['error'] = 'Something went wrong while creating';
    }
    header('Location: http://todolist.com/todolists.php');
  }

?>
