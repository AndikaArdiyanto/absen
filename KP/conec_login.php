<?php session_start();
date_default_timezone_set("Asia/Jakarta");
$Host = "localhost";
$User = "root";
$Pass = "";
$Db_name = "lodin_db";
$mysqli = new mysqli( $Host, $User, $Pass, $Db_name );
if ($mysqli->connect_error){
echo 'Gagal koneksi ke database';
} else { } ?>