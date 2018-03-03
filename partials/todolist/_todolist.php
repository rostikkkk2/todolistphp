<?php include_once 'engines/task/select.php'; ?>
<div class="todolist">
    <div class="head-list operation-header">
        <h1 class="header-todolist"><?= $todolist['title'] ?></h1>
      <form class="icon-delete" action="engines/todolist/delete.php" method="post">
        <input type="hidden" name="id" value="<?= $todolist['id'] ?>">
        <input id="test1" class="delete-todolist-js" name="test1" type="image" src="partials/images/delete.png" value="" alt="" />
      </form>
    </div>
    <form class="" action="engines/task/create.php" method="post">
    <div class="tasks-list">
      <input class="input-wright-task-list" id="value_todo_task" type="text" name="title" placeholder="What needs to be done?">
      <input type="hidden" name="todolist_id" value="<?= $todolist['id'] ?>">
      <input class="btn-in-task-list form-group" type="submit" id="btn_add_task_list" value="Add task"></input>
    </div>
  </form>
    <div class="save-task-list">
      <div class="add-li-task-list" id="window_to_show_tasks">
        <ul>
          <?php
            foreach(selectTasks($todolist['id']) as $task){
              include 'partials/task/_task.php';
            }
          ?>
        </ul>
      </div>
    </div>
    <div class="task-count-list"></div>
</div>
