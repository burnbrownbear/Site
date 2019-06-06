
<!DOCTYPE html>
<html>
<head>
	<title>
		document
	</title>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<meta charset="utf-8">
</head>
<body style="background: rgb(211,63,255)">
	<form method="POST" action="regist.php">
		<input type="hidden" name="id">
		<input type="" name="mail" placeholder="Электронный адрес">
		<input type="" name="name" placeholder="Имя и фамилия">
		<input type="" name="login" placeholder="Имя пользователя">
		<input type="" name="password" placeholder="Пароль">
		<select name="clmn" class="custom-select">
 		 <option  value="2">Менеджер</option>
 		 <option  value="1">Клиент</option>
 		</select>
		<button>Регистрация</button>
	</form>
	<form method="POST" action="sigin.php">
		<button>Войти</button>
	</form>
</body>
</html>