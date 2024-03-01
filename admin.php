<?php
require_once 'db.php';

if (isset($_SESSION['user_login']) ){
  echo $_SESSION['user_login'] . ', добро пожаловать на страницу администратора!';
  echo '<br>';
  echo 'Вы посещали эту страницу: ' . $_COOKIE['page_visit'] . 'раз';

  echo '<a href = "logout.php">  Выход из аккаунта</a>';
}else{
  die('Нет доступа к странице');
}
