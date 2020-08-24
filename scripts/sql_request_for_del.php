<?php
$servername = "127.0.0.1";
$username = "root";
$password = "toor";
$DBname = "testdb";

$connect = new mysqli($servername,$username,$password,$DBname);

$arrForDel = $_GET['arrForDel'];
$arrForDel = explode(",",$arrForDel);
for ($i = 0; $i < count($arrForDel); $i++){
    $sql = "DELETE FROM content WHERE id='$arrForDel[$i]'";
    $result = $connect->prepare($sql);
    $result->execute();
}
$result->close();
$connect->close();
