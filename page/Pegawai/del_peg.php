

<?php
include 'koneksi/-koneksi.php';
$kdpeg = @$_GET['kdpeg'];
mysqli_query($koneksi, "delete from tb_pegawai where no_urut = '$kdpeg'") or die(" ");
mysqli_query($koneksi, "delete from tb_pendidikan where id_pend = '$kdpeg'") or die("");
mysqli_query($koneksi, "delete from tb_diklat where id_diklat = '$kdpeg'") or die("");
?>
 <script>
        alert(" Data berhasil di hapus!") 
        window.location.href="?page=admin&action=pegawai";       
 </script>












