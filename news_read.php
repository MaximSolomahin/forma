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

$news = getOneNews($_GET['id']);


?>

<div id="newsLentFull">
    <div id="newsFull">
        <div id="firstNewsFull">
            <?php if (preg_match('#\d+#', $_GET['id'])){?>
            <br><img src="../image/<?=$news['id']?>.jpg" alt="Статья 1" title="<?=$news['id']?>'">
            <h2><?=$news['title']?></h2>
            <p> <?=$news['full_text']?></p>
            <?php } else { echo 'Не правильный путь. Вернитесь к новостям: <a href="news/news.php">Новости</a>';}
            ?>

        </div>
    </div>
</div>

<?php
include_once 'blocks/footer.php';
?>

</body>

</html>