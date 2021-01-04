<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/

-->
<?php 


 session_start(); 
 if (empty($_SESSION['id']))
 {
     echo "<script type='text/javascript'>";
echo "alert('Please Login First');
window.location.href='../login.html';";
echo "</script>";
    

 }

?>
<!DOCTYPE html>
<html>
<head>
<title>BE FREE</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Classic Style Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- js -->
<script src="js/jquery.min.js"></script>
<!-- //js -->
<!-- cart -->
<script src="js/simpleCart.min.js"></script>
<!-- cart -->
<!-- for bootstrap working -->
<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>
<!-- //for bootstrap working -->
<!-- animation-effect -->
<link href="css/animate.min.css" rel="stylesheet">
<script language='javascript' src="controle.js">
  </script> 
<script src="js/wow.min.js"></script>
<script>
 new WOW().init();
</script>
<!-- //animation-effect -->
<link href='//fonts.googleapis.com/css?family=Cabin:400,500,600,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Lato:400,100,300,700,900' rel='stylesheet' type='text/css'></head>
	
<body>
<!-- header -->
	<div class="header">
			<div class="header-grid">
					<div class="container">
				<div class="header-left animated wow fadeInLeft" data-wow-delay=".5s">
					<ul>
					<li><i class="glyphicon glyphicon-headphones"></i><a href="#">24x7 live support</a></li>
						<li><i class="glyphicon glyphicon-envelope" ></i><a href="mailto:info@example.com">@example.com</a></li>
						<li><i class="glyphicon glyphicon-earphone" ></i>+1234 567 892</li>
						
					</ul>
				</div>
				<div class="header-right animated wow fadeInRight" data-wow-delay=".5s">
				<div class="header-right1 ">
					<ul>
		
						<li><i class="glyphicon glyphicon-log-in" ></i><a href="login.html">Login</a></li>
						<li><i class="glyphicon glyphicon-book" ></i><a href="register.html">Register</a></li>
					</ul>
				</div>
				<div class="header-right2">
					<div class="cart box_1">
						<a href="checkout.html">
							<h3> <div class="total">
								<span class="simpleCart_total"></span> (<span id="simpleCart_quantity" class="simpleCart_quantity"></span> items)</div>
								<img src="images/cart.png" alt="" />
							</h3>
						</a>
						<p><a href="javascript:;" class="simpleCart_empty">Empty Cart</a></p>
						<div class="clearfix"> </div>
					</div>	
				</div>
				<div class="clearfix"> </div>
				</div>
				<div class="clearfix"> </div>
			</div>
			</div>
			<div class="container">
			<div class="logo-nav">
				
					<nav class="navbar navbar-default">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header nav_2">
						<button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						 <div class="navbar-brand logo-nav-left wow fadeInLeft animated" data-wow-delay=".5s">
							<h1 class="animated wow pulse" data-wow-delay=".5s"><a href="index.html">be<span>free</span></a></h1>
						</div>

					</div> 
					<div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
						<ul class="nav navbar-nav">
							<li ><a href="index.html" class="act">Home</a></li>	
							<!-- Mega Menu -->
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">Women <b class="caret"></b></a>
								<ul class="dropdown-menu multi">
									<div class="row">
										<div class="col-sm-4">
											<ul class="multi-column-dropdown">
												<h6>Submenu1</h6>
												
												<li><a href="products.html">Accessories</a></li>
												<li><a href="products.html">Bags</a></li>
												<li><a href="products.html">Caps & Hats</a></li>
												<li><a href="products.html">Hoodies & Sweatshirts</a></li>
										
											</ul>
										</div>
										<div class="col-sm-4">
											<ul class="multi-column-dropdown">
												<h6>Submenu2</h6>
												<li><a href="products.html">Jackets & Coats</a></li>
												<li><a href="products.html">Jeans</a></li>
												<li><a href="products.html">Jewellery</a></li>
												<li><a href="products.html">Jumpers & Cardigans</a></li>
												<li><a href="products.html">Leather Jackets</a></li>
												<li><a href="products.html">Long Sleeve T-Shirts</a></li>

											</ul>
										</div>
										<div class="col-sm-4">
											<ul class="multi-column-dropdown">
												<h6>Submenu3</h6>
												<li><a href="products.html">Shirts</a></li>
												<li><a href="products.html">Shoes, Boots & Trainers</a></li>
												<li><a href="products.html">Sunglasses</a></li>
												<li><a href="products.html">Sweatpants</a></li>
												<li><a href="products.html">Swimwear</a></li>
												<li><a href="products.html">Trousers & Chinos</a></li>

											</ul>
										</div>
										<div class="clearfix"></div>
									</div>
									<div class="row-top">
										<div class="col-sm-6 row1">
											<a href="products.html"><img src="images/me.jpg" alt="" class="img-responsive"></a>
										</div>
										<div class=" col-sm-6 row2">
											<a href="products.html"><img src="images/me1.jpg" alt="" class="img-responsive"></a>
										</div>
										<div class="clearfix"></div>
									</div>
								</ul>
							</li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">Men <b class="caret"></b></a>
								<ul class="dropdown-menu multi multi1">
									<div class="row">
										<div class="col-sm-4">
											<ul class="multi-column-dropdown">
												<h6>Submenu1</h6>
												
												<li><a href="products1.html">Accessories</a></li>
												<li><a href="products1.html">Bags</a></li>
												<li><a href="products1.html">Caps & Hats</a></li>
												<li><a href="products1.html">Hoodies & Sweatshirts</a></li>
										
											</ul>
										</div>
										<div class="col-sm-4">
											<ul class="multi-column-dropdown">
												<h6>Submenu2</h6>
												<li><a href="products1.html">Jackets & Coats</a></li>
												<li><a href="products1.html">Jeans</a></li>
												<li><a href="products1.html">Jewellery</a></li>
												<li><a href="products1.html">Jumpers & Cardigans</a></li>
												<li><a href="products1.html">Leather Jackets</a></li>
												<li><a href="products1.html">Long Sleeve T-Shirts</a></li>

											</ul>
										</div>
										<div class="col-sm-4">
											<ul class="multi-column-dropdown">
												<h6>Submenu3</h6>
												<li><a href="products1.html">Shirts</a></li>
												<li><a href="products1.html">Shoes, Boots & Trainers</a></li>
												<li><a href="products1.html">Sunglasses</a></li>
												<li><a href="products1.html">Sweatpants</a></li>
												<li><a href="products1.html">Swimwear</a></li>
												<li><a href="products1.html">Trousers & Chinos</a></li>

											</ul>
										</div>
										<div class="clearfix"></div>
									</div>
									<div class="row-top">
										<div class="col-sm-6 row1">
											<a href="products1.html"><img src="images/me2.jpg" alt="" class="img-responsive"></a>
										</div>
										<div class=" col-sm-6 row2">
											<a href="products1.html"><img src="images/me3.jpg" alt="" class="img-responsive"></a>
										</div>
										<div class="clearfix"></div>
									</div>
								</ul>
							</li>
							
							<li class="active"><a href="codes.html"> Codes</a></li>
							<li><a href="contact.html">Contact Us</a></li>
						</ul>
					</div>
					</nav>
				</div>
				
		</div>
	</div>
<!-- //header -->
<!--banner-->
<div class="banner-top">
	<div class="container">
		<h2 class="animated wow fadeInLeft" data-wow-delay=".5s">FAMILY</h2>
		<h3 class="animated wow fadeInRight" data-wow-delay=".5s"><a href="index.html">Home</a><label>/</label>reservation</h3>
		<div class="clearfix"> </div>
	</div>
</div>
<!-- contact -->
<!--content-->
<div class="container">
	<div class="page">

		<!--button-->
		<div class="grid_3 grid_4">
			<div class="page-header">
       	
       <!--//labels-->
	
	<!--table-->
	 

<!-- footer -->
 <form name="f" class="form" method="POST" action="connexion.php">
	<div class="footer">
		<div class="container">
		<div class="footer-top">
		<div class="col-md-9 footer-top1">
		 <p align="center"><font size="5">RESERVATION EN LIGNE&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    </font></p>
                    <hr>
                    
                    <p align="left"><font size="3">votre aventure c'est pour le :<input type="date" class="form-control" name="date-res" id="date_res" size="3"></font></p>
                    <hr>
                    <p align="left"><font size="3">CIN :<input type="text" class="form-control" name="Ncin" id="Ncin" size="3"></font></p>
                    <p align="left"><font size="3">Nom :<input type="text" class="form-control" name="T9" size="3" onblur="maj1()"></font></p>
                    <p align="left"><font size="3">Prenom :<input type="text" class="form-control" name="T10" size="3" onblur="maj2()"></font></p>
                    <p align="left"><font size="3">cvv :<input type="text" class="form-control" name="T11" size="3"></font></p>:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <p align="left"><font size="5">Ncarte :<input type="text" class="form-control" name="T12" size="3"></font></p>
                    
                    <p align="left"><font size="3">Depart : <select size="1" name="depart" id="depart">
                    <option>Choisir le depart</option>
                    <option value="Tunis">Tunis</option>
                    <option value="Ariena">Ariena</option>
                    <option value="Sousse">Sousse</option>
                    <option value="beja">beja</option>
                    <option value="ben arous">ben arous</option>
                    <option value="bizerte">bizerte</option>
                    <option value="gabes">gabes</option>
                    <option value="gafsa">gafsa</option>
                    <option value="jendouba">jendouba</option>
                    <option value="kairouan">kairouan</option>
                    <option value="kasserine">kasserine</option>
                    <option value="kebilli">kebilli</option>
                    <option value="le kef">le kef</option>
                    <option value="mahdia">Mehdia</option>
                    <option value="la manouba">la manouba</option>
                    <option value="medenine">medenine</option>
                    <option value="monastir">monastir</option>
                    <option value="nabeul">nabeul</option>
                    <option value="sidi bouzid">sidi bouzid</option>
                    <option value="siliana">siliana</option>
                    </select>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
                    Destination : <select size="1" name="destination" id="destination">
                    <option>Choisir la destination</option>
					
                    <option value="Tunis">Tunis</option>
                    <option value="Ariena">Ariena</option>
                    <option value="Sousse">Sousse</option>
                    <option value="beja">beja</option>
                    <option value="ben arous">ben arous</option>
                    <option value="bizerte">bizerte</option>
                    <option value="gabes">gabes</option>
                    <option value="gafsa">gafsa</option>
                    <option value="jendouba">jendouba</option>
                    <option value="kairouan">kairouan</option>
                    <option value="kasserine">kasserine</option>
                    <option value="kebilli">kebilli</option>
                    <option value="le kef">le kef</option>
                    <option value="mahdia">Mehdia</option>
                    <option value="la manouba">la manouba</option>
                    <option value="medenine">medenine</option>
                    <option value="monastir">monastir</option>
                    <option value="nabeul">nabeul</option>
                    <option value="sidi bouzid">sidi bouzid</option>
                    <option value="siliana">siliana</option>
                    </select>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font></p>
                    <p align="left"><font size="5">Extra :<input type="checkbox" name="C1" value="25"> 
	loge individuelle&nbsp;&nbsp;&nbsp;&nbsp;
	<input type="checkbox" name="C2" value="15">climatisation&nbsp;&nbsp;
	<input type="checkbox" name="C3" value="12"> repas offert </font></p>
	<p align="left">
                   
                    <input type="submit" class="btn btn-primary" value="RESERVER" name="B1" onclick="verif()" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
                    <p align="right"> <input type="reset" class="btn btn-primary" value="ANNULER" name="B2"></p>
                  </form>
				
			
				</div>
			
				<div class="clearfix"> </div>
			</div>
			
			<div class="copy-right animated wow fadeInUp" data-wow-delay=".5s">
				<p>&copy 2016 Classic Style. All rights reserved | Design by <a href="http://w3layouts.com/">W3layouts</a></p>
			</div>
		</div>
	</div>
<!-- //footer -->
</body>
</html>