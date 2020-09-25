<?php
include_once "SQL.php";

$text = htmlspecialchars($_POST['text'], ENT_HTML5);
$header = htmlspecialchars($_POST['header'], ENT_HTML5);
$date = $_POST['date'];


$sql = "INSERT INTO content(id , content, date)
        VALUES ('$header', '$text', '$date')";

$result = $connect->prepare($sql);
$result->execute();
$result->store_result();
$result->fetch();
$result->close();
$connect->close();

