<?php
require "db.php";
$data = $_POST;

if (isset($data['do_login']))
{
  $errors = array();
  $user = R::findOne('users', 'login = ?', array($data['login']));
  if ($user)
  {
    if(password_verify($data['password'], $user->password))
    {
      $_SESSION['logged_user'] = $user;
      $_SESSION['login'] = $_SESSION['logged_user']->login;
      header('Location: /');
    } else {
      $errors[] = 'Не верно введен пароль';
    }
  } else {
    $errors[] = 'Пользыватель с таким логином не найден!';
  }
  if(!empty($errors))
  {
    echo '<div class="errors">'. array_shift($errors) .'</div> <hr>';
  }
}
?>
