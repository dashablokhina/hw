<?php
session_start();
$index2="В последний раз ты был на bitrix";
$_SESSION["page"]=array();
if(isset($_SESSION["page"]))
{
    if(count($_SESSION["page"])<1)
    {
        $_SESSION["page"][]=$index2;
    }

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css4.css">
    <title>Авторизация</title>
</head>
<body>
    <form method="post">
        <p>
            <a href="fact.php">fact.php</a>
        </p>
        <p>
            <a href="bitrix.php">bitrix.php</a>
        </p>
        <label>Для полного доступа к сайту необходимо авторизоваться или зарегистрироваться</label><br>
        <label>Логин</label>
        <input type="text" name="login" placeholder="Введите свой логин">
        <label>Пароль</label>
        <input type="password" name="password" placeholder="Введите пароль">
        <button type="submit">Войти</button>
        <p>
            <a href="register.php">Регистрация</a>
        </p>
        <p>
            <a href="index.php">Главная</a>
        </p>
    </form>
<header>
</header>

</body>
</html>