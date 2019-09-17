<?php 
$dbusername="root";
$dbpassword="";
$host="localhost";
$dbname="hawa";

$con=new mysqli($host, $dbusername, $dbpassword,$dbname);

$name= $_POST['username'];
$pass=  $_POST['password'];
$con->query ("insert into user (username,password) values('hari.com', 'subedi')");

if($con){
	echo " connection sucessfull!";
	}else{
		echo" Failed!";
	}



// $q= "select * from user where username = '$name' && password = '$pass'";
// $result=mysqli_query ($con,$q);


// $num= mysqli_num_rows ($result);

// if($num ==1){
// 	echo" But this user name and password is Alreday exisite";

// }else
// {
// 	$qy= "insert into login (email,password) values  ('$name', '$pass')";

// 	mysqli_query ($con,$qy);
}
 ?>

