<!DOCTYPE html>
<html>
<?php
  session_start();
  if(isset($_SESSION['users'])){
    $_user = $_SESSION['users'];
  
?>
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
       
  </head>
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

li a:hover{
  background-color:powderblue;
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
.container {
  display: block;
  position: relative;
  padding-left: 35px;
  margin-bottom: 12px;
  cursor: pointer;
  font-size: 14px;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}

/* Hide the browser's default radio button */
.container input {
  position: absolute;
  opacity: 0;
  cursor: pointer;
}

/* Create a custom radio button */
.checkmark {
  position: absolute;
  top: 0;
  left: 0;
  height: 25px;
  width: 25px;
  background-color: #eee;
  border-radius: 50%;
}

/* On mouse-over, add a grey background color */
.container:hover input ~ .checkmark {
  background-color: #ccc;
}

/* When the radio button is checked, add a blue background */
.container input:checked ~ .checkmark {
  background-color: #2196F3;
}

/* Create the indicator (the dot/circle - hidden when not checked) */
.checkmark:after {
  content: "";
  position: absolute;
  display: none;
}

/* Show the indicator (dot/circle) when checked */
.container input:checked ~ .checkmark:after {
  display: block;
}

/* Style the indicator (dot/circle) */
.container .checkmark:after {
 	top: 9px;
	left: 9px;
	width: 8px;
	height: 8px;
	border-radius: 50%;
	background: white;
}
</style>
</head>
<title>Form Pengiklanan Lomba</title>
<body>
<div>
    <nav>
    <ul>
    <li style="float: left; margin-left: 15px; margin-top: 15px;"><a href="homelogin.php" style="background-color: transparent;"><img src="yoklomba.png" width="130px" weight="120px" style="margin-top: -20px"></a></li>
    
</ul>
</nav>
    
    <li style="float: right; margin-top: -80px" class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#" style="background-color: transparent;">
    <?=$_SESSION['users']?>
    <span class="caret"></span></a>
        <ul class="dropdown-menu">
        <a class="dropdown-item" href="editprofile.php" style="background-color: transparent;">Edit Profile</a></li>
        <a class="dropdown-item" href="formPembayaran.php" style="background-color: transparent;">Pembayaran</a></li>
        <a class="dropdown-item" href="logout.php" style="background-color: transparent;">Logout</a></li>
        </ul>
      </li>
</div>
<b><h2 style="text-align: center">Formulir Pengiklanan Lomba</h2></b><br>
<form action="uploadiklan.php" method="POST" style="margin-left: 450px;">

            
            <div class="form-group">
                    <label>Nama Lomba</label><br>
                    <input required type="text" class="form-control" name="namalomba" style="width: 500px; height:40px" placeholder = "Masukkan Nama Lomba">
              </div><br>
              <div class="form-group">
                    <label>Deskripsi Singkat</label><br>
                    <input required type="text" class="form-control" name="deskripsisingkat" style="width: 500px; height:40px" placeholder = "Masukkan Deskripsi Singkat Lomba">
                    </div><br>
              <div class="form-group">
                    <label>Deskripsi Lengkap</label><br>
                    <textarea required class="form-control" style="width: 500px; height:200px" name="deskripsilengkap" placeholder = "Masukkan Deskripsi Lengkap Lomba"></textarea>
                    </div><br>
              <div class="form-group">
                    <label>Nama Penyelenggara</label><br>
                    <input required type="text" class="form-control" name="penyelenggara" style="width: 500px; height:40px" placeholder = "Masukkan Nama Penyelenggara Lomba">
                    </div><br>
              <div class="form-group">
                    <label>Kontak Penyelenggara</label><br>
                    <input required type="text" class="form-control" name="kontak" style="width: 500px; height:40px" placeholder = "Masukkan Kontak Penyelenggara">
                    </div><br>
                    <div class="form-group">
                    <label>Email</label><br>
                    <input required type="email" value="<?php echo $_SESSION['email'] ?>" class="form-control" name="email" style="width: 500px; height:40px" readonly placeholder="Masukkan Email Anda Saat Ini">
              </div><br>
                    <div class="form-group">
                    <label>Kategori Lomba</label><br>
                    <label class="container">Bisnis
                    <input type="radio" check="checked" name="kategorilomba" value="Bisnis" >
                    <span class="checkmark"></span>
              </label>
              <label class="container">IT
                    <input type="radio" check="checked" name="kategorilomba" value="IT" >
                    <span class="checkmark"></span>
              </label>
              <label class="container">LKTI
                    <input type="radio" check="checked" name="kategorilomba" value="LKTI" >
                    <span class="checkmark"></span>
              </label>
              <label class="container">Essay
                    <input type="radio" check="checked" name="kategorilomba" value="Essay" >
                    <span class="checkmark"></span>
              </label>
              <label class="container">UI/UX
                    <input type="radio" check="checked" name="kategorilomba" value="UI/UX" >
                    <span class="checkmark"></span>
              </label>
              <label class="container">Debat
                    <input type="radio" check="checked" name="kategorilomba" value="Debat" >
                    <span class="checkmark"></span>
              </label>
              <label class="container">Lain-lain
                    <input type="radio" check="checked" name="kategorilomba" value="lain-lain" >
                    <span class="checkmark"></span>
              </label>
                   </div>

                    <div class="form-group">
                    <label>URL google form lomba</label><br>
                    <input required type="text" class="form-control" name="url" style="width: 500px; height:40px" placeholder = "https://">
                    </div><br>

                    <div class="form-group">
                    <label>Periode Iklan</label><br>
              <label class="container">1 Minggu (Rp. 50.000)
                    <input type="radio" check="checked" name="periode" value="1 Minggu" >
                    <span class="checkmark"></span>
              </label>
              <label class="container">2 Minggu (Rp. 100.000)
                    <input type="radio" check="checked" name="periode" value="2 Minggu" >
                    <span class="checkmark"></span>
              </label>
              <label class="container">3 Minggu (Rp. 150.000)
                    <input type="radio" check="checked" name="periode" value="3 Minggu" >
                    <span class="checkmark"></span>
              </label>
              <label class="container">1 Bulan (Rp. 200.000)
                    <input type="radio" check="checked" name="periode" value="1 Bulan" >
                    <span class="checkmark"></span>
              </label>
              </div>
            <div class="form-group">
            <label for="name">Poster Lomba</label><br>
                    <input required type="file" name="poster">
                    </div><br>
            <button name = "submit" class="btn btn-primary" style="background-color: rgba(0, 140, 255, 0.925); margin-left: 190px;" type="submit">DAFTAR</button>
            </form><br><br>
        </body>
        <div class="jumbotron1 text-center" style="margin-bottom:0">
    <p>&copy;Ayo Lomba</p>
</div>
</html>
<?php }else{
  echo "<script>window.location.replace('home.php')</script>";
} ?>
</form>
