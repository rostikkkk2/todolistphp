<?php
  $response = [];

  if (isset($_POST['id']) && !empty($_POST['id'])){
      $id = $_POST['id'];
      $response = removeTask($id);
  }else{
    $response['error'] = 'there is no id given';
  }

  echo json_encode($response);

  function removeTask($id) {
    $connect = mysqli_connect('localhost', 'denis', 'denis', 'todolist');
    $query = "DELETE FROM `tasks` WHERE id='$id';";
    $result = mysqli_query($connect, $query);
    if ($result) {
      $response['success'] = 'task deleted';
    }else{
      $response['error'] = 'Something went wrong while creating';
    }
    return $response;
    // header('Location: http://todolist.com/todolists.php');
  }

?>
