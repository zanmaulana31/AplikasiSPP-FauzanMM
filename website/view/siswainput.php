<?php
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
@$nis = $_POST['nis'];
@$nisn = $_POST['nisn'];
@$nama = $_POST['nama'];
@$kelas = $_POST['kelas'];
@$alamat = $_POST['alamat'];
@$no_telp = $_POST['no_telp'];
@$id_spp = $_POST['id_spp'];


// menginput data ke database
mysqli_query($koneksi, "insert into siswa values('','$nis ','$nisn','$nama','$kelas','$alamat','$no_telp','$id_spp')");

// mengalihkan halaman kembali ke index.php
header("location:siswa.php");
 


?>

