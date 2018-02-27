$(document).ready(function(){
  $('.check').change(function(){
    var value = $(this).val() == '0' ? '1' : '0';
    $(this).val(value);
    $(this).closest('form').submit();
  });

  $('#title_task').dblclick(function(){
    $('#title_task').addClass('hidden');
    $('#form_change_title_task').removeClass('hidden');
  });

//без перезагрузки страници
// $('.add-todolist').click(function(e){
//   e.preventDefault();
//   var request = new XMLHttpRequest();
//   var url = 'http://todolist.com/engines/test.php';
//   request.open('POST', url, true);
//   request.send({hello: 'wordl'});
//   request.onreadystatechange = function(){
//     if (request.readyState == 4) {
//       console.log(request.response);
//     }
//   }
// })



$('.delete-task-js').click(function(e){
  e.preventDefault();
  var btn_delete = $(this);
  var task_id = $(this).prev().val();
  $.ajax({
    method: 'POST',
    url: 'http://todolist.com/engines/task/delete.php',
    data:{
      id: task_id
    },
    success: function(response){
      var parsed_response = JSON.parse(response);
      if (parsed_response.error) {
        $('.flash-js').text(parsed_response.error);
      }else {
        $('.flash-js').text(parsed_response.success);
        btn_delete.parents('.list-style-n').remove();
      }
    }
  })
})


$('.delete-todolist-js').click(function(e){
  e.preventDefault();
  var btn_delete = $(this);
  var task_id = $(this).prev().val();
  $.ajax({
    method: 'POST',
    url: 'http://todolist.com/engines/todolist/delete.php',
    data:{
      id: task_id
    },
    success: function(response){
      var parsed_response = JSON.parse(response);
      if (parsed_response.error) {
        $('.flash-js').text(parsed_response.error);
      }else {
        $('.flash-js').text(parsed_response.success);
        btn_delete.parents('.todolist').remove();
      }
    }
  })
})

});
