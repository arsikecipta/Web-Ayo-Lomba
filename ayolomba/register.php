<?php
    require ('config.php');
    if(isset($_POST['register'])){
        $email = $_POST['email'];
        $username = $_POST['username'];
        $phone = $_POST['phone'];
        $password = $_POST['pswd'];
        $konfirmasi = $_POST['cpswd'];

        $cekregist = mysqli_query($conn,"SELECT * FROM users WHERE email = '$email'");
        $cek = mysqli_num_rows($cekregist);
        if(!$cek){
            if($password == $konfirmasi) {
                $tambah = mysqli_query($conn, "INSERT INTO users (email, username, mobile_number, password) VALUES ('$email','$username', $phone,'$password')");
                echo "<script>alert('Berhasil melakukan registrasi, lakukan login');window.location.href='Home.php'</script>";

            }else{
                echo "<script>alert('Password yang anda masukkan salah');window.location.href='Home.php'</script>";

            }
        }else{
            echo "<script>alert('Email telah dipakai, gunakan email lain');window.location.href='Home.php'</script>";

        }
    }
?>