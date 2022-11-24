?page=guru&action=proses_edit                                                        <?php
include 'koneksi/-koneksi.php';
if (@$_POST['edit']) {
@$nis = mysqli_real_escape_string($koneksi, $_POST['nis']);
@$smt = mysqli_real_escape_string($koneksi, $_POST['smt']);
@$jurusan = mysqli_real_escape_string($koneksi, $_POST['jurusan']);
@$nm_siswa = mysqli_real_escape_string($koneksi, $_POST['nm_siswa']);
@$nm_guru = mysqli_real_escape_string($koneksi, $_POST['nm_guru']);
@$tp = mysqli_real_escape_string($koneksi, $_POST['tp']);
@$mapel = mysqli_real_escape_string($koneksi, $_POST['mapel']);
@$kelas = mysqli_real_escape_string($koneksi, $_POST['kelas']);
@$uh = mysqli_real_escape_string($koneksi,$_POST['uh']);
@$mid = mysqli_real_escape_string($koneksi, $_POST['mid']);
@$uas = mysqli_real_escape_string($koneksi, $_POST['uas']);
$update=mysqli_query($koneksi, "UPDATE tb_guru SET nama='$nama', jk='$jk',tmp_lhr='$tmp_lhr',tgl_lhr='$tgl_lhr',agama='$agama', jabatan='$jabatan',mapel='$mapel',alamat='$alamat',telepon='$telepon' WHERE nip='$kdgr' ") or die("");
  ?>
<script type="text/javascript">
swal(" Sukses !", "Data berhasil Di Ubah!", "success")
window.location.href="?page=guru";     
</script>
<?php 
}



?>

                                                  <?php
include 'koneksi/-koneksi.php';
if (@$_POST['edit']) {
@$nis = mysqli_real_escape_string($koneksi,$_POST['nis']);
@$smt = mysqli_real_escape_string($koneksi,$_POST['smt']);
@$jurusan = mysqli_real_escape_string($koneksi,$_POST['jurusan']);
@$nm_siswa = mysqli_real_escape_string($koneksi,$_POST['nm_siswa']);
@$nm_guru = mysqli_real_escape_string($koneksi,$_POST['nm_guru']);
@$tp = mysqli_real_escape_string($koneksi,$_POST['tp']);
@$mapel = mysqli_real_escape_string($koneksi,$_POST['mapel']);
@$kelas = mysqli_real_escape_string($koneksi,$_POST['kelas']);
@$uh = mysqli_real_escape_string($koneksi,$_POST['uh']);
@$mid = mysqli_real_escape_string($koneksi,$_POST['mid']);
@$uas = mysqli_real_escape_string($koneksi,$_POST['uas']);
$update=mysqli_query($koneksi,"UPDATE tb_guru SET nama='$nama', jk='$jk',tmp_lhr='$tmp_lhr',tgl_lhr='$tgl_lhr',agama='$agama', jabatan='$jabatan',mapel='$mapel',alamat='$alamat',telepon='$telepon' WHERE nip='$kdgr' ") or die("");
  ?>
<script type="text/javascript">
swal(" Sukses !", "Data berhasil Di Ubah!", "success")
window.location.href="?page=guru";     
</script>
<?php 
}



?>
  <!doctype html public "-//W3C//DTD HTML 4.0 //EN"> 
<html>
<head>
       <title></title>
</head>
<body>
	     	<?php
						include 'koneksi/-koneksi.php';
						$kdgr = @$_GET['kdgr'];
						$sql = mysqli_query($koneksi, "SELECT * from tb_nilai where nis = '$kdgr'") or die("");
						$data = mysqli_fetch_array($sql);

						?>
<?php
$smt=mysqli_real_escape_string($koneksi, $_POST['smt']);
$jurusan=mysqli_real_escape_string($koneksi, $_POST['jurusan']);
$nm_guru=mysqli_real_escape_string($koneksi, $_POST['nm_guru']);
$tp=mysqli_real_escape_string($koneksi,$_POST['tp']);
$mapel=mysqli_real_escape_string($koneksi,$_POST['mapel']);
$nis=mysqli_real_escape_string($koneksi,$_POST['nis']);
$nm_siswa=mysqli_real_escape_string($koneksi,$_POST['nm_siswa']);
$kelas=mysqli_real_escape_string($koneksi,$_POST['kelas']);
$uh=mysqli_real_escape_string($koneksi,$_POST['uh']);
$mid=mysqli_real_escape_string($koneksi,$_POST['mid']);
$uas =mysqli_real_escape_string($koneksi,$_POST['uas']);

$nr=($uh+$mid+$uas)/3;
if ($nr>59)
{ $ket="TUNTAS";}
else
{$ket="TIDAK TUNTAS";}

include "koneksi/-koneksi.php";
mysqli_query($koneksi, "UPDATE tb_nilai SET uh='$uh',mid='$mid',uas='$uas',nr='$nr',ket='$ket' WHERE nis='$kdgr' ");
?>
<script type="text/javascript">
        swal(" Sukses !", "Data berhasil di edit!", "success") 
        window.location.href="?page=guru&action=nilai";       
 </script>
</body>
</html>