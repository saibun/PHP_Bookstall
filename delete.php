<?php 
	include"conncet.php";
	isset($_GET['deleteId']);
	$id=$_GET['deleteId'];
	$query="DELETE FROM book WHERE 	id='$id'";
	$result=mysqli_query($conn,$query);
	if(!$result){
		die(mysqli_error($conn));
	}
	header("location:books.php")


?>