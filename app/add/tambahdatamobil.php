<?php
include('../../conf/config.php');
$nama   = $_GET['nama'];
$merek  = $_GET['merek'];
$bm     = $_GET['bm'];
$query  = mysqli_query($koneksi, "INSERT INTO data_mobil(id,nama,merek,bm) VALUES ('','$nama','$merek','$bm')");
header('location:../index.php?page=data-mobil');
?>