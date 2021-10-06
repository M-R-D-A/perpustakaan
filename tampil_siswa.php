<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <form action="tampil_kelas.php" method="post">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
</head>
<body>
<?php
        include "navbar.php";
    ?>
    <div class="container">
    <form action="tampil_siswa.php" method="post">
        <input type="text" name="cari" class ="form-control">
        </form>
        <h1>Data siswa</h1>
    <table class="table">    
    </div>
    <thead>
        <tr>
            <th scope="col">id_siswa</th>
            <th scope="col">nama_siswa</th>
            <th scope="col">tanggal lahir</th>
            <th scope="col">gender</th>
            <th scope="col">alamat</th>
            <th scope="col">username</th>
            <th scope="col">password</th>
            <th scope="col">id_kelas</th>
            <th scope="col"> aksi </th>
        </tr>
    </thead>
    <tbody>
        <?php
        include "koneksi.php";
        if (isset($_POST["cari"])){
            $cari =  $_POST['cari'];
            $query_siswa = mysqli_query($koneksi,
            "select * from kelas where id_kelas = ' $cari 'or nama_kelas like '%$cari%' ");
        }else {
            //jika tidak ada keyword pencarian 
            $query_siswa = mysqli_query($koneksi,"select * from siswa");
        }
        while ($dt_siswa=mysqli_fetch_array($query_siswa)) { ?>
              <tr>
                  <td><?php echo $dt_siswa["id_siswa"]; ?></td>
                  <td><?php echo $dt_siswa["nama_siswa"]; ?></td>
                  <td><?php echo $dt_siswa["tanggal_lahir"]; ?></td>
                  <td><?php echo $dt_siswa["gender"]; ?></td>
                  <td><?php echo $dt_siswa["alamat"]; ?></td>
                  <td><?php echo $dt_siswa["username"]; ?></td>
                  <td><?php echo $dt_siswa["password"]; ?></td>
                  <td><?php echo $dt_siswa["id_kelas"]; ?></td>
                  <td>
                      <a href="ubah_siswa.php?id_siswa=<?=$dt_siswa['id_siswa']?> " class="btn btn-success">Update</a>
                      <a href="delete_siswa.php?id_siswa=<?=$dt_siswa['id_siswa']?>" class="btn btn-danger" onclick="return confirm('apakah anda yakin menghapus data ini?')">Delete</a>
                  </td>
              </tr>
            <?php
            }
            ?> 
    </tbody>
</table>
<a href="tambah_siswa.php" type="button" class="btn btn-primary">Tambah siswa</a>
    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>
</html>
