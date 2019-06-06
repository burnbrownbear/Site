<?php
	$connect = mysqli_connect('127.0.0.1', '9142708033', '7YBtuFm6rn', '9142708033');
	mysqli_query($connect, "DELETE FROM franch WHERE idL = '". $_POST['post_id'] ."'");
	header('Location: http://kirillbur/64/index2.php?id='. $_POST['id']);
?>