<?
session_start();

if ($_SESSION['user']) {
    header('Location: user/profile.php');
}
if ($_SESSION['admin']) {
    header('Location: admin/profile.php');
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Авторизация</title>
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="bootstrap-5.0.2/dist/css/bootstrap.css">
   
</head>
<body >
<!-- Форма авторизации -->
<div class="avtorizaciya_b_c"> 
<a class="logo" href=""></a>
<br>
<br>
<h3 class="otdel"align="center">Авторизация </h3> 
<form class="avtorizaciya" action="vendor/signin.php" method="post">
        <label>Логин</label>

        <input class="form-control"type="text" name="login" placeholder="Введите логин">
        <label>Пароль</label>
        <input class="form-control"type="password" name="password" placeholder="Введите пароль">
       
        <button type="submit" class="btn btn-primary">Войти</button>
        <br> 
        <button class="btn-secondary" type="button" value=""onclick="location.href='register.php'">Нет аккаунта?<a style="color:red";> Зарегистрируйтесь</a></button>
    </form>

</div>


   <script src="assets/js/jquery-3.4.1.min.js"></script>
   <script src="bootstrap-5.0.2/dist/js/bootstrap.js"></script>
    <script src="assets/js/main.js"></script>
 </body>
</html>