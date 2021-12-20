<?php
include "../functions/config.php";

if(isset($_POST['edit'])) {
  if(isset($_GET['id'])) {
    $id = $_GET['id'];
    $nik = $_POST['nik'];
    $nama = $_POST['nama'];
    $no_telepon = $_POST['telepon'];
    $alamat = $_POST['alamat'];
    $email = $_POST['email'];
    $waktu_penerimaan = $_POST['waktu_penerimaan'];

    $data_penitipan_edit_query = "UPDATE data_penitipan SET waktu_penerimaan = '$waktu_penerimaan' WHERE nik_pemilik = '$id'";

    $data_penitipan_edit = pg_query($db, $data_penitipan_edit_query);
    
    $pemilik_edit_query = "UPDATE pemilik SET nik = '$nik', nama = '$nama', no_telepon = '$no_telepon', alamat='$alamat', email='$email' WHERE nik = '$id'";
    
    $pemilik_edit = pg_query($db, $pemilik_edit_query);
    
    
    if($pemilik_edit && $data_penitipan_edit) {
      header("Location: read_data_penitipan.php?");
    } else {
      header("Location: ../pages/home.php?");  
    }
  }
}
else {
  header("Location: ../pages/home?");
}
  
?>
