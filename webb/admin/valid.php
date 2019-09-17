<?php 

session_start();

$con= mysqli_connect('localhost','root');
if($con){
	echo " connection sucessfull!";
	}else{
		echo" Failed!";
	}

mysqli_select_db($con, 'hawa');
$name= $_POST['user'];
$pass=  $_POST['Password'];

$q= "select * from user where username= '$name' && password = '$pass'";
$result=mysqli_query ($con,$q);
$num= mysqli_num_rows ($result);

if($num ==1){
	$_SESSION['username']=$name;
	header('location:../home/home.html');

}else
{
	header('location:login.php');
}
 ?>

