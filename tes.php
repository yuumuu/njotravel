<?php include "koneksi.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link 
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" 
      rel="stylesheet" 
      integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" 
      crossorigin="anonymous"
  />
  <title>Document</title>
</head>
<body class="container py-5 d-flex justify-content-center align-items-center">
  <div class="card w-25">
      <div class="card-header text-center">
        Login
      </div>
      <form action="" method="POST" class="card-body">
        <label class="card-title">Username : </label>
        <p class="card-text">
          <input type="text" class="form-control" name="username" id="username">
        </p>
        <label class="card-title">Password : </label>
        <p class="card-text">
          <input type="password" class="form-control" name="password" id="password">
        </p>
        <button type="submit" class="btn btn-primary btn-block float-end px-4">Login</button>
      </form>
      <p style="margin-top: 10px; text-align: center;">Belum punya akun? <a href="register.php">Daftar</a></p>
    </div>
</body>
</html>