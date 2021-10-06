<?php
if($_POST){
    $nama_siswa=$_POST['nama_siswa'];
    $tanggal_lahir=$_POST['tanggal_lahir'];
    $alamat=$_POST['alamat'];
    $gender=$_POST['gender'];
    $username=$_POST['username'];
    $password=$_POST['password'];
    $id_kelas=$_POST['id_kelas'];
    if(empty($nama_siswa)){
        echo"script>alert('nama siswa tidak boleh kosong');location.href='tambah_siswa.php';</script>";
    }
    include "koneksi.php";
    $input = mysqli_query($koneksi, "INSERT INTO siswa 
    (nama_siswa, tanggal_lahir, gender, alamat, username, password, id_kelas) VALUES ('{$nama_siswa}', '{$tanggal_lahir}', '{$gender}', '{$alamat}', '{$username}','".md5($password)."', '{$id_kelas}')");

    if ($input) {
        echo "<script>alert('BERHASIL');location.href='tambah_kelas.php';</script>";
    }
    else{
        echo "<script>alert('gagal');location.href='tambah_kelas.php';</script>";
    }
}
?>
