<!DOCTYPE html>
    <html>
        <head>
            <?php

            $title = 'Новости';
            include_once '../blocks/head.php';
            require_once "../functions/functions.php";
            ?>
        </head>
        <body>
        <?php
            include_once "../blocks/header.php";
            $news = getNews(3);
        ?>
        <?php
        echo '<div id="newsLent">
                <div id="news">';
                $count = count($news);
            for ($i = 0; $i < $count; $i++){
                if ($i == 0){
                   echo '<div id="firstNews">';
                }
                else{
                    echo '<div class="oldNews">';
                    }
                echo '<br>' . '<img src="../image/'. $news[$i]['id'] .'.jpg" alt="Статья 1" title=". ' . $news[$i]['id'] .'">
                    <h2>'. $news[$i]['title'] . '</h2>
                    <p> ' . $news[$i]['intro_text'] . '</p>
                    <a href="/news_read.php?id='.  $news[$i]['id'] .'">
                        <div class="more">Читать</div>
                    </a> </div>';
        if ($i == 0){
            echo '<div class="clear"></br></div>';
                  }
            }


        ?>

                    </div>
                 </div>
                </div>
              </div>



        <?php
        include_once '../blocks/footer.php';
        ?>

        </body>

</html>
