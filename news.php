<?php
include "layout/header.php";

    $id = $_GET["id"];

    $news = curlFunc("https://api.hurriyet.com.tr/v1/articles/$id");

        $Image =$news->Files[0]->FileUrl;
        if(!$Image){$Image = "images/noImage.png";}

        echo "
            <a class='article' href='news/$news->Id'>
                <h2>$news->Title</h2>
                <img src='$Image' alt='$news->Title' title='$news->Title' />
                    <hgroup>
                    <h4>$news->Description</h4> <br/>
                    <h4>$news->Text</h4>
                </hgroup>
            </a>
            ";

        echo "<ul class='tags'>";

            foreach ($news->Tags as $Tag)
            {
                echo "<li> $Tag </li>";
            }

        echo "</ul>";

include "layout/footer.php";

