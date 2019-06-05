<?php $con = mysqli_connect('127.0.0.1', 'root', '', 'ghg');
$query = mysqli_query($con, "DELETE FROM notes WHERE id='" . $_GET['id'] . "'" );
header('Location: http://ivannn/index.php'); ?>