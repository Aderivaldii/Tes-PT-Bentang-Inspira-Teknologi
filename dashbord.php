<?php
session_start();
if (!isset($_SESSION['username'])) {
    header('Location: dashboard.php');
}

echo $_SESSION['username'];
?> <a href="logout.php">Logout</a>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Aplikasi Kasir</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            display: flex;
        }
        .sidebar {
            background-color: #e85216;
            color: white;
            width: 200px;
            height: 100vh;
            padding: 20px;
            box-sizing: border-box;
        }
        .content {
            background-color: #1cd19e;
            flex-grow: 1;
            padding: 20px;
            box-sizing: border-box;
        }
        .sidebar a {
            color: white;
            text-decoration: none;
            display: block;
            margin-bottom: 10px;
        }
        .sidebar a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="sidebar">
        <h2>APP Kasir </h2>
        <a href="databarang.php">Data Barang</a>
        <a href="#">Data Users</a>
        <a href="#">Transaksi</a>
        <a href="#">Laporan</a>
    </div>
    <div class="content">
        <h>Selamat Datang</h>
    </div>
</body>
</html>
