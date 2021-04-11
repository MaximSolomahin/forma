<?php

function getNews($num)
{
    error_reporting(E_ALL);
    ini_set('display_errors', 1);

    $host = 'localhost';
    $login = 'root';
    $password = 'root';
    $db_name = 'news_db';

    $link = mysqli_connect($host, $login, $password, $db_name);
    mysqli_query($link, "SET NAMES 'UTF-8'");

    $table = 'news';
    $query = "SELECT * FROM $table WHERE id > 0 LIMIT $num";  ///// Вся работа делалась тут: Вначале идет работа со столбцами. А в конце работа с данными и их поиск.

    $result = mysqli_query($link, $query);

    for ($date = []; $row = mysqli_fetch_assoc($result); $date[] = $row) ;
    return $date;
}




