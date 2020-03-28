<?php require  __DIR__ . '/../libs/readTask.php';?>
<div class="container">
  <?php if( isset($_SESSION['logged_user']) && $_SESSION["login"] == "Admin" ):?>
    <table class="sort table table-dark page mt-3 " id="sort" align="center">
      <tr  id="zag">
        <td>Имя</td>
        <td>Email</td>
        <td>Задача</td>
        <td>Статус</td>
      </tr>
          <?
          foreach ($task as $items)
          {
              echo '<tr  class="number" id='. $items['id'] .' data-num="0">
                    <td>'. $items['name'] .'</td>
                    <td>'. $items['email'] .'</td>
                    <td>'. $items['task'] .'</td>
                    <td class="status">'. $items['status'] .'</td>
                    <td>
                    <form  action="../page/editTask.php" method="POST">
                      <input type="hidden" name="id" value='. $items['id'] .' >
                      <input type="hidden"  name="email" value='. $items['email'] .' >
                      <input type="hidden" name="name" value='. $items['name'] .' >
                      <input type="hidden"  name="task" value='. $items['task'] .' >
                      <button type="submit" class="btn btn-primary" >&#9998</button>
                    </form>
                    </td>
                  </tr>';
          }
          ?>
    </table>
    <div class="paginator" onclick="pagination(event)"></div>
  <?php else :?>
    <table class="sort table table-dark mt-3" id="sort" align="center">
      <tr id="zag">
        <td>Имя</td>
        <td>Email</td>
        <td>Задача</td>
        <td>Статус</td>
      </tr>
        <?
        foreach ($task as $items)
        {
          echo '<tr data-num="0" class="number">
                  <td>'. $items['name'] .'</td>
                  <td>'. $items['email'] .'</td>
                  <td>'. strval($items['task']) .'</td>
                  <td class="status">'. $items['status'] .'</td>
                </tr>';
        }
        ?>
    </table>
    <div class="paginator" onclick="pagination(event)"></div>
  <?php endif;?>
</div>

<script src="/assets/js/sort.js" charset="utf-8"></script>
<script src="/assets/js/pagination.js" charset="utf-8"></script>
<script src="/assets/js/script.js" charset="utf-8"></script>
