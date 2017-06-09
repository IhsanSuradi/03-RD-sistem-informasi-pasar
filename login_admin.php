<?php 
	session_start();
	require_once('koneksi.php');
	
	$id = $_POST['id'];
	$password = $_POST['password'];
	
	$sql = "SELECT password FROM admin WHERE id='$id' and password='$password'";
	$result = mysqli_query($dbconn, $sql) or die(mysqli_error($dbconn));
    $count = mysqli_num_rows($result);

if ($count == 1){
     $_SESSION['id']=$id;
    echo "<html>";
  		echo "<head>";
        echo "<script> alert ('Anda Berhasil Login Sebagai Admin !'); </script>";
  		echo "<meta http-equiv=\"refresh\"content=\"0; url=admin.php\" />";
  		echo "</head>";
  		echo "</html>";
}else{  
    echo "<html>";
  		echo "<head>";
        echo "<script> alert ('ID atau Password yang anda masukkan salah  !!!'); </script>";
  		echo "<meta http-equiv=\"refresh\"content=\"0; url=index.php\" />";
  		echo "</head>";
  		echo "</html>";
}


?>