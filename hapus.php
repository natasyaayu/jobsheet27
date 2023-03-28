<?php
$komentar = inset($_GET['komentar']) ? $_GET['komentar'] : null;
//import file koneksi database
require_once('koneksi.php');
//membuat SQL Query
$sql = "DELETE FROM siswa WHERE komentar='$komentar';";
//menghapus nilai pada database
if(mysqli_query($con,$sql)){
    echo 'Berhasil menghapus data siswa';
}else{
    echo 'Gagal menghapus data siswa';
}
mysqli_close($con);