<?php
include "../functions/config.php";

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = pg_query($db, "SELECT waktu_penerimaan,waktu_pengembalian,nik_pemilik,biaya_penitipan,id_petugas FROM data_penitipan WHERE nik_pemilik = '$id'");
    $data_admin = pg_fetch_array($query, NULL, PGSQL_ASSOC);
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
      <form action="../functions/edit_admin.php?id=<?=$data_admin['nik_pemilik']?>" method="POST">
        <fieldset> 
          <div class="mb-3">
            <label> Tanggal Penerimaan </label>
            <input type="date" class="form-control" placeholder="yyyy-mm-dd" name="waktu_penerimaan" value="<?= $data_admin['waktu_penerimaan']?>">
          </div>
          <div class="mb-3">
            <label> Tanggal Pengembalian </label>
            <input type="date" class="form-control" placeholder="yyyy-mm-dd" name="waktu_pengembalian" value="<?= $data_admin['waktu_pengembalian']?>">
          </div>
          <div class="mb-3">
            <label> Biaya Penitipan </label>
            <input type="text" class="form-control" placeholder="Masukkan Biaya Penitipan" name="biaya_penitipan" value="<?= $data_admin['biaya_penitipan']?>">
          </div>
          <div class="mb-3">
            <label> id Petugas </label>
            <input type="text" class="form-control" placeholder="Masukkan Id Petugas" name="id_petugas" value="<?= $data_admin['id_petugas']?>">
          </div>
          <button type="edit" name= "edit" class="btn btn-primary">Edit</button>    
        </fieldset>       
      </form>
      <form method="post" action="../functions/read_data_penitipan.php">
        <button type="submit" name= "submit" class="btn btn-secondary my-3">Back to List</button>
      </form>
    </div>

    

    
    
  </body>
</html>