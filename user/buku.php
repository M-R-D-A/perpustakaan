<?php
    include "header.php";
?>
<h2>Daftar Buku</h2>
<div class="row">
    <?php
    include "koneksi.php";
    $qry_buku=mysqli_query($koneksi,"select * from buku");
    while($dt_buku=mysqli_fetch_array($qry_buku)){
    ?>
    <div class="col-md-3">
        <div class="card">
            <img src="/perpus/admin/foto/<?=$dt_buku['foto']?>"
            class="card-img-top">
            <div class="card-body">
                <h5 class="card-title"><?=$dt_buku['nama_buku']?></h5>
                <p class="card-text"><?=$dt_buku['deskripsi']?></p>
                <a href="pinjam_buku.php?id_buku=<?=$dt_buku['id_buku']?>" class="btn btn-primary">Pinjam</a>
            </div>
            <small class="text-muted"><?=$dt_buku['pengarang']?></small>
        </div>
    </div>
    <?php
    }
    ?>
</div>
<?php
    include "footer.php";
?>