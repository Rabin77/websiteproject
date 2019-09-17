<?php
try {
    $db = new mysqli("localhost", "root", "", "hawa");
} catch (Exception $e) {
    echo "Service unavailable . check your db name !";
    exit;
}

if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['message'])) {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $is = $db->query("INSERT INTO `contact`(`name`, `email`, `message`) VALUES ('$name','$email','$message')");
    if ($is == TRUE) {
    
      header('location: makure.php');
        unset($_POST);
        exit();
    }


}

 




?>
<!DOCTYPE html>
<html>
<head>
  <title></title>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
   <link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="../../maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="../../ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="../../maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="bootstrape/dist/css/bootstrap.css">
  <link rel="stylesheet" href="bootstrape/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="style.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<body>
<style type="text/css">
  
  body{
    background-image: url(img/i.jpg);
    background-position: center;
    background-position: center;
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
  
         <div class="col-lg-5" style="background:grey; ">
      <H1>Comment</H1>
        <form action="" method="post">

            <input type="text" required class = "form-control"name="name" placeholder="Name"><br><br>
            <input type="text" name="email" required class="form-control" placeholder="Email"><br><br>
            <textarea rows="5"  required  name="message" class="form-control" placeholder="Write Message"></textarea><br>

            <input type="submit" value="Submit">
        </form>
      </div>
      
    </body>
</html>

 
    </form>
    

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
<br>
<br>
<br>
<br>
<br>
<br>
 <footer><p style="font-size: 25px; color: black; background:white;">@copyright 2019 rainbowairlines </p>
  </footer>
</body>


</html>