<?require '../include/header.php'?>
<?require '../libs/signup.php'?>
<div class="container">
  <div class="mx-auto mt-5">
    <form  action="../page/signup.php" method="POST">
      <div class="form-group row">
        <label for="inputEmail3" class="col-sm-2 col-form-label">Ваш логин</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="login" value="<?php echo @$data['login'];?>">
        </div>
      </div>
      <div class="form-group row">
        <label  class="col-sm-2 col-form-label">Ваш Email</label>
        <div class="col-sm-10">
          <input type="email" name="email" class="form-control" value="<?php echo @$data['email'];?>">
        </div>
      </div>
      <div class="form-group row">
        <label  class="col-sm-2 col-form-label">Ваш пароль</label>
        <div class="col-sm-10">
          <input type="password" name="password" class="form-control">
        </div>
      </div>
      <div class="form-group row">
        <label  class="col-sm-2 col-form-label">Введите ваш пароль еще раз</label>
        <div class="col-sm-10">
          <input type="password" name="password_2" class="form-control">
        </div>
      </div>
      <div class="form-group row">
        <div class="col-sm-10">
            <button type="submit" class="btn btn-primary" name="do_signup">Зарегистрироваться</button>
        </div>
      </div>
    </form>
  </div>
</div>
