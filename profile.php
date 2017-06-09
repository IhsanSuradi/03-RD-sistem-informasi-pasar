<?php
@ob_start();
session_start();
?>
<?php virtual('/sip/Connections/sip.php'); ?>
<?php
//initialize the session
if (!isset($_SESSION)) {
  session_start();
}

// ** Logout the current user. **
$logoutAction = $_SERVER['PHP_SELF']."?doLogout=true";
if ((isset($_SERVER['QUERY_STRING'])) && ($_SERVER['QUERY_STRING'] != "")){
  $logoutAction .="&". htmlentities($_SERVER['QUERY_STRING']);
}

if ((isset($_GET['doLogout'])) &&($_GET['doLogout']=="true")){
  //to fully log out a visitor we need to clear the session varialbles
  $_SESSION['MM_Username'] = NULL;
  $_SESSION['MM_UserGroup'] = NULL;
  $_SESSION['PrevUrl'] = NULL;
  unset($_SESSION['MM_Username']);
  unset($_SESSION['MM_UserGroup']);
  unset($_SESSION['PrevUrl']);
	
  $logoutGoTo = "/sip/index.php";
  if ($logoutGoTo) {
    	echo "<html>";
  		echo "<head>";
		echo "<script> alert ('Anda Berhasil Log Out !!!'); </script>";
  		echo "<meta http-equiv=\"refresh\"content=\"0; url=index.php\" />";
  		echo "</head>";
  		echo "</html>";
  }
}
?>
<?php
$colname_logout = "-1";
if (isset($_SESSION['MM_Username'])) {
  $colname_logout = (get_magic_quotes_gpc()) ? $_SESSION['MM_Username'] : addslashes($_SESSION['MM_Username']);
}
mysql_select_db($database_sip, $sip);
$query_logout = sprintf("SELECT * FROM toko WHERE username = '%s'", $colname_logout);
$logout = mysql_query($query_logout, $sip) or die(mysql_error());
$row_logout = mysql_fetch_assoc($logout);
$totalRows_logout = mysql_num_rows($logout);
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

            <div class="overlay">
                <div class="container">
                    <div class="row">
                        <div class="col-md-7">

                            <!-- /.logo -->
                            <div class="logo wow fadeInDown"> <a href=""><img src="images/logo.png" alt="logo"></a></div>
                            <!-- /.main title -->
                            <h1 class="wow fadeInLeft"><?php echo $row_logout['nama']; ?></h1>

                            <!-- /.header paragraph -->
                            <div class="landing-text wow fadeInLeft">
                                <p>Jenis Toko 	: <?php echo $row_logout['jenis_toko']; ?></p>
								<p>Lokasi Pasar			: <?php echo $row_logout['lokasipasar']; ?></p>
								<p>No HandPhone			: <?php echo $row_logout['no_hp']; ?></p>
								<p>E-Mail				: <?php echo $row_logout['email']; ?></p>
                            </div>				  

                            <!-- /.header button -->
                            <div class="head-btn wow fadeInLeft">
                                <a href="#feature" class="btn-primary">Edit Profile</a>
                                <a href="#screenshot" class="btn-default">Update Informasi Pasarmu</a>
                            </div>
							<p><a href="#" class="btn-default">Buka / Tutup</a> </p>
							<p>&nbsp;</p>
							
							
							
					  </div> 

                        <!-- /.phone image -->
                        <div class="col-md-5">
                            <p align="right">&nbsp;</p>
                            <p align="right"><a align="right" href="<?php echo $logoutAction ?>" class="btn-default">Log Out</a> </p>
                            <p><img src="images/mobile.png" alt="phone" class="header-phone img-responsive wow fadeInRight">
                          </p>
                        </div>
                    </div>
                </div> 
            </div> 
        </div>            

        <!-- /.feature section -->
        <div id="feature">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1 col-sm-12 text-center feature-title">

                        <!-- /.feature title -->
                        <h2>Edit Profile Toko Anda</h2>
                        <p>Anda Bisa Mengubah Informasi Toko Anda Secara Menyeluruh</p>
                    </div>
                </div>
                <div class="row row-feat">
                    <div class="col-md-4 text-center">

                        <!-- /.feature image -->
                         <div class="feature-img">
                            <img src="images/feature-image.jpg" alt="image" class="img-responsive wow fadeInLeft">
                        </div>
                    </div>

                    <div class="col-md-8">

                       <!-- /.feature 4 -->
                        <div class="col-sm-6 feat-list">
                            <i class="pe-7s-users pe-5x pe-va wow fadeInUp" data-wow-delay="0.6s"></i>
                            <div class="inner">
                                <h4><a href="/sip/editprofile.php">Profile Toko</a></h4>
                                <p>Edit Profile Toko Anda</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- /.screenshot section -->
        <div id="screenshot">
            <div class="container" >
                <div class="text-center">
                    <h2 class="wow fadeInLeft">BARANG DAGANGAN ANDA</h2>
					<h4><a href="/sip/addbarang.php">Tambah Barang</a></h4>
                    <div class="title-line wow fadeInRight"></div>
                </div>
                <table width="78%" class="table table-bg table-bordered">
                    <thead>
                        <tr>
<<<<<<< HEAD
<<<<<<< HEAD
                            <th width="24%" class="text-center">Nama Barang</th>
                            <th width="15%" class="text-center">Jumlah Stock</th>
                            <th width="37%" class="text-center">Harga Barang</th>
                        </tr>
                    </thead>
                    <tbody>
						<tr>
                            <td>Cabe</td>
                            <td class="text-center"><strong>2 Kg </strong></td>
                            <td class="text-center"><strong>Rp. 10.000,- </strong> </td>
                        </tr>
                        <tr>
                            <td>Cabe</td>
                            <td class="text-center"><strong>2 Kg </strong></td>
                            <td class="text-center"><strong>Rp. 10.000,- </strong> </td>
                        </tr>
                       <tr>
                            <td>Cabe</td>
                            <td class="text-center"><strong>2 Kg </strong></td>
                            <td class="text-center"><strong>Rp. 10.000,- </strong> </td>
                        </tr>
                        <tr>
                            <td>Cabe</td>
                            <td class="text-center"><strong>2 Kg </strong></td>
                            <td class="text-center"><strong>Rp. 10.000,- </strong> </td>
                        </tr>
                       <tr>
                            <td>Cabe</td>
                            <td class="text-center"><strong>2 Kg </strong></td>
                            <td class="text-center"><strong>Rp. 10.000,- </strong> </td>
                        </tr>
						 <tr>
                            <td>Cabe</td>
                            <td class="text-center"><strong>2 Kg </strong></td>
                            <td class="text-center"><strong>Rp. 10.000,- </strong> </td>
                        </tr>
						 <tr>
                            <td>Cabe</td>
                            <td class="text-center"><strong>2 Kg </strong></td>
                            <td class="text-center"><strong>Rp. 10.000,- </strong> </td>
                        </tr>
						 <tr>
                            <td>Cabe</td>
                            <td class="text-center"><strong>2 Kg </strong></td>
                            <td class="text-center"><strong>Rp. 10.000,- </strong> </td>
                        </tr>
                        <tr>
                            <td>Cabe</td>
                            <td class="text-center"><strong>2 Kg </strong></td>
                            <td class="text-center"><strong>Rp. 10.000,- </strong> </td>
                        </tr>
=======
=======
>>>>>>> faris
                            <th width="24%" class="text-center">ID Barang</th>
                            <th width="24%" class="text-center">Nama Barang</th>
                            <th width="15%" class="text-center">Jumlah Stock</th>
                            <th width="37%" class="text-center">Harga Barang</th>
                            <th width="8%" class="text-center">EDIT</th>
                        </tr>
                    </thead>
                    <tbody>
					<?php

                    include "koneksi.php";

                    $mid = $_SESSION['MM_Username'];
                    $list_result = mysqli_query($dbconn, "SELECT * FROM list_barang join toko on list_barang.id_toko=toko.id join barang on barang.id_barang=list_barang.id_barang WHERE username='$mid'");

                        while ($row_list = mysqli_fetch_assoc($list_result)){
                            $id_barang = $row_list['id_barang'];
                            $harga = $row_list['harga'];
                            $banyak = $row_list['banyak'];
                            $barang_result = mysqli_query($dbconn, "SELECT nama FROM barang WHERE id_barang=$id_barang;");
                            if (mysqli_num_rows($barang_result) > 0){
                                $row_barang = mysqli_fetch_assoc($barang_result);
                                $nama = $row_barang['nama'];
                            }
                            else {
                                $nama = '<Unknown>';
                            }
                            
                            echo "<tr>";
                            echo "<form action=\"editlist.php\" method=\"post\">";
                            echo "<td><input name=\"id_barang\" type=\"hidden\" value=\"$id_barang\">$id_barang</td>";
                            echo "<td><input name=\"nama\" type=\"hidden\" value=\"$nama\">$nama</td>";
                            echo "<td><input name=\"n\" type=\"hidden\" value=\"$banyak\">$banyak Kg</td>";
                            echo "<td><input name=\"nama\" type=\"hidden\" value=\"$harga\">Rp. $harga,-</td>";
                            echo "<td><button type=\"submit\" class=\"btn btn-warning\" style=\"border-radius:0;\" data-toggle=\"modal\"><i class=\"fa  fa-pencil-square-o\" style=\"font-size:18px; color:white;\"></i>  HAPUS</button>";
                            echo "</form";
                            echo "</tr>";
                        }
                    

?>
<<<<<<< HEAD
>>>>>>> maghrizaazzanna
=======
>>>>>>> faris
                    </tbody>
              </table>
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
		 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery-2.1.1.min.js"></script>		
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>	
	<script src="js/parallax.min.js"></script>
	<script src="js/wow.min.js"></script>
	<script src="js/jquery.easing.min.js"></script>
	<script type="text/javascript" src="js/fliplightbox.min.js"></script>
	<script src="js/functions.js"></script>
    <script src="contactform/contactform.js"></script>
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> faris
        <script src="js/notify.min.js"></script>
        <?php
            //include_once "koneksi.php";
            $idtoko = 0;
            $uname = $_SESSION['MM_Username'];
            mysql_select_db($database_sip, $sip);
            $res = mysql_query("SELECT id FROM toko WHERE username='$uname';", $sip);
            if (mysql_num_rows($res) > 0){
                $row_id = mysql_fetch_assoc($res);
                $idtoko = $row_id['id'];
            }
            //echo "<script>$.notify(\"$uname\", \"info\");</script>";
        ?>
        
		<script>
function executeQuery() {
  $.ajax({
    url: 'notify.php?idtoko=<?php print $idtoko; ?>',
    success: function(data) {
      var parsed = JSON.parse(data);
	  for (var i=0; i<parsed.length; i++){
		  $.notify("Seseorang akan membeli " + parsed[i]['nama'] + " di toko anda!", "info");
	  }
    }
  });
  setTimeout(executeQuery, 3000); // you could choose not to continue on failure...
}

$(document).ready(function() {
  // run the first time; all subsequent calls will take care of themselves
  setTimeout(executeQuery, 3000);
});

		</script>
<<<<<<< HEAD
>>>>>>> maghrizaazzanna
=======
>>>>>>> faris
    </body>
</html>
<?php
mysql_free_result($logout);
?>