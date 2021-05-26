<!DOCTYPE html>
<html>
<?php
  session_start();
  if(isset($_SESSION['users'])){
    $_user = $_SESSION['users'];
  }
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
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">     
<style>
    
    body {
        font-family: 'Gill Sans', 'Gill Sans MT', Calibri;
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
    color: black;
    background-color: white;
    top: 0;
    width: 100%;
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
* {
  box-sizing: border-box;
}

/* Create two equal columns that floats next to each other */
.column {
  float: left;
  width: 50%;
  padding: 10px;
  height: 300px; /* Should be removed. Only for demonstration */
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

</style>
</head>

<title>LKTI "Green Technology for Environment Sustainability"</title>
<body>
<div>
    <nav>
    <ul>
    <li style="float: left; margin-left: 15px; margin-top: 30px;"><a href="homelogin.php" style="background-color: transparent;"><img src="yoklomba.png" width="130px" weight="120px" style="margin-top: -30px"></a></li>
    
</ul>
</nav>

    <li style="float: right; margin-top: -80px" class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#" style="background-color: transparent;">
    <?=$_SESSION['users']?>
    <span class="caret"></span></a>
        <ul class="dropdown-menu">
        <a class="dropdown-item" href="editprofile.php" style="background-color: transparent;">Edit Profile</a></li>
        <a class="dropdown-item" href="logout.php" style="background-color: transparent;">Logout</a></li>
        </ul>
      </li>
</div>

<br>
<div class="row" style="margin-left:10px; margin-right: 10px;">
  <div class="column" >
    
    <img src="poster3.jpg" alt="Web" style="width:90%; 
box-shadow: 10px 10px 10px #39375b;">
  </div>
  <div class="column">
  <b><h2 style="text-align: center">LKTI "Green Technology for Environment Sustainability"</h2></b><br>
  <p>Lomba Karya Tulis Ilmiah atau disingkat LKTI adalah sub-acara LITL yang dikemas dalam bentuk pengerjaan karya tulis ilmiah dengan tujuan untuk menemukan bibit unggul dalam hal inovasi teknologi terkait masalah pengelolaan dan infrastruktur di bidang Teknik Lingkungan</p>
<p>Tema : “Green Technology for Environmental Sustainaibility”</p>

<p>LKTI pada tahun ini mengusung tema besar yaitu Green Technology for Environmental Sustainability. Tema ini dilatar belakangi oleh pesatnya perkembangan industri di Indonesia yang tidak hanya berdampak pada peningkatan pertumbuhan ekonomi, tetapi juga berdampak negatif terhadap lingkungan salah satunya ialah pencemaran udara oleh zat-zat berbahaya dari asap pabrik. Tidak hanya pencemaran udara, industri juga dapat mencemari badan air karena masih banyak industri di Indonesia yang membuang air limbah ke lingkungan tanpa melakukan pengolahan terlebih dahulu. Dengan menyatukan ilmu keprofesian, kepedulian serta adanya kontribusi nyata terhadap lingkungan, diharapkan ENVIRONATION 2019 dapat mendorong inovasi teknologi yang ramah lingkungan dan berkelanjutan, serta meningkatkan kesadaran masyarakat akan pentingnya menjaga lingkungan.</p>

<p><b>Sub-tema :</b>
<ol>
<li>Sustainable Green City</li>
<li>Green Renewable Energy</li>
<li>Waste to Energy</li>
<li>Smart-self produced Energy for Infrastructure</li>
<li>Inovasi Teknologi Pengolahan Air Limbah</li>
<li>Teknologi Terbarukan Pengendalian Emisi Kendaraan</li>
</ol>
</p>
<p>
<b>Timeline :</b>
<ul style="list-style-type:disc;">
<li>- Penutupan pendaftaran : 17 Agustus 2019- Pengumuman lolos abstrak : 28 Agustus 2019</li>
<li>- Pembayaran registrasi : 3 September 2019</li>
<li>- Pengumuman full paper : 17 September 2019</li>
</ul>
</p>
  <a href="#" class="w3-btn w3-black" style="border-radius: 5px; float:right;">DAFTAR</a>
  </div>
</div>

<div class="footer" style="background-color: transparent;">
  <p> &copy; Ayo Lomba</p>
</div>
</body>          
</html>

