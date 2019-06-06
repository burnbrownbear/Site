<?php
	$connect = mysqli_connect('127.0.0.1', '9142708033', '7YBtuFm6rn', '9142708033');
	$lol = mysqli_query($connect, "INSERT INTO franch (text_nm, text_fr, img, user_id) VALUES ('" . $_POST['text_fr'] . "','" . $_POST['text_nm'] . "', 'images/" . $_FILES['img']['name'] . "','" . $_POST['user_id'] . "')");
	$row['id_rol'];
	move_uploaded_file($_FILES['img']['tmp_name'], "images/" . $_FILES['img']['name']);
	header('Location: http://kirillbur/64/index2.php?id='. $_POST['user_id']);
?>