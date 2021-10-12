<?php
    include "header.php";
    include "koneksi.php";
    $qry_detail_buku=mysqli_query($koneksi,"select * from buku where
    id_buku = '".$_GET['id_buku']."'");
    $dt_buku=mysqli_fetch_array($qry_detail_buku);
?>
<h2>Pinjam Buku</h2>
<div class = "row g-0">
    <div class="col-lg-6-col-md-8 mx-auto"></div>
        <h1 class="fw-light">Pinjam Buku</h1>
</div>
    <div class="col-md-4">
        <img src="../admin/foto/<?=$dt_buku['foto']?>" class="card-img-top">
    </div>

    <div class="col-md-8">
        <form action="masuk_cart.php?" method="POST">
            <input type="hidden" name="id_buku" value="<?=$dt_buku['id_buku']?> ">
            <table class="table table-hover table-striped">
                <thead>
                    <tr>
                        <td>NAMA BUKU : </td>
                        <td><?=$dt_buku['nama_buku']?></td>
                    </tr>
                    <tr>
                        <td>DESKRIPSI:</td>
                        <td><?=$dt_buku['deskripsi']?></td>
                    </tr>
                    <tr>
                        <td>Jumlah pinjam</td>
                        <td><input type="number" name="jumlah_pinjam" value="1"></td>
                    </tr>
                    <tr>
                        <td colspan="2"><input class="btn btn-success" 
                    type="submit" value="pinjam"></td>
                    </tr>
                </thead>
            </table>
        </form>
    </div>
    <?php
        include "footer.php";
    ?>
</div>