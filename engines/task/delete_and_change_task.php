<?php
  session_start();

  if (isset($_SESSION['id']) && !empty($_SESSION['id'])) {
    $delete_task = $_POST['delete_task'];//почему приходит NUUULLLLLLLLLL??
    $change_task = $_POST['change_task'];
    $task_id = $_SESSION['id']; //это не таски айди а юзера!!!!!!!!!
    $connect = mysqli_connect('localhost', 'denis', 'denis', 'todolist');
    if ($connect) {

      deleteTaskFromDB($connect, $delete_task);
    }
  }else{
    $_SESSION['error'] = 'You are not authorized for this action';
    header('Location: http://todolist.com');
  }


  function deleteTaskFromDB($connect, $delete_task){
    $query = "DELETE FROM `tasks` WHERE `tasks`.`id`='$task_id';";
    $result = mysqli_query($connect, $query);
    if ($result) {
      var_dump(1);
    }else {
      var_dump(2);
    }
  }


 ?>







 <!-- $task = getIdTask($connect, $delete_task);
 if ($task) {

 }else {
   var_dump('loh');
 } -->



 <!-- function getIdTask($connect, $delete_task){
   $query = "SELECT * FROM users WHERE id='$delete_task' LIMIT 1;";
   $result = mysqli_query($connect, $query);
   return mysqli_fetch_assoc($result);
 } -->
