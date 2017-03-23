<?php
function convert_email_adr($email) {
    $pieces = str_split(trim($email));
    $new_mail = '';
    foreach ($pieces as $val) {
        $new_mail .= '&#'.ord($val).';';
    }
    return $new_mail;
}

require_once('includes/geolocate.php');
session_start();
if (strlen($_SESSION['USA'])==0) {
	$_SESSION['USA'] = isUS();
}
if ($_SESSION['USA']) {
	$stel = "+1 (201) 676-2525";
	$sfax = "+1 (201) 346-5460";
	$semail = convert_email_adr("sales@ozonia.com");

	$ctel = "+1 (201) 676-2525";
	$cfax = "+1 (201) 346-5460";
	$cemail = convert_email_adr("sales@ozonia.com");
} else {
	$stel = "+41 44 801 85 11";
	$sfax = "+41 44 801 85 02";
	$semail = convert_email_adr("sales@ozonia.com");

	$ctel = "+41 44 801 86 63";
	$cfax = "+41 44 801 85 02";
	$cemail = convert_email_adr("service-ozoniach@degtec.com");
}


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
	<head>
<?php include('includes/common-head.php') ?>		
		<title>ozonia&reg;</title>
		<script type="text/javascript" src="scripts/jquery.innerfade.js"></script>
		<script type="text/javascript" src="scripts/jquery.hoverIntent.minified.js"></script>
		<script type="text/javascript">
		$(document).ready(function(){
			//Slide nav setup
			$('.slide-wrap .slide').each(function(){
				$('.slide-nav').append('<li><a href="#">&nbsp;</a></li>');
			});
			
			
			$('.slide-nav li a').eq(0).addClass('active');
			
			//Slide nav
			var slideTotal = $('.slide-wrap .slide').length;
			var currentSlide = 0;
			var slideHeight = $('.slide-wrap').height();
					
			//Bullet nav
			var bullNum =  0;
			$('.slide-nav li a').each(function(){	
				$(this).attr({href: bullNum});
				$(this).click(function(e){
					e.preventDefault();
					$('.slide-nav li a').eq(currentSlide).removeClass('active');
					currentSlide = $(this).attr('href');
					animSlide();
					$('.slide-nav li a').eq(currentSlide).addClass('active');
				});
				bullNum++;
			});
								
			//Slide navigate Function
			function animSlide(){
				var animAmount = (currentSlide * slideHeight) * -1;
				$('.slide-wrap ul').animate({marginTop: animAmount},300)
			};	
			
			setInterval(function(){
				if(currentSlide < slideTotal-1){
					$('.slide-nav li a').eq(currentSlide).removeClass('active');
					currentSlide++;
					$('.slide-nav li a').eq(currentSlide).addClass('active');
					animSlide();					
				}else if(currentSlide == slideTotal-1){
					$('.slide-nav li a').eq(currentSlide).removeClass('active');
					currentSlide = 0;
					$('.slide-nav li a').eq(currentSlide).addClass('active');
					animSlide();					
				}
			}, 8000);
			

			//Phone number display code
			$('.phones .info').hide();
			$(".phone").hoverIntent(
			    function() {$(this).find("li.info").slideToggle("fast");},
			    function() {$(this).find("li.info").slideToggle("fast");}
			);
			
			//Nav state preview
			//$('.nav li a[href="app.php"]').addClass('active');
		
		});
		
		
		</script>	
		
	</head>
	
	<body id="home-page">
	
		<div class="wrapper whitebg round1 shadow1">
				<?php include('includes/header.php') ?>
		
			<div class="hero-hp">
				<div class="hero-content">
					<ul class="slide-nav clearfix"></ul>
					<div id="slider" class="slide-wrap">
						<ul>
							<li class="slide">	
								<h2>Visit our booth at IFAT in M&Uuml;nich</h2>
								<br />							
								<img src="images/slides/IFAT_LOGO.jpg" alt="Advanced Oxidation Process" class="left"/>
								
				    			<p>May 7th-11th, 2012 <br /> Hall 3, Stand 227-326</p>
								<a href="http://www.ifat.de/" class="ozoniaButton left">Connect With Us</a>
							</li>
							
							<li class="slide">	
								<h2 style="margin-bottom:15px;">Welcome to ozonia&reg;'s New Website</h2>	
								<img src="images/slides/hero-welcome.png" alt="Advanced Oxidation Process" class="right"/>
				    			<p>Start by browsing our our <a href="ozone.php">Ozone</a> or <a href="uv.php">UV</a> technology pages or try our new Solution Finder. </p>				    				
								<a href="app.php" class="ozoniaButton left">Learn More</a>
							</li>

							
							<li class="slide">		
								<img src="images/slides/hero-app.jpg" alt="Advanced Oxidation Process" class="right"/>
								<h2>Discover a world of applications tailored to your needs</h2>	
				    			<p>As a world leader in <a href="ozone.php">Ozone</a> and <a href="uv.php">UV</a>  water treatment, ozonia&reg; has the experience and know how to provide real solutions to your water treatment challenges.</p>
								<a href="app.php" class="ozoniaButton left">Learn More</a>
							</li>
									
							<li class="slide">	
								<img src="images/slides/hero-pulp2.jpg" alt="OZAT CFV ozone disinfection" class="right"/>	
								<h2>Pulp & Paper</h2>								
								<p>Bahia Specialty Cellulose relies on ozonia&reg; to produce 60kg Ozone/h.</p>								
								<a href="industrialapp.php#pulp" class="ozoniaButton left">Learn More</a>
								
							</li>
							
							<li class="slide">
								<img src="images/slides/hero-service.jpg" alt="ozonia&reg; Customer Care" class="left"/>
								<h2>Protect your process. Optimize your operation.</h2>
								<p>ozonia&reg; is committed to providing complete technical support. For any query that arises in connection with the operation of an ozonia&reg; product our service team is easily accessible and ready to help.</p>
								<a href="contact.php" class="ozoniaButton right">Contact Us</a>

							</li>							
							
							
<!--
							<li class="slide">								
								<img src="images/slides/aop.jpg" alt="Advanced Oxidation Process" class="left"/>
								<h2>Complex Problems Require Radical Solutions</h2>
				    			<p>State-of-the-art AOP systems developed by ozonia&reg; use or combine three proven treatment technologies (Ozone, UV, Hydrogen Peroxide) to create hydroxyl radicals, the ultimate oxidant for elimination of organic pollutants.</p>
								<a href="aop.php" class="ozoniaButton left">Learn More</a>
							</li>
	
							<li class="slide">								
								<h2>OZAT CFV Compact Ozone Generators</h2>
								<img src="images/slides/cfv.jpg" alt="OZAT CFV ozone disinfection" class="right"/>
								<p>The OZAT<sup>&reg;</sup> CFV ozone generators incorporate ozonia&reg;&rsquo;s patented &ldquo;Advanced Technology&rdquo; dielectric segments together with a state-of-the-art IGBT power supply unit.</p>
								<a href="ozone.php#cfv" class="ozoniaButton left">Learn More</a>
							</li>
							<li class="slide">
								<img src="images/slides/service.jpg" alt="ozonia&reg; Customer Care" class="left"/>
								<h2>Protect your process. Optimize your operation.</h2>
								<p>ozonia&reg; is committed to providing complete technical support. For any query that arises in connection with the operation of an ozonia&reg; product our service team is easily accessible and ready to help.</p>
								<a href="contact.php" class="ozoniaButton right">Contact Us</a>

							</li>
-->
						</ul>
					</div>
				</div>	
				
				<?php include('includes/solutions-nav.php') ?>
				<div class="phones">
					<ul id="phonesales" class="phone">
						<li class="title">Sales</li>
						<li class="info">
							<ul>
								<li>Tel: <?php echo $stel;?></li>
								<li>Fax: <?php echo $sfax;?></li>
								<li><a href="mailto:<?php echo $semail;?>">Email Sales</a></li>
							</ul>	
						</li>				
					</ul>
					<ul id="phonecustomer" class="phone">
						<li class="title">Customer Care</li>
						<li class="info">
							<ul>
								<li>Tel: <?php echo $ctel;?></li>
								<li>Fax: <?php echo $cfax;?></li>
								<li><a href="mailto:<?php echo $cemail;?>">Email Customer Service</a></li>
							</ul>
						</li>					
					</ul>
				</div>
			
			</div>
		
		
		</div>

<!--
		<div class="wrapper news">
			<h5 class="ticker-h5">Latest <span class="red">&raquo;</span></h5>
		    <ul class="ticker round2">
		    	<li><a href="#">News Ticker Item</a></li>
		    	<li><a href="#">News Ticker 2</a></li>
		    	<li><a href="#">News Ticker 3</a></li>
		    	<li><a href="#">News Ticker 4</a></li>
		    	<li><a href="#">News Ticker 5</a></li>
		    </ul>
		</div>
-->
		
		<ul class="wrapper features">
		    <li><a href="ozone.php"><img src="images/features/ozone.png" alt="ozone generator"/><span>Ozone</span></a></li>
		    <li><a href="uv.php"><img src="images/features/uv.png" alt="Ultraviolet Disinfection" /><span>UV</span></a></li>
		    <li><a href="aop.php"><img src="images/features/aop.png" alt="Advanced Oxidation Process"/><span>AOP</span></a></li>
		    <li><a href="app.php"><img src="images/features/applications2.png" alt="Ozone and UV disinfection application" /><span>Applications</span></a></li>
		    <li><a href="parts.php"><img src="images/features/service.png" alt="ozonia&reg; Customer Care" /><span>Service</span></a></li>
		</ul>
			
		<?php include('includes/footer.php') ?>

	
	</body>
</html>