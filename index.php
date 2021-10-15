<?php
date_default_timezone_set('Europe/Moscow');
function real()
{
    if (date('H') > 00 && date('H') < 07 ){
        echo 'night.css';
    } else {
        echo 'day.css';
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href= <?php real(); ?>>
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
        <div class="nnnn">
            <a href="massiv.php">Массивы</a>
        </div>
    </div>
</header>
<div class="container">
    <div class="image"></div>
    <div class="name">Дарья Блохина</div>
    <div class="inform">
        <?php
        $slova1 = 'Понравилось, как доносите информацию. Всё доходчиво, разборчиво и интересно.';
        v($slova1);
        function v ($slova1){
            $array = explode(' ', $slova1);
        foreach ($array as $key => $value) {
            if (($key % 2) == 0) {
                echo "<span style='color: peachpuff'> $value </span>  ";
            }
            else {
                echo $value;
            }
        }
        }
        ?>
    </div>
    <div class="like">
        <?php

        /*printf("<span style='color: peachpuff'>*/
         $slova= 'Учусь в МГТУ на первом курсе Информационная безопасность.
        Люблю читать. В свобдное время тренируюсь.';
        echo str_replace("Учусь в МГТУ на первом курсе Информационная безопасность.", '<span style="color: peachpuff">Учусь в МГТУ на первом курсе Информационная безопасность.</span>', $slova);
        ?>
    </div>
    <div class="ff">
        <div class="oip">
            <div class="grid">
                <div class="poroda">
                    <a href="https://lapkins.ru/cat/meyn-kun/">
                        <img src="img/33.jpg" alt="" width="100%">
                    </a>
                </div>
                <div class="one">Мейн-кун</div>
            </div>
            <div class="grid">
                <div class="poroda">
                    <a href="https://lapkins.ru/cat/shotlandskaya-visloukhaya-koshka/">
                        <img src="img/22.jpg" alt="" width="100%">
                    </a>
                    <div class="one">
                        <?
                        $slova2 = "Шотландская вислоухая кошка";
                        echo $slova2;
                        ?>
                    </div>
                </div>
            </div>
            <div class="grid">
                <div class="poroda">
                    <a href="https://lapkins.ru/cat/manchkin/">
                        <img src="img/5.jpg" alt="" width="100%">
                    </a>
                    <div class="one">Манчкин</div>
                </div>
            </div>
            <div class="grid">
                <div class="poroda">
                    <a href="https://lapkins.ru/cat/burmanskaya-koshka/">
                        <img src="img/1111.jpg" alt="" width="100%">
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
                        <img src="img/33.jpg" alt="" width="100%">
                    </a>
                </div>
                <div class="one">Мейн-кун</div>
            </div>
            <div class="gr">
                <div class="poroda">
                    <a href="https://lapkins.ru/cat/shotlandskaya-visloukhaya-koshka/">
                        <img src="img/22.jpg" alt="" width="100%">
                    </a>
                    <div class="one">Шотландская вислоухая кошка</div>
                </div>
            </div>
            <div class="gr">
                <div class="poroda">
                    <a href="https://lapkins.ru/cat/manchkin/">
                        <img src="img/5.jpg" alt="" width="100%">
                    </a>
                    <div class="one">Манчкин</div>
                </div>
            </div>
            <div class="gr">
                <div class="poroda">
                    <a href="https://lapkins.ru/cat/burmanskaya-koshka/">
                        <img src="img/1111.jpg" alt="" width="100%">
                    </a>
                    <div class="one">Бурманская кошка</div>
                </div>

            </div>
        </div>
    </div>
</div>
<footer>

    <?php
    /*$t = timezone_identifiers_list('Europe/Moscow');
    $birthday = ('2000-12-11');
    $d = time("m.d.y");
    $end = $d - $birthday;

    echo "Текущая дата  " . $d ." ";
    echo "День Рождение  " . $birthday ." ";
    echo "День Рождение  " . $end ." ";
*/
//
    $birthday = '2000-12-11';
    $d = date("Y.m.d");
    $bbirthday = date_create($birthday);
    $dd = date_create($d);
    $e = date_diff($bbirthday,$dd);




    function gla($slova2,$slova)
    {
        $p = $slova2 . $slova;
        $vowels = preg_match_all('/[аеёиоуыэюя]/iu', $p);
        echo "В тексте " . $vowels . " гласных букв";
        $s = str_word_count($slova);


    echo "На странице  " . $s. " слов." . "</br>";

    $str = str_word_count($p);
    echo $str;

}



    ?>

</footer>
</body>

</html>