<?php
$sms= "blokhina.2019@mail.ru";
$comment = trim($_POST['comment']);
$comment = htmlspecialchars($_POST['comment']);
$comment = urldecode($_POST['comment']);
if (count($_POST) > 0){
    if ($comment == ''){
        echo " Пожалуйста, напишите комментарий";
    }else{
        mail($sms . '', "", $comment);
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Комментарий</title>
    <link rel="stylesheet" href="">
</head>
<body>
<div class ="comment"> Приветствую тебя, мой друг  <br> Оставь ,пожалуйста,  комментарий</div>
<form  method="post" >
    <textarea cols="25" rows="3" placeholder="Введите текст" name="comment" required="required"></textarea>
    <p>
        <button type="submit" class="send">Отправить</button>
    </p>
    <p>
        <a href="avtoriz.php">Главная</a>
    </p>
</body>
</html>
