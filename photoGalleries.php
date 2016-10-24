<?php
include "layout/header.php";

    echo "<div class='wall'>";

        $decode = curlFunc("https://api.hurriyet.com.tr/v1/newsphotogalleries");

        foreach ($decode as $photo)
        {
            $Image =$photo->Files[0]->FileUrl;

            $pathExplode = explode('/' , $photo->Path);
            $path = ucwords($pathExplode[1]);

            echo "
                <a class='article' href='photoGallery/$photo->Id'>
                    <img src='$Image' alt='$photo->Title' title='$photo->Title' />
                    <hgroup>
                        <h2>$photo->Title</h2>
                        <h4>$photo->Description</h4>
                        <h6>$path</h6>
                    </hgroup>
                    <div class='clear'></div>
                </a>
                ";
        }

    echo "</div>";

include "layout/footer.php";