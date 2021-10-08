<?php
$time = date_default_timezone_set('Europe/Moscow');
if(($time > 00) && ($time < 07)){
    echo "<link rel='stylesheet' href='night.css'>" ;
} else {
    echo "<link rel='stylesheet' href='day.css'>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="stylee.css">
    <link rel='stylesheet' href='day.css'>
    <link rel='stylesheet' href='night.css'>
    <title>Title</title>
</head>
<body>
<header>
    <h1>Информация</h1>
    <div class="menu">
        <div class="nnnn">
            <a href="index1.html">Таблица Менделеева</a>
        </div>
        <div class="nnnn">
            <a href="index3.html">Картинки</a>
        </div>
    </div>
</header>
<div class="container">
    <div class="image"></div>
    <div class="name">Дарья Блохина</div>
    <div class="inform">Понравилось,как доносите информацию.</div>
    <div class="like">Учусь в МГТУ на первом курсе Информационная безопасность. Люблю читать. В свободное время тренируюсь.</div>
    <div class="ff">
        <div class="oip">
            <div class="grid">
                <div class="poroda">
                    <a href="https://lapkins.ru/cat/meyn-kun/">
                        <img src="33.jpg" alt="" width="100%">
                    </a>
                </div>
                <div class="one">Мейн-кун</div>
            </div>
            <div class="grid">
                <div class="poroda">
                    <a href="https://lapkins.ru/cat/shotlandskaya-visloukhaya-koshka/">
                        <img src="22.jpg" alt="" width="100%">
                    </a>
                    <div class="one">Шотландская вислоухая кошка</div>
                </div>
            </div>
            <div class="grid">
                <div class="poroda">
                    <a href="https://lapkins.ru/cat/manchkin/">
                        <img src="5.jpg" alt="" width="100%">
                    </a>
                    <div class="one">Манчкин</div>
                </div>
            </div>
            <div class="grid">
                <div class="poroda">
                    <a href="https://lapkins.ru/cat/burmanskaya-koshka/">
                        <img src="1111.jpg" alt="" width="100%">
                    </a>
                    <div class="one">Бурманская кошка</div>
                </div>
                <div class="grid">
                </div>
            </div>
        </div>


        <div class="flex">
            <div class="gr">
                <div class="poroda">
                    <a href="https://lapkins.ru/cat/meyn-kun/">
                        <img src="33.jpg" alt="" width="100%">
                    </a>
                </div>
                <div class="one">Мейн-кун</div>
            </div>
            <div class="gr">
                <div class="poroda">
                    <a href="https://lapkins.ru/cat/shotlandskaya-visloukhaya-koshka/">
                        <img src="22.jpg" alt="" width="100%">
                    </a>
                    <div class="one">Шотландская вислоухая кошка</div>
                </div>
            </div>
            <div class="gr">
                <div class="poroda">
                    <a href="https://lapkins.ru/cat/manchkin/">
                        <img src="5.jpg" alt="" width="100%">
                    </a>
                    <div class="one">Манчкин</div>
                </div>
            </div>
            <div class="gr">
                <div class="poroda">
                    <a href="https://lapkins.ru/cat/burmanskaya-koshka/">
                        <img src="1111.jpg" alt="" width="100%">
                    </a>
                    <div class="one">Бурманская кошка</div>
                </div>

            </div>
        </div>
    </div>
</div>
</body>
</html>