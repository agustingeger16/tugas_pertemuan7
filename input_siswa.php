<!DOCTYPE html>
<html>
    <head>
        <title>Belajar Insert Data Form ke Database</title>
 
    </head>
    <body>
        <h2>Form Input Data siswa </h2>
         <form method="post" action="simpan.php">
         <input type="hidden" value="<?php echo $data['id'];?>" name="id_mahasiswa">
            <table>
                <tr><td>NIS : </td><td><input type="text" name="nim"></td></tr>
                <tr><td>Nama :</td><td><input type="text" name="nama"></td></tr>
                <tr><td>Kelas : </td><td><input type="text" name="kelas"></td></tr>
                <tr><td>Alamat : </td><td><input type="text" name="alamat"></td></tr>
                <tr><td>Jenis Kelamin</td><td>
                        <input type="radio" name="jenis_kelamin" value="L" checked>Laki Laki
                        <input type="radio" name="jenis_kelamin" value="P">Perempuan
                    </td></tr>
 
            <!--Tanggal Lahir -->
            <tr>
              <td>Tanggal Lahir :</td>
              <td><select name="tgl" size="1" id="tgl">
            <?php
             for ($i=1;$i<=31;$i++)
             {
               echo "<option value=".$i.">".$i."</option>";
             }
            ?>
             
            </select>
                <select name="bln" size="1" id="bln">
            <?php
             $bulan=array("","Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember");
             for ($i=1;$i<=12;$i++)
             {
               echo "<option value=".$i.">".$bulan[$i]."</option>";
             }
            ?>            
            </select>
             
            <select name="thn" size="1" id="thn">
            <?php
             for ($i=1980;$i<=2000;$i++)
             {
               echo "<option value=".$i.">".$i."</option>";
             }
            ?>
              </select></td>
            </tr>
          
                <tr><td>Tempat Lahir :</td><td><input type="text" name="tmptlahir"></td></tr>
                <tr><td>Agama :</td><td>
                        <select name="jurusan">
                            <option value="Islam">Islam</option>
                            <option value="Katolik">Katolik</option>
                            <option value="budha">Budha</option>
                            <option value="hindu">hindu</option>
                            <option value="protestan">protestan</option>
                            <option value="khonghucu">khonhucu</option>
                        </select>
                    </td></tr>
            <tr><td>Tahun Masuk :</td><td>
            <select name="thnmsk" size="1" id="thnmsk">
            <?php
             for ($i=2000;$i<=2020;$i++)
             {
               echo "<option value=".$i.">".$i."</option>";
             }
            ?>
            </td></tr>
 
            <tr><td colspan="2"><button type="submit" value="simpan">Submit</button></td></tr>
            </table>
        </form>
     </body>
</html>