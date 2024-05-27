<?php
include('../../conf/config.php');
$nama   = $_GET['nama'];
$level  = $_GET['level'];
$username = $_GET['username'];
$password = $_GET['password'];
$query  = mysqli_query($koneksi, "INSERT INTO user(id,nama,level,username,password) VALUES ('','$nama','$level','$username','$password')");
header('location:../index.php?page=data-driver');
?>