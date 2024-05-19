<?php
    session_start();
    if ($_SESSION['user']) {
        header('Location: profile.php');
    }
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Регистрация</title>
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="bootstrap-5.0.2/dist/css/bootstrap.css">
   
</head>
<body >
<!-- Форма авторизации -->
<div class="avtorizaciya_b_c"> 
<a class="logo" href="">
<br>
<br>
<h3 class="otdel" align="center">Регистрация</h3> 
   <main>
   <form class="avtorizaciya" method="POST" action="vendor/signup">
        <label>ФИО</label>
        <input class="form-control" type="text" name="full_name" placeholder="Введите свое полное имя">
        <label>Логин</label>
        <input class="form-control" type="text" name="login" placeholder="Введите свой логин">
        <label>Почта</label>
        <input class="form-control" type="email" name="email" placeholder="Введите адрес своей почты">
        <label>Пароль</label>
        <input class="form-control" type="password" name="password" placeholder="Введите пароль">
        <label>Подтверждение пароля</label>
        <input class="form-control" type="password" name="password_confirm" placeholder="Подтвердите пароль">
        <button type="submit" class=" btn btn-primary">Зарегистрироваться</button>
        <br>
        <button type="button" value=""onclick="location.href='index.php'">Есть аккаунт?<a style="color:red";> Авторизуйтесь</a></button>
    </form>
   </main>
    <script src="assets/js/jquery-3.4.1.min.js"></script>
    <script src="assets/js/main.js"></script>
 </body>
</html>