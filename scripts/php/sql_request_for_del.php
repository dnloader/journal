<?php
include_once "SQL.php";

for ($i = 0; $i < count($_POST); $i++){

    $tmp = htmlspecialchars($_POST[(String)$i]);
    $sql = "DELETE FROM content WHERE id='$tmp'";
    $result = $connect->prepare($sql);
    $result->execute();
}
$result->close();
$connect->close();
