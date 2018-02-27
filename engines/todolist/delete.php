<?php
  $response = [];


  if (isset($_POST['id']) && !empty($_POST['id'])){
      $id = $_POST['id'];
    $response = removeTodolist($id);
  }else{
    $response['error'] = 'You are not authorized for this action';
    // header('Location: http://todolist.com');
  }

  echo json_encode($response);


  function removeTodolist($id) {
    $connect = mysqli_connect('localhost', 'denis', 'denis', 'todolist');
    $query = "DELETE FROM `todolists` WHERE id='$id';";
    $result = mysqli_query($connect, $query);
    if ($result) {
      $response['success'] = 'Task deleted';
    }else{
      $response['error'] = 'Something went wrong while creating';
    }
    return $response;
    // header('Location: http://todolist.com/todolists.php');
  }

?>
