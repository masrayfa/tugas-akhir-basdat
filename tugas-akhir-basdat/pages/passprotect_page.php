<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../style/style.css"> 
    <title>Password</title>
</head>
<body>
    <form action="../functions/password.php" method="POST">
        <label class="my-3" for="password"><h2>Password </h2></label>
        <input type="password" name="password" style="height: 3em; padding: 1em" autofocous required>
        <input class="btn btn-primary" type="submit" value="Login">
</body>
</html>
