<?php
// Koneksi ke database
$host = 'localhost';
$user = 'root';
$password = '';
$db = 'sigpasar';

$conn = new mysqli($host, $user, $password, $db);

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Query untuk mengambil data pasar tradisional
$sql = "SELECT COUNT(*) as sma FROM sekolah";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $data = json_encode(array("sma" => $row['sma']));
} else {
    $data = json_encode(array("sma" => 0));
}

// Jangan gunakan echo di sini
$conn->close();
?>
