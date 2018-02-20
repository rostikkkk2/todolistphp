<?php
  $email = $_POST['email'];
  $password = $_POST['password'];
  session_start();
  if (isset($email) && isset($password)){
    if (!empty($email) && !empty($password) ){
      authorize($email, $password);
    }else{
      $_SESSION['error'] = 'Email, password cant be empty!';
      header('Location: http://todolist.com');
    }
  }else{
    $_SESSION['error'] = 'Request with wrong params';
    header('Location: http://todolist.com');
  }

  function authorize($email, $password) {
    $connect = mysqli_connect('localhost', 'denis', 'denis', 'todolist');
    if ($connect) {
      $user = getUser($email, $password, $connect);
      if ($user){
        $_SESSION['id'] = $user['id'];
        $_SESSION['success'] = 'Logined successfully!';
        header('Location: http://todolist.com/todolists.php');
      }
    }
  }

  function getUser($email, $password, $connect){
    $query = "SELECT * FROM users WHERE email='$email' AND password='$password' LIMIT 1;";
    $result = mysqli_query($connect, $query);
    return mysqli_fetch_assoc($result);
  }

?>
