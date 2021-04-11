<?php
function getNews($num)
{
    error_reporting(E_ALL);
    ini_set('display_errors', 1);

    $link = getConnect();
    mysqli_query($link, "SET NAMES 'UTF-8'");

    $table = 'news';
    $query = "SELECT * FROM $table WHERE id > 0 LIMIT $num";

    $result = mysqli_query($link, $query);

    for ($date = []; $row = mysqli_fetch_assoc($result); $date[] = $row) ;
    mysqli_close($link);
    return $date;
}

function getOneNews($id){
    $link = getConnect();
    mysqli_query($link, "SET NAMES 'UTF-8'");
    $table = 'news';
    $query = "SELECT * FROM $table WHERE id = $id";

    $result = mysqli_query($link, $query);

    for ($date = []; $row = mysqli_fetch_assoc($result); $date[] = $row) ;
    mysqli_close($link);
    return $date;


}

function getConnect(){
    $host = 'localhost';
    $login = 'root';
    $password = 'root';
    $db_name = 'news_db';

    $link = mysqli_connect($host, $login, $password, $db_name);

    return $link;
}





