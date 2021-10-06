<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
</head>
<body>
    <?php include "navbar.php"?>
    <br></br>
    <h3>tambah buku</h3>
    <form action="proses_tambah_buku.php" enctype="multipart/form-data" method="post">
        <div class="mb-3">
            <label for ="pengarang" class="form-label">masukkan nama buku :</label>
            <Input type = "text" name="nama_buku" value="" class="form-control">
        </div>
        <div class="mb-3">
            <label for ="pengarang" class="form-label">masukkan nama pengarang :</label>
            <Input type = "text" name="pengarang" value="" class="form-control">
        </div>
        <div class="mb-3">
            <label for="deksripsi" class="form-label">deskripsi :</label>
            <textarea class="form-control" name="deskripsi" row="3"></textarea> 
        </div>
        <div class="mb-3">
            <label for ="kelas" class="form-label">foto :</label>
            <input type="file" class="form-control" name="foto" required>
        </div>
        <Input type="submit" name="simpan" value = "tambah buku" class="btn
        btn-primary" required>
        </form>
                <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>
</html>
