<?php 
require_once("config.php");
$mySlug = $_GET['slug'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Champion <?php echo getNews($conn, $mySlug, "titel") ?></title>
    <link rel="stylesheet" href="./main.css">
</head>

<body class="charPage">
<h1><?php echo getNews($conn, $mySlug, "titel"); ?></h1>
<h3><?php echo getNews($conn, $mySlug, "desc"); ?></h3>
<p><?php echo getNews($conn,  $mySlug, "text"); ?></p>
</body>

</html>