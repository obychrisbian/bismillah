<form action="proses_simpan.php" method="post" enctype="multipart/form-data" name="form_data_karyawan">
  <table width="452" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="green">
    <tr>
      <td height="40" align="center" bgcolor="black"><strong></strong>
        <h2><strong><font color="yellow">INPUT DATA KARYAWAN </font></strong></h2>
        <strong></strong></td>
    </tr>
    <tr>
      <td bgcolor="#FFFFFF"><table width="452" border="0" align="center" cellpadding="5" cellspacing="0">
<?php 
    include "koneksi.php";
    $nik = $_GET['nik'];
    $query_mysql = mysqli_query ($koneksi,"SELECT * FROM karyawan WHERE nik='$nik'")or die(mysqli_error());
    $nomor = 0;
    while($data = mysqli_fetch_array($query_mysql)){
      ?>
      <form method="POST" action="proses_ubah.php">   
        <table>
    
  <form action="/action_page.php">
            <table>
                <tr><td>FOTO</td><td><input type="file" name="foto" value="<?php echo $data['foto']?>"</td></tr>
                <tr><td>NIK</td><td><input type="text" name="nik" value="<?php echo $data['nik']?>"
                </td></tr>
              <tr><td>NAMA</td><td><input type="text" name="nama" value="<?php echo $data['nama']?>"
              </td></tr>
         <tr><td>ALAMAT</td><td><input type="text" name="alamat" value="<?php echo $data['alamat']?>"</td></tr>
                <tr><td>DIVISI</td><td>
                        <select name="divisi" value="<?php echo $data['divisi']?>"
                            <option value="">Pilih Divisi</option>
                            <option value="SDM">SDM</option>
                            <option value="DOKUMENTASI">DOKUMENTASI</option>
                            <option value="TL">TL</option>
                            <option value="LOGISTIK">LOGISTIK</option>
                            <option value="RUNNER">RUNNER</option>
                        </select>
            <tr><td>EMAIL</td><td><input type="text" name="email" value="<?php echo $data['email']?>"</td></tr>       
            <tr><td>NOMOR</td><td><input type="text" name="nomor" value="<?php echo $data['nomor']?>"></td></tr>
                <tr><td>JENIS KELAMIN</td><td>
                        <select name="jenis_kelamin" value="<?php echo $data['jenis_kelamin']?>"
                            <option value="">Pilih</option>
                            <option value="Laki-Laki">Laki-Laki</option>
                            <option value="Perempuan">Perempuan</option>
                <tr><td>STATUS</td><td>
                        <select name="status" value="<?php echo $data['status']?>"
                            <option value="">Pilih Status</option>
                            <option value="BELUM MENIKAH">BELUM MENIKAH</option>
                            <option value="MENIKAH">MENIKAH</option>            
                
                <tr><td colspan="2"><button type="submit" value="proses_simpan.php">SIMPAN</button></td></tr>
            </table>
        </form> 
   
</body>
</html>
