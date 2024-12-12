<?php
$host = "localhost"; // Hanya 'localhost' tanpa titik dua
$user = "root";
$pass = "";
$db = "sigpasar";

$koneksi = mysqli_connect($host, $user, $pass, $db);

if (mysqli_connect_errno()) {
    echo "Koneksi database mysqli gagal!!! : " . mysqli_connect_error();
    exit();
}
?>
