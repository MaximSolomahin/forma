<!DOCTYPE html>
<html>
<head>
    <?php
    $title = 'Обратная форма';
    include_once 'blocks/head.php';

    ?>

</head>
<?php
    include_once 'blocks/header.php';
?>
<?php if (!isset($_REQUEST['submit'])){?>
        <div id="main">
             <div id="form" >
                 <form action="" method="POST">
                    <input type="text" name="name"  placeholder="Введите ваше имя" required pattern="[a-zA-Zа-яА-ЯёЁ\s]+">
                    <input type="text" name="address" placeholder="Введите ваш адрес" required>
                    <input type="text" name="number" placeholder="Введите ваш номер телефона" required pattern="\+?[0-9]{11,12}" ">
                    <input type="email" name="email" placeholder="Введите ваш e-mail" pattern="^[0-9a-zA-Z-.]+@[a-zA-Z]+\.[a-zA-Z]{2,3}$" >

                    <input id="button" type="submit" name="submit">
                </form>
    </div>
    <?php
} else {
//Проверка формы

    $name = creatingData($_POST['name']);
    $address = creatingData($_POST['address']);
    $number = creatingData($_POST['number']);
    $email = creatingData($_POST['email']);

    $result = true;

    if (preg_match('#^[а-яА-ЯёЁA-Za-z\s]+$#u', $name) != 1){
        $result = false;
    }
    elseif (preg_match('#^(\d{11}|\+\d{11})$#', $number) != 1){
        $result = false;
    }
    elseif (preg_match('#^[a-zA-z0-9.-]+@[a-zA-Z]+\.[a-z]{2,3}$#', $email) != 1) {
        $result = false;
    }

    //Выводим сообщение о данных формы

    if ($result == false){
        echo 'Проверьте данные';
    }
    else {
        $date = [$name, $address, $number, $email];
    ?>
            <div id="table">
                <table>
                    <tr>
                        <th>Имя</th>
                        <th>Адрес</th>
                        <th>Номер телефона</th>
                        <th>E-mail</th>
                    </tr>
                    <tr>
                        <?php foreach ($date as $elem){
                            echo"<th>$elem</th><br>";
                        }?>
                    </tr>
                </table>
            </div>
        </div>

    <?php

        }
}

function creatingData($val){
    return trim(strip_tags($val));
}

include_once 'blocks/footer.php';
?>

</body>

</html>
