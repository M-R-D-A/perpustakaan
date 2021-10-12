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
<?php
        include "navbar.php";
    ?>
    <h3>tambah siswa</h3>
    <form action="proses_tambah_siswa.php" method="post">
        <label for ="siswa" class="form-label">siswa :</label>
        <Input type = "text" name="nama_siswa" value="" class="form
        control">
        <label for ="alamat" class="form-label">tanggal lahir:</label>
        <input type = "date" name="tanggal_lahir" value="" class="form
        control <br>">
        <label for ="gender" class="form-label">gender :</label>
        <select name="gender" class="form-control">
            <option>
            <option value="L">Laki-laki</option>
            <option value="P">Perempuan</option>
            </option>
        </select>
        <br>
        <label for ="alamat" class="form-label">alamat</label>
        <textarea name = "alamat" class = "form-control"rows = "4"></textarea>
        <br>
        <label for ="kelas" class="form-label">kelas :</label>
        <select name = "id_kelas" class = "form-control">
            <option>
            <?php include "koneksi.php";
                $qry_kelas=mysqli_query($koneksi,"select * from kelas");
                while ($data_kelas = mysqli_fetch_array($qry_kelas)){
                    echo "<option value =".$data_kelas['id_kelas'].'">'.$data_kelas['nama_kelas']."</option>";
                }
                ?>
            </option>
        </select>
        <label for ="username :" class="form-label">username :</label>
        <input type = "text" name = "username" value = "" class = "form-control">
        <label for ="password" class="form-label">password :</label>
        <input type = "password" name = "password" value = "" class = "form-control">
        <Input type="submit" name="simpan" value = "tambah siswa" class="btn
        btn-primary" required>
        </form>
                <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>
</html>
