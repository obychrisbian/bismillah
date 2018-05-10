<?php
include 'koneksi.php';
include 'fungsi.php';

$foto		= $_FILES['foto']['name'];
$tmp        = $_FILES['foto']['tmp_name'];
$nik            = $_POST['nik'];
$nama           = $_POST['nama'];
$alamat         = $_POST['alamat'];
$divisi        = $_POST['divisi'];
$email         = $_POST['email'];
$nomor        = $_POST['nomor'];
$jenis_kelamin  = $_POST['jenis_kelamin'];
$status         = $_POST['status'];

$query="INSERT INTO karyawan SET foto='$foto', nik='$nik',nama='$nama', alamat='$alamat', divisi='$divisi',email='$email', nomor='$nomor', jenis_kelamin='$jenis_kelamin',status='$status'";
mysqli_query($koneksi, $query);

header("location:tampil_karyawan.php");
}
?>