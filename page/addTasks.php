<?require '../include/header.php'?>
<?require '../libs/addingTasks.php'?>
<div class="container">
  <div class="mx-auto mt-5">
    <form  action="../page/addTasks.php" method="POST">
      <div class="form-group row">
        <label class="col-sm-2 col-form-label">Имя</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="name" >
        </div>
      </div>
      <div class="form-group row">
        <label class="col-sm-2 col-form-label">Email</label>
        <div class="col-sm-10">
            <input type="email" class="form-control" name="email" >
        </div>
      </div>
      <div class="form-group row">
        <label  class="col-sm-2 col-form-label">Задача</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="task" >
        </div>
      </div>
      <input type="hidden" name="status" value="обрабатывается">
      <div class="form-group row">
        <div class="col-sm-10">
            <button type="submit" class="btn btn-primary" name="do_addTask">Добавить задачу</button>
        </div>
      </div>
    </form>
  </div>
</div>
