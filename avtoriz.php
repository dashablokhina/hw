<?php
session_start();
if (count($_POST) > 0) {
    $login = md5(trim($_POST['login']));
    $password = md5(trim($_POST['password']));
    if ($login == '' || $password == ''){
        echo "Напишите свои данные";
    }elseif ($login == 'd077f244def8a70e5ea758bd8352fcd8' & $password == '202cb962ac59075b964b07152d234b70'){
        header("Location: comment.php");
    }else{
        echo "Неправильно введен логин или пароль";
    }
    /*foreach($_SESSION["page"] as $value)
    {
        echo $value;
    }
    exit;*/
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
