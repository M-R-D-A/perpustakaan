<?php
    include "header.php";
?>
<h2>Histori Peminjaman Buku</h2>
<table class="table table-hover table-striped">
    <thead>
        <th><no</th>
        <th>Tanggal Pinjam</th>
        <th>Tanggal harus Kembali</th>
        <th>Nama Buku</th>
        <th>Status</th>
        <th>Aksi</th>
    </thead>
    <tbody>
        <?php
        include "koneksi.php";
        $query_pinjam = mysqli_query($koneksi, "SELECT * FROM peminjaman_buku
        where id_siswa = '".$_SESSION['id_siswa']."' ORDER BY id_peminjaman_buku DESC");
        $no=0;
        while($data_peminjaman=mysqli_fetch_array($query_pinjam)){
            $no++;
        ?>
        <tr>
            <td><?=$no?></td>
            <td><?=$data_peminjaman['tanggal_pinjam']?></td>
            <td><?=$data_peminjaman['tanggal_kembali']?></td>
            <td><ol>
                <?php
                $query_detail = mysqli_query($koneksi, "SELECT  * FROM detail_peminjaman_buku d join buku b ON b.id_buku = d.id_buku WHERE
                id_peminjaman_buku = '".$data_peminjaman['id_peminjaman_buku']."'");
                while($data_detail = mysqli_fetch_array($query_detail)){
                    echo "<li>".$data_detail['nama_buku']."</li>";
                }
                ?>
                </ol>
            </td>
            <?php
            $query_cek_kembali = mysqli_query($koneksi, "SELECT * FROM pengembalian_buku
            WHERE id_peminjaman_buku = '".$data_peminjaman['id_peminjaman_buku']."'");
            if(mysqli_num_rows($query_cek_kembali) > 0) {
                $data_kembali = mysqli_fetch_array($query_cek_kembali);
                echo "<td>";
                echo "<label class='alert alert-success'>
                    Sudah kembali<br>
                    denda Rp.=".$data_kembali['denda']."</lable>";
                echo "</td>";
                echo "<td></td>";
            } else {
                echo "<td><label class='alert alert-danger'>Belum kembali<br></label></td>";
                echo "<td><a href='kembali.php?id=".$data_peminjaman['id_peminjaman_buku']."' class='btn btn-primary'
                onclick='return confirm('apakah anda yakin ingin mengembalikan buku ini?')'>kembalikan</a></td>";
            }
            ?> 
        </tr>
        <?php } ?>
    </tbody>
</table>
<?php
    include "footer.php";
?>