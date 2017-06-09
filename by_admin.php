<?php
	session_start();
	include "koneksi.php";
	
	$jenis_toko =$_POST['jenis_toko'];
    $username =$_POST['username'];
	$password = $_POST['password'];
	$nama = $_POST['nama'];
    $email =$_POST['email'];
    $no_hp =$_POST['no_hp'];
    $lokasipasar =$_POST['lokasipasar'];
	
	$query="INSERT INTO toko (jenis_toko,username,password,nama,email,no_hp,lokasipasar) VALUES('$jenis_toko','$username','$password','$nama','$email','$no_hp','$lokasipasar');";
	$result=$dbconn->query($query);
	
	if($result){
		$_SESSION['username']=$username;
		echo "<html>";
  		echo "<head>";
        echo "<script> alert ('Toko Telah Terdaftar !'); </script>";
  		echo "<meta http-equiv=\"refresh\"content=\"0; url=admin.php\" />";
  		echo "</head>";
  		echo "</html>";
	}else{
		echo"gagal";
	}
?>