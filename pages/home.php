<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../style/style.css"> 

    <title>Selamat Datang di Form Penitipan Hewan</title>
  </head>
  <body>  
    <div class="container my-5">
    <h1>Selamat Datang di Form Penitipan Hewan</h1>
      <form method="post">
        <button type="submit" name= "submit" class="btn btn-primary my-3"><a href="hewan_page.php" class='text-light'>Input Hewan</button>
      </form>
      <form method="post">
        <button type="submit" name= "submit" class="btn btn-primary my-3"><a href="petugas_page.php" class='text-light'>Petugas</button>
      </form>
      <form method="post">
        <button type="submit" name= "submit" class="btn btn-primary my-3"><a href="passprotect_page.php" class='text-light'>Data Penitipan</button>
      </form>
      <form method="post" action="penitipan_page.php">
        <button type="submit" name= "submit" class="btn btn-primary my-3">Data Penitipan dif</button>
      </form>
    </div>
  </body>
</html>