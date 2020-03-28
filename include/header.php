<!DOCTYPE html>
<?php session_start();?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css/style.css">
  </head>
  <body>
      <div class="header">
        <div class="container">
          <?php if( isset($_SESSION['logged_user']) ):?>
            <ul class="nav">
              <li class="nav-item">
                <a class="nav-link" href="/">Главная</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/page/addTasks.php">Добавить задачу</a>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled" href="#">Пользыватель: <?php echo  $_SESSION["login"];?></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/libs/exit.php">Выход</a>
              </li>
            </ul>
          <?php else :?>
            <ul class="nav">
              <li class="nav-item">
                <a class="nav-link" href="/">Главная</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/page/addTasks.php">Добавить задачу</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/page/login.php">Авторизоваться</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/page/signup.php">Регистрация</a>
              </li>
            </ul>
          <?php endif;?>
        </div>
      </div>
