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
    $biaya = $_POST['biaya'];
    $id_petugas = $_POST['id_petugas'];  
    $waktu_pengembalian = $_POST['waktu_pengembalian'];

    $data_penitipan_edit_query = "UPDATE data_penitipan SET waktu_pengembalian = '$waktu_pengembalian', biaya_penitipan = '$biaya', id_petugas='$id_petugas' WHERE nik_pemilik = '$id'";

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