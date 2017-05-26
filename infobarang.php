<?php

	include "koneksi.php";
	include "init_session.php";

?>
<!DOCTYPE html>
<html>
    <head>

        <!-- /.website title -->
        <title>INFO BARANG</title>
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
        <div class="fullscreen landing parallax" style="background-image:url('images/HNCK3991.jpg');" data-img-width="2000" data-img-height="1333" data-diff="100">

            <div class="overlay">
                <div class="container">
                    <div class="col-md-10 col-md-offset-1 text-center">

                        <!-- /.logo -->
                        <div class="logo wow fadeInDown"> <a href=""><img src="images/logo.png" alt="logo" width="320" height="259"></a> 
							<form action="infobarang.php" method="get">
								<input type="text" name="q" size="80" placeholder="Cari Disini ...">
								<input type="button" value="CARI">
							</form>
						</div>

                        <!-- /.main title -->
                        <h2 class="wow fadeInUp" style="margin-bottom: 50px">
                            Informasi Barang
                        </h2>

                    </div>
                </div> 
            </div> 
        </div>

    <div id="shortcode-table">
            <div class="container">
                <table width="78%" class="table table-bg table-bordered">
                    <thead>
                        <tr>
                            <th width="24%" class="text-center">Nama Barang</th>
                            <th width="24%" class="text-center">Nama Toko</th>
                            <th width="15%" class="text-center">Jumlah Stock</th>
                            <th width="37%" class="text-center">Harga Barang</th>
                            <th width="37%" class="text-center">Status Toko</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php include "find_query.php"; ?>
						<!--<tr>
                            <td>Cabe</td>
                            <td>Toko Damai Indah </td>
                            <td class="text-center"><strong>2 Kg </strong></td>
                            <td class="text-center"><strong>Rp. 10.000,- 
                              <input type="submit" name="Submit2" value="PILIH" align="right">
							  
                            </strong>                                                         </td>
                            <td class="active"><input type="submit" name="Submit2" value="TUTUP" align="right"></td>
                        </tr>
                        <tr>
                            <td>Cabe</td>
                            <td>Rukoh Toko </td>
                            <td class="text-center"><strong>1 Kg  </strong></td>
                            <td class="text-center"><strong>Rp. 10.000,- <input type="submit" name="Submit2" value="PILIH" align="right"></strong></td>
                            <td class="active"><input type="submit" name="Submit2" value="BUKA" align="right"></td>
                        </tr>
                        <tr>
                            <td>Cabe</td>
                            <td>Lamnyong Toko </td>
                            <td class="text-center"><strong>1 Ons  </strong></td>
                            <td class="text-center"><strong>Rp. 10.000,- <input type="submit" name="Submit2" value="PILIH" align="right"> </strong></td>
                            <td class="active"><input type="submit" name="Submit2" value="TUTUP" align="right"></td>
                        </tr>
                        <tr>
                            <td>Cabe</td>
                            <td>Swalayan</td>
                            <td class="text-center"><strong>2 Kg </strong></td>
                            <td class="text-center"><strong>Rp. 10.000,-  <input type="submit" name="Submit2" value="PILIH" align="right"></strong></td>
                            <td class="active"><input type="submit" name="Submit2" value="BUKA" align="right"></td>
                        </tr>
                        <tr>
                            <td>Cabe</td>
                            <td>Toko Barokah </td>
                            <td class="text-center"><strong>1 Kg </strong></td>
                            <td class="text-center"><strong>Rp. 10.000,-  <input type="submit" name="Submit2" value="PILIH" align="right"></strong></td>
                            <td class="active"><input type="submit" name="Submit2" value="TUTUP" align="right"></td>
                        </tr>
						 <tr>
                            <td>Cabe</td>
                            <td>Grosir Rukoh</td>
                            <td class="text-center"><strong>1 Kg </strong></td>
                            <td class="text-center"><strong>Rp. 10.000,-  <input type="submit" name="Submit2" value="PILIH" align="right"></strong></td>
                            <td class="active"><input type="submit" name="Submit2" value="BUKA" align="right"></td>
					    </tr>
						 <tr>
                            <td>Cabe</td>
                            <td>Grosir Tungkop </td>
                            <td class="text-center"><strong>1 Kg </strong></td>
                            <td class="text-center"><strong>Rp. 10.000,-  <input type="submit" name="Submit2" value="PILIH" align="right"></strong></td>
                            <td class="active"><input type="submit" name="Submit2" value="BUKA" align="right"></td>
					    </tr>
						 <tr>
                            <td>Cabe</td>
                            <td>Toko Kelontong </td>
                            <td class="text-center"><strong>1 Kg </strong></td>
                            <td class="text-center"><strong>Rp. 10.000,-  <input type="submit" name="Submit2" value="PILIH" align="right"></strong></td>
                            <td class="active"><input type="submit" name="Submit2" value="BUKA" align="right"></td>
					    </tr>
                        <tr>
                          <td>&nbsp;</td>
                          <td>&nbsp;</td>
                          <td class="text-center">TOTAL :  </td>
                          <td class="text-center">Rp. 40.000,- </td>
                          <td class="active"><input type="submit" name="Submit2" value="BUKA" align="right"></td>
                        </tr>-->
                    </tbody>
              </table>
            </div>
            <form align="center" name="form1" method="post" action="">
              <label>
                <input  type="submit" name="Submit" value="Keranjang">
              </label>
            </form>
        </div>

        
        <!-- /.footer -->
        <footer id="footer">
            <div class="container">
                <div class="col-sm-4 col-sm-offset-4">
                    <hr>
                    <div class="text-center wow fadeInUp">
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