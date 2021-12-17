<?php
include("config.php");
if( isset($_GET['id']) ){

    $id = $_GET['id'];

    $query = pg_query("DELETE FROM data_penitipan WHERE nik_pemilik::int=$id");
    $query2 = pg_query("DELETE FROM pemilik WHERE nik::int=$id");

    if( $query && $query2){
        header('Location: read_data_penitipan.php');
    } else {
        die("gagal menghapus...");
    }
}
?>