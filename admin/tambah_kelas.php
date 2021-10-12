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
        include "navbar.php";
    ?>
    <h3>tambah kelas</h3>
    <form method="POST" action="proses_tambah_kelas.php">
        <div class="mb-3">
        <label for ="nama_kelas" class="form-label">nama Kelas</label>
        <input type="text" name="nama_kelas" value = "" class="form-control" placeholder="masukkan nama kelas" required>
        </div>
        kelompok :
        <input type="text" name="kelompok" value = "" class="form-control" placeholder="masukkan nama kelompok" required>
        <Input type="submit" name="simpan" value = "tambah_kelas" class="btn
        btn-primary" required>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous">
    </script>
</body>
</html>
