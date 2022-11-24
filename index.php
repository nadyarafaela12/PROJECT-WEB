

<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>SIMPEG SD Swasta Muhammadiyah</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="material/css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="material/css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>
  <nav class="red accent-3" role="navigation">
    <div class="nav-wrapper container"><a id="logo-container" href="#" class="brand-logo"><b>SIMPEG</b><small style="font-size: 19px;"> SD Swasta Muhammadiyah</small></a>      
      <ul class="right hide-on-med-and-down">
        <li><a class="dropdown-button" href="?page=home">Home<i class="material-icons left">home</i></a></li>
          <li><a class="dropdown-button" href="#!" data-activates="dropdown1">Profil Sekolah<i class="material-icons left">school</i></a></li>
          <li><a class="dropdown-button" href="?page=grafik">Grafik<i class="material-icons left">timeline</i></a></li>
          <li><a class="dropdown-button" href="?page=lokasi">Lokasi<i class="material-icons left">person_pin_circle</i></a></li>
           <li><a class="dropdown-button" href="?page=petunjuk">Petunjuk<i class="material-icons left">info</i></a></li>    
        
         <li><a href="login.php" class="btn btn-floating blue lighten-2 pulse" data-activates="dropdown1"><i class="material-icons">person_outline</i></a></li>
        <!-- Dropdown Structure -->
<ul id="dropdown1" class="dropdown-content">
  <li><a href="#!">Profil Sekolah</a></li>
  <li><a href="?page=sejarah">Sejarah Sekolah</a></li>
  <li class="divider"></li>
  <li><a href="?page=visi">Visi dan Misi</a></li>
</ul>
      </ul>
      <ul id="nav-mobile" class="side-nav">
        <li><a href="login.php">Login</a></li>        
      </ul>
      <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
    </div>
  </nav>



 <div class="container z-depth-4">



<ul class="collapsible" data-collapsible="accordion">
  <li>
    <div class="collapsible-header">
      <i class="material-icons">label_outline</i><b>Welcome !!</b>
    </div>
    <div class="collapsible-body">
      <div class="slider">
    <ul class="slides">
      <li>
         <img src="material/slide/1.jpg"> <!-- random image -->
        <div class="caption center-align">
          <h3>Sekolah Dasar Swasta Muhammadiyah</h3>
          <h5 class="light grey-text text-lighten-3">Sistem Informasi Kepegawaian Sekolah</h5>
        </div>
      </li>
      <li>
        <img src="material/slide/2.jpg"> <!-- random image -->
        <div class="caption left-align">
          <h3>SISTEM INFORMASI KEPEGAWAIAN</h3>
          <h5 class="light grey-text text-lighten-3">Sekolah Dasar Swasta Muhammadiyah</h5>
        </div>
      </li>
      <li>
        <img src="material/slide/3.jpg"> <!-- random image-->
        <div class="caption right-align">
          <h3>SIKAP OPTIMIS AKAN MEMBAWAMU PADA TITIK KESUKSESAN</h3>
          <h5 class="light grey-text text-lighten-3">Sekolah Dasar Swasta Muhammadiyah</h5>
        </div>
      </li>
      <li>
        <img src="material/slide/4.jpg"> <!-- random image -->
        <div class="caption center-align">
          <h3>AYOO .. BELAJAR...!</h3>
          <h5 class=" text-black">Sekolah Dasar Swasta Muhammadiyah</h5>
        </div>
      </li>
    </ul>
  
  </div>

    </div>
  </li>

</ul>

<!---KONENT-->
<div class="card-panel" style="min-height: 400px;">


<?php 
 error_reporting(0);
$page = @$_GET['page'];
if ($page=='home') {
  echo "<center>
  <i class='material-icons' style='font-size: 130px; color:red;'>school</i>
  <h3>Sistem Informasi Kepegawaian</h3>
  <h4>SD Swasta Muhammadiyah</h4>
</center>";
  # code...
}elseif ($page=='profil') {
  echo "PROFIL";
  # code...
}elseif ($page=='grafik') {
include 'page/Grafik/index_grafik.php';
  # code...
}elseif ($page=='lokasi') {
include 'page/lokasi.php';
  # code...
}elseif ($page=='petunjuk') {
include 'page/petunjuk.php';
  # code...
}elseif ($page=='sejarah') {
include 'page/sejarah.php';
  # code...
}elseif ($page=='visi') {
include 'page/visi.php';
  # code...
}
elseif ($page=='') {
  echo "<center>
  <i class='material-icons' style='font-size: 130px;'>school</i>
  <h3>Sistem Informasi Kepegawaian</h3>
  <h4>SD Swasta Muhammadiyah</h4>
</center>";
  # code...
}else{
  echo "404 Not Found";
}


 ?>

</div>
<!--END KONTENT-->


</div> <!--CONTAINER-->

  <footer class="page-footer blue-grey darken-4">
    <div class="container">
      <div class="row">
        <div class="col l6 s12">
          <h5 class="white-text">About SIMPEG</h5>
          <p class="white-text text-lighten-4"></p>


        </div>
        <div class="col l3 s12">
          <h5 class="white-text-text">Follow</h5>
          <ul>
            <li><a class="white-text" href=""></a></li>
             <li><a class="white-text" href=""></a></li>
             <li><a class="white-text" href=""></a></li>
           
           
          </ul>
        </div>
        <div class="col l3 s12">
          <h5 class="white-text-text">Kunjungi</h5>
          <ul>
            <li><a class="white-text" target="_blank" href=""</a></li>
             <li><a class="white-text" href=""</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="footer-copyright red darken-1">
      <div class="container"><a target="_blank" class="yellow-text text-lighten-3" href=""></a>
      </div>
    </div>
  </footer>


  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
   <script src="material/js/jquery-3.2.1.min.js"></script>
  
  <script src="material/js/materialize.js"></script>
  <script src="material/js/init.js"></script>
    <script type="text/javascript">
     $(document).ready(function(){
      $('.slider').slider();

    });

      
  </script>
  <script type="text/javascript">
      $(document).ready(function(){
    $('.materialboxed').materialbox();
  });
      $(document).ready(function(){
      $('.carousel').carousel();
    });
        $(document).ready(function(){
    $('.materialboxed').materialbox();
  });
  </script>


  </body>
</html>
