<?php
session_start();
require ('config.php');
if(isset($_POST['updated'])){
    $email = $_POST['email'];
        $username = $_POST['username'];
        $phone = $_POST['phone'];
        $pass = $_POST['pswd'];

        $sql = "UPDATE users SET email = '$email', username = '$username', mobile_number = '$phone', password = '$pass' WHERE email = '$email'";

        if ($conn->query($sql) === TRUE) {
            echo "<script>alert('Berhasil Melakukan Update Profile');window.location.href='editprofile.php'</script>";
            $_SESSION['users'] = $username;
        } else {
            echo "<script>alert('Gagal Melakukan Update Profile');window.location.href='editprofile.php'</script>";
    }}
?>