<?php
$servername = "127.0.0.1";
$username = "root";
$password = "toor";
$DBname = "testdb";

$connect = new mysqli($servername,$username,$password,$DBname);

for ($i = 0; $i < count($_POST); $i++){
    $stri =  (String)$i;
    $sql = "DELETE FROM content WHERE id='$_POST[$stri]'";
    $result = $connect->prepare($sql);
    $result->execute();
}
$result->close();
$connect->close();
