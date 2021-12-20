<?php
include("config.php");
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = pg_query("DELETE FROM hewan WHERE id_hewan = $id");

    if ($query == TRUE) {

        header('Location: read_data_penitipan_admin.php');
    } else {
        
        header('Location: read_data_penitipan_admin.php');
    }

}else{
    header('Location: ../pages/home.php');
}
?>
