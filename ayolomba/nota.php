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
        <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
          
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
.tombol{
  width: 100%;
  padding-left:440px;
  bottom: 100px;

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
  width: 80%;
  margin-left:150px;
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
<title>Detail pembayaran</title>
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

<?php 
  require('config.php');
  $user = $_SESSION['users'];
  $id = $_POST['idlomba'];
  $lomba_data = mysqli_query($conn, "SELECT * FROM lomba  WHERE id_lomba = '$id'");

  if (is_array($lomba_data) || is_object($lomba_data)){
  foreach($lomba_data as $data){
      
?>
<div class="card mb-3" style="max-width:900px; ">
  <div class="row no-gutters">
    <div class="col-md-4">
   
    <?php }}?>
      <img src="<?php echo $data['poster_lomba'] ?>" class="card-img" alt="..."style="width:100%;">
      

    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title" style="font-size: 30px;" ><b><?php echo $data['nama_lomba'] ?></b></h5>
        <p class="card-text" style="padding-right:260px;font-size: 20px; ">Penyelenggara lomba : <?php echo $data['penyelenggara'] ?></p>
         <p class="card-text" style="padding-right:380px;font-size: 20px; ">Kategori lomba : <?php echo $data['kategori_lomba'] ?></p>

        <p class="card-text" style="padding-right:390px;font-size: 20px; ">Status lomba : <?php echo $data['status'] ?></p>
        <p class="card-text" style="padding-right:260px;font-size: 20px; ">Periode Pengiklanan lomba : <?php echo $data['periode_iklan'] ?> Minggu</p>
      
        <?php 
  require('config.php');
  $user = $_SESSION['users'];
  
  $lomba = mysqli_query($conn, "SELECT periode_iklan FROM lomba WHERE periode_iklan='1 Minggu'");
  
    foreach($lomba as $isi){
   
      
      ?>
  
    <?php }?>
    <p class="card-text" style="padding-right:260px;font-size: 20px; ">Biaya Pengiklanan lomba : Rp. <?php echo $total = $data['periode_iklan'] * 50000;?></p>
   
   <br>
   <br>
     
     <div class="container">
     <?php
 require_once(dirname(__FILE__) . '/vendor/autoload.php');
 
  Veritrans_Config::$serverKey = "SB-Mid-server-_23fvdzPgpbiDwOIWp87MOKA";

  Veritrans_Config::$isSanitized = true;

  Veritrans_Config::$is3ds = true;

  $transaction_details = array(
    'order_id' => rand(),
    'gross_amount' => 40000, 
  );

  $item1_details = array(
    'id' => 'a1',
    'price' => $data['periode_iklan']*50000,
    'quantity' => 1,
    'name' => $data['nama_lomba']
  );


  $item_details = array ($item1_details);

 
  $customer_details = array(
    'first_name'    => $data['penyelenggara'],
    'last_name'     => "",
    'email'         => $data['email'],
    'phone'=>$data['kontak_penyelenggara']
    
  );

  $enable_payments = array('credit_card','cimb_clicks','mandiri_clickpay','echannel','alfamart');

  $transaction = array(
    'enabled_payments' => $enable_payments,
    'transaction_details' => $transaction_details,
    'customer_details' => $customer_details,
    'item_details' => $item_details,
  );

  $snapToken = Veritrans_Snap::getSnapToken($transaction);

?>

 
                   
</p>

  </div>
  
  <!-- Button to Open the Modal -->
  <div class ="tombol">
  
  <button id="pay-button" type="button"  data-toggle="modal" data-target="#myModal">
    BAYAR
  </button>
  <p>

</p>


  <script src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="SB-Mid-client-AyrAr1dZ3_bLeflS"></script>
    <script type="text/javascript">
      document.getElementById('pay-button').onclick = function(){
        snap.pay('<?=$snapToken?>', {
          onSuccess: function(result){
            document.getElementById('result-json').innerHTML += JSON.stringify(result, null, 2);
          },
          onPending: function(result){
            document.getElementById('result-json').innerHTML += JSON.stringify(result, null, 2);
          },
          onError: function(result){
            document.getElementById('result-json').innerHTML += JSON.stringify(result, null, 2);
          }
        });
      };
    </script>
        <!-- <form action="nota.php" method="POST">
    <input type="hidden" name = "idlomba" value="<?php echo $data['id_lomba']; ?>">
    <div class="tombol" style="max-width=100px;">
    <button input type="nota" name="nota" value="nota">Bayar</button> -->
    </div>
    </form>
      </div>
      
    </div>
  </div>
</div>

 
<!-- </div>
    <center> <img src="BG.png" style ="width:100%; margin-top:-370px;"> </center> -->
<div class="jumbotron1 text-center" style="margin-bottom:0">
    <p>&copy;Ayo Lomba</p>
</div>


</body>          
</html>
<?php }else{
  echo "<script>window.location.replace('home.php')</script>";
} ?>