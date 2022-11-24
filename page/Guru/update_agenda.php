<ol class="breadcrumb breadcrumb-col-cyan">
<li><a href="javascript:void(0);"><i class="material-icons">dashboard</i> Dashboard</a></li>
<li class="active"><i class="material-icons">description</i>Edit Agenda Guru</li>
</ol>

<!-- Inline Layout -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                EDIT AGENDA GURU
                            </h2>
                        </div>
                        <div class="body">
                        	<?php
						include 'koneksi/-koneksi.php';
						$kdgr = @$_GET['kdgr'];
						$sql = mysqli_query($koneksi, "SELECT * from tb_agenda where id_agenda = '$kdgr'") or die("");
						$data = mysqli_fetch_array($sql);

						?>
                            <form action="" method="post">
                                <div class="row clearfix">
                                       <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                                        
                                    <p>
                                        <b>Guru Mata Pelajaran</b>
                                    </p>
                                    <select value="<?php echo $data['nm_guru']; ?> " class="form-control show-tick" name="nm_guru" data-live-search="true">
                                    <?php 
                                    include 'koneksi/-koneksi.php';
                                    $nama = mysqli_query($koneksi, "SELECT nama FROM tb_guru");
                                    while($hasil = mysqli_fetch_array($nama)){
                                    echo "<option name='nm_guru'>$hasil[nama]</option>";
                                    }
                                    ?>
                                    </select>                             
                                    </div>
                                    <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                                        
                                    <p>
                                        <b>Tahun Pelajaran</b>
                                    </p>
                                    <select name="tp" class="form-control show-tick" data-live-search="true">
                                        <option name="tp" value="2013/2014">2013/2014</option>
                                        <option name="tp" value="2014/2015">2014/2015</option>
                                        <option name="tp" value="2015/2016">2015/2016</option>
                                        <option name="tp" value="2016/2017">2016/2017</option>
                                        <option name="tp" value="2017/2018">2017/2018</option>
                                        <option name="tp" value="2018/2019">2018/2019</option>
                                        <option name="tp" value="2019/2020">2019/2020</option>
                                        <option name="tp" value="2020/2021">2020/2021</option>
                                    </select>                              
                                    </div>
                                    <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                                    <p>
                                        <b>Mata Pelajaran</b>
                                    </p>
                                    <select class="form-control show-tick" name="mapel" data-live-search="true">
                                    <?php 
                                    include 'koneksi/-koneksi.php';
                                    $mapel = mysqli_query($koneksi, "SELECT nama FROM tb_mapel");
                                    while($hasil = mysqli_fetch_array($mapel)){
                                    echo "<option name='mapel'>$hasil[nama]</option>";
                                    }
                                    ?>
                                    </select>                               
                                    </div>
                                     <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                                    <p>
                                        <b> Kelas</b>
                                    </p>
                                    <select name="kelas" class="form-control show-tick" data-live-search="true">
                                        <option name="kelas" value="TKJ/X">TKJ/X</option>
                                        <option name="kelas" value="TKJ/XI">TKJ/XI</option>
                                        <option name="kelas" value="TKJ/XII">TKJ/XII</option>
                                        
                                    </select>                              
                                    </div>
                                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input name="tgl" type="text" id="date" class="form-control" placeholder="Hari/Tanggal" value="<?php echo $data['tgl']; ?> ">
                                            </div>
                                        </div>
                                    </div>
                                      
                                      <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input name="materi" type="text" class="form-control" placeholder="Materi" value="<?php echo $data['materi']; ?> " >
                                            </div>
                                        </div>
                                    </div>
                                      <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input name="absen" type="text" class="form-control" placeholder="Absen Siswa" value="<?php echo $data['absen']; ?> " >
                                            </div>
                                        </div>
                                    </div>
                                     <div class="col-lg-6 col-md-14 col-sm-12 col-xs-12">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input name="ket" type="text" class="form-control" placeholder="Keterangan" value="<?php echo $data['ket']; ?> " >
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        
                                        <input type="submit" name="edit" class="btn btn-success btn-lg m-l-15 waves-effect" value="EDIT">
                                    </div>
                                </div>
                            </form>
                                               <?php
include 'koneksi/-koneksi.php';
if (@$_POST['edit']) {
@$id_agenda = mysqli_real_escape_string($koneksi, $_POST['id_agenda']);
@$nm_guru = mysqli_real_escape_string($koneksi, $_POST['nm_guru']);
@$tp = mysqli_real_escape_string($koneksi, $_POST['tp']);
@$mapel = mysqli_real_escape_string($koneksi, $_POST['mapel']);
@$tgl = mysqli_real_escape_string($koneksi, $_POST['tgl']);
@$kelas = mysqli_real_escape_string($koneksi, $_POST['kelas']);
@$absen = mysqli_real_escape_string($koneksi, $_POST['absen']);
@$ket = mysqli_real_escape_string($koneksi, $_POST['ket']);


$update=mysqli_query($koneksi, "UPDATE tb_agenda SET nm_guru='$nm_guru',tp='$tp',mapel='$mapel',tgl='$tgl',kelas='$kelas',absen='$absen',ket='$ket' WHERE id_agenda='$kdgr' ") or die("");
  ?>
<script type="text/javascript">
swal(" Sukses !", "Data berhasil Di Ubah!", "success")
window.location.href="?page=guru&action=agenda";     
</script>
<?php 
}



?>

                        </div>

                    </div>
                </div>
            </div>
              <p class="text-left">
<a href="javascript:history.back()">
<button type="button" class="btn btn-danger btn-circle-lg waves-effect waves-circle waves-float"  data-toggle="tooltip" data-placement="top" title=" Kembali">
<i class="material-icons">undo</i>
</button></a> </p>
            <!-- #END# Inline Layout -->