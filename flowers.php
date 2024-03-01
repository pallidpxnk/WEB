<!DOCTYPE html>
<html lang="ru">
 <head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link rel="stylesheet" href="css/style.css">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
   <title>PHP веб сайт</title>
 </head>
 <body>

 <?php require "blocks/header.php" ?>

   <div class="container mt-5">
    <h3 class="mb-5" >Наши новинки</h3>
    <div class="d-flex flex-wrap">
      <?php
        for($i = 0; $i < 5; $i++):
      ?>
      <div class="card mb-4 shadow-sm">
        <img src="img/<?php echo ($i+1) ?>.jpg" class="img-thumbnail">
            <div class="card-body">
              <p class="card-text mt-2 mb-3">ВНИМАНИЕ! Цена может меняться в зависимости от сезона цветов. Детальную информацию, уточняйте по телефону. Заказ уточняйте пожалуйста по телефону +38097 285 48 47</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">Просмотреть</button>
                  <button type="button" class="btn btn-sm btn-outline-secondary">Пропустить</button>
                </div>
                <small class="text-muted">20 mins</small>
              </div>
            </div>
          </div>
      <?php endfor; ?>
    </div>

    <h3 class="mb-5">Наши букеты</h3>
    <div class="d-flex flex-wrap">
      <?php
        for($i = 0; $i < 12; $i++):
      ?>
      <div class="card mb-4 shadow-sm">
        <img src="img2/<?php echo ($i+1) ?>.jpg" class="img-thumbnail">
            <div class="card-body">
              <p class="card-text mt-2 mb-3">ВНИМАНИЕ! Цена может меняться в зависимости от сезона цветов. Детальную информацию, уточняйте по телефону. Заказ уточняйте пожалуйста по телефону +38097 285 48 47</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">Просмотреть</button>
                  <button type="button" class="btn btn-sm btn-outline-secondary">Пропустить</button>
                </div>
                <small class="text-muted">20 mins</small>
              </div>
            </div>
          </div>
      <?php endfor; ?>
    </div>
  </div>

  <?php require "blocks/footer.php" ?>

 </body>
</html>
