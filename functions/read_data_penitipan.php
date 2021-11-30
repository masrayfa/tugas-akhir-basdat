<?php include("config.php"); ?>

<!DOCTYPE html>
<html>
<head>
    <title> Data Penitipan Hewan </title>
</head>

<body>
    <h3>Daftar Penitipan Hewan</h3>


    <nav>
        <a href="create_page.php">[+] Daftar </a>
    </nav>

    <br>
    <table border = "1">
    <thead>
        <tr>
            <th>No</th>
            <th>Tanggal Penerimaan</th>
            <th>Tanggal Pengembalian</th>
            <th>Biaya Penitipan</th>
            <th>ID Hewan</th>
            <th>NIK Pemilik</th>
            <th>ID Petugas</th>
            <th>Tindakan</th>
        </tr>
    </thead>
    <tbody>

        <?php
        $query = pg_query("SELECT * FROM data_penitipan");

        echo "PROSES!"
        ?>
    </tbody>
    </table>
</body>
</html>

