<?php 
// mengaktifkan session php
session_start();
 
// menghubungkan dengan koneksi
include 'koneksi.php';
 
// menangkap data yang dikirim dari form
$nama = $_POST['nama'];
$nis = $_POST['nis'];
 
// menyeleksi data user dengan username dan password yang sesuai
$result = mysqli_query($koneksi,"SELECT * FROM siswa where nama='$nama' and nis='$nis'");

$cek = mysqli_num_rows($result);
 
if($cek > 0) {
	$data = mysqli_fetch_assoc($result);
	//menyimpan session user, nama, status dan id login
	$_SESSION['nama'] = $nama;
	$_SESSION['kelas'] = $data['kelas'];
	$_SESSION['nis'] = $data['nis'];
	$_SESSION['nisn'] = $data['nisn'];
	$_SESSION['no_telp'] = $data['no_telp'];
	$_SESSION['alamat'] = $data['alamat'];
	header("location:../website/siswa/usersiswa.php");
} else {
	header("location:loginsiswasalah.php?pesan=gagal login data tidak ditemukan.");
}
?>