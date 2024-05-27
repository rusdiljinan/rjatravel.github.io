<?php
include('../../conf/config.php');
$id = $_GET['id'];

$query = mysqli_query($koneksi, "DELETE FROM data_mobil WHERE id='$id'");
header('location:../index.php?page=data-mobil');
?>