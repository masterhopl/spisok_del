<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<style type="text/css">
	button{
		margin: 3px;
	}

	</style>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
	<title></title>
</head>
<body>
	<?php $connect = mysqli_connect('127.0.0.1', 'root', '', 'ghg');
	$query = mysqli_query($connect, 'SELECT * FROM notes ORDER BY id DESC');
	$query2 = mysqli_query($connect, 'SELECT * FROM notes WHERE status = 1') ?>


<form method="POST" action="insert.php">
			<button>
				новая запись
			</button>
			<input placeholder="название" name="text">
			<input placeholder="дата" type="date" name="date">
</form>
	<?php for($i = 0; $i < $query->num_rows; $i++) { ?>
<?php $logo = $query->fetch_assoc();?>
<?php if ($logo['status'] == true) {
		$color = 'green';
		}
		else
		{
		$color = 'red';
		} 
		?>
	<div>
		
		<div>
			<?php echo '<h5>' . $logo['date'] . '</h5>'; ?>
		</div>
		<div>
			<?php  echo '<h5 style="color: '.$color.'">' . $logo['text'] . '</h5>'; ?>
		</div>
		<div>
			<form method="GET" action="delete.php" >
				<?php echo '<input name="id" value="' . $logo['id'] . '" style="display: none" >'; ?>
				<button class="btn btn-danger">удалить</button>
			</form>
			<form method="POST" action="status.php" >
				<?php echo '<input name="id" value="' . $logo['id'] . '" type="hidden" >'; ?>
				<button class="">готово</button>
			</form>
		</div>
	</div>	
	<?php } ?>
</body>
</html>
