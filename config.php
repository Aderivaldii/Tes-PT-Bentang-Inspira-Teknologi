<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "kasir_db";

$connect = new mysqli($servername, $username, $password, $dbname);

if ($connect->connect_error) {
    die("Koneksi gagal: " . $connect->connect_error);
}
?>


