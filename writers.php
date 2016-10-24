<?php
include "layout/header.php";

    echo "<div class='wall'>";

        $decode = curlFunc("https://api.hurriyet.com.tr/v1/writers");

        foreach ($decode as $write)
        {
            @$Image = $write->Files[0]->FileUrl;
            if(!$Image){$Image = "images/noImage.png";}

            echo "
                <a class='article' href='writer/$write->Id'>
                    <img src='$Image' alt='$write->Fullname' title='$write->Fullname' />
                    <hgroup>
                        <h2>$write->Fullname</h2>
                    </hgroup>
                </a>
                ";
        }

    echo "</div>";

include "layout/footer.php";