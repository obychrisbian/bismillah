<form action="proses_simpan.php" method="post" enctype="multipart/form-data" name="form_data_karyawan">
  <table width="452" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="green">
    <tr>
      <td height="40" align="center" bgcolor="black"><strong></strong>
        <h2><strong><font color="yellow">INPUT DATA KARYAWAN </font></strong></h2>
        <strong></strong></td>
    </tr>
    <tr>
      <td bgcolor="#FFFFFF"><table width="452" border="0" align="center" cellpadding="5" cellspacing="0">

  <form action="/action_page.php">
            <table>
                <tr><td>FOTO</td><td><input type="file" name="foto" ></td></tr>
                <tr><td>NIK</td><td><input type="text" name="nik"></td></tr>
                <tr><td>NAMA</td><td><input type="text" name="nama"></td></tr>
                <tr><td>ALAMAT</td><td><input type="text" name="alamat"></td></tr>
                <tr><td>DIVISI</td><td>
                        <select name="divisi">
                            <option value="">Pilih Divisi</option>
                            <option value="SDM">SDM</option>
                            <option value="DOKUMENTASI">DOKUMENTASI</option>
                            <option value="TL">TL</option>
                            <option value="LOGISTIK">LOGISTIK</option>
                            <option value="RUNNER">RUNNER</option>
                        </select>
                <tr><td>EMAIL</td><td><input type="text" name="email"></td></tr>       
                <tr><td>NOMOR</td><td><input type="text" name="nomor"></td></tr>
                <tr><td>JENIS KELAMIN</td><td>
                        <select name="jenis_kelamin">
                            <option value="">Pilih</option>
                            <option value="Laki-Laki">Laki-Laki</option>
                            <option value="Perempuan">Perempuan</option>
                <tr><td>STATUS</td><td>
                        <select name="status">
                            <option value="">Pilih Status</option>
                            <option value="BELUM MENIKAH">BELUM MENIKAH</option>
                            <option value="MENIKAH">MENIKAH</option>            
                
                <tr><td colspan="2"><button type="submit" value="proses_simpan.php">SIMPAN</button></td></tr>
            </table>
        </form> 
    </body>
    </div>
</body>
</html>