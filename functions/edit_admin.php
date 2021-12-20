<?php
include "../functions/config.php";

if(isset($_POST['edit'])) {
  if(isset($_GET['id'])) {
    $id = $_GET['id'];
    $waktu_penerimaan = $_POST['waktu_penerimaan'];
    $waktu_pengemmbalian = $_POST['waktu_pengembalian'];
    $biaya_penitipan = $_POST['biaya_penitipan'];
    $id_petugas = $_POST['id_petugas'];  

    
    $admin_edit_query = "UPDATE data_penitipan SET waktu_penerimaan = '$waktu_penerimaan', waktu_pengembalian = '$waktu_pengemmbalian', biaya_penitipan = '$biaya_penitipan', id_petugas='$id_petugas' WHERE nik_pemilik = '$id'";
    
    $admin_edit = pg_query($db, $admin_edit_query);
    
    
    if($admin_edit) {
      header("Location: read_data_penitipan_admin.php?");
    } else {
      header("Location: ../pages/home.php?");  
    }
  }
}
else {
  header("Location: ../pages/home.php?");
}
  
?>