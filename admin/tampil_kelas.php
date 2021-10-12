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
    <br></br>
    <div class="Container">
        <div class="card-header">
            <h1>Data Kelas</h1>
            <form action="tampil_kelas.php" method="post" class="d-flex">
            <Input class="form-control me-2" type="search" name="cari" placeholder="search (masukkan nama_kelas/id)">
            </form> 
        </div>
        <div class="card-body">
            <table class="table"> 
            <thead>
        <tr>
            <th scope="col">id kelas</th>
            <th scope="col">nama kelas</th>
            <th scope="col">kelompok</th>
            <th scope="col">aksi</th>
        </tr>
        </thead>
    <tbody>
        <?php
        include "koneksi.php";
        if (isset($_POST["cari"])){
            $cari =  $_POST['cari'];
            $query_kelas = mysqli_query($koneksi,
            "select * from kelas where id_kelas = ' $cari 'or nama_kelas like '%$cari%' ");
        }else {
            //jika tidak ada keyword pencarian 
            $query_kelas = mysqli_query($koneksi,"select * from kelas");
        }
        while ($data_kelas=mysqli_fetch_array($query_kelas)) { ?>
              <tr>
                  <td><?php echo $data_kelas["id_kelas"]; ?></td>
                  <td><?php echo $data_kelas["nama_kelas"]; ?></td>
                  <td><?php echo $data_kelas["kelompok"]; ?></td>
                  <td>
                      <a href="ubah_kelas.php?id_kelas=<?=$data_kelas['id_kelas']?> " class="btn btn-success" onclick="return confirm('apakah anda yakin menghapus data ini?'">Update</a>
                      <a href="delete_kelas.php?id_kelas=<?=$data_kelas['id_kelas']?>" class="btn btn-danger" onclick="return confirm('apakah anda yakin menghapus data ini?')">Delete</a>
                  </td>
              </tr>
            <?php
            }
            ?>
            </tbody>
        </table>
        <a href="tambah_kelas.php" type="button" class="btn btn-primary">Tambah kelas</a>
    <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
        </div>  
    </div>
</body>
</html>
