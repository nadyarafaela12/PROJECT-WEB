<?php
    
    //$con = mysqli_connect('localhost', 'username', '', 'db_sipeg');

    // mysql_connect("localhost","root","") or die(mysql_error());
    // mysql_select_db("db_skripsiku") or die(mysql_error());

    $server = "localhost";
    $username = "root";
    $password = "";
    $database = "db_sipeg";

    $koneksi = mysqli_connect($server,$username,$password,$database)or die("gagal, database tidak ditemukan");

// $link = mysqli_connect("localhost","username","password","database") or die("Error " . mysqli_error($link));
?>
