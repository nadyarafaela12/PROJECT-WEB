<!--<ol class="breadcrumb breadcrumb-col-cyan">
<li><a href="?page="><i class="material-icons">dashboard</i> Dashboard // <b><?php echo $_SESSION['level']; ?> </b></a></li>
</ol>-->
<div class="alert alert-dismissible" style="background-color: #81C6E8;" role="alert">
<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
<h5 style="font-family:FZShuTi "><b>Selamat Datang !! </b> <?php echo $_SESSION['nama']; ?></h5>
</div>
<div class="row clearfix">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<div class="card">
<div class="header">
<h2>
<h3 style="color: black;"><i class="material-icons">dashboard</i> Halaman Guru</h3>
<small>
<b>Hai..</></b>
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
$guru =mysqli_num_rows(mysqli_query($koneksi,"SELECT * FROM tb_guru"));
$nilai =mysqli_num_rows(mysqli_query($koneksi,"SELECT * FROM tb_nilai"));
$agenda =mysqli_num_rows(mysqli_query($koneksi,"SELECT * FROM tb_agenda"));
?>



<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
	<div class="card" style="background-color: #81C6E8;">
		<div class="info-box-2 hover-zoom-effect" style="background-color: #81C6E8;">
			<div class="icon">
			<i class="material-icons" style=" font-size: 80px;
color: white;
padding: 8px;
border: 1px;">people</i>
			</div>
				<div class="content">
					<div class="text" style="font-size: 20px; font-family: FZShuTi; color:white;"><b>Jumlah Guru</b></div>
					<div class="number" style="font-size: 30px; font-family: STXingkai; color:white;"><?php echo "".$guru." ";?></div>
				</div>
		</div>
		 &nbsp; &nbsp; &nbsp;<a style="color: white;" href="?page=guru" data-toggle="tooltip" data-placement="top" title=" Detail Data"><i class="material-icons" style=" font-size: 35px;
color: white;
padding: 8px;
border: 1px;">input</i></a> <br> <br>
	</div>
</div>
<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
	<div class="card" style="background-color: #81C6E8;">
		<div class="info-box-2 hover-zoom-effect" style="background-color: #81C6E8;">
			<div class="icon">
			<i class="material-icons" style=" font-size: 80px;
color: white;
padding: 8px;
border: 1px;">person</i>
			</div>
				<div class="content">
					<div class="text" style="font-size: 20px; font-family: FZShuTi; color:white;"><b>Jumlah Agenda</b></div>
					<div class="number" style="font-size: 30px; font-family: STXingkai; color:white;"><?php echo "".$agenda." ";?></div>
				</div>
		</div>
		 &nbsp;&nbsp; &nbsp; <a style="color: white;" href="?page=guru&action=agenda" data-toggle="tooltip" data-placement="top" title=" Detail Data"><i class="material-icons" style=" font-size: 35px;
color: white;
padding: 8px;
border: 1px;">input</i></a> <br> <br>
	</div>
</div>
<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
	<div class="card" style="background-color: #81C6E8;">
		<div class="info-box-2 hover-zoom-effect" style="background-color: #81C6E8;">
			<div class="icon">
			<i class="material-icons" style=" font-size: 80px;
color: white;
padding: 8px;
border: 1px;">star</i>
			</div>
				<div class="content">
					<div class="text" style="font-size: 20px; font-family: FZShuTi; color:white;"><b>Jumlah Nilai</b></div>
					<div class="number" style="font-size: 30px; font-family: STXingkai; color:white;"><?php echo "".$nilai." ";?></div>
				</div>
		</div>
		 &nbsp; &nbsp; &nbsp;<a style="color: white;" href="?page=guru&action=nilai" data-toggle="tooltip" data-placement="top" title=" Detail Data"><i class="material-icons" style=" font-size: 35px;
color: white;
padding: 8px;
border: 1px;">input</i></a> <br> <br>
	</div>
</div>

<!-- batas-->
<center>
	<h3 style="color: black;">SISTEM INFORMASI KEPEGAWAIAN</h3>
	<h4 style="color: black;">Sekolah Dasar Swasta Muhammadiyah</h4>
</center>
</div>
</div>
