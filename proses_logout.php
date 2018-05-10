<?php
include "koneksi.php";
include "fungsi.php";
session_start();
unset ($_SESSION['nama']);
unset ($_SESSION['login']);
unset ($_SESSION['proses_login']);
unset ($_SESSION['logout']);
session_destroy();
msgbox ("Berhasil Logout","login.php")
?>