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
});
