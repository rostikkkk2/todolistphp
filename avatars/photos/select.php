<?php
  function getUserAvatar($user_id){
    $connect = mysqli_connect('localhost', 'denis', 'denis', 'todolist');
    $query = "SELECT avatar FROM `users` WHERE id='$user_id';";
    $result = mysqli_query($connect, $query);
    $avatar = mysqli_fetch_assoc($result);
    $path_to_folder = '/images/avatars' . '/';
    $path = $path_to_folder . $user_id . '/' . $avatar['avatar'];

    return $path;
  }
 ?>
