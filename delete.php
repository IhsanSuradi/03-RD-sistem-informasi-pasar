<?php
	session_start();
	include "koneksi.php";
    $id =$_POST['id'];
	
	$query="DELETE FROM `toko` WHERE id='$id'";
	$result=$dbconn->query($query);
	
	if($result){
		echo "<html>";
  		echo "<head>";
  		echo "<meta http-equiv=\"refresh\"content=\"0; url=admin.php\" />";
  		echo "</head>";
  		echo "</html>";
	}else{
		echo"gagal";
	}
?>