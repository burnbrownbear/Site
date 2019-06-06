<?php 
	$connect = mysqli_connect('127.0.0.1', '9142708033', '7YBtuFm6rn', '9142708033');
	$query = mysqli_query($connect, "SELECT * FROM login WHERE mail ='" . $_POST['mail'] ."' AND password='" . $_POST['password'] . "'");
	$row = $query->fetch_assoc();
	$row['id_rol'];
	if($query->num_rows == 1){
		if($row['id_rol'] == 1){
			header('Location: http://9142708033.myjino.ru/index1.php?id=' . $row['id']);
		}
		elseif($row['id_rol'] == 2){
			header('Location: http://9142708033.myjino.rukirillbur/64/index2.php?id=' . $row['id']); 
		}
		}
	else{
			header('Location: http://9142708033.myjino.ru/sigin.php?error= нет такого пользователя'); 
	};
 ?> . 