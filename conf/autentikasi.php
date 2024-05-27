<?php
session_start();
include('config.php');
$username= $_POST['username'];
$password= $_POST['password'];

$query= mysqli_query($koneksi, "SELECT * FROM user WHERE username='$username' and password='$password'");
if(mysqli_num_rows($query)==1){
    header('location:../app');
    $data= mysqli_fetch_array($query);
    $_SESSION['nama'] = $data['nama'];
    $_SESSION['level'] = $data['level'];
}
else if($username == '' || $password == ''){
    header('location:../index.php?error=2');
}
else{
    header('location:../index.php?error=1');
}

?>