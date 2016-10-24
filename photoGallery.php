<?php
include "layout/header.php";

        $id = $_GET["id"];

        $photo = curlFunc("https://api.hurriyet.com.tr/v1/newsphotogalleries/$id");

        $Image =$photo->Files[0]->FileUrl;

        $pathExplode = explode('/' , $photo->Path);
        $path = ucwords($pathExplode[1]);

        echo "
            <a class='article' href='photoGallery/$photo->Id'>
                <hgroup>
                    <h2>$photo->Title</h2>
                    <h4>$photo->Description</h4> <br/>
                    <h4>$photo->Text</h4>
                    <h6>$path</h6>
                </hgroup>
                <div class='clear'></div>
            </a>
            ";

    echo "<div class='wall'>";

        foreach ($photo->Files as $files)
        {
            echo"
                <a class='article' href=''>
                    <img src='$files->FileUrl' alt='$photo->Title' title='$photo->Title' />
                </a>
            ";
        }

    echo "
        </div>
        <div class='clear'></div>
        <ul class='tags'>
        ";

    foreach ($photo->Tags as $Tag)
    {
        echo "<li> $Tag </li>";
    }

    echo "</ul>";

include "layout/footer.php";