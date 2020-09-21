<?php
include_once "SQL.php";

for ($i = 0; $i < count($_POST); $i++){
    $stri =  (String)$i;
    $sql = "DELETE FROM content WHERE id='$_POST[$stri]'";
    $result = $connect->prepare($sql);
    $result->execute();
}
$result->close();
$connect->close();
