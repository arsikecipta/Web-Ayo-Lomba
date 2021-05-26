
<?php
    require ('config.php');
    if(isset($_POST['submit'])){
        $namalomba = $_POST['namalomba'];
        $deskripsis = $_POST['deskripsisingkat'];
        $deskripsil = $_POST['deskripsilengkap'];
        $penyelenggara = $_POST['penyelenggara'];
        $kontak = $_POST['kontak'];
        $email=$_POST['email'];
        $kategorilomba = $_POST['kategorilomba'];
        $url = $_POST['url'];
        $periode = $_POST['periode'];
        $poster = $_POST['poster'];

        $sql = "INSERT INTO lomba (nama_lomba, deskripsi_singkat, deskripsi_lengkap, penyelenggara, kontak_penyelenggara, email, kategori_lomba, url_lomba, periode_iklan, poster_lomba) VALUES ('$namalomba','$deskripsis', '$deskripsil', '$penyelenggara','$kontak', '$email', '$kategorilomba', '$url', '$periode', '$poster')";

        if ($conn->query($sql) === TRUE) {
            echo "<script>alert('Berhasil melakukan pendaftaran iklan lomba. Terima Kasih');window.location.href='history.php'</script>";
        } else {
            echo "<script>alert('Gagal melakukan pendaftaran iklan lomba');window.location.href='formiklan.php'</script>";
    }}
    ?>
  