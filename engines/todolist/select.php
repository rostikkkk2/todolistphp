<?php
  function selectTodolists(){
    session_start();
    $user_id = $_SESSION['id'];
    $connect = mysqli_connect('localhost', 'denis', 'denis', 'todolist');
    $query = "SELECT * FROM `todolists` WHERE user_id=$user_id;";
    $result = mysqli_query($connect, $query);
    $final_result = [];
    while($row = mysqli_fetch_assoc($result)){
      array_push($final_result, $row);
    }
    return $final_result;
  }
?>
