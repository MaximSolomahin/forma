<?php
function getNews($num)
{
    error_reporting(E_ALL);
    ini_set('display_errors', 1);

    $link = getConnect();

    mysqli_query($link, "SET NAMES 'utf8' COLLATE 'utf8_general_ci'");
    mysqli_query($link, "SET CHARACTER SET 'utf8'");

    $table = 'news';
    $query = "SELECT * FROM $table ORDER BY id DESC LIMIT $num";


    $result = mysqli_query($link, $query);

    for ($date = []; $row = mysqli_fetch_assoc($result); $date[] = $row) ;
    mysqli_close($link);
    return $date;
}

function getOneNews($id){
    $link = getConnect();

    mysqli_query($link, "SET NAMES 'utf8' COLLATE 'utf8_general_ci'");
    mysqli_query($link, "SET CHARACTER SET 'utf8'");

    $table = 'news';
    $query = "SELECT * FROM $table WHERE id = $id";

    $result = mysqli_query($link, $query);

    $date = mysqli_fetch_assoc($result) ;
    mysqli_close($link);
    return $date;


}

function getConnect(){
    $host = 'form';
    $login = 'root';
    $password = 'root';
    $db_name = 'news_db';

    $link = mysqli_connect($host, $login, $password, $db_name);

    return $link;
    /*    $host = 'localhost';
    $login = 'u1351960_default';
    $password = 'mv!vTQv7';
    $db_name = 'u1351960_default';*/
}
