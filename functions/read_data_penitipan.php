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
            <th id= 'no'>No</th>
            <th id = 'tanggal_penerimaan'>Tanggal Penerimaan</th>
            <th id = 'tanggal_pengembalian'>Tanggal Pengembalian</th>
            <th id = 'biaya'>Biaya Penitipan</th>
            <th id = 'id_hewan'>ID Hewan</th>
            <th id = 'nik'>NIK Pemilik</th>
            <th id = 'id_petugas'>ID Petugas</th>
            <th id = 'tindakan'>Tindakan</th>
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

