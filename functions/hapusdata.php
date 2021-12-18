<?php
include("config.php");
if( isset($_GET['id']) ){

    $id = $_GET['id'];

    $query = pg_query("DELETE FROM pemilik WHERE id_hewan=$id");
    $query2 = pg_query("DELETE FROM hewan WHERE id_hewan=$id");

    if( $query && $query2){
        header('Location: read_data_penitipan.php');
    } else {
        die("gagal menghapus...");
    }
}
?>