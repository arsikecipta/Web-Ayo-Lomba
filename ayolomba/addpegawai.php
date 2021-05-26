<?php
    require ('config.php');
    if(isset($_POST['tambah'])){
        $nama = $_POST['namapegawai'];
        $jk = $_POST['jk'];
        $tempat = $_POST['tempat'];
        $tanggal = $_POST['tanggal'];
        $phone = $_POST['phone'];
        $jabatan = $_POST['jabatan'];

        $sql = "INSERT INTO pegawai (nama_pegawai, jk, tempat_lahir, tanggal_lahir, telepon, jabatan) VALUES ('$nama','$jk', '$tempat','$tanggal', '$phone', '$jabatan')";

        if ($conn->query($sql) === TRUE) {
            echo "<script>alert('Berhasil menambahkan data pegawai');window.location.href='pegawai.php'</script>";
        } else {
            echo "<script>alert('Gagal menambahkan data pegawai');window.location.href='pegawai.php'</script>";
    }}
    ?>