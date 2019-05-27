<meta charset="utf-8">
<?php 
	include 'connect.php';
	$random = mysqli_query($connect,"SELECT*FROM questions ORDER BY rand()");
 ?>
 <?php 
 	$var = $random->fetch_assoc();
 	echo $var['question']
  ?>
   <?php 
 	$vars = $random->fetch_assoc();
 	echo $vars['answer']
  ?>