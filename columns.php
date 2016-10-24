<?php
include "layout/header.php";

    echo "<div class='wall'>";

        $decode = curlFunc("https://api.hurriyet.com.tr/v1/columns");

        foreach ($decode as $column)
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