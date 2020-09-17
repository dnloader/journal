<?php
$servername = "127.0.0.1";
$username = "root";
$password = "toor";
$DBname = "testdb";

$connect = new mysqli($servername, $username, $password, $DBname);

$sql = "SELECT `id` FROM `content`";
$result = $connect->query($sql);

while ($row = $result->fetch_assoc()) {
   echo $row["id"]."-";
}

$result->close();
$connect->close();

