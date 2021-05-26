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
        /* background: linear-gradient(to bottom, #ffffff 25%, #bae8e8 100%); */
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

 button {
  margin-bottom: 15px;
  border: none;
  outline: 0;
  padding: 5px;
  color: white;
  background-color: rgba(0, 140, 255, 0.925);
  text-align: center;
  cursor: pointer;
  width: 100%;
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
table {
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}
#customers {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
 
  width: 95%;
  margin-left:25px;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #297ca0;
  color: white;
}
</style>
</head>
<title>lomba</title>
<body>
<div>
    <nav>
    <ul>
    <li style="float: left; margin-left: 15px; margin-top: 15px;"><a href="admin.php" style="background-color: transparent;"><img src="yoklomba.png" width="130px" weight="120px" style="margin-top: -20px"></a></li>
    
</ul>
</nav>
    
    <li style="float: right; margin-top: -80px" class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#" style="background-color: transparent;">
    <?=$_SESSION['users']?>
    <span class="caret"></span></a>
        <ul class="dropdown-menu">
        <a class="dropdown-item" href="editprofile.php" style="background-color: transparent;">Edit Profile</a></li>
        <a class="dropdown-item" href="listlomba.php" style="background-color: transparent;">List Lomba</a></li>
        <a class="dropdown-item" href="lomba.php" style="background-color: transparent;">Proses Lomba</a></li>
        <a class="dropdown-item" href="lombaperiode.php" style="background-color: transparent;">Lomba</a></li>

        <a class="dropdown-item" href="logout.php" style="background-color: transparent;">Logout</a></li>

        </ul>
      </li>
</div>

<table id="customers">
  <tr>
    <th>Nama Lomba</th>
    <th>Deskripsi Lengkap</th>
    <th>Penyelenggara</th>
    <th>Email</th>
    <th>Kategori Lomba</th>
    <th>url Lomba</th>
    <th>Periode Iklan</th>
    <th>Poster</th>
    <th>Status</th>
    <th>bukti pembayaran</th>
    <th>Action</th>
  </tr>

  <?php 
  require('config.php');
  $user = $_SESSION['users'];
  $lomba_data = mysqli_query($conn,"SELECT id_lomba, nama_lomba, deskripsi_lengkap, penyelenggara, email,
  kategori_lomba,url_lomba, periode_iklan, poster_lomba, status, b.bukti_pembayaran FROM lomba INNER JOIN pembayaran b USING(email) where status='accept'");
  foreach($lomba_data as $data){
?>
  <tr>
    <td><?php echo $data['nama_lomba'] ?></td>
    <td><?php echo $data['deskripsi_lengkap'] ?></td>
    <td><?php echo $data['penyelenggara'] ?></td>
    <td><?php echo $data['email'] ?></td>
    <td><?php echo $data['kategori_lomba'] ?></td>
    <td><?php echo $data['url_lomba'] ?></td>
    <td><?php echo $data['periode_iklan'] ?></td>
    <td><img src="<?php echo $data['poster_lomba'] ?>" alt="Web" style="width: 30px; height: 60px"></td>
    <td><?php echo $data['status'] ?></td>
    <td><img src="<?php echo $data['bukti_pembayaran'] ?>" alt="Web" style="width: 50px; height: 20px"></td>

  
    
    

    <td><form action="publish.php" method="post">
        <input type="hidden" name = "idlomba" value="<?php echo $data['id_lomba']; ?>">
       <button style="background-color:green; font-size:14px"type="accept" name = 'publish' value="publish"><p>publish</p></button></form>


      </td>
  </tr>
  
      </div>
      </div>
      <?php } ?>
      </div>
      </div>
      </form>
      </table>
    
<div class="jumbotron1 text-center" style="margin-bottom:0">
    <p>&copy;Ayo Lomba</p>
</div>


</body>          
</html>
<?php  }else{
  echo "<script>window.location.replace('home.php')</script>";

} ?>