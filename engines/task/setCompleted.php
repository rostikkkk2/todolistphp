<?php

  if (isset($_POST['id']) && !empty($_POST['id'])) {
    $id = $_POST['id'];
    $is_completed = $_POST['is_completed'];
    setCompleted($id, $is_completed);
  }

  function setCompleted($id, $is_completed){
    $connect = mysqli_connect('localhost', 'denis', 'denis', 'todolist');
    $int_is_completed = intval($is_completed);
    $query = "UPDATE `tasks` SET is_completed='$is_completed' WHERE id='$id'";
    $result = mysqli_query($connect, $query);
    if ($result) {
      $_SESSION['success'] = 'Task updeted';
    }else{
      $_SESSION['error'] = 'Something went wrong while creating';
    }
    header('Location: http://todolist.com/todolists.php');
  }


 ?>
