<?php
require ('config.php');
if(isset($_POST['hapus'])){
    $id = $_POST['idpegawai'];

        $sql = "DELETE FROM pegawai WHERE id_pegawai = '$id'";

        if ($conn->query($sql) === TRUE) {
            echo "<script>alert('Berhasil Menghapus Pegawai');window.location.href='pegawai.php'</script>";
        } else {
            echo "<script>alert('Gagal Menghapus Pegawai');window.location.href='pegawai.php'</script>";
    }}
?>