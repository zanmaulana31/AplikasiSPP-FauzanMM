<?php 
 
include 'koneksi.php';
// menangkap data yang di kirim dari form
@$id_pembayaran = $_POST['id_pembayaran'];
@$id_petugas = $_POST['id_petugas'];
@$nisn = $_POST['nisn'];
@$tgl_bayar = $_POST['tgl_bayar'];
@$bulan_dibayar = $_POST['bulan_dibayar'];
@$tahun_bayar = $_POST['tahun_bayar'];
@$id_spp = $_POST['id_spp'];
@$jumlah_bayar = $_POST['jumlah_bayar'];
 
mysqli_query($koneksi,"UPDATE pembayaran SET id_petugas='$id_petugas', nisn='$nisn', tgl_bayar='$tgl_bayar', bulan_dibayar='$bulan_dibayar', tahun_bayar='$tahun_bayar', id_spp='$id_spp', jumlah_bayar='$jumlah_bayar' WHERE id_pembayaran='$id_pembayaran'");
 
header("location:pembayaran.php");
?>