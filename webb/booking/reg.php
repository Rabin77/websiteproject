<?php 

include 'connectionn.php';

if (isset($_POST['submit'])) {  
$name=$_POST['name'];
$address=$_POST['address'];
$email=$_POST['email'];
$contact=$_POST['contact'];
$gender=$_POST['gender'];
 
$statement="INSERT INTO reg (name,address,contact,email,gender) VALUES('$name','$address','$contact','$email','$gender')";
$query= mysqli_query($con,$statement);
header('location: mj.php');


}
 ?>

<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link rel="stylesheet" type="text/css" href="../bootstrap3/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="../bootstrap3/css/bootstrap.css">
     <link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="style.css">
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
      <li><a href="login.php" style="color: white;">BOOKING</a></li>
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
<div class="booking-from-box" style="">
             <h2>Booking form</h2>

<form method ="POST" action="">
             
                 <label for="Name">Name </label>
                 <input type="text" class="form-control" name="name" placeholder="Enter Your Name"   required>
                 
                 <div class="form-group">
               <label for="Address">Address </label>
                  <input type="text" class="form-control" name="address" placeholder="Enter Your Address" required>
           </div>

                   <div class="form-group">
                      <label for="Contact">Contact</label>
                  <input type="text" name="contact" placeholder="Contact Number" class="form-control select-date" required>
                 </div>
                  
                      
                  
                   <div class="form-group">
                     <label for="E-mail"><br>E-mail </label>
                  <input type="email" placeholder="Enter Your E-mail" name="email" class="form-control " required>
                  </div>
                
               <div class="form-group">
                <label for="Gender"><br>Gender</br> </label>
                <select class="custom-select" name="gender" > 
                     <option  >Male</option>
                     <option > Female</option>
                  </select>
                 </div>
                 
                  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                  <script type="text/javascript">
  alert('flight available ')

</script>
</div>
<br>
<br>
<br>
<br>
<br>
<p style="font-size: 25px; color: black; background:white;">@copyright 2019 rainbowairlines </p>


</body>
</html>