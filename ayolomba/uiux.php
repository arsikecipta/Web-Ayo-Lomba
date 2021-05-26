<!DOCTYPE html>
<html>
<?php
  session_start();
  if(isset($_SESSION['users'])){
    $_user = $_SESSION['users'];
  
?>

<head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
          
<style>
    
    body {
        font-family: 'Gill Sans', 'Gill Sans MT', Calibri;
        background: linear-gradient(to bottom, #ffffff 25%, #bae8e8 100%);
    }
    .navbar a {
        overflow: hidden;
        background-color:whitesmoke;       
    }
    .navbar a {
        float: left;
        font-size: 14;
        color: white;
    }
    ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: white;
    top: 0;
    width: 100%;
    }

li {
  color: white;
  display: block;
}

li a {
  display: inline-block;
  color: black;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover, .dropbtn {
  background-color:powderblue;
}

.modal-header, h5, .close{
    background-color: white;
    color:black !important;
    text-align: left;
    font-size: 15px;
  }
  .modal-footer {
    background-color: white;
    padding: 10px 30px;
   ;
  }

  .footer {
   position: fixed;
   left: 0;
   bottom: 0;
   width: 100%;
   background-color:white;
   color: black;
   text-align: center;
   padding: 0;
}
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 320px;
  margin: auto;
  text-align: center;
  font-family: calibri;
  border-radius: 5px;
}

.price {
  margin-left: 10px;
  text-align: left;
  color: black;
  font-size: 15px;
  
}

.card button {
  margin-bottom: 15px;
  border: none;
  outline: 0;
  padding: 5px;
  color: white;
  background-color: rgba(0, 140, 255, 0.925);
  text-align: center;
  cursor: pointer;
  width: 85%;
  font-size: 18px;
  border-radius: 3px;
}

.card button:hover {
  opacity: 0.7;
}

.card h4 {
  text-align: left;
  margin-left: 10px;
}

.modal-footer button {
  border: none;
  outline: 0;
  padding: 5px;
  color: white;
  background-color: rgba(0, 140, 255, 0.925);
  text-align: center;
  cursor: pointer;
  width: 20%;
  font-size: 12px;
  border-radius: 3px;
}
* {box-sizing: border-box;}
body {font-family: Verdana, sans-serif;}
.mySlides {display: none;}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 4s;
  animation-name: fade;
  animation-duration: s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}

</style>
</head>

<title>Home</title>
<body>
<div>
    <nav >
    <ul>
    <li style="float: left; margin-left: 15px; margin-top: 15px;"><a href="homelogin.php" style="background-color: transparent;"><img src="yoklomba.png" width="130px" weight="120px" style="margin-top: -20px"></a></li>
   
</ul>

</nav>
<a href="history.php" style="background-color: transparent; float:right; margin-top:-65px; margin-right:270px; color:black;">History</a></li>
<li style="float: right; margin-top: -80px; margin-right:80px;" class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#" style="background-color: transparent;">Kategori Lomba
    <span class="caret"></span></a>
        <ul class="dropdown-menu">
        <a class="dropdown-item" href="bisnis.php" style="background-color: transparent;">Bisnis</a></li><br>
        <a class="dropdown-item" href="it.php" style="background-color: transparent;">IT</a></li><br>
        <a class="dropdown-item" href="lkti_.php" style="background-color: transparent;">LKTI</a></li><br>
        <a class="dropdown-item" href="essay.php" style="background-color: transparent;">Essay</a></li><br>
        <a class="dropdown-item" href="uiux.php" style="background-color: transparent;">UI/UX</a></li><br>
        <a class="dropdown-item" href="debat.php" style="background-color: transparent;">Debat</a></li><br>
        <a class="dropdown-item" href="lain.php" style="background-color: transparent;">Lain-lain</a></li>
        </ul>
      </li>  
    <li style="float: right; margin-top: -80px" class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#" style="background-color: transparent;">
    <?=$_SESSION['users']?>
    <span class="caret"></span></a>
        <ul class="dropdown-menu">
        <a class="dropdown-item" href="editprofile.php" style="background-color: transparent;">Edit Profile</a></li>
        
        <a class="dropdown-item" href="logout.php" style="background-color: transparent;">Logout</a></li>
        
        </ul>
      </li>
</div>


<center><div class="slideshow-container">
<?php 
  require('config.php');
  $lomba_data = mysqli_query($conn,"SELECT * FROM lomba WHERE status ='publish'");
  foreach($lomba_data as $data){
?>
<form action = detaillomba.php method = post>
<div class="mySlides fade">
  <a name = "detail" href="detaillomba.php?id=<?=$data['id_lomba']?>"><img src="<?php echo $data['poster_lomba'] ?>" width="1000px" height="300px"></a>
</div>
</div>
<?php } ?></form>
</div><center>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>

<script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>
<br>

  <a href="formiklan.php"> <button name = "iklan" class="btn btn-primary" style="background-color: rgba(0, 140, 255, 0.925); margin-left: 10px; width: 400px; height: 50px" type="submit">IKLANKAN LOMBA ANDA DISINI</button></a>
<br><br>
  <?php 
  require('config.php');
  $lomba_data = mysqli_query($conn,"SELECT * FROM lomba WHERE status = 'publish' AND kategori_lomba ='ui/ux'");
  foreach($lomba_data as $data){
?>
<div class="container" style="margin-top:5px">
  <div class="row">
    <div class="col-sm-4">
      <div class="card" style="background-color: white;">
        <img src="<?php echo $data['poster_lomba'] ?>" alt="Web" style="width:100%;">
        <h4><b><?php echo $data['nama_lomba'] ?></b></h4>
        <p class="price"><b></b></p>
        <p style="text-align: left; margin-left: 10px;"><?php echo $data['deskripsi_singkat']?></p>
        <hr>
        
        <button><a style ="color:white;"href="detaillomba.php?id=<?=$data['id_lomba']?>">Detail</a></button> 
      </div>
      </div>
<?php } ?>
</div>
</div>

<div class="jumbotron1 text-center" style="margin-bottom:0">
    <p>&copy;Ayo Lomba</p>
</div>

</body>          
</html>
<?php }else{
  echo "<script>window.location.replace('home.php')</script>";
} ?>


