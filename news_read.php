<!DOCTYPE html>
<html>
<head>
    <?php
    include_once 'blocks/head.php';
    require_once "functions/functions.php";
    $title = $news['title'];

    ?>
</head>
<body>
<?php
include_once "blocks/header.php";
echo    '<br>';
$news = getOneNews($_GET['id']);
$id = $_GET['id'];
echo    '<br>';



?>

   <div id="newsLentFull">
       <div id="newsFull">
            <div id="firstNewsFull">
                 <br><img src="../image/<?=$news[0]['id']?>.jpg" alt="Статья 1" title="<?=$news[0]['id']?>'">
                                <h2><?=$news[0]['title']?></h2>
                                <p> <?=$news[0]['full_text']?></p>
        </div>
    </div>
</div>





<?php
include_once 'blocks/footer.php';
?>

</body>

</html>


<!--echo '<br>' . '<img src="../image/'. $news[0]['id'] .'.jpg" alt="Статья 1" title=". ' . $news[0]['id'] .'">

                                <h2>'. $news[0]['title'] . '</h2>
                                <p> ' . $news[0]['full_text'] . '</p>
                            </a> -->