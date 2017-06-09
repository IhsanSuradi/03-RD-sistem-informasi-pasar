
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
      background: rgba(20,0,80,0.8);
      padding: 2px 0;
      padding-bottom: 0;
      
    }
    .signup-header {
        margin: 0;
        text-align: center;
        background: rgba(20,0,80,0.5);
        padding-left: 20px;
        padding-right: 20px;
        padding-bottom: 3px;
        padding-top: 10px;
        color: aliceblue;
    }
    .footer {
      position: fixed;
      right: 0;
      bottom: 0px;
      left: 0;
      padding: 2px 0;
      background-color: rgba(0,0,0,0.7);
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

    .bg { 
        background-image: url("images/bgadmin.jpg");
        height: 100%; 
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
    }
    .center{
        margin: auto;
        width: 10%;
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
                    <h1 style="color:white;">WELCOME ADMIN</h1>
                </div>
				<div class="pull-right">
					<form id="login" action="login_admin.php" style="width:260px;" method="post">
						<div class="input-group" style="margin-bottom:1.5px;">
							<span class="input-group-addon" style="background-coor:#f58f15; color:wite;">
								<i class="glyphicon glyphicon-user"></i>
							</span>
							<input type="id" class="form-control" name="id" id="id" placeholder="Admin ID" required>
						</div>
						<div class="input-group">
							<span class="input-group-addon">
								<i class="glyphicon glyphicon-lock"></i>
							</span>
							<input type="password" class="form-control" name="password" id="password" placeholder="Password" style="width:179.5px; float:left;" required>
							<button type="submit" name="submit" class="btn btn-info" style="border-radius:0;"><i class="fa  fa-sign-in" style="font-size:18px; color:white;"></i></button>
						</div>
					</form>
				</div>
			</div>
		</div>
        
        
        <div class="footer wow fadeInLeft">
            <div class="row">
            <div class="center">
                <p style="color:white;"><i class="fa fa-copyright"></i>  SIP.<br> All Right Reserved.</p>
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