<?php
session_start();

include 'config.php';

    $id = $_POST['id'];
    $nama = $_POST['name'];
    $id_siswa = $_POST['id_siswa'];

    // echo $id. $nama. $id_siswa;

    $add = mysqli_query($connect, "insert into ortu (id, nama_ortu, id_siswa) values 
        ($id, '$nama',  $id_siswa)");

        if(!$add){
            echo "gagal memuat data";
        }
        else{
            header('location:../walikelas_utama.php?pesan=berhasil');
        }
    
   


?>