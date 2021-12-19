<?php include("config.php"); ?>

<!DOCTYPE html>
<html lang= "en">
<head>
    <title> Data Penitipan Hewan </title>
    <link rel="stylesheet" href="../style/style.css"> 
</head>

<body>
    <h3 class="header3">DATA PENITIPAN HEWAN</h3>
    <nav>
        <a href="../pages/hewan_page.php">[+] Daftar </a>
    </nav>

    <br>
    <table class="styled-table">
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
        $query = pg_query("SELECT waktu_penerimaan,waktu_pengembalian,biaya_penitipan,pemilik.id_hewan,nik_pemilik,id_petugas 
                            FROM pemilik,data_penitipan WHERE pemilik.nik=data_penitipan.nik_pemilik");

        $no = 1;
            while ($data = pg_fetch_array($query)) { ?>
                <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $data['waktu_penerimaan'] ?></td>
                    <td><?= $data['waktu_pengembalian'] ?></td>
                    <td><?= $data['biaya_penitipan'] ?></td>
                    <td><?= $data['id_hewan'] ?></td>
                    <td><?= $data['nik_pemilik'] ?></td>
                    <td><?= $data['id_petugas'] ?></td>
                    <td>
                    <a href="hapusdata.php?id=<?=$data['id_hewan']?>">delete</a>
                    <a href="../pages/hewan_page_edit.php?id=<?=$data['id_hewan']?>">edit</a>
                    </td>
                </tr>
        <?php } ?>
    </tbody>
    </table>
</body>
</html>

