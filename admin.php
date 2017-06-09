<?php

    session_start();
    include "koneksi.php";

    $sql="SELECT id, jenis_toko, username, nama, email, no_hp, lokasipasar FROM toko";
    $result=$dbconn->query($sql);

   

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>ADMIN</title>

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
      position: relative;
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
                    <h1 style="color:white;">Admin</h1>
                </div>
				<div class="pull-right">
                    <a href="logout.php" class="btn btn-info" style="border-radius:0;" onclick="return confirm('Are you sure to logout?');"><i class="fa  fa-sign-out" style="font-size:18px; color:white;"></i>Log Out</a>
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
                            <th width="15%" class="text-center">Username</th>
                            <th width="15%" class="text-center">Nama</th>
                            <th width="15%" class="text-center">email</th>
                            <th width="15%" class="text-center">No HP</th>
                            <th width="30%" class="text-center">Lokasi Pasar</th>
                            <th width="37%" class="text-center">EDIT</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php  while($row=mysqli_fetch_assoc($result)){
                            $id = $row['id'];
                            $jenis_toko = $row['jenis_toko'];
                            $username = $row['username'];
                            $nama = $row['nama'];
                            $email = $row['email'];
                            $no_hp = $row['no_hp'];
                            $lokasipasar = $row['lokasipasar'];

                            echo'<tr><form action="delete.php" method="post">
                            <td><input name="id" type="hidden" value="'.$row['id'].'">'.$row['id'].'</td>
                            <td>'.$row['jenis_toko'].'</td>
                            <td><input name="username" type="hidden" value="'.$row['username'].'">'.$row['username'].'</td>
                            <td>'.$row['nama'].'</td>
                            <td>'.$row['email'].'</td>
                            <td>'.$row['no_hp'].'</td>
                            <td>'.$row['lokasipasar'].'</td>
                            <td><button type="submit" class="btn btn-warning" style="border-radius:0;" data-toggle="modal"><i class="fa  fa-pencil-square-o" style="font-size:18px; color:white;"></i>  HAPUS</button></td>
                            </form>
                            </tr>';
        
                            }
                        ?>
                      
                         
                    </tbody>
                </table>
                <a href="#daftar" class="btn btn-info" style="border-radius:0;" data-toggle="modal"><i class="fa  fa-pencil-square-o" style="font-size:18px; color:white;"></i>  Daftar Toko Baru</a>
            </div>	        
        </div>
            </div>
            
            <div class="modal fade" id="daftar">
		<div class="modal-dialog modal-md">
			<div class="modal-content">
				<div class="modal-header" align="center">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="privacy text-center">Silahkan Input Data Toko Baru</h4>
				</div>
				<div class="modal-body">
					<form action="by_admin.php" role="form" method="POST" id="daftar" name="daftar">
                                    <select type="Jenis Toko" name="jenis_toko" placeholder="Jenis Toko" class="form-control">
                                        <option value=>Jenis Toko</option>
                                          <option value="Sayur-sayuran">Toko Sayur-sayuran</option>
                                          <option value="Buah-buahan">Toko Buah-buahan</option>
                                          <option value="Kelontong">Toko Kelontong</option>
                                          <option value="Daging">Toko Daging</option>
                                          <option value="Ikan">Toko Ikan</option>
                                        </select>
                        <p>&nbsp;</p>
                                    <div class="input-group">
                                        <span class="input-group-addon" style="border:none;">
                                            <i class="glyphicon glyphicon-user"></i>
                                        </span>
                                        <input class="form-control" name="username" id="username" type="text" placeholder="Username" required>
                                    </div>
                                    <div class="input-group">
                                        <span class="input-group-addon" style="border:none;">
                                            <i class="glyphicon glyphicon-lock"></i>
                                        </span>
                                        <input class="form-control" name="password" id="password" type="password" placeholder="Password" required>
                                    </div>
                                    <div class="input-group">
                                        <span class="input-group-addon" style="border:none;">
                                            <i class="fa fa-upload"></i>
                                        </span>
                                        <input class="form-control" name="nama" id="nama" type="text" placeholder="Nama Toko" required>
                                    </div>
                                    <div class="input-group">
                                        <span class="input-group-addon" style="border:none;">
                                            <i class="fa fa-upload"></i>
                                        </span>
                                        <input class="form-control" name="email" id="email" type="email" placeholder="email" required>
                                    </div>
                                    <div class="input-group">
                                        <span class="input-group-addon" style="border:none;">
                                            <i class="fa fa-upload"></i>
                                        </span>
                                        <input class="form-control" name="no_hp" id="no_hp" type="text" placeholder="No Telp. / HP" required>
                                    </div>
                                    <div class="input-group">
                                        <span class="input-group-addon" style="border:none;">
                                            <i class="fa fa-upload"></i>
                                        </span>
                                        <input class="form-control" name="lokasipasar" id="lokasipasar" type="text" placeholder="Lokasi Pasar" required>
                                    </div>
                                    <div class="form-group last">
                                        <input type="submit" class="btn btn-info btn-block btn-lg" value="DAFTAR">
                                    </div> 
                              </form>
				</div>
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