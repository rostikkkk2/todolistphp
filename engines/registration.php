<?php
  $email = $_POST['email'];
  $password = $_POST['password'];
  $confirm_password = $_POST['confirm_password'];
  session_start();
  if (isset($email) && isset($password) && isset($confirm_password)){
    if (!empty($email) && !empty($password) && !empty($confirm_password)){
      if ($password == $confirm_password) {
        registrateToDB($email, $password);
      }
    }else{
      $_SESSION['error'] = 'Email, password and confirm password cant be empty!';
    }
  }else{
    $_SESSION['error'] = 'Request with wrong params';
  }
  header('Location: http://todolist.com');

  function registrateToDB($email, $password) {
    $connect = mysqli_connect('localhost', 'denis', 'denis', 'todolist');
    if ($connect) {
      if (!userExists($email, $connect)){
        if (saveUserToDB($email, $password, $connect)){
          $_SESSION['success'] = 'You have been registred! Try to log in!';
        }
      }
    }
  }

  function userExists($email, $connect) {
    $query = "SELECT * FROM users WHERE email='$email';";
    $result = mysqli_query($connect, $query);
    return mysqli_num_rows($result) > 0;
  }

  function saveUserToDB($email, $password, $connect) {
    $query = "INSERT INTO `users`(email, password) VALUES('$email', '$password');";
    $result = mysqli_query($connect, $query);
    return $result;
  }
?>
