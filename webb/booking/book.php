<?php
 session_start();
include'connectionn.php';

if (isset($_POST['submit'])) {
$frm = $_POST['from'];
$to = $_POST['to'];
$dep = $_POST['dep'];
$seat = $_POST['seat'];
$class = $_POST['class'];

$statement = ("SELECT * FROM booked");
$query = mysqli_query($con, $statement) or die(mysqli_error($con));
	$row=$query->fetch_assoc();
	if ($row['Form']==$frm && $row['To']==$to  && $row['dep']==$dep && $row['Class']==$class) {

		header('location: reg.php');
	}
	else{
	
	}
// echo $count;
// echo $count;
// die();	

}

?> 
<!DOCTYPE >
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/style-admin.css">
	<link rel="stylesheet" type="text/css" href="bootstrape/dist/css/bootstrap.css">
	   <link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">
	<script type="text/javascript" src="bootstrape/dist/js/bootstrap.js"></script>
	<script type="text/javascript" src="jquery.js"></script>
</head>
<body>
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
      <li><a href="" style="color: white;">GALLERY</a></li>
      <li><a href="book.php" style="color: white;">BOOKING</a></li>
      <li><a href="contact.php" style="color: white;">CONTACT</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="..//admin/login.php"></a></li>
      <li><a href="..//admin/login.php"> </a></li>
    </ul>
  </div>
</nav>
	<style type="text/css">
		
		body{
			background-image: url('img/i.jpg');
			background-size: cover;
			background-position: center;
		}
	</style>
	<section id="login_page">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h2>Online booking</h2>
					<form action="" method="POST" role="form">
							<label for="">From</label>
							<input type="text"  name="from" class="form-control" required>		
							<label for="">To</label>
							<input type="text"  name="to" class="form-control" required>		  
							<label for="">Departure</label>
							<input type="date" name="dep" class="form-control" required>
							<label for="">seat</label>
							<input type="number" name="seat" class="form-control" required>
							<label for="">class</label>
							<input type="" name="class" class="form-control" id="">
<br>
						<input type="submit" name="submit" class="btn btn-primary" value="Search">
						
					</form>
				</div>
			</div>
		</div>

	</section>
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
	<br>
	<br>
	<br>
	<p style="font-size: 25px; color: black; background:white;">@copyright 2019 rainbowairlines </p>
</body>
</html>