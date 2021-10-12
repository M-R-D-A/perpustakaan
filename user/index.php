<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Login siswa</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/sign-in/">

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <!-- Favicons -->
    
    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">
  </head>
  <body class="text-center">
      <div class="container">
      <main class="form-signin">
  <form action="proses_login.php" method="POST">
    <img class="mb-4" src="https://upload.wikimedia.org/wikipedia/commons/e/e2/LOGO-PERPUSNAS.svg" alt="" width=120  height = 120>
    <h1 class="h3 mb-3 fw-normal">Selamat Datang</h1>

    <div class="form-floating">
      <input type="userame" class="form-control" id="floatinginput"
      name="username" placeholder="insert username">
      <label for="floatingInput">username</label>
    </div>
    <div class="form-floating">
      <input type="password" class="form-control" id="floatingPassword"
      name="password" placeholder="Password">
      <label for="floatingPassword">Password</label>
    </div>

    <div class="checkbox mb-3">
      <label>
        <input type="checkbox" value="remember-me"> Remember me
      </label>
    </div>
    <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
    <p class="mt-5 mb-3 text-muted">&copy; 2017–2021</p>
  </form>
</main>
      </div>
  </body>
</html>
