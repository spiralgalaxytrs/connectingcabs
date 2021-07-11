<?php
$servername = "localhost:3000";
$username = "droptaxicity_com";
$password = "Satheesh5400!";
$dbname = "droptaxicity_com";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

if(isset($_POST['cdir']))
 {
     
$str=rand(); 
$booking_id = md5($str); 
     
     
     
     
  if($_POST['cdir']=="oneway")
  {
$sql = "INSERT INTO cab_booking (cname,cpn,pickup,dropup,pdate,ptime,cdir,booking_id,ccab)
VALUES ('$_POST[cname]','$_POST[cpn]','$_POST[pickup]','$_POST[dropup]','$_POST[pdate]','$_POST[ptime]','oneway','$booking_id','$_POST[ccab]')";



date_default_timezone_set("Asia/Calcutta");

$reg_date=date("d-m-Y");

$subject = "Basic Enquiry - Drop Taxi City";

$message = "

<div style='position:absolute; left:0px; right:0px; height:80px; padding:10px; background-color:#FCB414'>
<table width='100%' border='0'>
  <tr>
    <td width='50%'><img src='http://www.droptaxicity.in/images/logo.png' width='200'></td>
    <td width='50%'>&nbsp;</td>
  </tr>
</table>
</div>
<div style='background-color:#FDBFB9'>
<table width=100% border=0 cellspacing=5 cellpadding=5>

  <tr>

    <td colspan=2>Name : $_POST[cname]</td>

  </tr>

 
  <tr>

    <td colspan=2>Contact No : <a href='tel:$_POST[cpn]'>$_POST[cpn]</a></td>

  </tr>

  <tr>

    <td colspan=2>Cab : $_POST[ccab]</td>

  </tr>

  

  

  <tr>

    <td colspan=2>PicUp Place : $_POST[pickup]</td>

  </tr>

  

  <tr>

    <td colspan=2>Drop Place : $_POST[dropup]</td>

  </tr>

  

  <tr>

    <td colspan=2>Trip Type : Oneway</td>

  </tr>

  

 
  </table>

  </div>







";



$headers  = 'MIME-Version: 1.0' . "\r\n";

$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

$from="booking@droptaxicity.in";

$to="droptaxicity@gmail.com";


$headers .= 'From: '.$from."\r\n".

'Reply-To: '.$from."\r\n" .

'X-Mailer: PHP/' . phpversion();

$sentmail = mail($to,$subject,$message,$headers);



  header("location:index.php?success=yes");

}

if($_POST['cdir']=="return")
  {
$sql = "INSERT INTO cab_booking (cname,cpn,pickup,dropup,pdate,ptime,cdir,booking_id,ccab)
VALUES ('$_POST[cname]','$_POST[cpn]','$_POST[pickup]','$_POST[dropup]','$_POST[pdate]','$_POST[ptime]','return','$booking_id','$_POST[ccab]')";


date_default_timezone_set("Asia/Calcutta");

$reg_date=date("d-m-Y");

$subject = "Basic Enquiry - Drop Taxi City";

$message = "

<div style='position:absolute; left:0px; right:0px; height:80px; padding:10px; background-color:#FCB414'>
<table width='100%' border='0'>
  <tr>
    <td width='50%'><img src='http://www.droptaxicity.in/images/logo.png' width='200'></td>
    <td width='50%'>&nbsp;</td>
  </tr>
</table>
</div>
<div style='background-color:#FDBFB9'>
<table width=100% border=0 cellspacing=5 cellpadding=5>

  <tr>

    <td colspan=2>Name : $_POST[cname]</td>

  </tr>

 
  <tr>

    <td colspan=2>Contact No : <a href='tel:$_POST[cpn]'>$_POST[cpn]</a></td>

  </tr>

  <tr>

    <td colspan=2>Cab : $_POST[ccab]</td>

  </tr>

  

  

  <tr>

    <td colspan=2>PicUp Place : $_POST[pickup]</td>

  </tr>

  

  <tr>

    <td colspan=2>Drop Place : $_POST[dropup]</td>

  </tr>

  

  <tr>

    <td colspan=2>Trip Type : Round Trip</td>

  </tr>

  

 
  </table>

  </div>







";



$headers  = 'MIME-Version: 1.0' . "\r\n";

$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

$from="booking@droptaxicity.in";

$to="droptaxicity@gmail.com";



$headers .= 'From: '.$from."\r\n".

'Reply-To: '.$from."\r\n" .

'X-Mailer: PHP/' . phpversion();

$sentmail = mail($to,$subject,$message,$headers);



  header("location:index.php?success=yes");

}


$conn->close();

}

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="description" content="Prime Cab HTML5 Responsive Template">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Drop Taxi City</title>

        <!-- Css Files Start -->
		<link href="css/bootstrap.css" rel="stylesheet">
		<link href="css/style.css" rel="stylesheet">
		<link href="css/fontawesome-all.min.css" rel="stylesheet">
		<link id="switcher" href="css/color.css" rel="stylesheet">
		<link href="css/color-switcher.css" rel="stylesheet">
		<link href="css/owl.carousel.css" rel="stylesheet">
		<link href="css/animate.css" rel="stylesheet">
		<link href="css/responsive.css" rel="stylesheet">
		<style>
html {
  scroll-behavior: smooth;
}</style>
		<!-- Css Files End -->
		
		<!--[if lt IE 9]>
	      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	    <![endif]-->

    </head>
	<body>
		<!--Wrapper Content Start-->
		<div class="tj-wrapper">
			<div class="loader-outer">
				<div class="tj-loader">
					<img src="images/logo.png" width="200px">
					<h2>Welcome</h2>
				</div>
			</div>
			<!--Style Switcher Section Start-->
			
			<!--Style Switcher Section End-->
			<header class="tj-header">

				<!--Header Content Start-->
				<div class="container">
					<div class="row">
						<!--Toprow Content Start-->
						<div class="col-md-3 col-xs-12 col-sm-4">
							<!--Logo Start-->
							<div class="tj-logo">
								<h1><a href="index.html"><img src="images/logo.png" width="200px"></a></h1>
							</div>
							<!--Logo End-->
						</div>
						
						<!--Toprow Content End-->
					</div>
				</div>
				
				
			</header>
			<?php
			
			if(isset($_GET['success']))
			{
			    ?>
			    <div style="position:relative; width:90%; margin:auto">
			  <section class="tj-payment" id="success-payment" >
			      
				<div class="container" style="width:100%">
					<div class="row">
						<div class="col-md-8 col-sm-8">
							<div class="success-msg">
								<span class="fas fa-check"></span>
								<h3>BOoking Successfull!</h3>
								<p>Our Team willbe Call you a  shortly.</p>
								<a href="index.php"><i class="fa fa-arrow-circle-left" aria-hidden="true"></i> Back to Home</a>
							</div>
						</div>
						
					
					</div>
				</div>
			</section>
			</div>
			
			<?php } ?>
			<!--Header Content End-->
			
			
			<!--Header Banner Content Start-->
			
		
			
			
			
			<section class="tj-banner">
				<div class="container">
					<div class="row">
						<!--Header Banner Caption Content Start-->
						<div class="col-md-12 col-sm-12">
							<div class="banner-caption">
								<div class="banner-inner bounceInRight animated delay-2s">
									<strong>Welcome To Drop Taxi City</strong>
									<h2>Get deals on Taxi Booking for Popular Cities</h2>
									<!--Header Banner Button Content Start-->		
									<div class="banner-btns">
										<a href="" class="btn-style-1">WhatsApp <i class="fa fa-whatsapp" aria-hidden="true"></i></a>
									</div>
									<!--Header Banner Button Content End-->		
								</div>
							</div>
						</div>
						<!--Header Banner Caption Content End-->		
					</div>
				</div>
			</section>
			<!--Header Banner Content End-->
			
			<!--Banner Form 2 Content Start-->
			<section class="tj-banner-form2" id="book">
				<div class="container">
					<div class="row" >
						<div class="col-md-12 col-sm-12">
							<!--Banner Form 2 Nav Start-->
							<div class="tj-form2-tabs">
								<ul class="nav nav-tabs">
									<li class="active"><a href="#one-way" data-toggle="tab">One Way</a></li>
									<li><a href="#two-way" data-toggle="tab">Two Way</a></li>
									
								</ul>
							</div>
							<!--Banner Form 2 Nav End-->
							<!--Form Tab Content Start-->
							<div class="tab-content">
								<!--Banner Form 2 Tab One Way Section Start-->
								<div class="tab-pane active" id="one-way">
									<!--Banner Form 2 Content Start-->
									<form method="POST" class="trip-frm2">
									    
									    
									    <input type="hidden" name="cdir" value="oneway">
									    
									    
									    	<div class="col-md-6 col-sm-6">
											<div class="field-box">
												<span class="fas fa-user"></span>
												<input type="text" name="cname" placeholder="Enter Your Name">
											</div>
										</div>
									
										<div class="col-md-6 col-sm-6">
											<div class="field-box">
												<span class="fas fa-mobile"></span>
												<input type="text" name="cpn" placeholder="Enter Mobile Number" required pattern="\d{10}" maxlength="10" >
											</div>
										</div>
										
										
										<div class="col-md-12 col-sm-12">
											<h4>Picking Up</h4>
											<div class="field-box">
												<span class="fas fa-map"></span>
												<input type="text" name="pickup" placeholder="Pickup Locations">
											</div>
										</div>
										
										<div class="col-md-12 col-sm-12">
											<h4>Dropping Off</h4>
											<div class="field-box">
												<span class="fas fa-map"></span>
												<input type="text" name="dropup" placeholder="Dropping Locations">
											</div>
											</div>
											
										<div class="col-md-6 col-sm-6">
											<div class="field-box">
												<span class="fas fa-calendar-alt"></span>
												<input type="text" name="pdate" placeholder="Select your Date">
											</div>
										</div>
									
										<div class="col-md-6 col-sm-6">
											<div class="field-box">
												<span class="far fa-clock"></span>
												<input type="text" name="ptime" placeholder="Select Timings">
											</div>
										</div>
										<div class="col-md-12 col-sm-12">
											<h4>Select Vehicle</h4>
											<div class="field-box">
												<span class="fas fa-car"></span>
												
												<select name="ccab" style="	width:100%;
	padding:12px 35px;
	font-size:14px;
	line-height:24px;
	color:#a6a6a6;
	border:1px solid #e8e8e8;
	display:block;
	margin-bottom:15px;
	border-radius:4px;">
												    <option value="">--Select--</option>
												   <option value="Hatchback">Hatchback Rs : 11/Km</option>
												    <option value="Sedan">Sedan Rs : 12/Km</option>
												    <option value="Suv">Suv Rs : 15?Km</option>
												</select>
											
											</div>
										</div>
										<div class="col-md-3 col-sm-3">
											<button type="submit" class="search-btn">Search Cabs <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></button>	
										</div>
									</form>
									<!--Banner Form 2 Content End-->
								</div>
								
								
								
								<div class="tab-pane" id="two-way">
									<!--Banner Form 2 Content Start-->
										<form method="POST" class="trip-frm2">
									    
									    
									    <input type="hidden" name="cdir" value="return">
									    
									    
									    	<div class="col-md-6 col-sm-6">
											<div class="field-box">
												<span class="fas fa-user"></span>
												<input type="text" name="cname" placeholder="Enter Your Name">
											</div>
										</div>
									
										<div class="col-md-6 col-sm-6">
											<div class="field-box">
												<span class="fas fa-mobile"></span>
												<input type="text" name="cpn" placeholder="Enter Mobile Number" required pattern="\d{10}" maxlength="10" >
											</div>
										</div>
										
										
										<div class="col-md-12 col-sm-12">
											<h4>Picking Up</h4>
											<div class="field-box">
												<span class="fas fa-map"></span>
												<input type="text" name="pickup" placeholder="Pickup Locations">
											</div>
										</div>
										
										<div class="col-md-12 col-sm-12">
											<h4>Dropping Off</h4>
											<div class="field-box">
												<span class="fas fa-map"></span>
												<input type="text" name="dropup" placeholder="Dropping Locations">
											</div>
											</div>
											
										<div class="col-md-6 col-sm-6">
											<div class="field-box">
												<span class="fas fa-calendar-alt"></span>
												<input type="text" name="pdate" placeholder="Select your Date">
											</div>
										</div>
									
										<div class="col-md-6 col-sm-6">
											<div class="field-box">
												<span class="far fa-clock"></span>
												<input type="text" name="ptime" placeholder="Select Timings">
											</div>
										</div>
										<div class="col-md-12 col-sm-12">
											<h4>Select Vehicle</h4>
											<div class="field-box">
												<span class="fas fa-car"></span>
												
												<select name="ccab" style="	width:100%;
	padding:12px 35px;
	font-size:14px;
	line-height:24px;
	color:#a6a6a6;
	border:1px solid #e8e8e8;
	display:block;
	margin-bottom:15px;
	border-radius:4px;">
												    <option value="">--Select--</option>
												    <option value="Hatchback">Hatchback Rs : 9/Km</option>
												    <option value="Sedan">Sedan Rs : 10/Km</option>
												    <option value="Suv">Suv Rs : 11/Km</option>
												</select>
											
											</div>
										</div>
										<div class="col-md-3 col-sm-3">
											<button type="submit" class="search-btn">Search Cabs <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></button>	
										</div>
									</form>
									<!--Banner Form 2 Content End-->
								</div>
								<!--Banner Form 2 Tab One Way Section End-->
							</div>
							<!--Form Tab Content End-->
						</div>
					</div>
				</div>
			</section>
			<!--Banner Form 2 Content End-->
			
			<!--Booking Services Section Start-->
			<section class="tj-book-services">
				<div class="container">
					<div class="row">
						<!--Booking Services Heading Start-->
						<div class="col-md-12 col-sm-12">
							<div class="tj-heading-style">
								<h3>Get Booking in 3 Steps</h3>
								<p>Drop Taxi City</p>
							</div>
						</div>
						<!--Booking Services Heading End-->
						<!--Booking Services Box Start-->
						<div class="col-md-4 col-sm-4">
							<div class="service-box">
								<div class="icon-outer">
									<span>01</span>
									<i class="far fa-edit"></i>
								</div>
								<div class="service-caption">
									<h3>Make Reservation</h3>
									
									<a href="#book">Book Now <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></a>
								</div>
							</div>
						</div>
						<!--Booking Services Box End-->
						<!--Booking Services Box Start-->
						<div class="col-md-4 col-sm-4">
							<div class="service-box">
								<div class="icon-outer">
									<span>02</span>
									<i class="fas fa-taxi"></i>
								</div>
								<div class="service-caption">
									<h3>Vehicle Confirmation</h3>
									
									<a href="#book">Book Now <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></a>
								</div>
							</div>
						</div>
						<!--Booking Services Box End-->
						<!--Booking Services Box Start-->
						<div class="col-md-4 col-sm-4">
							<div class="service-box">
								<div class="icon-outer">
									<span>03</span>
									<i class="far fa-thumbs-up"></i>
								</div>
								<div class="service-caption">
									<h3>Enjoy your Trips</h3>
									
									<a href="#book">Book Now <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></a>
								</div>
							</div>
						</div>
						<!--Booking Services Box End-->
					</div>
				</div>
			</section>
			<!--Booking Services Section End-->
			
			<!--Facts Style 2 Section Start-->
			<section class="tj-facts2">
				<div class="container">
					<div class="row">
						<div class="col-md-3 col-sm-3">
							<div class="fact-outer">
								<i class="far fa-smile"></i>
								<div class="fact-desc">
									<h3 class="fact-num">90</h3>
									<strong>K</strong>
									<span>Happy Clients</span>
								</div>
							</div>
						</div>
						<div class="col-md-3 col-sm-3">
							<div class="fact-outer">
								<i class="fas fa-tachometer-alt"></i>
								<div class="fact-desc">
									<h3 class="fact-num">85</h3>
									<strong>K</strong>
									<span>Tidal Rides</span>
								</div>
							</div>
						</div>
						<div class="col-md-3 col-sm-3">
							<div class="fact-outer">
								<i class="fas fa-user-circle"></i>
								<div class="fact-desc">
									<h3 class="fact-num">280</h3>
									<span>Our Drivers</span>
								</div>
							</div>
						</div>
						<div class="col-md-3 col-sm-3">
							<div class="fact-outer">
								<i class="far fa-map"></i>
								<div class="fact-desc">
									<h3 class="fact-num">105</h3>
									<span>Branches</span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!--Facts Style 2 Section End-->
			
			<!--Cab Filter Section Start-->
		
			<!--Cab Filter Section End-->
			
			<!--App Section Start-->
		
			<!--App Section End-->
			
			<!--Team Section Start-->
		
			<!--Team Section End-->
			
			<!--Partners Section Start-->
			
			<!-- Partners Section End-->
			
			<!--News Content Start-->
		
			<!--News Content End-->
			
			<section class="tj-form-map">
				<div class="container">
					<div class="row">
						<div class="col-md-6 col-sm-6 no-padr">
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d250646.68136444557!2d76.82714626807049!3d11.012014522457303!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ba859af2f971cb5%3A0x2fc1c81e183ed282!2sCoimbatore%2C%20Tamil%20Nadu!5e0!3m2!1sen!2sin!4v1608252385853!5m2!1sen!2sin" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
						</div>
						<div class="col-md-6 col-sm-6 no-padl">
							<div class="form-box">
								<div class="form_desc">
									<h3>Contact Us</h3>
									<p>More recently with desktop publishing aldus including versions.</p>
								</div>
								<form method="POST" class="contact_frm" id="contact-form2">
									<div class="frm-field">
										<div class="field-inner">
											<input type="text" name="username" id="username"  placeholder="Name"/>
										</div>
										<div class="field-inner">
											<input type="email" name="user_email" id="user_email" placeholder="Email"/>
										</div>
									</div>
									<div class="frm-field">
										<textarea name="message" id="send_msg" placeholder="Message"></textarea>
									</div>
									<button type="submit" id="sumbit_btn" class="submit-btn">Submit <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></button>
								</form>
							</div>
						</div>
					</div>
				</div>
			</section>			
						
			
			<!--Footer Content Start-->
			<section class="tj-footer2">
				<div class="container">
					<div class="row">
						<div class="col-md-4 col-sm-4">
							<ul class="fsocial-links">
								<li><a href="tel:919080859353"><i class="fas fa-phone"></i></a></li>
								<li><a href="https://wa.me/919080859353"><i class="fab fa-whatsapp"></i></a></li>
								
							</ul>
						</div>
						
						<div class="col-md-4 col-sm-4">
							<div class="copyright_text">
								<p>&copy; Copyrights 20201 All Rights Reserved. Design By WhatsURL</p>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!--Footer Content End-->
			
		</div>
		<!--Wrapper Content End-->
		
		<!-- Js Files Start --> 
		<script src="js/jquery-1.12.5.min.js"></script>
		<script src="js/bootstrap.min.js"></script> 
		<script src="js/migrate.js"></script>  
		<script src="js/owl.carousel.min.js"></script>
		<script src="js/color-switcher.js"></script>
		<script src="js/jquery.isotope.min.js"></script>
		<script src="js/imagesloaded.pkgd.min.js"></script>
		<script src="js/jquery.counterup.min.js"></script>	
		<script src="js/waypoints.min.js"></script>
		<script src="js/jquery.validate.min.js"></script> 
		<script src="js/custom.js"></script>
		<script src="js/map.js"></script>
		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB6jA7zgSOl8PDIEhtHL4nmOvGCLezPYn4"></script>
		<!-- Js Files End --> 
	</body>
</html>