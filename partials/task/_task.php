<?php include_once('engines/task/html.php') ?>
  <li class="list-style-n display-show">
    <div class="inline-b">
      <form class="" action="engines/task/setCompleted.php" method="post">
        <input type="hidden" name="id" value="<?= $task['id'] ?>">
        <input id="test1" class="check disp-none" name="is_completed" <?= setCheckedHtml($task['is_completed']) ?> type="checkbox" src="images/" value="<?= $task['is_completed'] ?>" alt="" />
      </form>
    </div>
    <div class="vline disp-none"></div>
      <span id="title_task" class="ml-19 <?= setCross($task['is_completed']) ?>"><?= $task['title'] ?></span>
      <form class="inline-b hidden" id="form_change_title_task" action="engines/task/change_title_task.php" method="post">
        <input type="hidden" name="id" value="<?= $task['id'] ?>">
        <input class="" type="text" name="title_task" value="<?= $task['title'] ?>">
        <input class="" type="submit" value="ok">
      </form>
      <div class="operation-tasks disp-none">
        <form class="" action="engines/task/delete.php" method="post">
          <input type="hidden" name="id" value="<?= $task['id'] ?>">
          <input id="test1" name="delete_task" type="image" src="partials/images/delete.png" value="" alt="" />
        </form>
      </div>
  </li>
<hr class="hor-line">
