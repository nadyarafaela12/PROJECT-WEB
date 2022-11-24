<?php
// Skrip berikut ini adalah skrip yang bertugas untuk meng-export data tadi ke excell
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=LAPORAN DATA NILAI SISSWA SD Swasta Muahmmdiyah.xls");?>
<div id="header" align="center" style="font-family: Cooper Black; ">
  <img src="ei.jpg" width='70' height='70' alt='user' style='background-color: dodgerblue;
  border: 3px solid dodgerblue;
  border-radius: 100%;' ><br>
  <b style="font-size: 24px;">LAPORAN</b><br>
  <b>DATA NILAI SISSWA </b><br>
  SD Swasta Muahmmdiyah
  <hr style="border:1px solid; color: black;">
</div>
<div align="center" style="border:1px solid;">
  <table width="100%" border="1" style="border-collapse: collapse;">
    <tr style=" height: 40px; background-color: rgb(255,127,80); color: white;">
    <th>No</th>
    <th>NIS</th>
    <th>Nama Siswa</th>
    <th>Jurusan</th>
    <th>Kelas</th> 
    <th>Semester</th>    
    <th>TP</th>
    <th>Wali Kelas</th>
    <th>Mata Pelajaran</th>
    <th>UH</th>
    <th>MID</th>
    <th>UAS</th> 
    <th>Rata-rata</th>
    <th>Keterangan</th>
    </tr>
    
      <?php
include "koneksi.php";
$sql = mysqli_query($koneksi, "SELECT * from tb_nilai") or die("");
$no=1;
while ($data=mysqli_fetch_array($sql))
{
?>

  <tr>
	<td><?php echo $no; ?>.</td>
	<td><?php echo $data['nis']; ?> </td>
	<td><?php echo $data['nm_siswa']; ?></td>
	<td><?php echo $data['jurusan']; ?></td>
	<td><?php echo $data['kelas']; ?></td>
	<td><?php echo $data['smt']; ?></td>
	<td><?php echo $data['tp']; ?></td>
	<td><?php echo $data['nm_guru']; ?></td>
	<td><?php echo $data['mapel']; ?></td>
	<td><?php echo $data['uh']; ?></td>
	<td><?php echo $data['mid']; ?></td>
	<td><?php echo $data['uas']; ?></td>
	<td><?php echo $data['rata']; ?></td>
	<td><?php echo $data['ket']; ?></td>
     </tr>
      <?php
  $no++;
  };
  ?>

  </table>  
</div>
<br> <br>
<div id="footer" align="right">
  <b>Bukiitinggi,<?php echo date (" d F Y") ?></b><br>
  <b>Wali Kelas</b><br> <br> <br> <br>
  <b style="text-decoration: underline">.................</b><br>
  

  
</div>