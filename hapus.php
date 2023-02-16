<?php
include("koneksi.php");

$id= $_GET['id'];

$sql= "DELETE FROM tb_user where id_bahan='$id'";
$query= mysqli_query($db, $sql);

if($query){
    header("location:tampil.php?status=sukses");
}else{
    die("akses dilarang");
}
?>