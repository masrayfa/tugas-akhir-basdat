<?php
include "../functions/config.php";

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = pg_query($db, "SELECT * FROM pemilik,data_penitipan WHERE nik = '$id'");
    $data_pemilik = pg_fetch_array($query, NULL, PGSQL_ASSOC);
} else {
    header('Location: home.php');
}
  
?>



<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Form Penitipan Hewan</title>
  </head>
  <body>
    <div class="container my-5">      
    <form action="../functions/edit_pemilik.php?id=<?=$data_pemilik['nik']?>" method="POST" >       
        <div class="mb-3">
          <label> Nama Pemilik Hewan </label>          
          <input type="text" class="form-control" placeholder="Masukkan Nama Anda" name="nama" value="<?= $data_pemilik['nama']?>">
        </div>
        <div class="mb-3">
          <label> Email </label>
          <input type="email" class="form-control" placeholder="Masukkan Email Anda" name="email" value="<?= $data_pemilik['email']?>">
        </div>
        <div class="mb-3">
          <label> NIK </label>
          <input type="text" class="form-control" placeholder="Masukkan NIK Anda" name="nik" value="<?= $data_pemilik['nik']?>">
        </div>
        <div class="mb-3">
          <label> No Telepon </label>
          <input type="text" class="form-control" placeholder="Masukkan No Telepon Anda" name="telepon" value="<?= $data_pemilik['no_telepon']?>">
        </div>
        <div class="mb-3">
          <label> Alamat </label>
          <input type="text" class="form-control" placeholder="Masukkan Alamat Anda" name="alamat" value="<?= $data_pemilik['alamat']?>">
        </div>      
        <div class="mb-3">
          <label> Waktu Penerimaan </label>
          <input type="date" class="form-control" placeholder="yyyy-mm-dd" name="waktu_penerimaan" value="<?= $data_pemilik['waktu_penerimaan']?>">
        </div>
        <button type="edit" name= "edit" class="btn btn-primary">Edit</button>        
      </form>
      <form method="post" action="../functions/read_data_penitipan.php">
        <button type="submit" name= "submit" class="btn btn-secondary my-3">Back to List</button>
      </form>
    </div>
  </body>
</html>