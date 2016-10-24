<?php include "config.php";?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Hürriyet Haber Api</title>
    <base href="<?php echo $baseUrl;?>" />
    <link rel="stylesheet" href="css/news.css"/>
</head>
<body>

<header>
    <div class="container">
        <div id="logo">
            <h2><a href="index"> Hürriyet Api </a></h2>
        </div>
    </div>
</header>

<nav>
    <ul>
        <li><a href="category/gundem"> Gündem </a> </li>
        <li><a href="category/dunya"> Dünya </a> </li>
        <li><a href="category/ekonomi"> Ekonomi </a> </li>
        <li><a href="category/spor"> Spor </a> </li>
        <li><a href="category/astroloji"> Astroloji </a> </li>

        <li><a href="columns"> Köşe Yazıları </a> </li>
        <li><a href="writers"> Yazarlar </a> </li>
        <li><a href="photoGalleries"> Foto Galeri </a> </li>
    </ul>
</nav>


<div class="container">