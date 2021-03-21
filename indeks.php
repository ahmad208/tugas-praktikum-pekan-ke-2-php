<?php
error_reporting("E_ALL & ~E_NOTICE");
?>
<!DOCTYPE HTML>
<html>
<head>
 <title>Menghitung Nilai Matakuliah</title>
</head>
<body>
<?php
/* Fungsi Konversi nilai ke huruf */
/* Created by Daniel Ok */

function grade($nilai)
{
 if($nilai <= 100 ) { $grade = "A"; }
 if($nilai <  80 )  { $grade = "B"; }
 if($nilai <  70 )  { $grade = "C"; }
 if($nilai <  60 )  { $grade = "D"; }
 if($nilai <  50 )  { $grade = "E"; }

 return $grade;
}
?>

<form align="center" action="" method="post">
<div>NIM Mahasiswa</div>
<input type="text" name="nim" placeholder="NIM">
<div>Nama Mahasiswa</div>
<input type="text" name="nama" placeholder="Nama Lengkap"> 
<div>Jumlah Kehadiran</div>
<input type="text" name="jk" size="10">
<div>Jumlah Pertemuan</div>
<input type="text" name="jp" size="10">
<div>Nilai Tugas</div>
<input type="text" name="nilaitugas" size="10" placeholder="0-100"> 
<div>Nilai UTS</div>
<input type="text" name="nilaiuts" size="10" placeholder="0-100"> 
<div>Nilai UAS</div>
<input type="text" name="nilaiuas" size="10" placeholder="0-100"> 
<br>
<input type="submit" value="Simpan Data">
</form>
</br>
<hr>
<?php
$nim  = trim($_POST[nim]);
$nama  = trim($_POST[nama]);
$jk  = trim($_POST[jk]);
$jp  = trim($_POST[jp]);
$tugas  = trim($_POST[nilaitugas]);
$uts  = trim($_POST[nilaiuts]);
$uas  = trim($_POST[nilaiuas]);

$absensi= ($jk/$jp)*100;

$nilai  = ($absensi*0.1)+ ($tugas*0.2)+ ($uts*0.3)+ ($uas*0.4);
$grade  = grade($nilai);
?>
<h2 align= "center" >Data Nilai Mahasiswa</h2>

<table width="100%" bgcolor="silver" cellspacing="4">
 <tr bgcolor="lightblue">
 <th width="100">NIM</th>
 <th>Nama Mahasiswa</th>
 <th width="100">Nilai Absensi</th>
 <th width="100">Nilai Tugas</th>
 <th width="100">Nilai UTS</th>
 <th width="100">Nilai UAS</th>
 <th width="100">Grade</th>
 </tr>

 <tr bgcolor="white">
 <td align ="center"><?php echo $nim;?></td>
 <td><?php echo $nama;?></td>
 <td align ="center"><?php echo $absensi;?></td>
 <td align ="center"><?php echo $tugas;?></td>
 <td align ="center"><?php echo $uts;?></td>
 <td align ="center"><?php echo $uas;?></td>
 <td align ="center"><?php echo $grade;?></td>
 </tr>
</table>
</body>
</html>