<?php

include 'config.php';

if(!isset($_SESSION['id'])){
    header("location:./index.php");
}
$id = $_SESSION['id'];
$query = mysqli_query($connect, "select * from siswa_10 where id_user = '$id'");
$fill = mysqli_fetch_array($query);

$name = $fill['name'];
$nis = $_POST['nis'];
$jk=$_POST['jk'];
$alamat = $_POST['alamat'];
$agama = $_POST['agama'];
$kelas = $_POST['kelas'];
$notelp = $_POST['nohape'];

$add = mysqli_query($connect, "insert into siswa_10 (id, nis, name, alamat, jenis_kelamin, agama, no_hp, kelas) values 
    ('$id', '$name', '$nis', '$alamat', '$jk', '$agama', '$notelp', '$kelas')");

    if(!$add){
        echo "gagal memuat data";
    }
    else{
        header('location:../siswa_utama.php?pesan=berhasil');
    }
?>