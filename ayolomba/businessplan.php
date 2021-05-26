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

<title>Business Plan Competition 2019 Total Hadiah Rp. 15.000.000,-</title>
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


<div class="row" style="margin-left:10px; margin-right: 10px;">
  <div class="column" >
    
    <img src="poster5.jpg" alt="Web" style="width:90%; box-shadow: 10px 10px 10px #39375b;">
  </div>
  <div class="column">
  <b><h2 style="text-align: center">Business Plan Competition 2019 Total Hadiah Rp. 15.000.000,-</h2></b><br>
  <p style="text-align: justify">Lomba Diponegoro Entrepreneur Festival (DEF) 2019 merupakan sebuah lomba bisnis plan tingkat nasional yang diselenggarakan oleh Badan Eksekutif Mahasiswa Fakultas Teknik Universitas Diponegoro dalam rangka meningkatkan iklim kewirausahaan masyarakat terutama di kalangan mahasiswa. Informasi lomba terbaru bisnis plan kali ini bertemakan</p>

<b><p style="text-align: center">"Sailing Technopreneur-Ship Through the Sea of Industrial Revolution 4.0"</p></b>

<p style="text-align: justify"> Harapan diadakannya BPC DEF 2019 ini adalah, melalu atmosfer kompetitifnya, para mahasiswa di seluruh Indonesia dapat mengasah dan mengembangkan pikiran inovatifnya dan mengaplikasikannya ke dalam perlombaan ini, agar dikemudian hari ide bisnis mereka dapat menjadi penunjang perekonomian bangsa.</p>

<b><p>Syarat dan Ketentuan Lomba Bisnis Plan Diponegoro Entrepreneur Festival 2019</p></b>
<p style="text-align: justify">
<ol>
<li>Satu tim lomba business plan 2019 terdiri dari 3 sampai 5 orang dengan status mahasiswa aktif, peserta berasal dari instansi / kampus yang berada pada daerah Indonesia.</li>
<li>Peserta harus berasal dari 1 instansi / kampus yang sama, tidak boleh dari instansi / kampus yang berbeda.</li>
<li>Anggota tim yang sudah terdaftar dan tertera pada form pendaftaran yang dikumpulkan tidak dapat digantikan oleh orang lain dengan alasan apapun.</li>
<li>Anggota tim hanya diperbolehkan mengikuti satu tim saja, tidak diperbolehkan terdaftar lebih dari 1 tim.</li>
<li>DEF Business Plan Competition 2019 mengangkat tema “Sailing Technopreneur-Ship Through the Sea of Industrial Revolution 4.0".</li>
<li>Business plan yang dilombakan adalah karya original yang merupakan gagasan dari anggota tim, bukan bentuk plagiarisme. Juri dan panitia berhak untuk membatalkan kemenangan jika terbukti ada indikasi plagiarisme dalam business plan yang diikutsertakan dalam DEF Business Plan Competition 2019.</li>
<li>Peserta wajib mengumpulkan Lean Canvas yang dibuat menarik, kreatif dan se-inovatif mungkin dalam bentuk softcopy dengan memuat konten-konten yang telah ditentukan</li>
<li>Bisnis yang diperlombakan dapat bersifat sebuah gagasan bisnis baru atau merupakan gagasan dari sebuah bisnis yang telah berjalan dengan maksimal selama 6 bulan (terhitung sampai bulan Mei 2019) dibuktikan dengan foto publikasi pertama produk bisnis tersebut.</li>
<li>Peserta wajib mengikuti segala ketentuan dan peraturan DEF Business Plan Competition 2019 sampai acara diumumkan berakhir.</li>
<li>Bila terdapat pelanggaran pada poin-poin di atas, panitia dan juri berhak mendiskualifikasi sewaktu-waktu secara sepihak dan keputusan panitia tidak dapat diganggu gugat.</li>
<li>Jika ada perjanjian yang berbeda dengan buku ini maka peserta berhak mendapatkan perlakuan sesaui peraturan di buku ini</li>
  </ol>
  </p>

<b><p>Timeline Lomba Bisnis Plan Diponegoro Entrepreneur Festival 2019<p></b>
<p>
- Pendaftaran dan pengiriman kanvas: 10 Mei – 30 Mei 2019<br>
- Pengumuman hasil seleksi kanvas: 1 Juni 2019<br>
- Pengumuman hasil seleksi kanvas: 1 Juni 2019<br>
- Pengumpulan proposal: 2 Juni – 2 Agustus 2019<br>
- Pembayaran terakhir proposal: 3 Agustus 2019<br>
- Pengumuman lolos proposal: 10 September 2019<br>
- Presentasi proposal: 28 September 2019<br>
- Aplikasi ide bisnis: 29 September 2019<br>
- Pengumuman pemenang: 29 September 2019<br>
</p>

<b><p>Hadiah Lomba Bisnis Plan Diponegoro Entrepreneur Festival 2019</p></b>
<p>
- Juara 1: Sertifikat + Trophy + Uang Tunai Rp 7.500.000,00<br>
- Juara 2: Sertifikat + Trophy + Uang Tunai Rp 4.500.000,00<br>
- Juara 3: Sertifikat + Trophy + Uang Tunai Rp 2.000.000,00</p>
  <a href="#" class="w3-btn w3-black" style="border-radius: 5px; float:right;">DAFTAR</a>
  </div>
</div>

<div class="footer" style="background-color: transparent;">
  <p> &copy; Ayo Lomba</p>
</div>




</body>          
</html>

