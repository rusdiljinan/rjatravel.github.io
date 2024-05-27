<?php
include('../../conf/config.php');
$id     = $_GET['id'];
$nama   = $_GET['nama'];
$alamat = $_GET['alamat'];
$umur   = $_GET['umur'];

// Memastikan bahwa input tidak kosong dan menghindari SQL Injection
$id = mysqli_real_escape_string($koneksi, $id);
$nama = mysqli_real_escape_string($koneksi, $nama);
$alamat = mysqli_real_escape_string($koneksi, $alamat);
$umur = mysqli_real_escape_string($koneksi, $umur);

$query = mysqli_query($koneksi, "UPDATE data_driver SET nama='$nama', alamat='$alamat', umur='$umur' WHERE id='$id'");

// Mengarahkan kembali ke halaman data driver
header('location:../index.php?page=data-driver');
?>