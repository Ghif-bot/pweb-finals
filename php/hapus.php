<?php
 
include("config.php");
 
if( isset($_GET['id']) ){
 
    // ambil id dari query string
    $id = $_GET['id'];
 
    // buat query hapus
    $sql = "DELETE FROM siswa_10 WHERE id=$id";
    $query = mysqli_query($connect, $sql);
 
    // apakah query hapus berhasil?
    if( $query ){
        header('Location: ../admin-utama.php');
    } else {
        die("gagal menghapus...");
    }
 
} else {
    die("akses dilarang...");
}
 
?>