<?php $connect = mysqli_connect('127.0.0.1', 'root', '', 'ghg');
$query = mysqli_query($connect, "UPDATE notes SET status = true WHERE id = " . $_POST['id'] . " ");
header("Location: http://ivannn/index.php"); ?>