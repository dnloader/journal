<?php
include_once "SQL.php";

$sql = "SELECT * FROM `content` ORDER BY `content`.`date` ASC";
$result = $connect->query($sql);

while ($row = $result->fetch_assoc()) {
    echo $row["id"]."<br>".$row["content"]."<br>".$row["date"]."<br><hr>";
}


$result->close();
$connect->close();


