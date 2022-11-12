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
      <a href="index.html" class="logo">MAX</a>
    </nav>
    <div class="authorization-block">
      <h1 class="reg__title">Войти</h1>

      <form id="authorization" method="POST" action="">
        <div class="form__reg">
          <div class="input-group">
            <label class="email__label" for="email">
              <input class="reg__input" id="email" type="text" name="email" placeholder="Введите почту">
            </label>
            <label class="password__label" for="password">
              <input class="reg__input" id="password" type="password" name="password" placeholder="Введите пароль">
            </label>
          </div>
          <label class="submit__label" for="sumbit">
            <input id="sumbit" type="submit" class="reg__submit" value="" >
          </label>
          <p class="account-authorization">
            У вас нет аккаунты? <a href="registration.php">Зарегистрируйтесь</a>
          </p>
        </div>
      </form>

    </div>
    <div class="authorization-img">
      <img src="assets/img/reg_icons/door.png" alt="">
    </div>
  </div>
</div>

<script src="assets/js/regular.js"></script>
</body>
</html>
<?php

if($_SESSION['auth']===TRUE){

if(!empty($_POST['email']) and !empty($_POST['password'])){

if(!empty($_POST['email']) and !empty($_POST['password'])){
  
$host = 'localhost'; // имя хоста
$user = 'cd85792_users';      // имя пользователя
$pass = 'MaxPolls1';          // пароль
$name = 'cd85792_users';      // имя базы данных

$link = mysqli_connect($host, $user, $pass, $name) or die(mysqli_error($link));

$email=$_POST['email'];
$password=$_POST['password'];

$query="SELECT * FROM users WHERE email='$email' and password='$password'";

$res=mysqli_fetch_assoc(mysqli_query($link,$query));

}

}

}

?>