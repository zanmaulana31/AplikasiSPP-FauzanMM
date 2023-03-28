<?php
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
@$id = $_POST['id'];
@$nama_kelas = $_POST['nama_kelas'];
@$kompetensi_keahlian = $_POST['kompetensi_keahlian'];


// menginput data ke database
mysqli_query($koneksi,"UPDATE kelas SET nama_kelas='$nama_kelas', kompetensi_keahlian='$kompetensi_keahlian' WHERE id_kelas='$id'");
// mengalihkan halaman kembali ke index.php

header('location:kelas.php');


?>

