<?php
include('../../conf/config.php');
$nama   = $_GET['nama'];
$alamat = $_GET['alamat'];
$umur   = $_GET['umur'];
$query  = mysqli_query($koneksi, "INSERT INTO data_driver(id,nama,alamat,umur) VALUES ('','$nama','$alamat','$umur')");
header('location:../index.php?page=data-driver');
?>