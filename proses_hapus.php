<?php

include "koneksi.php";
$nik = $_GET['nik'];
$query = "DELETE FROM karyawan WHERE nik='$nik'";
mysqli_query($koneksi, $query);
header('location:tampil_karyawan.php');

?>