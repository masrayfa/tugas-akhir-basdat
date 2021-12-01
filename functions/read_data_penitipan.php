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

        while($data_penitipan = pg_fetch_array($data_result)){
            echo "<tr>";

			echo "<td>".$data_penitipan['id']."</td>";
			echo "<td>".$data_penitipan['tanggal_penerimaan']."</td>";
			echo "<td>".$data_penitipan['tanggal_pengembalian']."</td>";
			echo "<td>".$data_penitipan['biaya_penitipan']."</td>";
			echo "<td>".$data_penitipan['id_hewan']."</td>";
            echo "<td>".$data_penitipan['nik_pemilik']."</td>";
			echo "<td>".$data_penitipan['id_petugas']."</td>";
			           
            echo "</tr>";
        }
        ?>
    </tbody>
    </table>
</body>
</html>
