<script src="assets/dist/sweetalert.min.js"></script>
  <link rel="stylesheet" href="assets/dist/sweetalert.css">

<?php
include 'koneksi/-koneksi.php';
$kdstatus = @$_GET['kdstatus'];
mysqli_query($koneksi, "delete from tb_sumber_gaji where id_sumbergaji = '$kdstatus'") or die("Gaji anda be;um cair");
?>
 <script type="text/javascript">
        swal(" Sukses !", "Data berhasil di hapus!", "success") 
        window.location.href="?page=admin&action=gaji";       
 </script>


