<!DOCTYPE html>
<html>
	<head>
		<title>home</title>
		<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, user-scalable=yes">
		<link rel="stylesheet" type="text/css" href="css/animate.css">
		<link rel="stylesheet" type="text/css" href="css/hover.css">
		<link rel="stylesheet" type="text/css" href="css/font-awesome.css">
		<link rel="stylesheet" type="text/css" href="css/style.css"/>
	</head>
	<body onscroll="navwid()" onload="search() " id="body1">
		<div class="ent animated zoomIn" id="ent">
			<div class="animated fadeInLeft" id="entdiv">OYE & SONS ELECTRICAL AND ELECTRONICS CORPORATIONS</div>
		</div>
		<div class="animated fadeInLeft " id="logodiv"><a href="index.php"><img src="images/30.jpeg" class="logo animated rubberBand" id="logo"></a></div>
		<nav id="nav" onmouseover="swapcolor1()" onmouseout="swapcolor2()" class="animated fadeInDown bigscreen">
			<a href="home.php" id="a1">Home</a>
			<a href="about.php" id="a2">About us</a>
			<a href="contact.php" id="a3">Contact us</a>
			<a href="register.php" id="a4">Register</a>
			<a href="login.php" id="a5">Login</a>
			<a href="profile.php" id="a6">Profile</a>
		</nav>
		<nav id="smallnav" onmouseover="swapcolor1()" onmouseout="swapcolor2()" class="animated fadeInDown">
			<div id="navbutdiv"><button class="off-1"><i class="fa fa-bars" id="navicon" onclick="navdisplay()"></i></button></div>
			<div class="hid" id="hid">
				<a href="home.php" id="a1">Home</a>
				<a href="about.php" id="a2">About us</a></>
				<a href="contact.php" id="a3">Contact us</a></>
				<a href="register.php" id="a4">Register</a></>
				<a href="login.php" id="a5">Login</a></>
				<a href="profile.php" id="a6">Profile</a></>
			</div>
		</nav>
		<div class="searchdiv animated bounceInLeft" id="searchdiv">
			<form method="post" action="" name="searchform" target="_blank" onsubmit="return(Search())">
			<input class="float" id="searchbox" type="search" name="searchbox" maxlength="30" placeholder="Search for our products...">
				<button class="float" id="go" type="submit" name="go"><i class="fa fa-search"></i></button>
			</form>
		</div>
		<div class="line1"></div>
		<div class="slideshow-container">
			<div class="mySlidesSmall fade">
		    	<img src="images/1.jpeg">
			</div>
			<div class="mySlidesSmall fade">
		 		<img src="images/2.jpeg">
 			</div>
 			<div class="mySlidesSmall fade">
				<img src="images/3.jpeg">
			</div>
 			<div class="mySlidesSmall fade">
				<img src="images/4.jpeg">
			</div>
 			<div class="mySlidesSmall fade">
				<img src="images/5.jpeg">
			</div>
 			<div class="mySlidesSmall fade">
				<img src="images/6.jpeg">
			</div>
 			<div class="mySlidesSmall fade">
				<img src="images/7.jpeg">
			</div>
 			<div class="mySlidesSmall fade">
				<img src="images/8.jpeg">
			</div>
 			<div class="mySlidesSmall fade">
				<img src="images/9.jpeg">
			</div>
 			<div class="mySlidesSmall fade">
				<img src="images/10.jpg">
			</div>
 			<div class="mySlidesSmall fade">
				<img src="images/11.jpg">
			</div>
 			<div class="mySlidesSmall fade">
				<img src="images/12.jpg">
			</div>
 			<div class="mySlidesSmall fade">
				<img src="images/13.jpeg">
			</div>
 			<div class="mySlidesSmall fade">
				<img src="images/14.jpeg">
			</div>
 			<div class="mySlidesSmall fade">
				<img src="images/15.jpeg">
			</div>
 			<div class="mySlidesSmall fade">
				<img src="images/16.png">
			</div>
 			<div class="mySlidesSmall fade">
				<img src="images/17.png">
			</div>
 			<div class="mySlidesSmall fade">
				<img src="images/18.png">
			</div>
 			<div class="mySlidesSmall fade">
				<img src="images/19.png">
			</div>
 			<div class="mySlidesSmall fade">
				<img src="images/20.png">
			</div>
 			<div class="mySlidesSmall fade">
				<img src="images/21.jpg">
			</div>
 			<div class="mySlidesSmall fade">
				<img src="images/22.jpeg">
			</div>
 			<div class="mySlidesSmall fade">
				<img src="images/23.jpeg">
			</div>
 			<div class="mySlidesSmall fade">
				<img src="images/24.jpeg">
			</div>
 			<div class="mySlidesSmall fade">
				<img src="images/25.jpeg">
			</div>
			<a class="prev bigscreen" onclick="plusSlides(-1)">&#10094;</a>
			<a class="next bigscreen" onclick="plusSlides(1)">&#10095;</a>
		</div>
		<div style="text-align:center" class="bigscreen">
		  <span class="dot" onclick="currentSlide(1)"></span> 
		  <span class="dot" onclick="currentSlide(2)"></span> 
		  <span class="dot" onclick="currentSlide(3)"></span> 
		  <span class="dot" onclick="currentSlide(4)"></span> 
		  <span class="dot" onclick="currentSlide(5)"></span> 
		  <span class="dot" onclick="currentSlide(6)"></span> 
		  <span class="dot" onclick="currentSlide(7)"></span> 
		  <span class="dot" onclick="currentSlide(8)"></span> 
		  <span class="dot" onclick="currentSlide(9)"></span> 
		  <span class="dot" onclick="currentSlide(10)"></span> 
		  <span class="dot" onclick="currentSlide(11)"></span> 
		  <span class="dot" onclick="currentSlide(12)"></span> 
		  <span class="dot" onclick="currentSlide(13)"></span> 
		  <span class="dot" onclick="currentSlide(14)"></span> 
		  <span class="dot" onclick="currentSlide(15)"></span> 
		  <span class="dot" onclick="currentSlide(16)"></span> 
		  <span class="dot" onclick="currentSlide(17)"></span> 
		  <span class="dot" onclick="currentSlide(18)"></span> 
		  <span class="dot" onclick="currentSlide(19)"></span> 
		  <span class="dot" onclick="currentSlide(20)"></span> 
		  <span class="dot" onclick="currentSlide(21)"></span> 
		  <span class="dot" onclick="currentSlide(22)"></span> 
		  <span class="dot" onclick="currentSlide(23)"></span> 
		  <span class="dot" onclick="currentSlide(24)"></span> 
		  <span class="dot" onclick="currentSlide(25)"></span>  
		</div>
		<div class="line2"></div>
		<div class="col-12 sect1">
			<div class="hmdiv1">
				<img src="images/28.jpg" class="imgfig"/>
				<div class="hmheadings">What we do</div>
				<div class="hmp">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,our list of available services.
				</div>
			</div>
			<div class="hmdiv2">
				<img src="images/26.jpg" class="imgfig"/>
				<div class="hmheadings">Our services</div>
				<div class="hmp">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,<a href="">our list of available services.</a>
				</div>
			</div>
			<div class="hmdiv3">
				<img src="images/27.jpeg" class="imgfig"/>
				<div class="hmheadings">Take a tour</div>
				<div class="hmp">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,<a href="">big list of products.</a>
				</div>
			</div>
			<div class="hmdiv4">
				<img src="images/24.jpeg" class="imgfig"/>
				<div class="hmheadings">Our Partners</div>
				<div class="hmp">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,<a href="">meet our partners</a>
				</div>
			</div>
		</div>
		<div class="footer">
			<div class="categories bigscreen">CATEGORIES</div>
			<div class="catlist bigscreen">
				<div class="listdiv center col-3 float">
					<div class="headlist col-12">LIGHTING</div>
					<ul>
						<li>Wall Brackets (Half Moon)</li>
						<li>Wall Brackets (Full Moon)</li>
						<li>Lampholders</li>
						<li>LCD Bulbs</li>
						<li>LED Bulbs</li>
						<li>OLED Bulbs</li>
						<li>Chandeliers</li>
						<li>One Gang Switches</li>
						<li>Two Gang Switches</li>
						<li>Three Gang Switches</li>
					</ul>
				</div>
				<div class="listdiv center col-3 float">
					<div class="headlist col-12">SOCKETS</div>
					<ul>
						<li>Single Sockets</li>
						<li>Double Sockets</li>
						<li>Single Sockets (USB Enabled)</li>
						<li>Double Sockets (USB Enabled)</li>
						<li>Water Heater Switches</li>
					</ul>
				</div>
				<div class="listdiv center col-3 float">
					<div class="headlist col-12">WIRES</div>
					<ul>
						<li>1mm Copper Wires (#3029)</li>
						<li>1.5mm Copper Wires</li>
						<li>2.5mm Copper Wires</li>
						<li>4mm Copper Wires</li>
						<li>6mm Copper Wires</li>
						<li>10mm Copper Wires</li>
						<li>16mm Copper Wires</li>
					</ul>
				</div>
				<div class="listdiv center col-3 float">
					<div class="headlist col-12">CABLES</div>
					<ul>
						<li>16mm Armoured Cables</li>
						<li>24mm Armoured Cables</li>
						<li>30mm Armoured Cables</li>
						<li>High-Tension Aluminium Cables</li>
						<li></li>
					</ul>
				</div>
			</div>
			<div class="icondiv">
				<a href="" class="map">Site Map <i class="fa fa-sitemap"></i></a>
				<div class="iconsubdiv">
					<i class="fa fa-facebook-official"></i>
					<i class="fa fa-twitter-square"></i>
					<i class="fa fa-google-plus"></i>
				</div>
				<a href="#entdiv" class="top">Top <i class="fa fa-home"></i></a>
			</div>
			<div class="copydiv"><i class="fa fa-copyright"></i> 2017. All Rights Reserved</div>
		</div>
	</body>
	<script type="text/javascript" src="js/script.js"></script>
</html>