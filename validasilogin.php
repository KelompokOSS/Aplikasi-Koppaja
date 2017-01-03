<?php
session_start();
include "db.php";
$username = $_REQUEST['username'];
$password = $_REQUEST['password'];
$mysql = mysql_query("SELECT * FROM admin WHERE username='$username' AND password='$password'");
if($mysql){
$hasil = mysql_fetch_array($mysql);
$_SESSION['username'] = $username;
echo "<script>window.alert('login berhasil');
window.location=('insert_biodata.php')</script>";
}else{
echo "<script>window.alert('gagal');
window.location=('login.php')
</script>";
}
?>