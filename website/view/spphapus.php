<?php 
include 'koneksi.php';
$id_spp = $_GET['id'];
mysqli_query($koneksi,"DELETE FROM spp WHERE id_spp='$id_spp'");
 
header('location:spp.php');

?>