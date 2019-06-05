<?php $connect = mysqli_connect('127.0.0.1', 'root', '', 'ghg');
$query = mysqli_query($connect, "INSERT INTO notes (text, date) VALUES ('". $_POST['text'] ."', '" . $_POST['date'] . "')");
header("Location: http://ivannn/index.php"); ?>