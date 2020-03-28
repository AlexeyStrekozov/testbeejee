<?
  require "db.php";

  $allTasks = R::findAll( 'task' );

  $task = array();

  foreach ($allTasks as $allTask)
  {
    $task [] = array(
      "id" => $allTask->id,
      "name" => $allTask->name,
      "email" => $allTask->email,
      "task" => $allTask->task,
      "status" => $allTask->status,
    );
  }

?>
