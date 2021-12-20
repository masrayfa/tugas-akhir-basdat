<?php
include "../functions/config.php";

if(isset($_POST['submit'])) {
  $nik = $_POST['nik'];
  $nama = $_POST['nama'];
  $no_telepon = $_POST['telepon'];
  $alamat = $_POST['alamat'];
  $email = $_POST['email'];
  $waktu_penerimaan = $_POST['waktu_penerimaan'];
  $waktu_pengembalian = $_POST['waktu_pengembalian'];


  $pemilik_insert_query = "INSERT INTO pemilik(nik, nama, no_telepon, alamat, email) VALUES('$nik', '$nama', '$no_telepon', '$alamat', '$email')";  
  $data_penitipan_insert_query = "INSERT INTO data_penitipan(waktu_penerimaan,waktu_pengembalian, nik_pemilik) VALUES('$waktu_penerimaan','$waktu_pengembalian ','$nik')";
  
  $pemilik_result = pg_query($db, $pemilik_insert_query);  
  $data_penitipan_result = pg_query($db, $data_penitipan_insert_query);

  
  if($pemilik_result && $data_penitipan_result) {
    header("Location: ../functions/read_data_penitipan.php");
  } else {
    header('Location: home.php?');  
  }
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
      <form method="post">        
        <div class="mb-3">
          <label> Nama Pemilik Hewan </label>          
          <input type="text" class="form-control" placeholder="Masukkan Nama Anda" name="nama">
        </div>
        <div class="mb-3">
          <label> Email </label>
          <input type="email" class="form-control" placeholder="Masukkan Email Anda" name="email">
        </div>
        <div class="mb-3">
          <label> NIK </label>
          <input type="text" class="form-control" placeholder="Masukkan NIK Anda" name="nik">
        </div>
        <div class="mb-3">
          <label> No Telepon </label>
          <input type="text" class="form-control" placeholder="Masukkan No Telepon Anda" name="telepon">
        </div>
        <div class="mb-3">
          <label> Alamat </label>
          <input type="text" class="form-control" placeholder="Masukkan Alamat Anda" name="alamat">
        </div>      
        <div class="mb-3">
          <label> Tanggal Penerimaan </label>
          <input type="date" class="form-control" placeholder="yyyy-mm-dd" name="waktu_penerimaan">
        </div>
        <div class="mb-3">
          <label> Tanggal Pengembalian </label>
          <input type="date" class="form-control" placeholder="yyyy-mm-dd" name="waktu_pengembalian">
        </div>
        <button type="submit" name= "submit" class="btn btn-primary">Submit</button>        
      </form>
      <form method="post" action="home.php">
        <button type="submit" name= "submit" class="btn btn-secondary my-3">Back to home</button>
      </form>
    </div>
  </body>
</html>
