<?php
include('../../conf/config.php');
$id     = $_GET['id'];
$nama   = $_GET['nama'];
$merek  = $_GET['merek'];
$bm     = $_GET['bm'];

// Memastikan bahwa input tidak kosong dan menghindari SQL Injection
$id = mysqli_real_escape_string($koneksi, $id);
$nama = mysqli_real_escape_string($koneksi, $nama);
$merek = mysqli_real_escape_string($koneksi, $merek);
$bm = mysqli_real_escape_string($koneksi, $bm);

$query = mysqli_query($koneksi, "UPDATE data_mobil SET nama='$nama', merek='$merek', bm='$bm' WHERE id='$id'");

// Mengarahkan kembali ke halaman data driver
header('location:../index.php?page=data-mobil');
?>