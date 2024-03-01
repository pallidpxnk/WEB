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
 <body class="text-center">

 <?php require "blocks/header.php" ?>

 <div class="container marketing">

 <main class="form-signin w-100 m-auto">
   <form action="reg.php" method="post">
     <img class="mb-1" src="img3/4.png" >

     <div class="form-floating mb-3">
       <input type="text" class="form-control" name="login" id="floatingInput" placeholder="Login">
       <label for="floatingInput">Введите логин</label>
     </div>
     <div class="form-floating mb-3">
       <input type="password" class="form-control" name="pwd" id="floatingPassword" placeholder="Password">
       <label for="floatingPassword">Введите пароль</label>
     </div>

     <button class="w-100 btn btn-lg btn-primary mb-3" type="submit">Зарегистрироваться</button>

     <a href="signin.php">Страница авторизации</a>
   </form>
 </main>

   <?php require "blocks/footer.php" ?>

</body>
</html>
