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
<title>Edit Profile</title>
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
        <a class="dropdown-item" href="lomba.php" style="background-color: transparent;">Daftar Lomba</a></li>
        <a class="dropdown-item" href="pegawai.php" style="background-color: transparent;">Daftar Pegawai</a></li>
        <a class="dropdown-item" href="logout.php" style="background-color: transparent;">Logout</a></li>
        </ul>
      </li>
</div>
<b><h2 style="text-align: center">Data Pegawai</h2></b><br>
<form action="addpegawai.php" method="POST" style="margin-left: 450px;">
            
            <div class="form-group">
                    <label>Nama Pegawai</label><br>
                    <input type="text" class="form-control" name="namapegawai" style="width: 500px; height:40px" placeholder="Masukkan Nama Pegawai">
              </div><br>
              <div class="form-group">
                    <label>Jenis Kelamin</label><br>
              <label class="container">Laki-Laki
                    <input type="radio" check="checked" name="jk" value="Laki-Laki" >
                    <span class="checkmark"></span>
              </label>
              <label class="container">Perempuan
                    <input type="radio" check="checked" name="jk" value="Perempuan" >
                    <span class="checkmark"></span>
              </label>
              </div>
              <div class="form-group">
                    <label>Tempat Lahir</label><br>
                    <input type="text" class="form-control" name="tempat" style="width: 500px; height:40px" placeholder="Masukkan Tempat Lahir Pegawai">
                    </div><br>
              <div class="form-group">
                    <label>Tanggal Lahir</label><br>
                    <input type="text" class="form-control" name="tanggal" style="width: 500px; height:40px" placeholder="DD/MM/YY"> 
                    </div><br>
                    <div class="form-group">
                    <label>Telepon</label><br>
                    <input type="text" class="form-control" name="phone" style="width: 500px; height:40px" placeholder="Masukkan Telepon Pegawai"> 
                    </div><br>   
                    <div class="form-group">
                    <label>Jabatan</label><br>
                    <input type="text" class="form-control" name="jabatan" style="width: 500px; height:40px" placeholder="Masukkan Jabatan Pegawai"> 
                    </div><br>
            <button name = "tambah" class="btn btn-primary" style="background-color: rgba(0, 140, 255, 0.925); margin-left: 200px;" type="tambah">SAVE</button>
            </form><br><br>
        </body>
        <div class="jumbotron1 text-center" style="margin-bottom:0">
    <p>&copy;Ayo Lomba</p>
</div>

</html>
</form>
<?php  }else{
  echo "<script>window.location.replace('home.php')</script>";

} ?>