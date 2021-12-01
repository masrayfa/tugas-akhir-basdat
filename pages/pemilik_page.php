<?php
include "config.php";

if(isset($_POST['submit'])) {
  $nik = $_POST['nik'];
  $nama = $_POST['nama'];
  $no_telepon = $_POST['telepon'];
  $alamat = $_POST['alamat'];
  $email = $_POST['email'];
  $jenis_hewan = $_POST['jenis_hewan'];
  $penyakit = $_POST['penyakit'];
  $umur = $_POST['umur'];


  $pemilik_insert_query = "INSERT INTO pemilik(nik, nama, no_telepon, alamat, email) VALUES('$nik', '$nama', '$no_telepon', '$alamat', '$email')";
  $hewan_insert_query = "INSERT INTO hewan(jenis_hewan, umur, penyakit) VALUES('$jenis_hewan', '$umur', '$penyakit')";
  
  $pemilik_result = pg_query($db, $pemilik_insert_query);
  $hewan_result = pg_query($db, $hewan_insert_query);
  
  if($pemilik_result && $hewan_insert_query) {
    echo "Insert query berhasil";    
  } else {
    echo "Insert query gagal";
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
          <label> Jenis Hewan </label>
          <input type="text" class="form-control" placeholder="Masukkan Alamat Anda" name="jenis_hewan">
        </div>
        <div class="mb-3">
          <label> Umur Hewan </label>
          <input type="text" class="form-control" placeholder="Masukkan Alamat Anda" name="umur">
        </div>
        <div class="mb-3">
          <label> Riwayat Penyakit </label>
          <input type="text" class="form-control" placeholder="Masukkan Alamat Anda" name="penyakit">
        </div>
        <button type="submit" name= "submit" class="btn btn-primary">Submit</button>        
      </form>
    </div>

    

    
    
  </body>
</html>