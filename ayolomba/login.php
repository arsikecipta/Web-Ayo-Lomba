<?php
session_start();
    include 'config.php';
    if(isset($_POST['email'])) {
        $email = $_POST['email'];
        $password = $_POST['pswd'];

        $query = $conn->query("SELECT * FROM users WHERE email = '$email' AND password='$password'");
        $data=mysqli_fetch_array($query);
        $num=mysqli_num_rows($query);
        
        if($data['level']=="admin"){
            
                $_SESSION['users']=$data['username'];
                $_SESSION['email'] = $data['email'];
                
            echo "<script> alert('Berhasil melakukan login sebagai admin');window.location.href='admin.php'</script>";
        
        }else if($data['level']=="user"){
            
                $_SESSION['users']=$data['username'];
                $_SESSION['email'] = $data['email'];
            echo "<script> alert('Berhasil melakukan login sebagai user');window.location.href='homelogin.php'</script>";
        }else{
            echo "<script> alert('Email dan password yang anda inputkan salah!');window.location.href='admin.php'</script>";
        }}
        ?>