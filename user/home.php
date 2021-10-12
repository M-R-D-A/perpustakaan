<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

    <title>Album example for Bootstrap</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/album/">

    <!-- Bootstrap core CSS -->
    <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="album.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

  </head>

  <body>
  <?php
    include "header.php"
    ?>
    <header>
      <div class="collapse bg-dark" id="navbarHeader">
        <div class="container">
          <div class="row">
            <div class="col-sm-8 col-md-7 py-4">
              <h4 class="text-white">About</h4>
              <p class="text-muted">Add some information about the album below, the author, or any other background context. Make it a few sentences long so folks can pick up some informative tidbits. Then, link them off to some social networking sites or contact information.</p>
            </div>
            <div class="col-sm-4 offset-md-1 py-4">
              <h4 class="text-white">Contact</h4>
              <ul class="list-unstyled">
                <li><a href="#" class="text-white">Follow on Twitter</a></li>
                <li><a href="#" class="text-white">Like on Facebook</a></li>
                <li><a href="#" class="text-white">Email me</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="navbar navbar-dark bg-dark box-shadow">
      </div>
    </header>
    <header class="py-5 bg-image-full" style="background-image: url('https://cdn.artstation.com/p/assets/images/images/000/697/528/large/tj-foo-grand-library.jpg?1431011034')">
            <div class="text-center my-5">
                <img class="img-fluid rounded-circle mb-4" src="https://sribu-sg.s3.amazonaws.com/assets/media/contest_detail/2014/12/re-desain-logo-untuk-perpustakaan-nasional-republik-indonesia-54867089b79de4e691000003/ab72759a6d.png" alt="image cap" width = 200 height = 200 />
                <h1 class="text-white fs-3 fw-bolder">Perpustakaan Nasional Indonesia</h1>
                <p class="text-white-50 mb-0">Selamat Datang</p>
            </div>
        </header>

    <main role="main">
      <section class="jumbotron text-center">
        <div class="container">
          <img src="">
          <form method="POST" action="tampil_buku.php" class="d-flex">
                <input class="form-control me-2" type="search" name="cari" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
      </section>

      <div class="album py-5 bg-light">
        <div class="container">
        <div class="row">
    <?php
    include "koneksi.php";
    $qry_buku=mysqli_query($koneksi,"select * from buku");
    while($dt_buku=mysqli_fetch_array($qry_buku)){
    ?>
    <div class="col-md-3">
        <div class="card shadow-sm">
           <img src="/perpus/admin/foto/<?=$dt_buku['foto']?>" class="bd-placeholder-img-card-img-top"
           xmlns="https://www.w3.org/2000/svg" role="img"
           aria-label="placeholder: thumbnail" preserveAspectRation="xMidYMid slice"
            focusable="false"><title>Placeholder</title>
            <rect width=100% height=100% fill="#55595c"/></img>
            <div class="card-body">
                <p class="card-text"><?=$dt_buku['nama_buku']?></h5>
                <p class="card-text"><?=$dt_buku['deskripsi']?></p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class=btn-group>
                  <a href="pinjam_buku.php?id_buku=<?=$dt_buku['id_buku']?>" class="btn btn-primary">Pinjam</a>
                  </div>
                </div>
                <small class="text-muted"><?=$dt_buku['pengarang']?></small>
            </div>
        </div>
    </div>
    <?php
    }
    ?>
          </div>  
          </div>
        </div>
      </div>

    </main>

    <footer class="text-muted">
      <div class="container">
        <p class="float-right">
          <a href="#">Back to top</a>
        </p>
        <p>Album example is &copy; Bootstrap, but please download and customize it for yourself!</p>
        <p>New to Bootstrap? <a href="../../">Visit the homepage</a> or read our <a href="../../getting-started/">getting started guide</a>.</p>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <script src="../../assets/js/vendor/holder.min.js"></script>
  </body>
</html>