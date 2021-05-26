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
</style>
</head>
<title>Edit Profile</title>
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
<b><h2 style="text-align: center">Edit Pegawai</h2></b><br>
                    <?
                    require('config.php');
                    $data_pegawai = mysqli_query($conn,"SELECT * FROM pegawai");
                    $data = $data_pegawai;
                    ?>
<form action="edit.php" method="GET" style="margin-left: 450px;">
            
            <div class="form-group">
                    <label>Nama Pegawai</label><br>
                    <input type="text" required class="form-control" name="namapegawai" style="width: 500px; height:40px" placeholder="Masukkan Perubahan Password"> 
              </div><br>
              <div class="form-group">
                    <label></label>Jenis Kelamin<br>
                    <label class="container">Laki-laki
                    <input type="radio" check="checked" name="jk" value="laki-laki" >
                    <span class="checkmark"></span>
              </label>
              <label class="container">Perempuan
                    <input type="radio" check="checked" name="jk" value="perempuan" >
                    <span class="checkmark"></span>
              </label></div><br>
              <div class="form-group">
                    <label>Tempat Lahir</label><br>
                    <input type="text" required  class="form-control" name="tempat" style="width: 500px; height:40px" placeholder="Masukkan Nomor Telepon Yang Ingin Anda Ubah">
                    </div><br>
              <div class="form-group">
                    <label>Tanggal Lahir</label><br>
                    <input type="text" required class="form-control" name="tanggal" style="width: 500px; height:40px" placeholder="Masukkan Perubahan Password"> 
                    </div><br>
                    <div class="form-group">
                    <label>Telepon</label><br>
                    <input type="text" required class="form-control" name="phone" style="width: 500px; height:40px" placeholder="Masukkan Perubahan Password"> 
                    </div><br>
                    <div class="form-group">
                    <label>Jabatan</label><br>
                    <input type="text" required class="form-control" name="jabatan" style="width: 500px; height:40px" placeholder="Masukkan Perubahan Password"> 
                    </div><br>
                    
                    <input type="text" name = "idpegawai" value="<?php echo $data['id_pegawai']; ?>">
                     <button type="editing" name = "editing" value="editing" style="background-color: red; font-size:13px"><p>SAVE</p></button></form>
            <br><br>
                    
        </body>
        <div class="footer" style="background-color: transparent;">
  <p> &copy; Ayo Lomba</p>
</div>
</html>

<?php  }else{
  echo "<script>window.location.replace('home.php')</script>";

} ?>