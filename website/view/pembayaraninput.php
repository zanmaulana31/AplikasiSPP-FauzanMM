<?php
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
@$id_petugas = $_POST['id_petugas'];
@$nisn = $_POST['nisn'];
@$tgl_bayar = $_POST['tgl_bayar'];
@$bulan_dibayar = $_POST['bulan_dibayar'];
@$tahun_bayar = $_POST['tahun_bayar'];
@$id_spp = $_POST['id_spp'];
@$jumlah_bayar = $_POST['jumlah_bayar'];

// menginput data ke database
mysqli_query($koneksi, "insert into pembayaran values('','$id_petugas','$nisn','$tgl_bayar','$bulan_dibayar','$tahun_bayar','$id_spp','$jumlah_bayar')");

// mengalihkan halaman kembali ke index.php
header("location:pembayaran.php");
 


?>

