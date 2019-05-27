<?php 
include 'connect.php';
$query = mysqli_query($connect,"SELECT * FROM RegTable where uniqueNick = '".$_POST['uniqueNick']."'");
$avatar=$query->fetch_assoc();
if (!empty($_POST['uniqueNick']&& $_POST['uniqueNick']== $avatar['uniqueNick']) ) {
	if ($_POST['password'] == $avatar['password']) {
		header('Location: kek.php?user_id='.$avatar['id']);
	}else{
	echo "К сожалению что-то пошло не так. Возможно вы ввели не правельно уникальный ник или пароль";
}

	
}else{
	echo "К сожалению что-то пошло не так. Возможно вы ввели не правельно уникальный ник или пароль";
}

?>    
<meta charset="utf-8">