<?php
include "layout/header.php";

    echo "<div class='wall'>";

        $decode = curlFunc("https://api.hurriyet.com.tr/v1/articles");

        foreach ($decode as $news)
        {
            @$Image =$news->Files[0]->FileUrl;
            if(!$Image){$Image = "images/noImage.png";}

            $pathExplode = explode('/' , $news->Path);
            $path = ucwords($pathExplode[1]);

            echo "
            <a class='article' href='news/$news->Id'>
                <img src='$Image' alt='$news->Title' title='$news->Title' />
                <hgroup>
                    <h2>$news->Title</h2>
                    <h4>$news->Description</h4>
                    <h6>$path</h6>
                </hgroup>
                <div class='clear'></div>
            </a>
            ";
        }

    echo "</div>";

include "layout/footer.php";