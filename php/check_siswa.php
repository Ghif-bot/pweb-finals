<?php
session_start();

include 'config.php';

    $id = $_POST['id'];
    $nama = $_POST['name'];
    $nis = $_POST['nis'];
    $jk = $_POST['jk'];
    $alamat = $_POST['alamat'];
    $agama = $_POST['agama'];
    $kelas = $_POST['kelas'];
    $notelp = $_POST['nohape'];

    // echo $id. $nama. $nis. $jk. $alamat. $agama. $kelas. $notelp;

    $add = mysqli_query($connect, "insert into siswa_10 (id, nis, nama, alamat, jenis_kelamin, agama, no_hp, kelas) values 
        ($id, '$nis', '$nama', '$alamat', '$jk', '$agama', '$notelp', $kelas)");

        if(!$add){
            echo "gagal memuat data";
        }
        else{
            header('location:../siswa_utama.php?pesan=berhasil');
        }
    
   


?>