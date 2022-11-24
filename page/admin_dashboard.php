<!--<ol class="breadcrumb breadcrumb-col-cyan">
<li><a href="?page="><i class="material-icons">dashboard</i> Dashboard</a></li>
</ol>-->

<div class="row clearfix">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<div class="card">
<div class="header">
<h2>
<h3 style="color: black;"><i class="material-icons">dashboard</i> Halaman Administrator</h3>
<small>
<b> Assalamu'alaikum</></b>
 <code><?php echo "  <b style='font-family:FZShuTi; font-size:16px;'>". $_SESSION['nama']."</b></code> <b> Anda login sebagai</b> <code><b style='font-family:FZShuTi; font-size:16px;'>". $_SESSION['level']."</b></code>"; ?>
</small>
</h2>
</div>
<!-- kotak dasboard-->
<div class="body">
    <!-- Widgets -->
<div class="row clearfix">
            	<?php
include 'koneksi/-koneksi.php';
$peg =mysqli_num_rows(mysqli_query($koneksi, "SELECT * FROM tb_pegawai"));
$gr =mysqli_num_rows(mysqli_query($koneksi, "SELECT * FROM tb_guru"));
$nilai =mysqli_num_rows(mysqli_query($koneksi, "SELECT * FROM tb_nilai"));
$agenda =mysqli_num_rows(mysqli_query($koneksi, "SELECT * FROM tb_agenda"));
$user =mysqli_num_rows(mysqli_query($koneksi, "SELECT * FROM tb_user"));
$lap =mysqli_num_rows(mysqli_query($koneksi, "SELECT * FROM tb_pegawai,tb_guru,tb_nilai,tb_agenda"));
?>


<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
	<div class="card" style="background-color: #344D67;">
		<div class="info-box-2 hover-zoom-effect" style="background-color: #344D67;">
			<div class="icon">
			<i class="material-icons" style=" font-size: 80px;
color: #F44336;
padding: 8px;
border: 1px;">people</i>
			</div>
				<div class="content">
					<div class="text" style="font-size: 20px; font-family: FZShuTi; color: white;">Jumlah Pegawai</div>
					<div class="number" style="font-size: 30px; font-family: STXingkai; color:white;"><?php echo "".$peg." ";?></div>
				</div>
		</div>
		 &nbsp; &nbsp; &nbsp;<a style="color: white;" href="?page=admin&action=pegawai" data-toggle="tooltip" data-placement="top" title=" Detail Data"><i class="material-icons" style=" font-size: 35px;
color: white;
padding: 8px;
border: 1px;">input</i></a> <br> <br>
	</div>
</div>
<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
	<div class="card" style="background-color: #344D67;">
		<div class="info-box-2 hover-zoom-effect" style="background-color: #344D67;">
			<div class="icon">
			<i class="material-icons" style=" font-size: 80px;
color: #F44336;
padding: 8px;
border: 1px;">person</i>
			</div>
				<div class="content">
					<div class="text" style="font-size: 20px; font-family: FZShuTi; color:white;">Jumlah Guru</div>
					<div class="number" style="font-size: 30px; font-family: STXingkai; color:white;"><?php echo "".$gr." ";?></div>
				</div>
		</div>
		 &nbsp;&nbsp; &nbsp; <a style="color: white;" href="?page=guru" data-toggle="tooltip" data-placement="top" title=" Detail Data"><i class="material-icons" style=" font-size: 35px;
color: white;
padding: 8px;
border: 1px;">input</i></a> <br> <br>
	</div>
</div>
<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
	<div class="card" style="background-color: #344D67;">
		<div class="info-box-2 hover-zoom-effect" style="background-color: #344D67;">
			<div class="icon">
			<i class="material-icons" style=" font-size: 80px;
color: #F44336;
padding: 8px;
border: 1px;">star</i>
			</div>
				<div class="content">
					<div class="text" style="font-size: 20px; font-family: FZShuTi; color:white;">Jumlah Nilai</div>
					<div class="number" style="font-size: 30px; font-family: STXingkai; color:white;"><?php echo "".$nilai." ";?></div>
				</div>
		</div>
		 &nbsp; &nbsp; &nbsp;<a style="color: white;" href="?page=guru&action=nilai" data-toggle="tooltip" data-placement="top" title=" Detail Data"><i class="material-icons" style=" font-size: 35px;
color: white;
padding: 8px;
border: 1px;">input</i></a> <br> <br>
	</div>
</div>
<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
	<div class="card" style="background-color: #344D67;">
		<div class="info-box-2 hover-zoom-effect" style="background-color: #344D67;">
			<div class="icon">
			<i class="material-icons" style=" font-size: 80px;
color: #F44336;
padding: 8px;
border: 1px;">note</i>
			</div>
				<div class="content">
					<div class="text" style="font-size: 20px; font-family: FZShuTi; color:white;">Jumlah Agenda</div>
					<div class="number" style="font-size: 30px; font-family: STXingkai; color:white;"><?php echo "".$agenda." ";?></div>
				</div>
		</div>
		 &nbsp; &nbsp; &nbsp;<a style="color: white;" href="?page=guru&action=agenda" data-toggle="tooltip" data-placement="top" title=" Detail Data"><i class="material-icons" style=" font-size: 35px;
color: white;
padding: 8px;
border: 1px;">input</i></a> <br> <br>
	</div>
</div>
<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
	<div class="card" style="background-color: #344D67;">
		<div class="info-box-2 hover-zoom-effect" style="background-color: #344D67;">
			<div class="icon">
			<i class="material-icons" style=" font-size: 80px;
color: #F44336;
padding: 8px;
border: 1px;">print</i>
			</div>
				<div class="content">
					<div class="text" style="font-size: 20px; font-family: FZShuTi; color:white;">Jumlah Laporan</div>
					<div class="number" style="font-size: 30px; font-family: STXingkai; color:white;"><?php echo "".$lap." ";?></div>
				</div>
		</div>
		 &nbsp; &nbsp; &nbsp;<a style="color: white;" href="?page=admin&action=pegawai" data-toggle="tooltip" data-placement="top" title=" Detail Data"><i class="material-icons" style=" font-size: 35px;
color: white;
padding: 8px;
border: 1px;">input</i></a> <br> <br>
	</div>
</div>
<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
	<div class="card" style="background-color: #344D67;">
		<div class="info-box-2 hover-zoom-effect" style="background-color: #344D67;">
			<div class="icon">
			<i class="material-icons" style=" font-size: 80px;
color: #F44336;
padding: 8px;
border: 1px;">mood</i>
			</div>
				<div class="content">
					<div class="text" style="font-size: 20px; font-family: FZShuTi; color:white;">Jumlah User</div>
					<div class="number" style="font-size: 30px; font-family: STXingkai; color:white;"><?php echo "".$user." ";?></div> 
				</div>
		</div>
		 &nbsp; &nbsp; &nbsp;<a style="color: white;" href="?page=admin&action=tampil_user" data-toggle="tooltip" data-placement="top" title=" Detail Data"><i class="material-icons" style=" font-size: 35px;
color: white;
padding: 8px;
border: 1px;">input</i></a> <br> <br>
	</div>
</div>


</div>
</div>
