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
    <li style="float: left; margin-left: 15px; margin-top: 40px;"><img src="yoklomba.png" width="130px" weight="120px" style="margin-top: -20px"></li>
    
</ul>
</nav>
    
    <li style="float: right; margin-top: -70px" class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#" style="background-color: transparent;">
    <?=$_SESSION['users']?>
    <span class="caret"></span></a>
        <ul class="dropdown-menu">
        <a class="dropdown-item" href="editprofile.php" style="background-color: transparent;">Edit Profile</a></li>
        <a class="dropdown-item" href="formPembayaran.php" style="background-color: transparent;">Pembayaran</a></li>
        <a class="dropdown-item" href="logout.php" style="background-color: transparent;">Logout</a></li>
        </ul>
      </li>
</div>
<b><h2 style="text-align: center">Edit Your Profile Here</h2></b><br>
<form action="update.php" method="POST" style="margin-left: 450px;">
            
            <div class="form-group">
                    <label>Email</label><br>
                    <input type="email" value="<?php echo $_SESSION['email'] ?>" class="form-control" name="email" style="width: 500px; height:40px" readonly placeholder="Masukkan Email Anda Saat Ini">
              </div><br>
              <div class="form-group">
                    <label>Username</label><br>
                    <input type="text"required  class="form-control" name="username" style="width: 500px; height:40px" placeholder="<?=$_SESSION['users']?>">
                    </div><br>
              <div class="form-group">
                    <label>Nomor Telepon</label><br>
                    <input type="text" required  class="form-control" name="phone" style="width: 500px; height:40px" placeholder="Masukkan Nomor Telepon Yang Ingin Anda Ubah">
                    </div><br>
              <div class="form-group">
                    <label>Password</label><br>
                    <input type="password" required class="form-control" name="pswd" style="width: 500px; height:40px" placeholder="Masukkan Perubahan Password"> 
                    </div><br>
              
            <button name = "updated" class="btn btn-primary" style="background-color: rgba(0, 140, 255, 0.925); margin-left: 200px;" type="submit">SAVE</button>
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