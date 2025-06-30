<?php 
    $host = "localhost"; 
    $user = "root"; 
    $password = ""; 
    $nama_database = "db_willi_d1a240404"; 
    $db = mysqli_connect($host, $user,$password, $nama_database); 


if (!$db) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
//echo "Koneksi berhasil!";
?>