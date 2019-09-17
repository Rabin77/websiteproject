<?php
 session_start();
include 'connection.php';



if (isset($_POST['submit'])) {
	//To get data from login field and assign into define_syslog_variables()
	$email = $_POST['email'];
	$password = $_POST['password'];
	$statement = "SELECT * FROM `user` WHERE username = '$email' AND password = '$password'";

	$query = mysqli_query($con, $statement) or die(mysqli_error($con));
	$count=mysqli_num_rows($query);
// echo $count;
// die();	

	if($count==1){
		$_SESSION['email']=$email;
		header("location: detail.php");
	}
	else{
		header("location: index.php?message=invalidlogin ");
	}
};

?> 
<!DOCTYPE html>
<html>
<head>
	<title>Admin Panel</title>
	<link rel="stylesheet" type="text/css" href="css/style-admin.css">
	<link rel="stylesheet" type="text/css" href="../bootstrap3/css/bootstrap.css">
	<script type="text/javascript" src="../bootstrap3/js/bootstrap.js"></script>
	<script type="text/javascript" src="../bootstrap3/js/jquery.js"></script>
</head>
<body>
	<section id="login_page">
		<div class="container">
			<div class="row">
				<div class="col-md-7">
					
					<h2>Login </h2>
					<?php 

					if (isset($_GET['message'])){
					if($_GET['message']=='invalidlogin'){

						echo "Wrong username and password";
					}
					if ($_GET['message']=='accessdenied') {
						echo "You don`t have to access to view this page.Please login";
						
					}
					}

					 ?>
					
					<form action="" method="POST" role="form">
						<div class="form-group">
							<label for="">Name</label>
							<input type="text" required  name="email" class="form-control" id="">
						</div>
						<div class="form-group">
							<label for="">password</label>
							<input type="password" required  name="password" class="form-control" id="">
						
						</div>


						
						</div>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

						<input type="submit" name="submit" class="btn btn-primary" value="Login">
					</form>
				</div>
			</div>
		</div>
	</section>
	
</body>
</html>