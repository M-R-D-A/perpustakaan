<?php
    session_start();
    include "koneksi.php";
    $cart = @$_SESSION['cart'];
    if(count($cart) > 0){
        $lama_pinjam= 7; //satuan hari
        $tgl_harus_kembali = date('Y-m-d', mktime(0,0,0,date('m'),(date('d')+$lama_pinjam),date('Y')));

        echo $_SESSION['id_siswa'] . date('Y-m-d') . $tgl_harus_kembali;
        $query_pinjam = mysqli_query($koneksi, "INSERT INTO peminjaman_buku(id_siswa, tanggal_pinjam, tanggal_kembali)
        VALUES ('".$_SESSION['id_siswa']."','".date('Y-m-d')."','".$tgl_harus_kembali."')"); 
        
        if ($query_pinjam){
             $id = mysqli_insert_id($koneksi);
             foreach ($cart as $key => $value) {
                 mysqli_query($koneksi, "INSERT INTO detail_peminjaman_buku (id_peminjaman_buku, id_buku, qty)
                 VALUES ('".$id."','".$value['id_buku']."','".$value['qty']."')");
             }   

             unset($_SESSION['cart']);
             echo "<script>alert('anda berhasil meminjam');location.href='histori.php'</script>";
         } else {
             echo "<script>alert('gagal meminjam buku');location.href='histori.php'</script>";
         }
    }
?>