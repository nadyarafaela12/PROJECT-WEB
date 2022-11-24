<!DOCTYPE html>
<html>
<head>
    <title></title>
    <!-- SWEAT ALERT-->
<script src="asset/dist/sweetalert.min.js"></script>
<link rel="stylesheet" href="asset/dist/sweetalert.css">
<!-- END-->
<ol class="breadcrumb breadcrumb-col-cyan">
<li><a href="javascript:void(0);"><i class="material-icons">dashboard</i> Dashboard</a></li>
<li class="active"><i class="material-icons">description</i>Edit Nilai Siswa</li>
</ol>

<!-- Inline Layout -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                EDIT DATA NILAI SISWA
                            </h2>
                        </div>
                        <div class="body">
<?php
include 'koneksi/-koneksi.php';
$kdgr = @$_GET['kdgr'];
$sql = mysqli_query($koneksi,"SELECT * from tb_nilai where nis = '$kdgr'") or die("");
$data = mysqli_fetch_array($sql);

?>
                            <form action="" method="post">
                                <div class="row clearfix">
                                      <div class="col-lg-12 col-md-6 col-sm-6 col-xs-12">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input name="nis" type="text" class="form-control" placeholder="NIS" value="<?php echo $data['nis'] ;?>">
                                            </div>
                                        </div>
                                    </div>
                                    <!--
                                <div class="irs-demo">
                                <b class="label label-info">DATA PELAJARAN</b>
                             
                                </div>
                                     <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                    <p>
                                        <b> Semester</b>
                                    </p>
                                    <select disabled="" name="smt" class="form-control show-tick" data-live-search="true">
                                        <option name="smt" value="Ganjil">1- Ganjil</option>
                                        <option name="smt" value="Genap">2-Genap</option>
                                        
                                    </select>                              
                                    </div>
                                     <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                    <p>
                                        <b>Mata Pelajaran</b>
                                    </p>
                                    <select disabled="" class="form-control show-tick" name="mapel" data-live-search="true">
                                    <?php 
                                    include 'koneksi/-koneksi.php';
                                    $mapel = mysqli_query($koneksi,"SELECT nama FROM tb_mapel");
                                    while($hasil = mysqli_fetch_array($mapel)){
                                    echo "<option name='mapel'>$hasil[nama]</option>";
                                    }
                                    ?>
                                    </select>                               
                                    </div>


                                     <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                        
                                    <p>
                                        <b>Wali Kelas</b>
                                    </p>
                                    <select disabled="" class="form-control show-tick" name="nm_guru" data-live-search="true">
                                    <?php 
                                    include 'koneksi/-koneksi.php';
                                    $nama = mysqli_query($koneksi,"SELECT nama FROM tb_guru");
                                    while($hasil = mysqli_fetch_array($nama)){
                                    echo "<option name='nm_guru'>$hasil[nama]</option>";
                                    }
                                    ?>
                                    </select>                             
                                    </div>
                                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                        
                                    <p>
                                        <b>Tahun Pelajaran</b>
                                    </p>
                                    <select disabled="" name="tp" class="form-control show-tick" data-live-search="true">
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
                                  
                                    <div class="irs-demo">
                                <b class="label label-info">DATA SISWA</b>                               
                                </div>
                                <div class="col-lg-12 col-md-6 col-sm-6 col-xs-12">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input disabled="" name="nm_siswa" type="text" class="form-control" placeholder="Nama Peserta Didik" value="<?php echo $data['nm_siswa'] ?>" >
                                            </div>
                                        </div>
                                    </div>

                                     <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                    <p>
                                        <b> Kelas</b>
                                    </p>
                                    <select disabled="" name="kelas" class="form-control show-tick" data-live-search="true">
                                        <option name="kelas" value="TKJ/X">TKJ/X</option>
                                        <option name="kelas" value="TKJ/XI">TKJ/XI</option>
                                        <option name="kelas" value="TKJ/XII">TKJ/XII</option>
                                        
                                    </select>                              
                                    </div>

                                     <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                    <p>
                                        <b> Jurusan</b>
                                    </p>
                                    <select disabled="" name="jurusan" class="form-control show-tick" data-live-search="true">
                                        <option name="jurusan" value="TKJ">TKJ</option>
                                        <option name="jurusan" value="Multimedia">Multimedia</option>
                                        <option name="jurusan" value="RPL">RPL</option>
                                        
                                    </select>                              
                                    </div> -->
                                  
                                     
                                    <div class="irs-demo">
                                <b class="label label-info">DATA NILAI</b>
                               
                                </div>
                                    <div class="col-lg-12 col-md-6 col-sm-6 col-xs-12">
                                        <div class="form-group">
                                            <div class="irs-demo">
                                            <b>Nilai UH</b>
                                            <input name="uh" type="text" id="range_01" value="" />
                                            </div>                                           
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-6 col-sm-6 col-xs-12">
                                        <div class="form-group">
                                            <div class="irs-demo">
                                            <b>Nilai MID</b>
                                            <input name="mid" type="text" id="yamin_01" value="" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-6 col-sm-6 col-xs-12">
                                        <div class="form-group">
                                            <div class="irs-demo">
                                            <b>Nilai UAS</b>
                                            <input name="uas" type="text" id="yamin_02" value="" />
                                            </div>
                                        </div>
                                    </div>


                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                                        <button type="submit" name="edit" value="simpan" class="btn btn-info"><i class="glyphicon glyphicon-floppy-disk"></i> Edit</button>
         <!--<button type="submit" name="simpan" class="btn btn-info"> <i class="material-icons">save</i> SIMPAN DATA</button> -->
         <button type="reset" class="btn btn-danger"> <i class="material-icons">reply_all</i>Reset</button> 
                                    </div>
                                </div>
                            </form>
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

$nr=($uh+$mid+$uas)/3;
if ($nr>59)
{ $ket="TUNTAS";}
else
{$ket="TIDAK TUNTAS";}

$update=mysqli_query($koneksi,"UPDATE tb_nilai SET uh='$uh',mid='$mid',uas='$uas',rata='$nr',ket='$ket' WHERE nis='$kdgr' ") or die("");
  ?>
<script type="text/javascript">
swal(" Sukses !", "Data berhasil Di Ubah!", "success")
window.location.href="?page=guru&action=nilai";     
</script>
<?php 
}



?>
                            
                        
              

                 
                        </div>
                    </div>
                </div>
            </div>
              <p class="text-right">
<a href="javascript:history.back()">
<button type="button" class="btn btn-danger btn-circle-lg waves-effect waves-circle waves-float"  data-toggle="tooltip" data-placement="top" title=" Kembali">
<i class="material-icons">undo</i>
</button></a> </p>
            <!-- #END# Inline Layout -->
                     <!-- #END# Horizontal Layout -->
               <script src="asset/dist/sweetalert.min.js"></script>

</body>
</html>