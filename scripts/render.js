var render = {
  clickRegister: function() {
    document.getElementById('authorization').classList.add('hidden');
    document.getElementById('authorize').classList.remove('active');
    document.getElementById('registration').classList.remove('hidden');
    document.getElementById('register_link').classList.add('active');
  },
  clickLogin: function() {
    document.getElementById('registration').classList.add('hidden');
    document.getElementById('register_link').classList.remove('active');
    document.getElementById('authorization').classList.remove('hidden');
    document.getElementById('authorize').classList.add('active');
  },
  showErorrReg: function(text) {
    document.getElementById('banner').classList.remove('hidden');
    document.getElementById('banner').classList.remove('has-success-bg');
    document.getElementById('banner').classList.add('has-error-bg');
    document.getElementById('banner_inscr').innerText = text;
  },
  showSuccessReg: function(text) {
    document.getElementById('banner').classList.remove('hidden');
    document.getElementById('banner').classList.remove('has-error-bg');
    document.getElementById('banner').classList.add('has-success-bg');
    document.getElementById('banner_inscr').innerText = text;
  },
  clearForm: function(form_id) {
    var input = document.querySelectorAll('#' + form_id + ' input');
    input.forEach(function(elem) { elem.value = '' });
  },
  showAuthorizeError: function(text) {
    document.getElementById('banner').classList.remove('hidden');
    document.getElementById('banner').classList.remove('has-success-bg');
    document.getElementById('banner').classList.add('has-error-bg');
    document.getElementById('banner_inscr').innerText = text;
  },
  openAuthorizeWindow: function(text) {
    render.clearForm("authorization");
    document.getElementById('banner').classList.remove('hidden');
    document.getElementById('banner').classList.remove('has-error-bg');
    document.getElementById('banner').classList.add('yellow');
    document.getElementById('banner_inscr').innerText = text;
    setTimeout(render.hideBanner, 5000);
  },

  showMenuAuthorized: function(){
    document.getElementById('my_lists').classList.remove("hidden");
    document.getElementById('exit').classList.remove("hidden");
    document.getElementById('authorize').classList.add("hidden");
    document.getElementById('register_link').classList.add("hidden");
  },

  showMenuNotAuthorized: function(){
    document.getElementById('my_lists').classList.add("hidden");
    document.getElementById('exit').classList.add("hidden");
    document.getElementById('authorize').classList.remove("hidden");
    document.getElementById('register_link').classList.remove("hidden");
  },

  hideBanner: function(){
    document.getElementById('banner').classList.add("hidden");
  },

  createNewTodoList: function(){
    var todolist_block = document.createElement("div");
    todolist_block.classList.add("todolist");

    var head_div = document.createElement("div");
    var head_list = todolist_block.appendChild(head_div);
    head_list.classList.add("head-list");
    var head_input = document.createElement("input");
    head_input.setAttribute("placeholder", "New task header");
    var add_input_in_div = head_list.appendChild(head_input);
    add_input_in_div.classList.add("input-head-list");

    var div_wright_task = document.createElement("div");
    var wright_tasks_list = todolist_block.appendChild(div_wright_task);
    wright_tasks_list.classList.add("tasks-list");
    var wright_tasks_input = document.createElement("input");
    wright_tasks_input.setAttribute("id", "value_todo_task");
    wright_tasks_input.setAttribute("placeholder", "What needs to be done?");
    var add_input_and_wright_task = wright_tasks_list.appendChild(wright_tasks_input);
    add_input_and_wright_task.classList.add("input-wright-task-list");
    var wright_task_button = document.createElement("button");
    var ID_FOR_ADD_TASK_BTN = wright_task_button.setAttribute("id", "btn_add_task_list");
    var add_btn_in_wright_task = wright_tasks_list.appendChild(wright_task_button);
    add_btn_in_wright_task.classList.add("btn-in-task-list");
    add_btn_in_wright_task.innerText = "+";


    var div_save_task = document.createElement("div");
    var save_task_onlist = todolist_block.appendChild(div_save_task);
    save_task_onlist.classList.add("save-task-list");
    var div_added_task = document.createElement("div");
    div_added_task.setAttribute("id", "window_to_show_tasks");
    var ul_added_task = document.createElement("ul");
    var li_added_task = document.createElement("li");
    var li_add_in_ul = ul_added_task.appendChild(li_added_task);
    var li_and_ul_in_div = div_added_task.appendChild(li_add_in_ul);
    var add_all_list_in_todo = save_task_onlist.appendChild(li_and_ul_in_div);
    add_all_list_in_todo.classList.add("add-li-task-list");
    add_all_list_in_todo.innerText = "Test";

    var task_count = document.createElement("div");
    var task_count_list = todolist_block.appendChild(task_count);
    task_count_list.classList.add("task-count-list");

    document.getElementsByClassName("todolists_wrapper")[0].append(todolist_block);
  },

  btnAddInTodoListTask: function(){
    var value_input_in_todo_task = document.getElementById("value_todo_task");
    var div_where_will_add_tasks = document.getElementById("window_to_show_tasks");
    if (value_input_in_todo_task.value != "") {
      var li_added_task_in_todo = document.createElement("li");
      var create_li_in_div = div_where_will_add_tasks.appendChild(li_added_task_in_todo);
      li_added_task_in_todo.innerText = value_input_in_todo_task.value;
    }
  },

  setErrors: function(errors, element) {
    var parent = element.parentNode;
    var sibling = element.nextElementSibling;
    if (errors.length > 0) {
      var str = errors.join(",\n");
      parent.classList.add("has-error");
      parent.classList.remove("has-success");
      sibling.innerText = str;
    }else{
      parent.classList.remove("has-error");
      parent.classList.add("has-success");
      sibling.innerText = "\n";
    }
  }
}
