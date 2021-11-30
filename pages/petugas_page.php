<?php
include "config.php";

if(isset($_POST['submit'])) {  
  $nama = $_POST['nama'];
  $no_telepon = $_POST['telepon'];
  $alamat = $_POST['alamat'];
  $email = $_POST['email'];

  $insert_query = "INSERT INTO petugas(nama, no_telepon, alamat, email) VALUES('$nama', '$no_telepon', '$alamat', '$email')";

  $result = pg_query($db, $insert_query);
  
  if($result) {
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
          <label> Nama Petugas </label>          
          <input type="text" class="form-control" placeholder="Masukkan Nama Anda" name="nama">
        </div>
        <div class="mb-3">
          <label> Email </label>
          <input type="email" class="form-control" placeholder="Masukkan Email Anda" name="email">
        </div>        
        <div class="mb-3">
          <label> No Telepon </label>
          <input type="text" class="form-control" placeholder="Masukkan No Telepon Anda" name="telepon">
        </div>
        <div class="mb-3">
          <label> Alamat </label>
          <input type="text" class="form-control" placeholder="Masukkan Alamat Anda" name="alamat">
        </div>        
        <button type="submit" name= "submit" class="btn btn-primary">Submit</button>        
      </form>
    </div>

    

    
    
  </body>
</html>