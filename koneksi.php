<?php

$servername = "localhost";
$username = "root";
$password= "";
$dbname = "rpl";

//buat koneksi
$dbconn = new mysqli($servername, $username, $password, $dbname);

//cek koneksi
if($dbconn->connect_error)
{
	die("Koneksi gagal :(" . $dbconn->connect_error);
	
}

?>
