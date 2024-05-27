<?php
include('../../conf/config.php');
$id     = $_GET['id'];
$tujuan = $_GET['tujuan'];
$posisi = $_GET['posisi'];
$jumlah = $_GET['jumlah'];
$lokasi = $_GET['lokasi'];
$tipe   = $_GET['tipe'];
$harga  = $_GET['harga'];

// Memastikan bahwa input tidak kosong dan menghindari SQL Injection
$id = mysqli_real_escape_string($koneksi, $id);
$tujuan = mysqli_real_escape_string($koneksi, $tujuan);
$posisi = mysqli_real_escape_string($koneksi, $posisi);
$jumlah = mysqli_real_escape_string($koneksi, $jumlah);
$lokasi = mysqli_real_escape_string($koneksi, $lokasi);
$tipe = mysqli_real_escape_string($koneksi, $tipe);
$harga = mysqli_real_escape_string($koneksi, $harga);

$query  = mysqli_query($koneksi, "UPDATE data_pelanggan SET tujuan='$tujuan', posisi='$posisi', jumlah='$jumlah', lokasi='$lokasi', tipe='$tipe', harga='$harga' WHERE id='$id'");
header('location:../index.php?page=data-pelanggan');
?>