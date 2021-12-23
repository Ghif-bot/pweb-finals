<?php 
session_start();

include 'config.php';

$email = $_POST['email'];
$password = $_POST['password'];

$login = mysqli_query($connect, "select * from user where email='$email' and password ='$password'");

$check = mysqli_num_rows($login);
if($check > 0){
    $data = mysqli_fetch_assoc($login);

    if($data['roles']=="0"){
        $_SESSION['email'] = $email;
        $_SESSION['roles'] = 0;
        $_SESSION['name'] = mysqli_query($connect, "select name from user where email='$email'");
        header("location:../admin-utama.php?pesan=berhasil");
    }
    elseif ($data['roles']=="1"){
        $_SESSION['email'] = $email;
        $_SESSION['roles'] = 1;
        $_SESSION['name'] = mysqli_query($connect, "select name from user where email='$email'");
        header("location:../siswa_utama.php?pesan=berhasil");
    }
     elseif ($data['roles']=="2"){
        $_SESSION['email'] = $email;
        $_SESSION['roles'] = 2;
        $_SESSION['name'] = mysqli_query($connect, "select name from user where email='$email'");
        header("location:../guru_utama.php?pesan=berhasil");
    }
     elseif ($data['roles']=="3"){
        $_SESSION['email'] = $email;
        $_SESSION['roles'] = 3;
        $_SESSION['name'] = mysqli_query($connect, "select name from user where email='$email'");
        header("location:../walikelas_utama.php?pesan=berhasil");
    }
}else{
    header("location:../index.php?pesan=gagal");
}
?>