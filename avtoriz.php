<?php
require 'logout.php';
$avto = new avtoriz("localhost");
$avto->authorization();
/*$hostname = 'localhost';
$username = 'dasha';
$password = '1112';
$bdname = 'fact';
$db_connect = mysqli_connect($hostname, $username, $password, $bdname);
mysqli_set_charset($db_connect, 'utf8');
$select = mysqli_query($db_connect,"SELECT * FROM `data` ");
$arr_select = mysqli_fetch_all($select, MYSQLI_ASSOC);

    $login = md5(trim($_POST['login']));
    $password = md5(trim($_POST['password']));

   
    foreach ($arr_select as $value) 
    {
        if ($value['login'] == $login) 
        {
            if ($value['password'] == $password)
            {
                header("Location: comment.php");
            }
    else{
        echo "Неправильно введен логин или пароль";

        }
        }
    }
    /*foreach($_SESSION["page"] as $value)
    {
        echo $value;
    }
    exit;*/

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
            <a href="fact.php">fact</a>
        </p>
        <p>
            <a href="bitrix.php">bitrix</a>
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
