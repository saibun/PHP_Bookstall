<?php 
$path="localhost";
$user_name="root";
$password="Saikat@12#";
$database="bookstall";
$conn = mysqli_connect($path,$user_name,$password,$database);
if(!$conn){
	die(mysqli_error($conn));
}









?>