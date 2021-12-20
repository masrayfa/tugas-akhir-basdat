<?php
include "../functions/config.php";

if(isset($_POST['submit'])) {
  $jenis_hewan = $_POST['jenis_hewan'];
  $penyakit = $_POST['penyakit'];
  $umur = $_POST['umur'];
  
  $hewan_insert_query = "INSERT INTO hewan(jenis_hewan, umur, penyakit) VALUES('$jenis_hewan', '$umur', '$penyakit')";
  
  $hewan_result = pg_query($db, $hewan_insert_query);
  
  
  if($hewan_result) {
    header("Location: pemilik_page.php");
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
          <label> Jenis Hewan </label>
          <input type="text" class="form-control" placeholder="Masukkan Jenis Hewan Anda" name="jenis_hewan">
        </div>
        <div class="mb-3">
          <label> Umur Hewan </label>
          <input type="text" class="form-control" placeholder="Masukkan Umur Hewan Anda" name="umur">
        </div>
        <div class="mb-3">
          <label> Riwayat Penyakit </label>
          <input type="text" class="form-control" placeholder="Masukkan Riwayat Penyakit Hewan Anda (Jika Ada)" name="penyakit">
        </div>
        <button type="submit" name= "submit" class="btn btn-primary">Submit</button>        
      </form>
      <form method="post" action="home.php">
        <button type="submit" name= "submit" class="btn btn-secondary my-3">Back to Home</button>
      </form>
    </div>

    

    
    
  </body>
</html>