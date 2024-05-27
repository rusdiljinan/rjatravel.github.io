<?php
include('conf/config.php');
$tujuan = $_GET['tujuan'];
$posisi = $_GET['posisi'];
$jumlah = $_GET['jumlah'];
$lokasi = $_GET['lokasi'];
$tipe   = $_GET['tipe'];
$harga  = $_GET['harga'];
$query  = mysqli_query($koneksi, "INSERT INTO data_pelanggan (tujuan, posisi, jumlah, lokasi, tipe, harga) VALUES ('$tujuan', '$posisi', '$jumlah', '$lokasi', '$tipe', '$harga')");
header('location:index2.php');
?>