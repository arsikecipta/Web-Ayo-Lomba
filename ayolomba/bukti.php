
<?php
    require ('config.php');
    if(isset($_POST['submit'])){
      
        $email=$_POST['email'];
        $bukti = $_POST['foto'];
       

        $sql = "INSERT INTO pembayaran (email, bukti_pembayaran) VALUES ('$email', '$bukti')";

        if ($conn->query($sql) === TRUE) {
            echo "<script>alert('Berhasil mengupload bukti pembayaran. Terima Kasih');window.location.href='homelogin.php'</script>";
        } else {
            echo "<script>alert('Gagal melakukan upload bukti pembayaran');window.location.href='homelogin.php'</script>";
    }}
    ?>
  