<?php 
 
include 'koneksi.php';
// menangkap data yang di kirim dari form
@$id = $_POST['id'];
@$nis = $_POST['nis'];
@$nisn = $_POST['nisn'];
@$nama = $_POST['nama'];
@$kelas = $_POST['kelas'];
@$alamat = $_POST['alamat'];
@$no_telp = $_POST['no_telp'];
@$id_spp = $_POST['id_spp'];
 
mysqli_query($koneksi,"UPDATE siswa SET nis='$nis', nisn='$nisn', nama='$nama', kelas='$kelas', alamat='$alamat', no_telp='$no_telp', id_spp='$id_spp' WHERE id='$id'");
 
header("location:siswa.php");
?>