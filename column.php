<?php
include "layout/header.php";

    $id = $_GET["id"];

    $column = curlFunc("https://api.hurriyet.com.tr/v1/columns/$id");

        echo "
        <a class='article' href='column/$column->Id/writer/$column->WriterId'>
            <h2>$column->Title</h2>
            <hgroup>
                <h4>$column->Description</h4> <br/>
                <h4>$column->Text</h4>
            </hgroup>
        </a>
        ";

    $writerId = $_GET["writer"];

    $writer = curlFunc("https://api.hurriyet.com.tr/v1/writers/$writerId");

    @$Image =$writer->Files[0]->FileUrl;
    if(!$Image){$Image = "images/noImage.png";}

    echo "
        <div class='wall'>

             <a class='article' href='writer/$writer->Id'>
                <h2>$writer->Fullname</h2>
                <img src='$Image' alt='$writer->Fullname' title='$writer->Fullname'/>
            </a>

        </div>
        ";

include "layout/footer.php";

