<?
require "db.php";
$data = $_POST;

if(isset($data['do_addTask']))
{
  $errors = array();
  if(trim($data['name']) == '')
  {
    $errors[] = 'Введите Имя!';
  }
  if(trim($data['email']) == '')
  {
    $errors[] = 'Введите Email!';
  }
  if($data['task'] == '')
  {
    $errors[] = 'Введите задачу!';
  }
  if( empty($errors))
  {
    $task = R::dispense('task');
    $task->name = strip_tags($data['name']);
    $task->email = strip_tags($data['email']);
    $task->task = strip_tags($data['task']);
    $task->status = $data['status'];
    R::store($task);
    echo '<div style="color: green;">Задача добавлена</div> <hr>';
  } else {
    echo '<div class="errors">'. array_shift($errors) .'</div> <hr>';
  }
}

?>
