<?php
include_once "SQL.php";

$text = $_POST['text'];
$header = $_POST['header'];
$date = $_POST['date'];


$sql = "INSERT INTO content(id , content, date)
        VALUES ('$header', '$text', '$date')";

$result = $connect->prepare($sql);
$result->execute();
$result->store_result();
$result->fetch();
$result->close();
$connect->close();

