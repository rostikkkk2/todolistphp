<?php include_once 'photos/select.php' ?>
<?php session_start() ?>
<form class="add-avatar" enctype="multipart/form-data" action="avatars/photos/create.php" method="post">
  <label class="" for=""><input type="file" name="photo" value=""></label>
  <input type="submit" name="" value="sent" >
</form>
<img src="<?= getUserAvatar($_SESSION['id']) ?>" alt="">
