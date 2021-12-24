<?php
session_start();

include 'config.php';

$firstname = $_POST['first_name'];
$lastname = $_POST['last_name'];
$email = $_POST['email'];
$pass = $_POST['password'];
$check_pass = $_POST['repeat-password'];
$role = $_POST['role'];

if($check_pass == $pass){
    $name = $firstname . " " . $lastname;
    $add = mysqli_query($connect, "insert into user (name, email, password, roles) values 
    ('$name', '$email', '$pass', '$role')");

    if(!$add){
        echo "gagal memuat data";
    }
    else{
        if($role == 1){
            $query = mysqli_query($connect, "select * from user where email = '$email'");
            while($fill = $query->fetch_assoc()){
                $_SESSION['id'] = $fill['id_user'];
            }
            // echo $_SESSION['id'];
            header('location:../add_siswa.php');
        }
        elseif($role == 3){
            $query = mysqli_query($connect, "select * from user where email = '$email'");
            while($fill = $query->fetch_assoc()){
                $_SESSION['id'] = $fill['id_user'];
            }
            // echo $_SESSION['id'];
            header('location:../add_orangtua.php');
        }
        else{
            header('location:../index.php?pesan=berhasil');
        }
    }
}else{
    header('location:../register.php?pesan=gagal');
}

?>