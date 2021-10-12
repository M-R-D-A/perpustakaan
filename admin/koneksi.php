<?php
     $servername = "localhost";
     $username = "root";
     $password = "";
     $db = "perpus";

     //buat koneksi
     $koneksi = mysqli_connect ($servername, $username, $password, $db);
     //cek koneksi
     if (!$koneksi){
         die("".mysqli_connect_error());
     }
     else{
         echo"";
     }
?>
