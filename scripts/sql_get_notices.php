<?php
$servername = "127.0.0.1";
$username = "root";
$password = "toor";
$DBname = "testdb";

$connect = new mysqli($servername, $username, $password, $DBname);
$sql = "SELECT * FROM `content` ORDER BY `content`.`date` ASC";
$result = $connect->query($sql);

while ($row = $result->fetch_assoc()) {
    echo $row["id"]."<br>".$row["content"]."<br>".$row["date"]."<br><br>";
}


$result->close();
$connect->close();


