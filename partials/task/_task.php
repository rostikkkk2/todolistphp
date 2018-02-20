<?php include_once('engines/task/html.php') ?>
<li class="li-tasks <?= setCross($task['is_completed']) ?>"><?= $task['title'] ?>
  <div class="operation-tasks ">
      <input id="test1" name="change_task" type="image" src="partials/images/pen.png" value="" alt="" />
      <form class="" action="engines/task/setCompleted.php" method="post">
        <input type="hidden" name="id" value="<?= $task['id'] ?>">
        <input id="test1" class="d-b check" name="is_completed" <?= setCheckedHtml($task['is_completed']) ?> type="checkbox" src="images/" value="<?= $task['is_completed'] ?>" alt="" />
      </form>
      <form class="" action="engines/task/delete.php" method="post">
        <input type="hidden" name="id" value="<?= $task['id'] ?>">
        <input id="test1" name="delete_task" type="image" src="partials/images/delete.png" value="" alt="" />
      </form>
  </div>
</li>
<hr class="hor-line">
