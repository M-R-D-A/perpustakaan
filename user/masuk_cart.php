<?php
session_start();
    if($_POST){
        include "koneksi.php";

        $qry_get_buku=mysqli_query($koneksi,"SELECT * FROM buku where id_buku = '".$_POST['id_buku']."'");
        $dt_buku=mysqli_fetch_array($qry_get_buku);
        $_SESSION['cart'][]=array(
            'id_buku'=> $dt_buku['id_buku'],
            'nama_buku'=> $dt_buku['nama_buku'],
            'qty'=> $_POST['jumlah_pinjam']
        ) ;
    }
     header('location: cart.php');
?>