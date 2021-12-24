<?php
include("config.php");
 
 // ambil data dari formulir
  $id = $_POST['id'];
 $nama = $_POST['nama'];
 $alamat = $_POST['alamat'];
 $jk = $_POST['jenis_kelamin'];
 $agama = $_POST['agama'];
 $mapel = $_POST['mapel']; 
 $nohp = $_POST['no_hape'];

 ;
 // buat query update
 $sql = "UPDATE guru SET nama='$nama', alamat='$alamat', jenis_kelamin='$jk', agama='$agama', mapel='$mapel', no_hape='$nohp' WHERE id=$id";
 $query = mysqli_query($connect, $sql);

 
 // apakah query update berhasil?
 if( $query ) {
     // kalau berhasil alihkan ke halaman list-siswa.php
     header("location: ../admin-guru.php");
 } else {
     // kalau gagal tampilkan pesan
     die("Gagal menyimpan perubahan...");
 }

?>