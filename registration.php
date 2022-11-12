<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Авторизация</title>
  <link rel="stylesheet" href="assets/css/main.css">
</head>
<body>
    <div class="authorization-content">
        <div class="container">
          <nav class="nav-logo">
            <a href="#" class="logo">MAX</a>
          </nav>
          <div class="authorization-block">
            <h1 class="reg__title">Регистрация</h1>
              
            <form method="post" action="">
              <div class="form__reg">
                  <div class="input-group">
                    <label for="email">
                      <input class="reg__input" id="email" type="email" name="email" placeholder="Введите почту">
                    </label>
                    <label for="password">
                      <input class="reg__input" id="password" type="password" name="password" placeholder="Придумайте пароль">
                    </label>
                  </div>
                  <label class="submit__label" for="sumbit">
                    <input id="sumbit" type="submit" class="reg__submit" value="" >
                  </label>
                  <p class="account-authorization">
                      У вас уже есть аккаунт? <a href="#">Войдите</a>
                  </p>
              </div>
            </form>
              
          </div>
            <div class="authorization-img">
                <img src="assets/img/reg_icons/door.png" alt="">
            </div>
        </div>
    </div>
</body>
</html>
<?php

if(!empty($_POST['email']) and !empty($_POST['password'])){

$host = 'localhost'; // имя хоста
$user = 'cd85792_users';      // имя пользователя
$pass = 'MaxPolls1';          // пароль
$name = 'cd85792_users';      // имя базы данных

$link = mysqli_connect($name, $user, $pass, $host) or die(mysqli_error($link));

$email=$_POST['email'];
$password=$_POST['password'];

$query="INSERT INTO users SET email='$email', password='$password'";

mysqli_query($link,$query) or die(mysqli_error($link));

header('Location https://cd85792.tmweb.ru/index.html');
exit();

}


?>