
<?php
if(isset($_POST['submit'])){
$b=$_POST['ipa'];
$c=$_POST['mtk'];
$d=$_POST['bhs'];
$e=$_POST['esh'];
$kd=$_POST['kode'];
$skhum=$_POST['skhu'];
$asl=$_POST['asal'];
$nop=$_POST['no'];
$nama=$_POST['nama'];
$nim=$_POST['nim'];
$tempat=$_POST['tempat'];
$tanggal=$_POST['tanggal'];
$bulan=$_POST['bulan'];
$tahun=$_POST['tahun'];
$kelamin=$_POST['gender'];
$alamat=$_POST['alamat'];
$a=$b+$c+$d+$e;


    ?>
<fieldset style="width:25%; margin-left:400px; margin-top:50px;margin-bottom:50px;">
<h2>Form Pendaftaran Siswa</h2>
<table border="0" rules="none">
<tr>
    <td> Nama</td>
    <td> : </td>
    <td colspan="7">
        <?php 
        if (!empty($nama))
            {
                echo $nama ;
            }
        else 
            {   
            echo"<script>alert('Masukkan Nama')</script>";
            }
        ?>
</tr>
<tr>
    <td> NO.Pendaftaran </td>
    <td> : </td>
    <td colspan="7"><?php echo $nop ?></td>
</tr>
<tr>
    <td> NIM </td>
    <td> : </td>
    <td colspan="7"><?php echo $nim ?></td>
</tr>
<tr>
    <td> Asal sekolah </td>
    <td> : </td>
    <td colspan="7"><?php echo $asl ?></td>
</tr>
<tr>
    <td> No.SKHUN </td>
    <td> : </td>
    <td colspan="7"><?php echo $skhum ?></td>
</tr>
<tr>
    <td> IPA </td>
    <td> : </td>
    <td colspan="7"><?php echo $b ?></td>
</tr>
<tr>
    <td> MTK </td>
    <td> : </td>
    <td colspan="7"><?php echo $c ?></td>
</tr>
<tr>
    <td> Bahasa </td>
    <td> : </td>
    <td colspan="7"><?php echo $d ?></td>
</tr>
<tr>
    <td> Eanglish </td>
    <td> : </td>
    <td colspan="7"><?php echo $e ?></td>
</tr>
<tr>
    <td> Total Nilai </td>
    <td> : </td>
    <td colspan="7"><?php echo $a ?></td>
</tr>
<tr>

    <td> Tempat Lahir </td>
    <td> : </td>
    <td colspan="7"><?php echo $tempat ?></td>
</tr>
<tr>
    <td> Tanggal Lahir </td>
    <td> : </td>
    <td> <?php echo $tanggal ?> </td>
    <td> Bulan </td>
    <td> : </td>
    <td>
    <?php 
    if($bulan=="1")
        {
            echo "Januari";
        }
    else if($bulan=="2")
        {
            echo "Februari";
        }
    else if($bulan=="3")
        {
            echo "Maret";
        }
    else if($bulan=="4")
        {
            echo "April";
        }
    else if($bulan=="5")
        {
            echo "Mei";
        }
    else if($bulan=="6")
        {
            echo "Juni";
        }
    else if($bulan=="7")
        {
            echo "Juli";
        }
    else if($bulan=="8")
        {
            echo "Agustus";
        }
    else if($bulan=="9")
        {
            echo "September";
        }
    else if($bulan=="10")
        {
            echo "Oktober";
        }
    else if($bulan=="11")
        {
            echo "November";
        }
    else if($bulan=="12")
        {
            echo "Desember";
        }
    else
        {
            echo "Salah";
        }
    ?>
    </td>
    <td> Tahun </td>
    <td> : </td>
    <td> <?php echo $tahun ?> </td>       
</tr>
<tr>
    <td> Jenis Kelamin </td>
    <td> : </td>
    <td colspan="7"><?php echo $kelamin ?></td>
</tr>
<tr>
    <td> Alamat </td>
    <td> : </td>
    <td colspan="7"><?php echo $alamat ?></td>
</tr>
<tr>
    <td> Kode Pos </td>
    <td> : </td>
    <td colspan="7"><?php echo $kd ?></td>
</tr>
</table>
    </fieldset>
<?php
}
else
{

}
?>