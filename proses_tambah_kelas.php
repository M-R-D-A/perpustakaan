<?php
    $nama_kelas = $_POST["nama_kelas"];
    $kelompok = $_POST["kelompok"];

    echo $nama_kelas;
    echo $kelompok;
    include "koneksi.php";
    $input = mysqli_query($koneksi, "INSERT INTO kelas (nama_kelas, kelompok) VALUES 
    ('{$nama_kelas}', '{$kelompok}')");
    /*if(empty($nama_kelas)){
        echo"<script>alert('wajib di isi'); location.href='tambah_kelas.php';</script>";
    }elseif(empty($kelompok)){
        echo"<script>alert('wajib di isi'); location.href='tambah_kelas.php';</script>";
    }
    */
    if($input){
        echo "<script>alert('SELAMAT ANDA BERHASIL'); location.href='tambah_kelas.php';</script>";
    }
    else{
        echo "<script>alert('gagal'); location.href='tambah_kelas.php';</script>";
    }    
?>
