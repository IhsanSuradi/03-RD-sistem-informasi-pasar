<?php
@ob_start();
session_start();
?>
<?php virtual('/sip/Connections/sip.php'); ?>
<?php
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  $theValue = (!get_magic_quotes_gpc()) ? addslashes($theValue) : $theValue;

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? "'" . doubleval($theValue) . "'" : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}

$editFormAction = $_SERVER['PHP_SELF'];
if (isset($_SERVER['QUERY_STRING'])) {
  $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
}

if ((isset($_POST["MM_update"])) && ($_POST["MM_update"] == "form1")) {
  $updateSQL = sprintf("UPDATE toko SET jenis_toko=%s, username=%s, password=%s, nama=%s, email=%s, no_hp=%s, lokasipasar=%s, status=%s WHERE id=%s",
                       GetSQLValueString($_POST['jenis_toko'], "text"),
                       GetSQLValueString($_POST['username'], "text"),
                       GetSQLValueString($_POST['password'], "text"),
                       GetSQLValueString($_POST['nama'], "text"),
                       GetSQLValueString($_POST['email'], "text"),
                       GetSQLValueString($_POST['no_hp'], "text"),
                       GetSQLValueString($_POST['lokasipasar'], "text"),
                       GetSQLValueString($_POST['status'], "int"),
                       GetSQLValueString($_POST['id'], "int"));
if (empty($_POST['jenis_toko']) || empty($_POST['username']) || empty($_POST['password']) || empty($_POST['nama']) || empty($_POST['email']) || empty($_POST['no_hp']) || empty($_POST['lokasipasar']))
		{
			echo "<script> alert ('Data Anda Belum Lengkap !!!'); </script>";
		}
else {				   

  mysql_select_db($database_sip, $sip);
  $Result1 = mysql_query($updateSQL, $sip) or die(mysql_error());

  $updateGoTo = "/sip/index.php";
  echo "<html>";
  echo "<head>";
  echo "<script> alert ('Profile Anda Berhasil Di Ubah !'); </script>";
  echo "<script> alert ('Silahkan Masuk Kembali Untuk Melanjutkan !'); </script>";
  echo "<meta http-equiv=\"refresh\"content=\"0; url=index.php\" />";
  echo "</head>";
  echo "</html>";
  }
}

mysql_select_db($database_sip, $sip);
$query_edit = "SELECT * FROM toko";
$edit = mysql_query($query_edit, $sip) or die(mysql_error());
$row_edit = mysql_fetch_assoc($edit);
$totalRows_edit = mysql_num_rows($edit);


?>
<!DOCTYPE html>
<html>
    <head>

        <!-- /.website title -->
        <title>PROFILE</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

        <!-- CSS Files -->
        <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="css/font-awesome.min.css" rel="stylesheet">
        <link href="fonts/icon-7-stroke/css/pe-icon-7-stroke.css" rel="stylesheet">
        <link href="css/animate.css" rel="stylesheet" media="screen">
        <link href="css/owl.theme.css" rel="stylesheet">
        <link href="css/owl.carousel.css" rel="stylesheet">

        <!-- Colors -->
        <link href="css/css-app.css" rel="stylesheet" media="screen">
        <!-- <link href="css/css-app-green.css" rel="stylesheet" media="screen"> -->
        <!-- <link href="css/css-app-purple.css" rel="stylesheet" media="screen"> -->
        <!-- <link href="css/css-app-red.css" rel="stylesheet" media="screen"> -->
        <!-- <link href="css/css-app-orange.css" rel="stylesheet" media="screen"> -->
        <!-- <link href="css/css-app-yellow.css" rel="stylesheet" media="screen"> -->

        <!-- Google Fonts -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic" />
    </head>

    <body data-spy="scroll" data-target="#navbar-scroll">

        <!-- /.preloader -->
        <div id="preloader"></div>
        <div id="top"></div>

        <!-- /.parallax full screen background image -->
        <div class="fullscreen landing parallax" style="background-image:url('images/bg.jpg');" data-img-width="2000" data-img-height="1325" data-diff="100">

            
							<p align="left">&nbsp;</p>
							<p align="left"><a align="left" href="profile.php" class="btn-default"><< Kembali</a> </p>
							<p align="left">&nbsp;</p>
							<p align="left">&nbsp;</p>
							<!-- Name Section -->
  
 
	  
      <p>&nbsp;</p>
    <div class="row">
    <div class="col-md-8 col-md-offset-1">
      <form method="post" name="form1" action="<?php echo $editFormAction; ?>">
        <table width="638" align="center">
          <tr valign="baseline">            </tr>
		  <div class="col-sm-4">
          <tr valign="baseline">
              <td>
			  <p>Jenis Toko</p>
			  <p>
                <select type="Jenis Toko" name="jenis_toko" placeholder="Jenis Toko" class="form-control">
                  <option value="Sayur-sayuran">Toko Sayur-sayuran</option>
                  <option value="Buah-buahan">Toko Buah-buahan</option>
                  <option value="Kelontong">Toko Kelontong</option>
                  <option value="Daging">Toko Daging</option>
                  <option value="Ikan">Toko Ikan</option>
                </select>
</p>
           </td>
          </tr>
		  </div>
		  <div class="col-sm-4">
          <tr valign="baseline">
            <td><p>
              <input type="text" name="username" value="" size="32" placeholder="User Name" class="form-control">
            </p>
            </td>
          </tr>
		  </div>
		  <div class="col-sm-4">
          <tr valign="baseline">
            <td><p>
              <input type="password" name="password" value="" size="32" placeholder="Password" class="form-control">
            </p>
             </td>
          </tr>
		  </div>
		  <div class="col-sm-4">
          <tr valign="baseline">
            <td><p>
              <input type="text" name="nama" value="" size="32" placeholder="Nama Toko" class="form-control">
            </p>
             </td>
          </tr>
		  </div>
		  <div class="col-sm-4">
          <tr valign="baseline">
            <td><p>
              <input type="text" name="email" value="" size="32" placeholder="E-mail" class="form-control">
            </p>
            </td>
          </tr>
		  </div>
		  <div class="col-sm-4">
          <tr valign="baseline">
            <td><p>
              <input type="text" name="no_hp" value="" size="32" placeholder="NO HP / Telp" class="form-control">
            </p>
            </td>
          </tr>
		  </div>
		  <div class="col-sm-4">
          <tr valign="baseline">
            <td><input type="text" name="lokasipasar" value="" size="32" placeholder="Lokasi Pasar" class="form-control"></td>
          </tr>
		  </div>
          <tr valign="baseline">
            <td><div align="right">
              <input type="reset" value="Batal" class="btn btn-primary">
              <input name="submit" type="submit" class="btn btn-primary" value="Simpan">
            </div></td>
			<td>&nbsp;</td>
          </tr>
        </table>
        <input type="hidden" name="MM_update" value="form1">
        <input type="hidden" name="id" value="<?php echo $row_edit['id']; ?>">
      </form>
	  </div>
     </div>
      <p>&nbsp;</p>
    </div><!-- /.col-lg-12 -->
</div><!-- /.row -->



      
        <!-- /.footer -->
        
					<p align="center">Copyright Dinas Perdagangan 2017 - SIP</p>
                      <p align="center"><a href="" target="_blank">About Us</a></p>
				 

        <!-- /.javascript files -->
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/custom.js"></script>
        <script src="js/jquery.sticky.js"></script>
        <script src="js/wow.min.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/ekko-lightbox-min.js"></script>
        <script type="text/javascript">
            $( document ).delegate( '*[data-toggle="lightbox"]', 'click', function ( event ) {
                event.preventDefault();
                $( this ).ekkoLightbox();
            } );
        </script>
        <script>
            new WOW().init();
        </script>
    </body>
</html>
<?php
mysql_free_result($edit);
?>
