<?php
    include "header.php";
?>
<br></br>
<h2>Daftar Buku di Keranjang</h2>
<table class="table table-hover striped">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Buku</th>
            <th>Jumlah</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach (@$_SESSION['cart'] as $key => $value) : ?>
        <tr>
            <td><?=($key+1)?></td>
            <td><?=$value['nama_buku']?></td>
            <td><?=$value['qty']?></td>
            <td><a href="hapus_cart.php?id=<?=$key?>" class="btn btn-danger"><strong>X</strong></a></td>
        </tr>
        <?php endforeach;?>
    </tbody>
</table>
<a href="checkout.php" class="btn btn-primary">Check Out</a>
<?php
    include "footer.php";
?>