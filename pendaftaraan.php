<html>
<head>
<title>Pendaftaran</title>
</head>

<body style=" background-color:skyblue;">
    <fieldset style="margin-right:100px; margin-left:200px; width:60%; background-color:white;">
<form method="post" action="getpendaftaran.php" NAME="input">
    <h2 style="color:green">PENDAFTARAAN SMK ASSALAM</h2>
    <hr>
<table border="0">
<tr>
    <td> Nama Mahasiswa </td>
    <td> : </td>
    <td colspan="7"> <input type="text" name="nama" size="54" required/> </td>
</tr>
<tr>
    <td> No.Pendaftaran </td>
    <td> : </td>
    <td colspan="7"> <input type="number" name="no"required/></td>
</tr>
<tr>
    <td> NIM </td>
    <td> : </td>
    <td colspan="7"> <input type="number" name="nim"required/></td>
</tr>
<tr>
    <td> Asal sekolah </td>
    <td> : </td>
    <td colspan="7"> <input type="text" name="asal" required/></td>
</tr>
<tr>
    <td> No.SKHUN</td>
    <td> : </td>
    <td colspan="7"> <input type="number" name="skhu" required/></td>
</tr>
<tr>
    <td>Nilai UN</tr>
</tr>
     <tr>
          <td>*jangan pake koma<br>/isi harus Bilangan bulat</td>
    </tr>
    <tr>
    <td>IPA</td>
     <td> : </td>
    <td colspan="7"> <input type="number" name="ipa"required/></td></tr>
    <tr>
    <td>MTK</td>
     <td> : </td>
    <td colspan="7"> <input type="number" name="mtk"required/></td></tr>
    <tr>
    <td>B.Indonesia</td>
     <td> : </td>
    <td colspan="7"> <input type="number" name="bhs"required/></td></tr>
    <tr>
    <td>English</td>
     <td> : </td>
    <td colspan="7"> <input type="number" name="esh"required/></td>
</tr>
<tr>
    <td> Tempat Lahir </td>
    <td> : </td>
    <td colspan="7"> <input type="text" name="tempat"required/></td>
</tr>
<tr>
    <td> Tanggal Lahir </td>
    <td> : </td>
    <td> <input type="number" name="tanggal" size="10"required/> </td>
    <td> Bulan </td>
    <td> : </td>
    <td><select name="bulan"required>
        <option value="1" selected="selected"> Jan </option>
        <option value="2" > Feb </option>
        <option value="3" > Mar </option>
        <option value="4" > Apr </option>
        <option value="5" > Mei </option>
        <option value="6" > Jun </option>
        <option value="7" > Jul </option>
        <option value="8" > Agu </option>
        <option value="9" > Sep </option>
        <option value="10" > Okt </option>
        <option value="11" > Nov </option>
        <option value="12" > Des </option></select></td>
    <td> Tahun </td>
    <td> : </td>
    <td> <input type="number" name="tahun" size="10"required/> </td>       
</tr>
<tr>
    <td> Jenis Kelamin </td>
    <td> : </td>
    <td colspan="7">  <input type="radio" name="gender" value="Male"required>Male<br>
                      <input type="radio" name="gender" value="Female">Female<br></td>
</tr>
<tr>
    <td> Alamat </td>
    <td> : </td>
    <td colspan="7"><textarea name="alamat" cols="41" rows="7"required></textarea></td>
</tr>
<tr>
    <td> Kode POS </td>
    <td> : </td>
    <td colspan="5"> <input type="number" name="kode"required/></td>
</tr>
<tr>
    <td colspan="9" align="right"><input type="submit" name="submit" value="Simpan" /><input type="reset" name="reset" value="Reset" /></td>
</tr>
</table>
</fieldset>
</body>
</html>


<font color="blue"><h3></h3></font>
