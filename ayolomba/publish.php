<?php
require ('config.php');
if(isset($_POST['publish'])){
    $id = $_POST['idlomba'];

        $sql = "UPDATE lomba SET status = 'publish' WHERE id_lomba = '$id'";

        if ($conn->query($sql) === TRUE) {
            echo "<script>alert('Iklan telah berhasil dipublish');window.location.href='admin.php'</script>";
        } else {
            echo "<script>alert('Iklan gagal untuk dipublish');window.location.href='admin.php'</script>";
    }}
?>