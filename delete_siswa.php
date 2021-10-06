<?php
     if($_GET['id_siswa']){
        //  echo "ada";
        //  echo $_GET['id_kelas'];
         include "koneksi.php";
         $query_hapus = mysqli_query($koneksi, "DELETE FROM siswa where id_siswa = '".$_GET['id_siswa']."'");
         if ($query_hapus){
             // echo"berhasil"
             echo "<script> alert('berhasil dihapus'); location.href = 'tampil_kelas.php'; </script>";
         }
         else {
             echo "script> alert ('gagal dihapus'); location.href = 'tampil_kelas.php'; </script>";
         }
     }
     else{
         echo "hahahahahahhaha OMEGALUL";
     }
?>
