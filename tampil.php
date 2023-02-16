<!DOCTYPE html>
<html>
    <head>
</head>
<body>
     <center>
     <header>
     <h3>Data Pinjaman</h3>
</header>
    <table border="1">
        <tr>
            <th>NAMA USER</th>
            <th>JABATAN</th>
            <th>NAMA BAHAN</th>
            <th>JENIS BAHAN</th>
            <th>STOK</th>
            <th>HARGA</th>
            <th>KONDISI</th>
            <th>TANGGAL MASUK</th>
            <th>AKSI.</td>
</tr>

<?php
include("koneksi.php");
$query=mysqli_query($db, "SELECT * FROM tb_user INNER JOIN tb_bahan ON 
tb_user.id_bahan = tb_bahan.id_bahan");

while($bahan=mysqli_fetch_array($query)){
    echo "<tr>";
    echo "<td>".$bahan['nama_user']."</td>";
    echo "<td>".$bahan['jabatan']."</td>";
    echo "<td>".$bahan['nama_bahan']."</td>";
    echo "<td>".$bahan['jenis_bahan']."</td>";
    echo "<td>".$bahan['stok']."</td>";
    echo "<td>".$bahan['harga']."</td>";
    echo "<td>".$bahan['kondisi']."</td>";
    echo "<td>".$bahan['tgl_masuk']."</td>";
    echo "<td>";
    echo "<a href='edit.php?id=".$bahan['id_user']."'>Edit</a> |";
    echo "<a href='hapus.php?id=".$bahan['id_user']."'>Hapus</a> |";
    echo "</td>";
    echo "</tr>";
 }
 ?>
<a href="tambah.php"><input type="button" value="tambah">
 </table>
</body>
</html>