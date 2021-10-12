<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <?php
    include "koneksi.php";
    $qry_get_kelas=mysqli_query($koneksi,"select * from kelas where id_kelas = '".$_GET['id_kelas']."'");
    $data_kelas=mysqli_fetch_array($qry_get_kelas);
    ?>
    <h3>update kelas</h3>
    <form method="POST" action="proses_ubah_kelas.php">
        <input type="hidden" name="id_kelas" value="<?=$data_kelas['id_kelas']?>">
        <div class="mb-3">
            <label for ="nama_kelas" class="form-label">update nama Kelas</label>
            <input type="text" name="nama_kelas" value="<?=$data_kelas['nama_kelas']?>" class="form-control" placeholder="masukkan nama kelas" required>
        </div>
        <label for ="nama_kelas" class="form-label">update kelompok</label>
        <div class="mb-3">
            <label for="kelompok" class="form-label">kelompok</label>
            <input type="text" name="kelompok" value="<?=$data_kelas['kelompok']?>" class="form-control" placeholder="masukkan nama kelompok" required>
        </div>
        <Input type="submit" name="simpan" value = "update kelas" class="btn
        btn-primary" required>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous">
    </script>
</body>
</html>
