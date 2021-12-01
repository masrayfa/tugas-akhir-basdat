<?php include("config.php");?>

<!DOCTYPE html>
<html>
<head>
    <title> Halaman Admin</title>
</head>

<body>
    <h3>Daftar Penitipan Hewan</h3>

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
        $data_result = pg_query("SELECT * FROM data_penitipan");

        $no = 1;
        while($data_penitipan = pg_fetch_array($data_result)){ ?>
            <tr>
                <td><?= $no++ ?></td>;
                <td><?= $data_penitipan['tanggal_penerimaan']?></td>;
                <td><?= $data_penitipan['tanggal_pengembalian']?></td>;
                <td><?= $data_penitipan['biaya_penitipan']?></td>;
                <td><?= $data_penitipan['id_hewan']?></td>;
                <td><?= $data_penitipan['nik_pemilik']?></td>;
                <td><?= $data_penitipan['id_petugas']?></td>;   
            </tr>;
        }
        <?php } ?>
    </tbody>
    </table>
</body>
</html>
