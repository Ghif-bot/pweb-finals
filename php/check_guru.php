<?php
session_start();

include 'config.php';

    $id = $_POST['id'];
    $nama = $_POST['name'];
    $nip = $_POST['nip'];
    $jk = $_POST['jk'];
    $alamat = $_POST['alamat'];
    $agama = $_POST['agama'];
    $kelas = $_POST['mapel'];
    $notelp = $_POST['nohape'];

    // echo $id. $nama. $nip. $jk. $alamat. $agama. $kelas. $notelp;

    $add = mysqli_query($connect, "insert into guru(id, nip, nama, alamat, jenis_kelamin, agama, no_hape, mapel) values 
        ($id, '$nip', '$nama', '$alamat', '$jk', '$agama', '$notelp', '$kelas')");

        if(!$add){
            echo "gagal memuat data";
        }
        else{
            header('location:../admin-guru.php');
        }
    
   


?>