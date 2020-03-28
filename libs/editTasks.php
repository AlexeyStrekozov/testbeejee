<? require "db.php";
$data = $_POST;

$id = $data['id'];

if(isset($data['do_delTask']))
{
  $task = R::load('task', $id);
  R::trash($task);
  header('Location: /');
}

if(isset($data['do_editTask']))
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
    $task = R::load('task', $id);

    $task->name = $data['name'];
    $task->email = $data['email'];
    $task->task = $data['task'];
    $task->status = $data['status'];

    R::store($task);
    echo '<div style="color: green;">Задача Изменина</div> <hr>';
  } else {
    echo '<div class="errors">'. array_shift($errors) .'</div> <hr>';
  }
}
