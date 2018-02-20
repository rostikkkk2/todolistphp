<?php
  session_start();
  if (isset($_POST['id']) && !empty($_POST['id'])){
      $id = $_POST['id'];
      removeTodolist($id);
  }else{
    $_SESSION['error'] = 'You are not authorized for this action';
    header('Location: http://todolist.com');
  }

  function removeTodolist($id) {
    $connect = mysqli_connect('localhost', 'denis', 'denis', 'todolist');
    $query = "DELETE FROM `todolists` WHERE id='$id';";
    $result = mysqli_query($connect, $query);
    if ($result) {
      $_SESSION['success'] = 'Task deleted';
    }else{
      $_SESSION['error'] = 'Something went wrong while creating';
    }
    header('Location: http://todolist.com/todolists.php');
  }

?>
