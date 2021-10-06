<?php
    $id_kelas = $_POST['id_kelas'];
    $nama_kelas = $_POST["nama_kelas"];
    $kelompok = $_POST["kelompok"];

    echo $nama_kelas;
    echo $kelompok;
    include "koneksi.php";
    $input = mysqli_query($koneksi, "UPDATE kelas  SET nama_kelas = '{$nama_kelas}', kelompok = '{$kelompok}' where id_kelas = '".$id_kelas."' "); //('{$nama_kelas}', '{$kelompok}')");
    if($input){
        echo "<script>alert('SELAMAT ANDA BERHASIL'); location.href='tambah_kelas.php';</script>";
    }
    else{
        echo "<script>alert('gagal'); location.href='tambah_kelas.php';</script>";
    } 
?>
