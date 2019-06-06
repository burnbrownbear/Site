<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>
<?php $connect = mysqli_connect('127.0.0.1', '9142708033', '7YBtuFM6rn', '9142708033');
	$query = mysqli_query($connect, "SELECT * FROM franch INNER JOIN login ON franch.user_id = login.id ORDER BY franch.idL DESC");
	$query2 = mysqli_query($connect, "SELECT * FROM login WHERE id = ".$_GET['id']);
	$logo = $query2->fetch_assoc();
	?>
	<?php 
	echo '<h2>' . $logo['name'] . '</h2>';
	echo '<h5>' . $logo['login'] . '</h5>';
	echo '<img src="' . $logo['avatar'] . '"style="height: 140px;width: 130px">';
	?>
	<?php
	for($i = 0; $i < $query->num_rows; $i++){ 
	
	$logo1 = $query->fetch_assoc(); 

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

	</div>	
	<?php } ?>
</body>
</html>

