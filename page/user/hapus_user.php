<script src="assets/dist/sweetalert.min.js"></script>
  <link rel="stylesheet" href="assets/dist/sweetalert.css">

<?php
include 'koneksi/-koneksi.php';
$kduser = @$_GET['kduser'];
mysqli_query($koneksi,"delete from tb_user where kode_user = '$kduser'") or die("");
?>
 <script type="text/javascript">
        swal(" Sukses !", "Data berhasil di hapus!", "success") 
        window.location.href="?page=admin&action=tampil_user";       
 </script>


