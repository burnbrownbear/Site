<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>
	<?php
		$connect = mysqli_connect('127.0.0.1', '9142708033', '7YBtuFm6rn', '9142708033');
	$query = mysqli_query($connect, "SELECT * FROM login WHERE id =" . $_GET['id']);
	$res  = $query->fetch_assoc();
	echo 'Добро пожаловать ' . $res['name'];
	 	?>
	<?php echo '<a href="http://9142708033.myjino.ru/index.php?id='. $res['id'] . '">'.'<button>'."Перейти на главную страницу".'</button>'.'</a>'	?>
</body>
</html>