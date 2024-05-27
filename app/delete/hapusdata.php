<?php
include('../../conf/config.php');
$id = $_GET['id'];

$query = mysqli_query($koneksi, "DELETE FROM data_driver WHERE id='$id'");
header('location:../index.php?page=data-driver');
?>