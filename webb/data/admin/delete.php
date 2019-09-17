
<script type="text/javascript">
	

	alert("Delete sucessfull");
str.link('index.php');
	

</script>
<?php 
include 'connection.php';
$id= $_GET ['id'];
$statement= "DELETE FROM reg WHERE id = '$id'";
$query=mysqli_query($con, $statement);

 ?>