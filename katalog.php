<?php

$dbh = new PDO('mysql:host=localhost; dbname=db_webkatalog', 'root', '');
$db = $dbh->prepare('SELECT * FROM mytable');
$db->execute();
$mytable = $db->fetchAll(PDO::FETCH_ASSOC);

$data = json_encode($mytable);
echo $data;

?>