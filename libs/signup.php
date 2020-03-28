<?php
  require "db.php";
  $data = $_POST;

  if(isset($data['do_signup']))
  {
    $errors = array();
    if(trim($data['login']) == '')
    {
      $errors[] = 'Введите логин!';
    }
    if(trim($data['email']) == '')
    {
      $errors[] = 'Введите Email!';
    }
    if($data['password'] == '')
    {
      $errors[] = 'Введите пароль!';
    }
    if($data['password_2'] != $data['password'])
    {
      $errors[] = 'Повторный проль введен не верно!';
    }
    if(R::count('users', "login = ?", array($data['login'])) > 0)
    {
      $errors[] = 'Пользыватель с таким логином уже существует!';
    }
    if(R::count('users', "email = ?", array($data['email'])) > 0)
    {
      $errors[] = 'Пользыватель с таким Email уже существует!';
    }
    if( empty($errors))
    {
      $user = R::dispense('users');
      $user->login = $data['login'];
      $user->email = $data['email'];
      $user->password = password_hash($data['password'], PASSWORD_DEFAULT);
      R::store($user);
      echo '<div style="color: green;">Вы успешно зарегистрированы!</div> <hr>';
    } else {
      echo '<div style="color: red;">'. array_shift($errors) .'</div> <hr>';
    }
  }
?>

<!-- <form  action="../api/signup.php" method="POST">
  <p>
    <p>Ваш логин</p>
    <input type="text" name="login" value="<?php echo @$data['login'];?>">
  </p>
  <p>
    <p>Ваш Email</p>
    <input type="email" name="email" <?php echo @$data['email'];?>>
  </p>
  <p>
    <p>Ваш пароль</p>
    <input type="password" name="password">
  </p>
  <p>
    <p>Введите ваш пароль еще раз</p>
    <input type="password" name="password_2">
  </p>
  <p>
    <button type="submit" name="do_signup">Зарегистрироваться</button>
  </p>
</form> -->
