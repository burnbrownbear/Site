<!DOCTYPE html>
<html>
<head>
	<title>	</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
	<meta charset="utf-8">
</head>
<body>
		<form method="POST" action="siginn.php">
			<?php echo '<input type="hidden" name="id">'?>
			<?php echo '<input type="text" name="mail" placeholder="Введите электронный адрес">'?>
			<?php echo '<input type="password" name="password" placeholder="Введите пароль">'?>
			<?php echo '<input type="hidden" name="id_rol">'?>

			<button>Войти</button>
			<?php $error = $_GET['error'];
			 echo $error;
			?>
		</form>
		<form method="POST" action="reg.php">
			<button>Регистрироваться</button>
		</form>
</body>
</html>
