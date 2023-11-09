<?php 

$servername = 'mariadb';
$username = 'root';
$password = '4dy5qwtrsag#!sad';
$dbname = 'characters_db';

$conn = new mysqli($servername, $username, $password, $dbname);



// echo $item['titel'];

function getNews($conn, $name, $whatItem){
    $sql      = 'SELECT * FROM news WHERE titel=?';
    $pre_sql  = $conn->prepare($sql);
    $pre_sql->bind_param('s', $name);
    $pre_sql->execute();
    $result   = $pre_sql->get_result();
    $item     = $result->fetch_assoc();

    return $item[$whatItem];
}

?>