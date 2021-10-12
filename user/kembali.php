<?php
if($_GET['id']){
    include "koneksi.php";
    $id_peminjaman_buku=$_GET['id'];
    $cek_terlambat=mysqli_query($koneksi, "select * from peminjaman_buku where id_peminjaman_buku = '".$id_peminjaman_buku."' ");
    $data_pinjam=mysqli_fetch_array($cek_terlambat);
    if(strtotime($data_pinjam['tanggal_kembali']) >= strtotime(date('Y-m-d'))){
        $denda=0;
    } else {
        $harga_denda_perhari = 1000;
        $tanggal_kembali = new DateTime();
        $tgl_harus_kembali = new DateTime($dt_pinjam['tanggal_kembali']);
        $selisih_hari = $tanggal_kembali->diff($tgl_harus_kembali)->d;
        $denda = $selisih_hari * $harga_denda_perhari;
    }
    $kembali = mysqli_query($koneksi, "INSERT INTO pengembalian_buku(id_peminjaman_buku, tanggal_pengembalian, denda)
               VALUES ('".$data_pinjam['id_peminjaman_buku']."','".date('Y-m-d')."','".$denda."')");
    
    if ($kembali) {
        echo "<script>alert('pengembalian buku berhasil'); location.href='histori.php';</script>";
    }
    else {
        echo "<script>alert('pengembalian buku gagal');loction.href='histori.php';</script>";
    }
}
?>