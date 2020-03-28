<?require '../include/header.php'?>
<?require '../libs/login.php'?>
<div class="container">
  <div class="col-6 mx-auto mt-5">
    <form  action="../page/login.php" method="POST">
      <div class="form-group row">
        <label for="inputEmail3" class="col-sm-2 col-form-label">Логин</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="login" value="<?php echo @$data['login'];?>">
        </div>
      </div>
      <div class="form-group row">
        <label for="inputPassword3" class="col-sm-2 col-form-label">Пароль</label>
        <div class="col-sm-10">
          <input type="password" name="password" class="form-control">
        </div>
      </div>
      <div class="form-group row">
        <div class="col-sm-10">
            <button type="submit" class="btn btn-primary" name="do_login">Войти</button>
        </div>
      </div>
    </form>
  </div>
</div>
