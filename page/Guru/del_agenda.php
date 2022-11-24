<script src="assets/dist/sweetalert.min.js"></script>
  <link rel="stylesheet" href="assets/dist/sweetalert.css">

<?php
include 'koneksi/-koneksi.php';
$kdgr = @$_GET['kdgr'];
mysqlI_query($koneksi, "delete from tb_agenda where id_agenda = '$kdgr'") or die("");
?>
 <script type="text/javascript">
        swal(" Sukses !", "Data berhasil di hapus!", "success") 
        window.location.href="?page=guru&action=agenda";       
 </script>