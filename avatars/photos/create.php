<?php
$user_id = $_POST['id'];
$path_to_folder = realpath(__DIR__ . '/../images/avatars') . '/';
$extension = explode('.', $_FILES['photo']['name'])[1];
$avatar_name = "avatar.$extension";
if (!is_dir($path_to_folder . $user_id)) {
  mkdir($path_to_folder . $user_id);
}
$path = $path_to_folder . $user_id . "/" . $avatar_name;
$connect = mysqli_connect('localhost', 'denis', 'denis', 'todolist');
$query = "UPDATE `users` SET avatar='$avatar_name' WHERE id='$user_id';";
$result = mysqli_query($connect, $query);
if ($result) {
  echo('good');
}

move_uploaded_file($_FILES['photo']['tmp_name'], $path);//

// $log_path = realpath(__DIR__ . '/../logs') . '/';
// $file = fopen($log_path . 'log.txt', 'a+');
// $string = "user with id - $user_id add phto with name $avatar_name" . PHP_EOL;
// fwrite($file, $string);
// fclose($file);
 ?>
