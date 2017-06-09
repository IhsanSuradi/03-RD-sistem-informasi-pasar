<?php

	include "koneksi.php";
	include "init_session.php";

?>
<?php virtual('/sip/Connections/sip.php'); ?>
<?php
mysql_select_db($database_sip, $sip);
$query_login = "SELECT * FROM toko";
$login = mysql_query($query_login, $sip) or die(mysql_error());
$row_login = mysql_fetch_assoc($login);
$totalRows_login = mysql_num_rows($login);
?>
<?php
// *** Validate request to login to this site.
if (!isset($_SESSION)) {
  session_start();
}

$loginFormAction = $_SERVER['PHP_SELF'];
if (isset($_GET['accesscheck'])) {
  $_SESSION['PrevUrl'] = $_GET['accesscheck'];
}

if (isset($_POST['username'])) {
  $loginUsername=$_POST['username'];
  $password=$_POST['password'];
  $MM_fldUserAuthorization = "";
  $MM_redirectLoginSuccess = "/sip/profile.php";
  $MM_redirectLoginFailed = "/sip/index.php";
  $MM_redirecttoReferrer = false;
  mysql_select_db($database_sip, $sip);
  
  $LoginRS__query=sprintf("SELECT username, password FROM toko WHERE username='%s' AND password='%s'",
    get_magic_quotes_gpc() ? $loginUsername : addslashes($loginUsername), get_magic_quotes_gpc() ? $password : addslashes($password)); 
   
  $LoginRS = mysql_query($LoginRS__query, $sip) or die(mysql_error());
  $loginFoundUser = mysql_num_rows($LoginRS);
  if ($loginFoundUser) {
     $loginStrGroup = "";
    
    //declare two session variables and assign them
    $_SESSION['MM_Username'] = $loginUsername;
    $_SESSION['MM_UserGroup'] = $loginStrGroup;	      

    if (isset($_SESSION['PrevUrl']) && false) {
      $MM_redirectLoginSuccess = $_SESSION['PrevUrl'];	
    }
  		echo "<html>";
  		echo "<head>";
  		echo "<meta http-equiv=\"refresh\"content=\"0; url=profile.php\" />";
  		echo "</head>";
  		echo "</html>";
  		}
  	else {
   		echo "<script> alert ('Username atau Password yang anda masukkan salah  !!!'); </script>";
  	}
}
?>
<!DOCTYPE html>
<html>
    <head>

        <!-- /.website title -->
        <title>WELCOME</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

        <!-- CSS Files -->
        <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="css/font-awesome.min.css" rel="stylesheet">
        <link href="fonts/icon-7-stroke/css/pe-icon-7-stroke.css" rel="stylesheet">
        <link href="css/animate.css" rel="stylesheet" media="screen">
        <link href="css/owl.theme.css" rel="stylesheet">
        <link href="css/owl.carousel.css" rel="stylesheet">

        <!-- Colors -->
        <link href="css/css-index.css" rel="stylesheet" media="screen">
        <!-- <link href="css/css-index-green.css" rel="stylesheet" media="screen"> -->
        <!-- <link href="css/css-index-purple.css" rel="stylesheet" media="screen"> -->
        <!-- <link href="css/css-index-red.css" rel="stylesheet" media="screen"> -->
        <!-- <link href="css/css-index-orange.css" rel="stylesheet" media="screen"> -->
        <!-- <link href="css/css-index-yellow.css" rel="stylesheet" media="screen"> -->

        <!-- Google Fonts -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic" />

    </head>

    <body data-spy="scroll" data-target="#navbar-scroll">

        <!-- /.preloader -->
        <div id="preloader"></div>
        <div id="top"></div>

        <!-- /.parallax full screen background image -->
        <div class="fullscreen landing parallax" style="background-image:url('images/bg.jpg');" data-img-width="2000" data-img-height="1333" data-diff="100">

            <div class="overlay">
                <div class="container">
                    <div class="row">
                        <div class="col-md-7">

                            <!-- /.logo -->
                            <div class="logo wow fadeInDown"> <a href=""><img src="images/logo.png" alt="logo" width="320" height="259"></a> 
                              <form action="infobarang.php" method="get">
								<input type="text" name="q" size="60" placeholder="Cari Disini ..." required>
								<input type="button" value="CARI">
							  </form>
							</div>
							

                            <!-- /.main title -->
                            <h1 class="wow fadeInLeft">
                                Sistem Informasi Pasar
                            </h1>

                            <!-- /.header paragraph -->
                            <div class="landing-text wow fadeInUp">
                                <p>Sistem Informasi Pasar (SIP) Merupakan Sebuah Sistem Yang Dikembangkan Oleh Dinas Perdagangan, Sistem Ini Akan Sangat Bermanfaat Bagi Masyarakat. Cari Belanjaan Anda Disini Dengan Mudah.
								Jika Anda Pedagang Yang Telah Terdaftar, Silahkan Sign In Untuk Melanjutkan.</p>
                            </div>				  

                            <!-- /.header button -->
                            <div class="head-btn wow fadeInLeft">
                                <a href="help.php" class="btn-primary">Cara Penggunaan</a>
                                <a href="ContactUs.php" class="btn-default">Contact Us</a>
                                <a href="list_toko.php" class="btn-default">List Toko</a>
                            </div>



                        </div> 

                        <!-- /.signup form -->
                        <div class="col-md-5">

                            <div class="signup-header wow fadeInUp">
                                <h3 class="form-title text-center">MASUK SEBAGAI PEDAGANG</h3>
                                <form ACTION="<?php echo $loginFormAction; ?>" class="form-header" role="form" method="POST" id="login" name="login">
                                    <input type="hidden" name="u" value="503bdae81fde8612ff4944435">
                                    <input type="hidden" name="id" value="bfdba52708">
                                    <div class="form-group">
                                        <input class="form-control input-lg" name="username" id="username" type="text" placeholder="User Name" required>
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control input-lg" name="password" id="password" type="password" placeholder="Password" required>
                                    </div>
                                    <div class="form-group last">
                                        <input type="submit" class="btn btn-warning btn-block btn-lg" value="SIGN IN">
                                    </div>
                                    
                              </form>
                                <p class="privacy text-center">Anda Belum Terdaftar ? Silahkan Klick <a class="btn btn-warning btn-block btn-lg"  href="daftar.php" value="DAFTAR">DAFTAR</a></p>
                            </div>				

                        </div>
                    </div>
                </div> 
            </div> 
        </div>

       
                          

        <!-- /.footer -->
        <footer id="footer">
            <div class="container">
                <div class="col-sm-4 col-sm-offset-4">
                    
                    <div class="text-center wow fadeInUp" style="font-size: 14px;">
                      <p>Copyright Dinas Perdagangan 2017 - SIP</p>
                      <p><a href="" target="_blank">About Us</a></p>
                    </div>
                    <a href="#" class="scrollToTop"><i class="pe-7s-up-arrow pe-va"></i></a>
                </div>	
            </div>	
        </footer>

        <!-- /.javascript files -->
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/custom.js"></script>
        <script src="js/jquery.sticky.js"></script>
        <script src="js/wow.min.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script>
                                    new WOW().init();
        </script>
    </body>
</html>
<?php
mysql_free_result($login);
?>