<?php require_once('includes/cookies.php'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
	<head>
		<?php include('includes/common-head.php') ?>
		<title>ozonia<sup>&reg;</sup></title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<script type="text/javascript" src="scripts/jquery.innerfade.js"></script>
		<script type="text/javascript" src="scripts/jquery.hoverIntent.minified.js"></script>

		<link rel="stylesheet" type="text/css" href="scripts/jquery.lightbox/js/lightbox/themes/default/jquery.lightbox.css" />
		<!--[if IE 6]>
		<link rel="stylesheet" type="text/css" href="scripts/jquery.lightbox/js/lightbox/themes/default/jquery.lightbox.ie6.css" />
		<![endif]-->
		<script type="text/javascript" src="scripts/jquery.lightbox/src/jquery.lightbox.js"></script>
		<script type="text/javascript" src="scripts/jquery.insetBorderEffect.js"></script>


		<script type="text/javascript">
		$(document).ready(function(){
			//Slide nav setup
			$('.slide-wrap .slide').each(function(){
				$('.slide-nav').append('<li><a href="#">&nbsp;</a></li>');
			});


			$('.slide-nav li a').eq(0).addClass('active');

			var sliderSpeed = 11500;

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
			}, sliderSpeed);


			//Phone number display code
			$('.phones .info').hide();
			$(".phone").hoverIntent(
			    function() {$(this).find("li.info").slideToggle("fast");},
			    function() {$(this).find("li.info").slideToggle("fast");}
			);

			//Nav state preview
			//$('.nav li a[href="app.php"]').addClass('active');

			//Instatiate hero lightbox
			//$('.lightbox').lightbox();

			$('a.lightbox img').insetBorder({
			  inset : 7,
			  borderColor : 'rgba(70,70,70,0.5)',
			  speed : 250,
			  borderType : 'solid'
			});

			//Modal window for membrel hero
			$("#membrel-modal").click(function() {
			  var html = $('<a href="ozone.php#membrel"><img src="images/slides/membrel-modal-2.png" alt="modal-membrel" width="578" height="495" /></a>');

			  $.lightbox(html, {
			    width   : 585,
			    height  : 510
			  });

			  return false;
			});			//Modal window for membrel hero
			$(".slide").on("click", "#biocide-modal", function(e) {
				e.preventDefault();
				var biocide = $('#biocide');
				var html = biocide;
				$.lightbox(html, {width:575, height:700}, function(){biocide.show();});
			});

		});


		</script>

<style>#biocide p{margin-bottom: 10px;} .hero-content > #biocide{display: none;}</style>

	</head>

	<body id="home-page">

		<div class="wrapper whitebg round1 shadow1">
				<?php include('includes/header.php') ?>

			<div class="hero-hp">
				<div class="hero-content">
					<ul class="slide-nav clearfix"></ul>
					<div id="slider" class="slide-wrap">
						<ul>

							<!-- <li class="slide">
								<a href="http://ready-for-the-resource-revolution.com/"><img src="images/slides/rr2.jpg" height="224" width="488" alt="" /></a>
							</li> -->
							<!--
							<li class="slide">
								<img src="images/slides/rrtour.jpg" height="179" class="right" width="200" />
								<h2 style="font-size:18px;">Resource Revolution Tour</h2>
								<p>
									<strong style="font-size: 15px;">Follow the <a href="twitter.com/#RRTour">#RRTour</a> keynote live</strong> <br />
									<strong>1</strong> Challenge | <strong>3</strong> Cities | <strong>15</strong> Speakers <br />
									<em>March 12th, 2015 - 11:30am</em>

								</p>
								<a class="ozoniaButton left" target="_blank" href="http://resourcerevolutiontour.com">Learn more</a>
							</li>
							-->


							<li class="slide">
								<h2>Come and visit us at the following events in 2015</h2>
								<img src="images/news/XF-Skid-gerendert-460x259.jpg" width="200" alt="Micropollutants" class="right" width="460"/>
								<p>We are sponsoring major events such as the <strong>Ozone World Congress and Exhibition</strong> and the <strong>Micropol & Ecohazard Conference 2015</strong>. Click here to learn where our specialist will be ready to welcome you. </p>
								<a target="_blank" class="ozoniaButton left" href="news.php">Learn more</a>
							</li>

							<li class="slide">
								<h2>How Do You Treat Micropollutants?</h2>
								<img src="images/slides/Nuage-Micropolluants_opt.jpg" alt="Micropollutants" class="right" width="150"/>
								<p>As a leader in environmental protection, Switzerland has introduced legislation which will upgrade its main wastewater treatment facilities to protect the community and environment from emerging contaminants.In Switzerland and worldwide, ozonia<sup>&reg;</sup> has played a pioneering role in the field of micropollutant treatment by providing tailored solutions using ozonia<sup>&reg;</sup>’s OxEM™ process.</p>
								<a target="_blank" class="ozoniaButton left" href="http://oxem.ozonia.com">Learn more</a>
							</li>

							<li class="slide">
								<h2>Discover ozonia<sup>&reg;</sup> 360° Customer Care</h2>
								<img src="images/slides/360.jpg" class="right" width="200" />
								<p>Our expertly trained Customer Care teams provide service, repairs, maintenance, training, and know-how transfer. Find out how we add value to customers and suppliers alike.</p>
								<a class="ozoniaButton left" href="http://ozonia.com/parts.php">Learn more</a>
							</li>

							<li class="slide">
								<img src="images/slides/app.jpg" class="right" width="150" />
								<h2>Countless Applications</h2>
								<p>Ozone, UV and AOP based processes are already used in numerous applications in the Municipal, Industrial, and Leisure sector today. Learn how you can benefit from ozonia<sup>&reg;</sup>’s expertise.</p>
								<a class="ozoniaButton left" href="http://www.ozonia.com/app.php">Learn more</a>
							</li>

							<li class="slide">
								<h2>Innovation: Our Inspiration</h2>
								<img src="images/slides/innovation.jpg" class="right" width="200" />
								<p>As a globally recognized leader in oxidation and disinfection, ozonia<sup>&reg;</sup> has a strong commitment to creating value with focused programs across its organization. ozonia<sup>&reg;</sup> is investing in cutting edge research and development to bring the most innovative solutions in ozone and UV technologies to the market.</p>
								<a class="ozoniaButton left" href="http://ozonia.com/innovation.php">Learn more</a>
							</li>

							<li class="slide">
								<h2>Meet the Aquaray HiCAP™</h2>
								<img src="images/slides/hicap.jpg" class="right" width="220" />
								<p>The Aquaray HiCAP™ UV system provides validated disinfection performance under even the most challenging conditions for primary, secondary or reuse applications. Find out how ozonia<sup>&reg;</sup>’s innovation can help your facility meet its goals.</p>
								<a class="ozoniaButton left" href="http://www.ozonia.com/uv.php#hicap">Learn more</a>
							</li>

							<!--
							<li class="slide">
								<h2>EU BIOCIDAL PRODUCTS REGULATIONS</h2>
								<img src="images/slides/echa_logo.jpg" width="200" style="float:right;padding-bottom:10px;"/>
								<p>From September 1st 2013 Ozone is regulated as an active substance. Under EU law the Biocidal Product Regulation requires both substance and product registration for ozone equipment. Four manufacturers of ozone equipment have joined forces to prepare and submit an active substance dossier for the approval of ozone.</p>
								<a href="#" id="biocide-modal" class="ozoniaButton left">Learn More</a>
							</li>
							-->

						</ul>
					</div>
					<div id="biocide">
						<img src="images/slides/echa_logo.jpg" width="160" align="right"/>
						<h2>EU BIOCIDAL <br />
							PRODUCTS REGULATIONS:</h2>
						<br />
						<p><strong>EU Biocidal Products Regulations: From September 1st 2013 Ozone is regulated as an active substance. Under EU law the Biocidal Product Regulation requires both substance and product registration for ozone equipment. Four manufacturers of ozone equipment have joined forces to prepare and submit an active substance dossier for the approval of ozone.</strong></p>
						<p>Since September 1st 2013 the Biocidal Product Regulation EU/528/2012 (BPR) is in force and is superseding the former Biocidal Product Directive 98/8/EC (BPD). In the past ozone was already recognized as a biocide, but its registration obligations were exempted under the BPD; following special rules for in-situ produced biocides. This special status has now been revoked under the BPR. As a result ozone equipment which is placed in the EU market for biocidal applications (e.g. disinfection) requires EU authorization. After September 2017 the transitional periods will come to an end and compliance with the BPR is required.</p>
						<p>The authorization is a two-step procedure. First, ozone itself has to be added to the list of approved “active substances” (AS). Second, the ozone generation equipment needs to be authorized as “biocidal product”. It is unlikely that users of ozone equipment will be able to undertake the authorization procedure alone. This is due to detailed specialist know-how required and the high cost associated with the process. Therefore the manufacturers of the equipment will have to provide the biocidal product authorization of ozone equipment to their customers.      </p>
						<p>Four ozone equipment manufacturers have joined forces as part of the “Ozone Registration Group” to accomplish the authorization of ozone as an active substance.  These manufacturers are BWT, Degrémont Technologies (ozonia<sup>&reg;</sup>), ProMinent and Xylem (WEDECO).  The target of this joint effort is to submit a so called “active substance dossier” for ozone; addressing several ozone applications (product types) and have ozone finally added to the list of active substances. This can be expected from 
							September 1st 2017 onwards. </p>
						<p>The Ozone Registration Group will provide access to their AS dossier by means of a “Letter of Access” (LoA). This will be available to anyone in need to carrying out the biocidal product registration and waiving the requirement of writing and submitting an own active substance dossier for ozone. This is providing a huge benefit regarding time and expenditure. The Ozone Registration Group will offer LoAs as regulated under the BPR to any external party.   </p>
						<p>More information and pre-registration for a Letter of Access will be available from January 1st 2014 at www.ozone-registration-group.com. </p>
						<h4>For more information:</h4>
						<p><a href="contact.php" class="ozoniaButton left">Contact Us</a></p>
					</div>
				</div>

				<?php
					include('includes/solutions-nav.php');

					if ($_SESSION['Location'] == 'US') {
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
		    <li><a href="parts.php"><img src="images/features/service.png" alt="ozonia<sup>&reg;</sup> Customer Care" /><span>Service</span></a></li>
		</ul>

		<?php include('includes/footer.php') ?>


	</body>
</html>