<?php

$connect = mysqli_connect("localhost", "root", "", "db_webkatalog");
$sql = "SELECT * FROM mytable";
$result = mysqli_query($connect, $sql);
$json_array = array();
while($row = mysqli_fetch_assoc($result)){
    $json_array [] = $row;
}

echo '<pre>';
print_r($json_array);
echo '</pre>'

?>