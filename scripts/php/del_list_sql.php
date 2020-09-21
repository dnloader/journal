<?php
include_once "SQL.php";

$sql = "SELECT `id` FROM `content`";
$result = $connect->query($sql);

while ($row = $result->fetch_assoc()) {
   echo $row["id"]."-";
}

$result->close();
$connect->close();

