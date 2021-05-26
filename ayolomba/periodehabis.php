<?php
require ('config.php');
if(isset($_POST['hapus'])){
    $id = $_POST['idlomba'];

        $sql = "DELETE FROM lomba WHERE id_lomba = '$id'";

        if ($conn->query($sql) === TRUE) {
            echo "<script>alert('Berhasil Menghapus Iklan Lomba');window.location.href='admin.php'</script>";
        } else {
            echo "<script>alert('Gagal Menghapus Iklan Lomba');window.location.href='admin.php'</script>";
    }}
?>