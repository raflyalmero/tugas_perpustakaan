<?php

require_once ('koneksi.php');
$hasil = mysqli_query($koneksi, "SELECT * FROM anggota");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>data mahasiswa</title>
    
    <style>
        body{
            font-family: arial;
        }
        table {
            border-collapse: collapse;
        }
        
        th {
            padding: 10px;
            background-color: blue;
            color: #cccccc;
        }
        td{
            padding: 5px;
        }
    </style>
</head>

<body>
    <h1>Data Mahasiswa</h1>

    <table border="1">
        <thead>
            <tr>
                <th>id</th>
                <th>no_angggota</th>
                <th>nama_lengkap</th>
                <th>email</th>
                <th>no_hp</th>
                <th>jenis_anggota</th>
                <th>alamat</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no = 1;
            ?>
            <?php
            while ($row = mysqli_fetch_assoc($hasil)) {
                ?>
                <tr>
                    <td><?= $no++; ?></td>
                    <td><?= htmlspecialchars($row['no_anggota']); ?></td>
                    <td><?= htmlspecialchars($row['nama_lengkap']); ?></td>
                    <td><?= htmlspecialchars($row['email']); ?></td>
                    <td><?= htmlspecialchars($row['no_hp']); ?></td>
                    <td><?= htmlspecialchars($row['jenis_anggota']); ?></td>
                    <td><?= htmlspecialchars($row['alamat']); ?></td>
                </tr>
            <?php }
            ; ?>
        </tbody>
    </table>
</body>

</html>