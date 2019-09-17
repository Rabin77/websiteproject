<?php 
include 'connection.php';

$statement=  "SELECT * FROM reg ";
$query=mysqli_query ($con, $statement);
 ?>
 <title>details</title>
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
      <li><a href="" style="color: white;">View details</a></li>
    
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="../index.php">Back to home</a></li>
      <li><a href="index.php"> Log Out</a></li>
    </ul>
  </div>
</nav>
<h1>Information</h1>

<table class="table table-border table-hover">
	<tr>
		<th>id</th>
		<th>Name</th>
		<th>Address</th>
		<th>Email</th>
		<th>Contact</th>
		<th>Gender</th>
	
		
	</tr>
	<?php  while($row=$query->fetch_assoc()):  ?>
<tr>
<td><?php echo $row ['id']; ?></td>
<td><?php  echo $row ['name']; ?></td>
<td><?php echo   $row ['address']; ?></td>
<td><?php echo   $row ['email']; ?></td>
<td><?php echo   $row ['contact']; ?></td>
<td><?php echo   $row ['gender']; ?></td>


</tr>
<?php endwhile; ?>
</table>