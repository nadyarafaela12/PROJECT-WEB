<script src="assets/dist/sweetalert.min.js"></script>
  <link rel="stylesheet" href="assets/dist/sweetalert.css">

<?php
include 'koneksi/-koneksi.php';
$kdjab = @$_GET['kdjab'];
mysqli_query($koneksi, "delete from tb_lbg_pengangkat where id_pengangkat = '$kdjab'") or die("");
?>
 <script type="text/javascript">
        swal(" Sukses !", "Data berhasil di hapus!", "success") 
        window.location.href="?page=admin&action=lembaga";       
 </script>


