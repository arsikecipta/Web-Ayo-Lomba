<?php
require ('config.php');
if(isset($_POST['accept'])){
    $id = $_POST['idlomba'];

        $sql = "UPDATE lomba SET status = 'accept' WHERE id_lomba = '$id'";

        if ($conn->query($sql) === TRUE) {
            echo "<script>alert('Iklan telah di-accept');window.location.href='admin.php'</script>";
        } else {
            echo "<script>alert('Iklan gagal di-accept');window.location.href='admin.php'</script>";
    }}
?>