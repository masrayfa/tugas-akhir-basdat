<?php
include "../functions/config.php";

if(isset($_POST['edit'])) {
  if(isset($_GET['id'])) {
    $id = $_GET['id'];
    $jenis_hewan = $_POST['jenis_hewan'];
    $penyakit = $_POST['penyakit'];
    $umur = $_POST['umur'];
    
    $hewan_edit_query = "UPDATE hewan SET jenis_hewan = '$jenis_hewan', umur = '$umur', penyakit = '$penyakit' WHERE id_hewan = $id";
    
    $hewan_edit = pg_query($db, $hewan_edit_query);
    
    
    if($hewan_edit) {
      header("Location: read_data_penitipan.php?");
    } else {
      header("Location: ../pages/home.php?");  
    }
  }
}
else {
  header("Location: ../pages/home.php?");
}
  
?>