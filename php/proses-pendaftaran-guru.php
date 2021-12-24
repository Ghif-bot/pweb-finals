<?php
 
include("config.php");
 
if(isset($_POST['daftar-guru'])){
        $id = $_POST['id'];
        $nip = $_POST['nip'];
        $nama = $_POST['nama'];
        $alamat = $_POST['alamat'];
        $jk = $_POST['jenis_kelamin'];
        $agama = $_POST['agama'];
        $mapel = $_POST['mapel']; 
        $nohp = $_POST['no_hp'];

        $sql = "INSERT INTO guru (nip, nama, alamat, jenis_kelamin, agama, mapel, no_hp) VALUE ('$nip','$nama', '$alamat', '$jk', '$agama', '$mapel','$nohp')";
        $query = mysqli_query($connect, $sql);
    
        // apakah query simpan berhasil?
        if( $query ) {
            // kalau berhasil alihkan ke halaman index.php dengan status=sukses
            header("location: ../admin-guru.php");
        } else {
            // kalau gagal alihkan ke halaman indek.php dengan status=gagal
            die("Gagal menyimpan perubahan...");
        }

   
 
    // ambil data dari formulir
  

 
    // buat query
 
} else {
    die("Akses dilarang...");
}
?>