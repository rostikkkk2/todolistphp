<?php
  function selectTasks($todolist_id){
    $connect = mysqli_connect('localhost', 'denis', 'denis', 'todolist');
    $query = "SELECT * FROM `tasks` WHERE todolist_id=$todolist_id;";
    $result = mysqli_query($connect, $query);
    $final_result = [];
    while($row = mysqli_fetch_assoc($result)){
      array_push($final_result, $row);
    }
    return $final_result;
  }
?>
