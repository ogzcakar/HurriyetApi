<?php
include "layout/header.php";

echo "<div class='wall'>";

    $id = $_GET["id"];

    $writer = curlFunc("https://api.hurriyet.com.tr/v1/writers/$id");

    @$Image =$writer->Files[0]->FileUrl;
    if(!$Image){$Image = "images/noImage.png";}

    echo "
        <a class='article' href='writer/$writer->Id'>
            <h2>$writer->Fullname</h2>
            <img src='$Image' alt='$writer->Fullname' title='$writer->Fullname'/>
        </a>
        ";

    $writerId = $writer->Id;

    $columns = curlFunc("https://api.hurriyet.com.tr/v1/columns?%24filter=WriterId+eq+'$writerId'");

    foreach ($columns as $column)
    {
        echo "
        <div class='article' >
            <a href='column/$column->Id/writer/$column->WriterId'>
            <hgroup>
                <h2>$column->Title</h2>
                <h4>$column->Description</h4>
            </hgroup>
            </a>
            <h6> <a href='writer/$column->WriterId'> $column->Fullname </a> </h6>
            <div class='clear'></div>
        </div>
        ";
    }

    echo "</div>";

include "layout/footer.php";

