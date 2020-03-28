<?require '../include/header.php';

$data = $_POST;
require '../libs/editTasks.php';
?>
<?php if( isset($_SESSION['logged_user']) && $_SESSION["login"] == "Admin" ):?>
<div class="container">
  <div class="mx-auto mt-5">
    <form  action="../page/editTask.php" method="POST">
      <div class="form-group row">
        <label class="col-sm-2 col-form-label">Изменить Имя</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="name" value="<?php echo @$data['name'];?>">
        </div>
      </div>
      <div class="form-group row">
        <label class="col-sm-2 col-form-label">Изменить Email</label>
        <div class="col-sm-10">
            <input type="email" class="form-control" name="email" value="<?php echo @$data['email'];?>">
        </div>
      </div>
      <div class="form-group row">
        <label  class="col-sm-2 col-form-label">Изменить Задачу</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="task" value='<?php echo @$data['task'];?>'>
        </div>
      </div>
      <div class="form-group row">
        <label  class="col-sm-2 col-form-label">Статус</label>
        <div class="col-sm-10">
          <select size="1" name="status">
              <option value="Выполнено">Выполнено</option>
              <option selected value="Обрабатывается">Обрабатывается</option>
           </select>
        </div>
      </div>
      <input type="hidden" name="id" value="<?php echo $id;?>">
      <div class="form-group row">
        <div class="col-sm-10">
            <button type="submit" class="btn btn-primary" name="do_editTask">Изменить задачу</button>
            <button type="submit" class="btn btn-primary" name="do_delTask">Удалить задачу</button>
        </div>
      </div>
    </form>
  </div>
</div>
<?php else :?>
  <?php header('Location: /');?>
<?php endif;?>
