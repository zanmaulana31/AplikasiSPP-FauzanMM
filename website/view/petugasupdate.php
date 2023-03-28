<?php 
 
include 'koneksi.php';
$id = $_POST['id'];
$nama_petugas = $_POST['nama_petugas'];
$username = $_POST['username'];
$password = $_POST['password'];
$level1 = $_POST['level1'];
 
mysqli_query($koneksi,"UPDATE petugas SET nama_petugas='$nama_petugas', username='$username', password='$password', level1='$level1' WHERE id='$id'");
 
// mengalihkan halaman kembali ke index.php
header("location:petugas.php");

?>