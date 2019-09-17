<?php 
include 'connection.php';

if (isset($_POST['submit'])) {  
$from=$_POST['from'];
$to=$_POST['to'];
$departure=$_POST['depa'];
$seat=$_POST['seat'];
$class=$_POST['class'];
 
$statement= "INSERT INTO booked (`Form`,`To`,`dep`,`Seat`,`Class`) VALUES('$from','$to','$departure','$seat','$class')";

$insert =mysqli_query($con,$statement);

if($insert == true){
 header('location:script.php');
}
else{
  echo $con->error;
}

}
 ?>

<!DOCTYPE html>
<html>
<head>
  <title>reg</title>
  <link rel="stylesheet" type="text/css" href="../bootstrap3/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="../bootstrap3/css/bootstrap.css">

</head>
<body>
  <nav class="navbar navbar" style=" background-image:linear-gradient(rgba(0,0,0,0.4),rgba(0,0,0,0.0)) ; ">
  <div class="container-fluid">
    <div class="navbar-header">
    
      <img src="../booking/img/Untitled-1.jpg" style="height: 90PX; border-radius: 100px; width:90px;">
    </div>
    <ul class="nav navbar-nav">

      <li class="dropdown"><a class="" data-toggle="" href="#"> <span class="caret"></span></a>
      
      </li>
         <li class="active" ><a href="add_flight.php" style="color: white;">Add Flight</a></li>
      <li><a href="view_flight.php" style="color: white;"> View Flight </a></li>
      <li><a href="" style="color: white;">View details</a></li>
    
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="../index.php">Back to home</a></li>
      <li><a href="index.php"> Log Out</a></li>
    </ul>
  </div>
</nav>


  </style>
<div class="booking-from-box" style="">
             <h2>Add Flight</h2>

<form method ="POST" action="add_flight.php">
             
                
                 <label for="Name">From </label>
                 <input type="text" class="form-control" name="from"    required>
                 
                 <div class="form-group">
               <label for="Address">To </label>
                  <input type="text" class="form-control" name="to"  required>
           </div>

                   <div class="form-group">
                      <label for="Contact">Departure Date</label>
                  <input type="date" name="depa" class="form-control select-date" required>
                 </div>
                  
                      
                  
                   <div class="form-group">
                     <label for="E-mail"><br>Seat </label>
                  <input type="seat" name="seat" class="form-control " required>
                  </div>
                
               <div class="form-group">
                <label for="Gender"><br>class</br> </label>
                <select class="custom-select" name="class" > 
                     <option  >Economic</option>
                     <option > Business</option>
                  </select>
                 </div>
<button type="submit" name="submit" class="btn btn-primary">Submit</button>

</body>
</html>