<?php
session_start();
// unset($_SESSION['nama']);
// unset($_SESSION['level']);
session_destroy();
header('location:../index2.php');
?>