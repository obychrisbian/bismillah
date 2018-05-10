<?php
include"koneksi.php"; 
include"fungsi.php"; 

$user_nama = $_POST['user_nama'];
$password = $_POST['password']; 
$login   = mysqli_query($koneksi, "select* from admin_karyawan where user_nama='$user_nama' and password='$password'"); 
$row = mysqli_fetch_array($login);
if ($row['user_nama'] == $user_nama AND $row['password'] == $password)
{
	session_start();
	$_SESSION['user_nama'] = $row['user_nama'];
	$_SESSION['password'] = $row['password'];
	header('location:home.php');

}
else
{
	msgbox ("Gagal Login","login.php");
}

?>
