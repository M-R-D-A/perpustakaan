<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <?php
    include "koneksi.php";
    $qry_get_siswa=mysqli_query($koneksi,"select * from siswa where id_siswa = '".$_GET['id_siswa']."'");
    $dt_siswa=mysqli_fetch_array($qry_get_siswa);
    ?>
    <h3>tambah siswa</h3>
    <form action="proses_ubah_siswa.php" method="post">
        <Input type="hidden" name="id_siswa" value="<?=$dt_siswa['id_siswa']?>">
        <label for ="siswa" class="form-label">siswa :</label>
        <Input type = "text" name="nama_siswa" value="<?=$dt_siswa['nama_siswa']?>" class="form
        control">
        <label for ="tanggal" class="form-label">tanggal lahir:</label>
        <input type = "date" name="tanggal_lahir" value="<?=$dt_siswa['tanggal_lahir']?>" class="form
        control <br>">
        <label for ="gender" class="form-label">gender :</label>
        <?php
        $arr_gender=array('L'=> 'laki-laki', 'P'=>'perempuan');
        ?>
        <select name="gender" class="form-control">
            <option>
                <?php foreach ($arr_gender as $key_gender => $val_gender):
                if($key_gender==$dt_siswa['gender']){
                    $selek="selected";
                } else {
                    $selek="";
                }
            ?>
            <option value="<?=$key_gender?>"
            <?=$selek?>><?=$val_gender?></option>
            <?php endforeach ?>
            </select>
            </option>
        </select>
        <br>
        <label for ="alamat" class="form-label">alamat</label>
        <textarea name = "alamat" class = "form-control"rows = "4" ><?=$dt_siswa['alamat']?></textarea>
        <br>
        <label for ="kelas" class="form-label" value="">kelas :</label>
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
        <input type = "text" name = "username" value = "<?=$dt_siswa['username']?>" class = "form-control">
        <label for ="password" class="form-label">password :</label>
        <input type = "password" name = "password" value = "<?=$dt_siswa['password']?>" class = "form-control">
        <Input type="submit" name="simpan" value = "tambah siswa" class="btn
        btn-primary" required>
        </form>
                <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>
</html>
