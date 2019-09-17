

<!DOCTYPE html>
<html>
<head>
	<title></title>

	<link rel="stylesheet" type="text/css" href="../../css/style-admin.css">
	<link rel="stylesheet" type="text/css" href="../bootstrap3/css/bootstrap.css">
	<script type="text/javascript" src="../bootstrap3/js/bootstrap.js"></script>
	<script type="text/javascript" src="../bootstrap3/js/jquery.js"></script>
</head>
<body>
	<style type="text/css">
		body{
			background-image: url('../img/i.jpg');
			width: 100%;
			height: 100vh;
			background-size: cover;
			background-position: center;
		}
	</style>
<section id="login_page">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<p><a href="../index.php ">Back</a></p>
					<h2>SignUp</h2>
					<form action="regestire.php" method="POST" role="form">
						<div class="form-group">
							<label for="">Email</label>
							<input type="text" name="username" class="form-control" id="">
						</div>
						<div class="form-group">
							<label for="">Password</label>
							<input type="password" name="password" class="form-control" id="">
						</div>
						<input type="submit" name="submit" class="btn btn-primary" value="Login">
					</form>
					
					</div>
				</div>
			</div>
		</section>

</body>
</html>


