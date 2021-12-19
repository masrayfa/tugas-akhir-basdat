<?php
include "../functions/config.php";

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = pg_query($db, "SELECT * FROM hewan WHERE id_hewan = $id");
    $data_hewan = pg_fetch_array($query, NULL, PGSQL_ASSOC);
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
      <form action="../functions/edit_hewan.php?id=<?=$data_hewan['id_hewan']?>" method="POST">
        <fieldset> 
          <div class="mb-3">
            <label> Jenis Hewan </label>
            <input type="text" class="form-control" placeholder="Masukkan Alamat Anda" name="jenis_hewan" value="<?= $data_hewan['jenis_hewan']?>">
          </div>
          <div class="mb-3">
            <label> Umur Hewan </label>
            <input type="text" class="form-control" placeholder="Masukkan Alamat Anda" name="umur" value="<?= $data_hewan['umur']?>">
          </div>
          <div class="mb-3">
            <label> Riwayat Penyakit </label>
            <input type="text" class="form-control" placeholder="Masukkan Alamat Anda" name="penyakit" value="<?= $data_hewan['penyakit']?>">
          </div>
          <button type="edit" name= "edit" class="btn btn-primary">edit</button>    
        </fieldset>       
      </form>
      <form method="post" action="home.php">
        <button type="submit" name= "submit" class="btn btn-secondary my-3">Back to home</button>
      </form>
    </div>

    

    
    
  </body>
</html>
