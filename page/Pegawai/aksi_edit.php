<!-- EDIT DATA-->
 <?php 

include 'koneksi/-koneksi.php';
         $no_urut = @$_POST['no_urut'];
              @$nip =  mysqli_real_escape_string ($koneksi, $_POST['nip']);
        @$id_pangkat = mysqli_real_escape_string($koneksi, $_POST['id_pangkat']);
        @$id_jabatan = mysqli_real_escape_string($koneksi, $_POST['id_jabatan']);
        @$id_status = mysqli_real_escape_string($koneksi, $_POST['id_status']);
        @$id_pengangkat = mysqli_real_escape_string($koneksi, $_POST['id_pengangkat']);
        @$nama_pegawai = mysqli_real_escape_string($koneksi, $_POST['nama_pegawai']);
        @$tempat = mysqli_real_escape_string($koneksi, $_POST['tempat']);
        @$tanggal_lahir = mysqli_real_escape_string($koneksi, $_POST['tanggal_lahir']);
        @$jk = mysqli_real_escape_string($koneksi, $_POST['jk']);
        @$agama = mysqli_real_escape_string($koneksi, $_POST['agama']);
        @$status_kawin = mysqli_real_escape_string($koneksi, $_POST['status_kawin']);
        @$ibu = mysqli_real_escape_string($koneksi,$_POST['ibu']);
        @$alamat = mysqli_real_escape_string($koneksi, $_POST['alamat']);
        @$email = mysqli_real_escape_string($koneksi, $_POST['email']);
        @$hp = mysqli_real_escape_string($koneksi, $_POST['hp']);
        @$no_sk = mysqli_real_escape_string($koneksi, $_POST['no_sk']);
        @$tmt_pangkat = mysqli_real_escape_string($koneksi, $_POST['tmt_pangkat']);

        /// pendidikan
        @$jenjang = mysqli_real_escape_string($koneksi, $_POST['jenjang']);
        @$satuan_pendidikan = mysqli_real_escape_string($koneksi, $_POST['satuan_pendidikan']);
        @$tahun_masuk = mysqli_real_escape_string($koneksi, $_POST['tahun_masuk']);
        @$tahun_lulus = mysqli_real_escape_string($koneksi, $_POST['tahun_lulus']);
        // Diklat
        @$jenis_diklat = mysqli_real_escape_string($koneksi, $_POST['jenis_diklat']);
        @$nama_diklat = mysqli_real_escape_string($koneksi, $_POST['nama_diklat']);
        @$penyelenggara = mysqli_real_escape_string($koneksi,$_POST['penyelenggara']);
        @$tahun = mysqli_real_escape_string($koneksi, $_POST['tahun']);
        @$tingkat = mysqli_real_escape_string($koneksi, $_POST['tingkat']);
        @$waktu = mysqli_real_escape_string($koneksi, $_POST['waktu']);





      $query= mysqli_query($koneksi, "UPDATE tb_pegawai SET nip ='$nip',id_pangkat='$id_pangkat',id_jabatan='$id_jabatan',id_status='$id_status',id_pengangkat='$id_pengangkat',nama_pegawai='$nama_pegawai',tempat='$tempat',tanggal_lahir='$tanggal_lahir',jk='$jk',agama='$agama',status_kawin='$status_kawin',ibu='$ibu',alamat='$alamat',email='$email',hp='$hp',no_sk='$no_sk',tmt_pangkat='$tmt_pangkat' WHERE no_urut='$kdpeg' ");
      $query1=mysqli_query($koneksi, "UPDATE tb_pendidikan SET jenjang ='$jenjang',satuan_pendidikan='$satuan_pendidikan',tahun_masuk='$tahun_masuk',tahun_lulus='$tahun_lulus' WHERE id_pend='$kdpeg' ");
         $query2= mysqli_query($koneksi, "UPDATE tb_diklat SET jenis_diklat ='$jenis_diklat',nama_diklat='$nama_diklat',penyelenggara='$penyelenggara',tahun='$tahun',tingkat='$tingkat',waktu='$tingkat' WHERE id_diklat='$kdpeg' ");




  ?>