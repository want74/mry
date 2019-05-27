<?php 
include 'connect.php';
$questions = mysqli_query($connect, "INSERT INTO questions ( question, user_id,rOrC,answer) VALUES ('". $_POST['question'] . "','". $_POST['user_id'] . "','". $_POST['rOrC'] . "','". $_POST['answer'] . "')");
header('Location:create.php?user_id='.$_POST['user_id'].'&rOrC='.$_POST['rOrC'])
?>    
<meta charset="utf-8">