<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>

	<?php
		$connect = mysqli_connect('127.0.0.1', '9142708033', '7YBtuFm6rn', '9142708033');
	$query1 = mysqli_query($connect, "SELECT * FROM franch INNER JOIN login ON franch.user_id = login.id ORDER BY franch.idL DESC");
	$query = mysqli_query($connect, "SELECT * FROM login WHERE id =" . $_GET['id']);
	#$res = $query->fetch_assoc();
	$logo1 = $query1->fetch_assoc();
	echo 'Добро пожаловать ' . $res['name'];
	 	 ?>
	<form method="POST" action="insert.php" enctype="multipart/form-data">
	<?php echo '<input type="" name="text_nm" placeholder="введите название">'?>
	<?php echo '<input type="" name="text_fr" placeholder="введите описание">'?>
	<?php echo '<input type="file" name="img">'?>
	<?php echo '<input type="" name="user_id" value="' . $logo1['id'] .'">'?>
	<button>Опубликовать</button>
	</form>
		<?php
	for($i = 0; $i < $query1->num_rows; $i++){ 
	

	?>
	<div>
		<div class="d-flex">
		<?php echo '<img src="'.$logo1['avatar'].'" style="height: 50px;width: 40px">'?>
		<?php  echo '<h5>' . $logo1['login'] . '</h5>'; ?>
		</div>
		<div>
			<?php  echo '<h3>' . $logo1['text_fr'] . '</h3>'; ?>
		</div>
		<div>
			<?php  echo '<h3>' . $logo1['text_nm'] . '</h3>'; ?>
		</div>
		<div>
		<?php echo '<img src="'.$logo1['img'].'" style="height: 300px;width: 500px">' ?>
		</div>
		<form method="POST" action="delete.php">
				<?php echo '<input name="id" type="" value="' . $logo1['id'] . '">';?>
				<?php echo '<input name="post_id" type="" value="' . $logo1['idL'] . '">';?>
				<button class="font-italic bg-white border border border-dark ">delete</button>
		</form>

	</div>	
	<?php } ?>
	<?php echo '<a href="http://9142708033.myjino.ru/index.php?id='. $logo1['id'] . '">'.'<button>'."Перейти на главную страницу".'</button>'.'</a>'	?>
	
</body>
</html>