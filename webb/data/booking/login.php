<?php
 session_start();
include 'connectionn.php';



if (isset($_POST['submit'])) {
	//To get data from login field and assign into define_syslog_variables()
	$email = $_POST['email'];
	$password = $_POST['password'];
	$statement = "SELECT * FROM `lg` WHERE username = '$email' AND password = '$password'";

	$query = mysqli_query($con, $statement) or die(mysqli_error($con));
	$count=mysqli_num_rows($query);
// echo $count;
// die();	

	if($count==1){
		$_SESSION['email']=$email;
		header("location: book.php");
	}
	else{
		header("location: login.php?message=invalidlogin ");
	}
};

?> 
<!DOCTYPE html>
<html>
<head>
	<title></title>
	 <link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">
	    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/style-admin.css">
	<link rel="stylesheet" type="text/css" href="../bootstrap3/css/bootstrap.css">
	<script type="text/javascript" src="../bootstrap3/js/bootstrap.js"></script>
<link rel="stylesheet" type="text/css" href="css/style-admin.css">
	<link rel="stylesheet" type="text/css" href="bootstrape/dist/css/bootstrap.css">
	<script type="text/javascript" src="bootstrape/dist/js/bootstrap.js"></script>
	<script type="text/javascript" src="jquery.js"></script>
</head>
<body>

	<style type="text/css">
		
		body{
			background-image: url('img/i.jpg');
			background-position: center;
			background-size: cover;
		}

	</style>

	


	<nav class="navbar navbar" style=" background-image:linear-gradient(rgba(0,0,0,0.4),rgba(0,0,0,0.0)) ; ">
  <div class="container-fluid">
    <div class="navbar-header">
    
      <img src="img/Untitled-1.jpg" style="height: 90PX; border-radius: 100px; width:90px;">
    </div>
    <ul class="nav navbar-nav">

      <li class="dropdown"><a class="" data-toggle="" href="#"> <span class="caret"></span></a>
      </li>
         <li class="active" ><a href="../index.php" style="color: white;">HOME</a></li>
      <li><a href="abou.php" style="color: white;"> ABOUT </a></li>
      <li><a href="gall.php" style="color: white;">GALLERY</a></li>
      <li><a href="login.php" style="color: white;">BOOKING</a></li>
      <li><a href="contact.php" style="color: white;">CONTACT</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="..//admin/login.php"></a></li>
      <li><a href="..//admin/login.php"> </a></li>
    </ul>
  </div>
</nav>

	<section id="login_page">
		<div class="container contact-form">

	<hr>

	<div class="col-md-5">
			<div class="form-group">
					
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

				<input type="submit" name="submit" class="btn btn-primary" value="Login" >
				<a href="register.php" style="" class="btn btn-primary">Register? </a>
					</form>
				</div>
			</div>
		</div>
	</section>
	
</body>
</html>