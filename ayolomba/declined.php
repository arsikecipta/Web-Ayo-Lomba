<?php
require ('config.php');
if(isset($_POST['declined'])){
    $id = $_POST['idlomba'];

        $sql = "UPDATE lomba SET status = 'declined' WHERE id_lomba = '$id'";

        if ($conn->query($sql) === TRUE) {
            echo "<script>alert('Iklan telah ter-declined');window.location.href='admin.php'</script>";
        } else {
            echo "<script>alert('Gagal men-declined iklan');window.location.href='admin.php'</script>";
    }}
?>