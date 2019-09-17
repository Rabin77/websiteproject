<script type="text/javascript">
	
	alert("Acceept bookinng information")
	
</script>
<?php 
include 'connection.php';
$id= $_GET ['id'];
$statement= "DELETE FROM reg WHERE id = '$id'";
$query=mysqli_query($con, $statement);


 ?>