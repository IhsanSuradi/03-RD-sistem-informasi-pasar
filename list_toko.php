<?php

    session_start();
    include "koneksi.php";

    $sql="SELECT id, jenis_toko, nama, email, no_hp, lokasipasar FROM toko";
    $result=$dbconn->query($sql);

   

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>List TOKO</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/animate.css">
	<link rel="stylesheet" href="css/overwrite.css">
	<link href="css/animate.min.css" rel="stylesheet"> 
    
<style type="text/css">
    body {
      background: #fff;
      font-family: 'Convergence', sans-serif;
      color:#333;
      line-height:1.6em;
      overflow-x:hidden;
    }
    .navbar {
      border-radius: 0;
      margin-bottom: 0;
      background: #373D3E;
      padding: 2px 0;
      padding-bottom: 0;
      
    }
    .signup-header {
        margin: 0;
        text-align: center;
        background: #373D3E;
        padding-left: 20px;
        padding-right: 20px;
        padding-bottom: 3px;
        padding-top: 10px;
        color: #ffffff;
        
    }
    .footer {
      position: absolute;
      right: 0;
      bottom: 0px;
      left: 0;
      padding: 2px 0;
      background-color: #373D3E;
      text-align: center;
    }
    .row{
        margin-right: 15px;
        margin-left: 15px;
        margin-bottom: 0;
        margin-top: 10px;
        
    }
    .input-group{
        margin-bottom:3px;
        width:100%;
        
    }
    body, html {
        height: 100%;
    }
    .center{
        margin: auto;
        width: 100%;
        text-align: center;
        
    }
    .social-icon {
        text-align:center;
        margin-top: 20px;
        margin-bottom:10px;
    }
    ul.social-network li {
        display:inline;
        margin: auto 15px;	
        font-size:25px;	
    }

    ul.social-network li a {	
        color:#d0d0d0;
        text-align:center;
    }
    .social-network li:hover .fa-twitter {
      color: #00abf0;
    }
    .social-network li:hover .fa-facebook {
      color: #39579a;
    }
    .social-network li:hover .fa-google-plus {
      color: #eb8984;
    }
    .social-network li:hover .fa-pinterest {
      color: #c9171e; 
    }
    .social-network li:hover .fa-linkedin {
      color: #0077b5; 
    }
    .social-network li:hover .fa-youtube-play {
      color: #C84941; 
    }
    .social-network li:hover .fa-instagram {
      color: #c32aa3 ; 
    }
    .social-network li:hover .fa-pinterest-square {
      color: #EA4B49; 
    }
        
</style>
      
</head>
    <body>
        <div class="bg">
    <div class="navbar wow fadeInDown">
			<div class="row">
                <div class="pull-left">
                    <a href="index.php" class="btn btn-info" style="border-radius:0;"><i class="fa fa-arrow-circle-o-left" style="font-size:18px; color:white;"></i>  Kembali</a>
				</div>
                <div class="pull-right">
                    <h1 style="color:white;">List TOKO</h1>
                </div>
			</div>
		</div>
            
        <div class="row">
            <div class="col-md-13">
            <div class="signup-header wow fadeInUp">
                                <h3 class="form-title text-center" style="color:#7AECF9;">TOKO TERDAFTAR</h3>
                <table width="78%" class="table table-bg table-bordered">
                    <thead>
                        <tr>
                            <th width="7%" class="text-center">ID Toko</th>
                            <th width="18%" class="text-center">Jenis Toko</th>
                            <th width="15%" class="text-center">Nama</th>
                            <th width="15%" class="text-center">email</th>
                            <th width="15%" class="text-center">No HP</th>
                            <th width="30%" class="text-center">Lokasi Pasar</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php  while($row=mysqli_fetch_assoc($result)){
                            $id = $row['id'];
                            $jenis_toko = $row['jenis_toko'];
                            $nama = $row['nama'];
                            $email = $row['email'];
                            $no_hp = $row['no_hp'];
                            $lokasipasar = $row['lokasipasar'];

                            echo'<tr>
                            <td><input name="id" type="hidden" value="'.$row['id'].'">'.$row['id'].'</td>
                            <td>'.$row['jenis_toko'].'</td>
                            <td>'.$row['nama'].'</td>
                            <td>'.$row['email'].'</td>
                            <td>'.$row['no_hp'].'</td>
                            <td>'.$row['lokasipasar'].'</td>
                            </tr>';
        
                            }
                        ?>
                      
                         
                    </tbody>
                </table>
            </div>	        
        </div>
            </div>
            
            <h3>&nbsp;</h3>
        <div class="footer wow fadeInLeft">
            <div class="row">
            <div class="center">
                <p style="color:white;"><i class="fa fa-copyright"></i>  SISTEM INFORMASI PASAR.<br> All Right Reserved.</p>
            </div>
            </div>
        
        </div>
    </div>
    
    
        
        
        
        
        
        
        
            
    <script src="js/jquery-2.1.1.min.js"></script>		
    <script src="js/bootstrap.min.js"></script>	
	<script src="js/parallax.min.js"></script>
	<script src="js/wow.min.js"></script>
	<script src="js/jquery.easing.min.js"></script>
	<script type="text/javascript" src="js/fliplightbox.min.js"></script>
	<script src="js/functions.js"></script>
    </body>
    
    
</html>