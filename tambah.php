<?php
if ($_SERVER['REQUEST_METHOT'] == 'POST') {
    //mendapatkan nilai variable
    $komentar = $_POST['komentar']
    $post = $_POST['post']
    $kategori = $_POST['kategori']
    //pembuatan syntax SQL
    $sql = "INSERT INTO siswa (komentar, post, kategori)
            VALUES ('$komentar', '$post', '$kategori')";
            //import file koneksi database
            require_once('koneksi.php');
            //eksekusi Query database
            if (mysqli_query($con, $sql)) {
                echo 'berhasil menambahkan siswa';
            } else {
                echo 'gagal menambahkan siswa';
            }
            mysqli_close($con);
}