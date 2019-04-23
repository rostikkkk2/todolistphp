<?php

  $response = [];

  if (isset($_POST['user_id']) && !empty($_POST['user_id'])){
    $default_title = 'My todolist';
    $user_id = $_POST['user_id'];
    $response = addTodolist($user_id, $default_title);
  }else{
    $response['error'] = $_POST['user_id'];//'You are not authorized for this action';
    // header('Location: http://todolist.com');
  }

  echo json_encode($response);

  function addTodolist($user_id, $title) {
    $connect = mysqli_connect('localhost', 'denis', 'denis', 'todolist');
    $query = "INSERT INTO `todolists`(title, user_id) VALUES('$title', '$user_id')";
    $result = mysqli_query($connect, $query);
    if ($result) {
      $response['success'] = 'Todolist created';
    }else{
      $response['error'] = 'Something went wrong while creating';
    }
    // header('Location: http://todolist.com/todolists.php');
    return $response;
  }

?>
