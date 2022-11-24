<script src="assets/dist/sweetalert.min.js"></script>
  <link rel="stylesheet" href="assets/dist/sweetalert.css">

<?php
include 'koneksi/-koneksi.php';
$kdjjg = @$_GET['kdjjg'];
mysqli_query($koneksi, "delete from tb_jenjang where id_jenjang = '$kdjjg'") or die("");
?>
 <script type="text/javascript">
        swal(" Sukses !", "Data berhasil di hapus!", "success") 
        window.location.href="?page=admin&action=jenjang";       
 </script>


