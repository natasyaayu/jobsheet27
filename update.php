<?php
if ($_SERVER['REQUEST_METHOT'] == 'POST') {
    //mendapatkan nilai variable
    $komentar = $_POST['komentar']
    $post = $_POST['post']
    $kategori = $_POST['kategori']
            //import file koneksi database
            require_once('koneksi.php');
            //membuat SQL query
            $sql = "UPDATE siswa SET komentar = '$komentar', post = '$post', kategori '$kategori')
            VALUES ('$komentar', '$post', '$kategori')";
            //meng-update database
            if (mysqli_query($con, $sql)) {
                echo 'berhasil update database siswa';
            } else {
                echo 'gagal update database siswa';
            }
            mysqli_close($con);
}