<?php

    $connect = mysqli_connect('localhost', 'dasha', '1112', 'fact');

    if (!$connect) {
        die('Error connect to DataBase');
    }
?>