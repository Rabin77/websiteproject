<?php 
include 'connection.php';

$statement=  "SELECT * FROM booked ";
$query=mysqli_query ($con, $statement);
 ?>
 <title>fligh detail</title>
 <link rel="stylesheet" type="text/css" href="../bootstrap3/css/bootstrap.min.css">
 <link rel="stylesheet" type="text/css" href="../bootstrap3/css/bootstrap.css">
  <script type="text/javascript" src="jquery.js"></script>
 <script type="text/javascript" src="../bootstrap3/js/bootstrap.js"></script>
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
      <li><a href="view_details.php" style="color: white;">View details</a></li>
    
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="../index.php">Back to home</a></li>
      <li><a href="index.php"> Log Out</a></li>
    </ul>
  </div>
</nav>
<h1>Flight Details</h1>

<table class="table table-border table-hover">
	<tr>
		<th>id</th>
		<th>From</th>
		<th>To</th>
		<th>Seat</th>
		<th>Class</th>
		<th>Deparure</th>
		
		
	</tr>
	<?php  while($row=$query->fetch_assoc()):  ?>
<tr>
<td><?php echo $row ['id']; ?></td>
<td><?php  echo $row ['Form']; ?></td>
<td><?php echo   $row ['To']; ?></td>
<td><?php echo   $row ['Seat']; ?></td>
<td><?php echo   $row ['Class']; ?></td>
<td><?php echo   $row ['dep']; ?></td>

</tr>
<?php endwhile; ?>
</table>