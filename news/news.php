<!DOCTYPE html>
    <html>
        <head>
            <?php

            $title = 'Новости';
            include_once '../blocks/head.php';
            ?>
        </head>
        <body>
        <?php
            include_once "../blocks/header.php";
            $news = getNews(3);
            echo $news[0]['id'];

        ?>
        <?php
        echo '<div id="newsLent">
                <div id="news">';
            for ($i = 0; $i < count($news); $i++){
                if ($i == 0){
                   echo '<div id="firstNews">';
                }
                else{
                    echo '<div class="oldNews">';
                    }
                echo '<br>' . '<img src="../image/'. $news[$i]['id'] .'.jpg" alt="Статья 1" title=". ' . $news[$i]['id'] .'">
                    <h2>'. $news[$i]['title'] . '</h2>
                    <p> ' . $news[$i]['intro_text'] . '</p>
                    <a href="***********">
                        <div class="more">Дальше</div>
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
<!-- <div id="newsLent">
     <div id="news">
         <div id="firstNews">
             <img src="../image/1.jpg" alt="Статья 1" title="Статья 1">
             <h2>Статья 1</h2>
             <p>выджмььььььалвмьлдваьмдылавьмдлываьмльыамьыам</p>
             <a href="***********">
                 <div class="more">Дальше</div>
             </a>

         </div>
         <div class="clear"></br></div>
             <div class="oldNews">
                 <img src="../image/2.jpg" alt="Статья 2" title="Статья 2">
                 <h2>Статья 1</h2>
                 <p>выджмььььььалвмьлдваьмдылавьмдлываьмльыамьыам</p>
                 <a href="***********">
                     <div class="more">Дальше</div>
                 </a>
             </div>
             <div class="oldNews">
                 <img src="../image/3.jpg" alt="Статья 3" title="Статья 3">
                 <h2>Статья 1</h2>
                 <p>выджмььььььалвмьлдваьмдылавьмдлываьмльыамьыам</p>
                 <a href="***********">
                     <div class="more">Дальше</div>
                 </a>-->