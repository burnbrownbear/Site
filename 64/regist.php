<?php
header('Location: http://9142708033.myjino.ru/sigin.php');
echo $_POST["mail"] . ' ' . $_POST["name"] . ' ' . $_POST["login"] . ' ' . $_POST["password"];
echo $_POST["clmn"];
mail($_POST["mail"], "Регистрация прошла успешно ", "'Ваш логин: ' '". $_POST['login'] . "' и пароль: '". $_POST['password'] . "'" );
$connect = mysqli_connect('127.0.0.1', '9142708033', '7YBtuFm6rn', '9142708033');
	$lol = mysqli_query($connect, "INSERT INTO login (mail, name, login, password) VALUES ('" . $_POST['mail'] . "', '" . $_POST['name'] . "', '" . $_POST['login'] . "', '" . $_POST['password'] . "') ");
	$query = mysqli_query($connect, "SELECT * FROM login WHERE id_rol =" . $_GET['id_rol']);

?>