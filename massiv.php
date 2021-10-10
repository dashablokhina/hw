<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="">
    <title>Title</title>
</head>
<body>

    <div class="massiv1">
        <div>Задача 1</div>
        <br>
        <?php
        $massiv1 = [];
        for ($i = 1; $i < 16; $i++) {
            array_push($massiv1, mt_rand(1, 16));
        };
        foreach ($massiv1 as $value) {
            if (($value % 2) == 0) {
                echo "<strong>";
                echo $value ."<br/>";
                echo "</strong >";
            } else
                echo $value ."<br/>";
            }
        ?>
    </div>

        <br>
        <div class="massiv2">
            <div>Задача 2</div>
            <?php
            $massiv2 = array(
                'cat' => array('manx', 'abyssinian', 'asian'),
                'dog' => array('akita', 'chin', 'pug'),
                'animals' => array('cat', 'dog'),
            );
            $a = "a";
            foreach ($massiv2 as $value) {
                foreach ($value as $charaster)
                    if (substr($charaster, 0, 1) == $a) {
                        echo "<br>".$charaster ;
                    }
            }
            ?>
        </div>

        <br>
        <div class="massiv3">
            <div>Задача 3</div>
            <?php
            $massiv3 = array(
                '1' => array(1, 2, 3),
                '2' => array(4, 5, 6),
                '3' => array(7,8),
            );
            echo "В массиве " .count($massiv3, COUNT_RECURSIVE)."  элементов  " ."<br>";
            foreach ($massiv3 as $value) {
                echo  count($value) ."<br>";
                $i++;
            }
            ?>
    </div>
</body>
</html>
