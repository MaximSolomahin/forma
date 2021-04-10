<!-- Форма обратной связи -->
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, inital-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="css/style.css">

    <title>Форма обратной связи</title>
</head>
<body>
    <header>
        <div>

        </div>
    </header>
<?php if (!isset($_REQUEST['submit'])){?>
    <div class="form" >
        <form action="" method="POST">
            <input type="text" name="name"  placeholder="Введите ваше имя" required>
            <input type="text" name="address" placeholder="Введите ваш адрес" required>
            <input type="text" name="number" placeholder="Введите ваш номер телефона" required>
            <input type="email" name="email" placeholder="Введите ваш e-mail">

            <input style="background-color: darkred; color: white"   type="submit" name="submit">

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
    <table class="table">
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
    <?php

        }
}

function creatingData($val){
    return trim(strip_tags($val));
}
?>

<footer>

</footer>

</body>

</html>
