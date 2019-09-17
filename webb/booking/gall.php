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
<header>
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

</header>
<div id="slider-wrapper">
  <div class="inner-wrapper">
    <input checked type="radio" name="slide" class="control" id="Slide1" />
    <label for="Slide1" id="s1"></label>
    <input type="radio" name="slide" class="control" id="Slide2" />
    <label for="Slide2" id="s2"></label>
    <input type="radio" name="slide" class="control" id="Slide3" />
    <label for="Slide3" id="s3"></label>
    <input type="radio" name="slide" class="control" id="Slide4" />
    <label for="Slide4" id="s4"></label>
    <div class="overflow-wrapper">
      <a class="slide" href=""><img src="img/a.jpg" /></a>
      <a class="slide" href=""><img src="img/t.jpg" /></a>
      <a class="slide" href=""><img src="img/f.jpeg" /></a>
      <a class="slide" href=""><img src="img/b.jpg" /></a>
    </div>
  </div>
</div>
<body>
  <style type="text/css">
    #slider-wrapper {
  width: 940px;
  height: 470px;
  margin: 50px auto;
  position: relative;
  margin-bottom: 0px;
  background: rgba(0, 0, 0, 0.5);
  overflow: hidden;
}

#s1 {
  padding: 6px;
  background: #000000;
  position: absolute;
  left: 50%;
  bottom: 25px;
  margin-left: -36px;
  border-radius: 20px;
  opacity: 0.3;
  cursor: pointer;
  z-index: 999;
}

#s2 {
  padding: 6px;
  background: #000000;
  position: absolute;
  left: 50%;
  bottom: 25px;
  margin-left: -12px;
  border-radius: 20px;
  opacity: 0.3;
  cursor: pointer;
  z-index: 999;
}

#s3 {
  padding: 6px;
  background: #000000;
  position: absolute;
  left: 50%;
  bottom: 25px;
  margin-left: 12px;
  border-radius: 20px;
  opacity: 0.3;
  cursor: pointer;
  z-index: 999;
}

#s4 {
  padding: 6px;
  background: #000000;
  position: absolute;
  left: 50%;
  bottom: 25px;
  margin-left: 36px;
  border-radius: 20px;
  opacity: 0.3;
  cursor: pointer;
  z-index: 999;
}

#s1:hover,
#s2:hover,
#s3:hover,
#s4:hover {
  opacity: .50;
}

.inner-wrapper {
  width: 940px;
  height: 470px;
  position: absolute;
  top: 0;
  left: 0;
  margin-bottom: 0px;
  overflow: hidden;
}

.control {
  display: none;
}

#Slide1:checked ~ .overflow-wrapper {
  margin-left: 0%;
}

#Slide2:checked ~ .overflow-wrapper {
  margin-left: -100%;
}

#Slide3:checked ~ .overflow-wrapper {
  margin-left: -200%;
}

#Slide4:checked ~ .overflow-wrapper {
  margin-left: -300%;
}

#Slide1:checked + #s1 {
  opacity: 1;
}

#Slide2:checked + #s2 {
  opacity: 1;
}

#Slide3:checked + #s3 {
  opacity: 1;
}

#Slide4:checked + #s4 {
  opacity: 1;
}

.overflow-wrapper {
  width: 400%;
  height: 100%;
  position: absolute;
  top: 0;
  left: 0;
  overflow-y: hidden;
  z-index: 1;
  -webkit-transition: all 0.3s ease-in-out;
  -moz-transition: all 0.3s ease-in-out;
  -o-transition: all 0.3s ease-in-out;
  transition: all 0.3s ease-in-out;
}

.slide img {
  width: 25%;
  float: left;
}
  </style>
  <br>
  <footer><p style="font-size: 25px; color: black; background:white;">@copyright 2019 rainbowairlines </p>
  </footer>
</body>