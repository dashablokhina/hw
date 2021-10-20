<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Регистрация</title>
    <link rel="stylesheet" href="css4.css">
</head>
<body>



<form method="post" >
    <label>ФИО</label>
    <input type="text" name="full_name" placeholder="Введите имя">
    <label>Логин</label>
    <input type="text" name="login" placeholder="Введите логин">
    <label>Почта</label>
    <input type="email" name="email" placeholder="Введите адрес почты">
    <label>Пароль</label>
    <input type="password" name="password" placeholder="Введите пароль">
    <label>Подтверждение пароля</label>
    <input type="password" name="password_confirm" placeholder="Подтвердите пароль">
    <button type="submit">Войти</button>
    <p>
       <a href="avtoriz.php">Авторизация</a>
    </p>

</form>

</body>
</html>