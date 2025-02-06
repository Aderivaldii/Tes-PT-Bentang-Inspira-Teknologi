<?php
include 'databarang.php';

$sql = "SELECT * FROM barang";
$result = mysqli_query($connect, $sql);

echo "<table><tr><th>ID</th><th>Nama Barang</th><th>Harga</th><th>Stok</th><th>Actions</th></tr>";
while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>
            <td>{$row['id']}</td>
            <td>{$row['nama_barang']}</td>
            <td>{$row['harga']}</td>
            <td>{$row['stok']}</td>
            <td><a href='edit_barang.php?id={$row['id']}'>Edit</a> | <a href='delete_barang.php?id={$row['id']}'>Delete</a></td>
          </tr>";
}
echo "</table>";
?>
<a href="tambah_barang.php">Tambah Barang</a>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>APP Kasir</title>
    <style>
        body {
            display: flex;
            font-family: Arial, sans-serif;
        }
        .sidebar {
            width: 20%;
            background-color: #f4f4f4;
            padding: 20px;
            box-shadow: 2px 0 5px rgba(0,0,0,0.1);
        }
        .sidebar h2 {
            margin-bottom: 20px;
        }
        .sidebar a {
            display: block;
            margin-bottom: 10px;
            color: #333;
            text-decoration: none;
        }
        .content {
            width: 80%;
            padding: 20px;
        }
        .content h1 {
            margin-bottom: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid #ddd;
        }
        th, td {
            padding: 12px;
            text-align: left;
        }
        th {
            background-color: #1cd19e;
        }
        .btn {
            padding: 5px 10px;
            background-color: #e85216;
            color: white;
            border: none;
            cursor: pointer;
        }
        .btn.edit {
            background-color: #ffc107;
        }
        .btn.delete {
            background-color: #f44336;
        }
    </style>
</head>
<body>
    <div class="sidebar">
        <h2>APP Kasir</h2>
        <a href="#">Data Barang</a>
        <a href="#">Data Users</a>
        <a href="#">Transaksi</a>
        <a href="#">Laporan</a>
        <a href="#">Logout</a>
    </div>
    <div class="content">
        <h1>Data Barang</h1>
        <table>
            <thead>
                <tr>
                    <th>Kode Barang</th>
                    <th>Nama Barang</th>
                    <th>Harga</th>
                    <th>Stok</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>001</td>
                    <td>Produk A</td>
                    <td>10,000</td>
                    <td>50</td>
                    <td>
                        <button class="btn edit">Edit</button>
                        <button class="btn delete">Delete</button>
                    </td>
                </tr>
                <tr>
                    <td>002</td>
                    <td>Produk B</td>
                    <td>15,000</td>
                    <td>30</td>
                    <td>
                        <button class="btn edit">Edit</button>
                        <button class="btn delete">Delete</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</body>
</html>