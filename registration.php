<?php 

	include 'connect.php';
	$query = mysqli_query($connect,"SELECT * FROM RegTable ");
	$avatar=$query->fetch_assoc();

	if (!empty($_POST['FullName']) && !empty($_POST['uniqueNick']) && !empty($_POST['password']) && !empty($_POST['positionOrClass']) && !empty($_POST['age'])) {
		if ($_POST['uniqueNick'] == $avatar['uniqueNick']) {
		echo "К большому сожалению такой никнейм уже занят";
		echo "<a href='index.php'><button class='btn btn-primary'>Вернуться</button></a>";
		}
		else{
		$lol = mysqli_query($connect, "INSERT INTO RegTable ( FullName, age, positionOrClass, password, uniqueNick ) VALUES ('". $_POST['FullName'] . "','". $_POST['age'] . "','". $_POST['positionOrClass'] . "','". $_POST['password'] . "','". $_POST['uniqueNick'] . "')");
		header("Location: login.php");
		}	
	}
	else {
		echo "Проверте всё ли вы написали правильно?";
	}
 ?>

<meta charset="utf-8">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
