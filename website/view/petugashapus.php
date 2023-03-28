<?php 
include 'koneksi.php';
$id = $_GET['id'];
mysqli_query($koneksi,"DELETE FROM petugas WHERE nama_petugas='$id'");
 
header("location:petugas.php?pesan=hapus");

?>