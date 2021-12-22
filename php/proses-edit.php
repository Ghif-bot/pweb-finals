<?php
 
include("config.php");
 
// cek apakah tombol simpan sudah diklik atau blum?
if(isset($_POST['simpan'])){
 
    // ambil data dari formulir
    $id = $_POST['id'];
    $nis = $_POST['nis'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $jk = $_POST['jenis_kelamin'];
    $agama = $_POST['agama'];
    $nohp = $_POST['no_hp'];
 
    // buat query update
    $sql = "UPDATE siswa SET nis='$nis', nama='$nama', alamat='$alamat', jenis_kelamin='$jk', agama='$agama', no_hp='$nohp' WHERE id=$id";
    $query = mysqli_query($db, $sql);
 
    // apakah query update berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman list-siswa.php
        header('Location: list-siswa.php');
    } else {
        // kalau gagal tampilkan pesan
        die("Gagal menyimpan perubahan...");
    }
 
 
} else {
    die("Akses dilarang...");
}
 
?>