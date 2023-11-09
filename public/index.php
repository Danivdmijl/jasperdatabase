<?php 
require_once("config.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>News cards</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>
    <ul class="cards">
        <li class="cards__card">
            <h2 class="cards__cardTitle"><?php echo getNews($conn, "pannekoek", "titel"); ?></h2>
            <p class="cards__cardDesc"><?php echo getNews($conn, "pannekoek", "desc"); ?></p>
            <a href="news.php?slug=<?php echo getNews($conn, "pannekoek", "slug") ?>" class="cards__cardLink">Klik hier</a>
        </li>
        <li class="cards__card">
            <h2 class="cards__cardTitle"><?php echo getNews($conn, "aardbij", "titel"); ?></h2>
            <p class="cards__cardDesc"><?php echo getNews($conn, "aardbij", "desc"); ?></p>
            <a href="news.php?slug=<?php echo getNews($conn, "aardbij", "slug") ?>" class="cards__cardLink">Klik hier</a>
        </li>
    </ul>
</body>
</html>
