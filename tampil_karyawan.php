<body>
    <table width="10" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="green">
      <tr>
        <td height="40" align="center" bgcolor="black"><strong></strong>
          <h2><strong><font color="yellow"> DATA KARYAWAN</font></strong></h2></td>
        </tr>
        <tr>
          <td bgcolor="white"><table width="600" border="0" align="left" cellpadding="3" cellspacing="0">
          </td>
        </tr>
      </table>
    </head>
    <body>
      <table border="1" width="100%">
       <tr>
         <th>Foto</th>
         <th>NIK</th>
         <th>Nama karyawan</th>
         <th>Alamat</th>
         <th>Divisi</th>
         <th>Email</th>
         <th>Nomor</th>
         <th>Jenis Kelamin</th>
         <th>Status</th>
         <th colspan="2">Aksi</th>
       </tr>
       <?php 
 // Load file koneksi.php  
       include "koneksi.php";  

$query = "SELECT * FROM karyawan"; // Query untuk menampilkan semua data siswa  
$sql = mysqli_query($koneksi, $query); // Eksekusi/Jalankan query dari variabel $query    
while($data = mysqli_fetch_array($sql))
{ // Ambil semua data dari hasil eksekusi $sql   
  echo "<tr>";
  echo "<td><img src=images/".$data['foto']." 'width='50' height='50'></td>";
  echo "<td>".$data['nik']."</td>";   
  echo "<td>".$data['nama']."</td>"; 
  echo "<td>".$data['alamat']."</td>"; 
  echo "<td>".$data['divisi']."</td>";
  echo "<td>".$data['email']."</td>";
 
  echo "<td>".$data['nomor']."</td>";
  echo "<td>".$data['jenis_kelamin']."</td>";
  echo "<td>".$data['status']."</td>";
  

  echo "<td><a href='form_ubah.php?nik=".$data['nik']."'>Ubah</a></td>";    
  echo "<td><a href='proses_hapus.php?nik=".$data['nik']."'>Hapus</a></td>";
  echo "</tr>"; 
}   
?>
</table>

</body>
</html>