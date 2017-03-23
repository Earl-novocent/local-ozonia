<?php require_once('includes/cookies.php'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
	<head>
		<?php include('includes/common-head.php') ?>
		<title>ozonia&reg;</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<script type="text/javascript" src="scripts/jquery.innerfade.js"></script>
		<script type="text/javascript" src="scripts/jquery.hoverIntent.minified.js"></script>

		<link rel="stylesheet" type="text/css" href="scripts/jquery.lightbox/js/lightbox/themes/default/jquery.lightbox.css" />
		<!--[if IE 6]>
		<link rel="stylesheet" type="text/css" href="scripts/jquery.lightbox/js/lightbox/themes/default/jquery.lightbox.ie6.css" />
		<![endif]-->
		<script type="text/javascript" src="scripts/jquery.lightbox/src/jquery.lightbox.js"></script>
		<script type="text/javascript" src="scripts/jquery.insetBorderEffect.js"></script>
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/swfobject/2.2/swfobject.js"></script>


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
			});
			//Modal window for membrel hero
			$(".slide").on("click", "#biocide-modal", function(e) {
				e.preventDefault();
				var biocide = $('#biocide');
				var html = biocide;
				$.lightbox(html, {width:575, height:700}, function(){biocide.show();});
			});

		  var holiday = $('#holiday');
		  $.lightbox(holiday, {
		    width   : 900,
		    height  : 652
		  });

		});


		</script>
	    <script type="text/javascript">
	    swfobject.registerObject("holiday", "9.0.115", "expressInstall.swf");
	    </script>

<style>#biocide p{margin-bottom: 10px;} .hero-content > #biocide{display: none;}</style>

	</head>

	<body id="home-page">
<div style="position:absolute;left:-99999;" id="holiday">
      <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="900" height="652">
        <param name="movie" value="media/flash/xmas2013.swf" />
        <!--[if !IE]>-->
        <object type="application/x-shockwave-flash" data="media/flash/xmas2013.swf" width="900" height="652">
        <!--<![endif]-->
          <p>You need flash to play this video!</p>
        <!--[if !IE]>-->
        </object>
        <!--<![endif]-->
      </object>
</div>
		<div class="wrapper whitebg round1 shadow1">
				<?php include('includes/header.php') ?>

			<div class="hero-hp">
				<div class="hero-content">
					<ul class="slide-nav clearfix"></ul>
					<div id="slider" class="slide-wrap">
						<ul>
							<!--<li class="slide">
								<h2>Visit our booth at IFAT in M&Uuml;nich</h2>
								<br />
								<img src="images/slides/IFAT_LOGO.jpg" alt="Advanced Oxidation Process" class="left"/>

				    			<p>May 7th-11th, 2012 <br /> Hall 3, Stand 227-326 <br /> <a href="http://www.ifat.de/"target="_blank">www.ifat.de</a></p>
								<a href="images/slides/ifathall.jpg" class="ozoniaButton left lightbox">Connect With Us</a>
							</li>
							<li class="slide">
								<h2>Visit our booth at AWWA in <br />Dallas, Texas</h2>
								<br />
								<img src="images/slides/AWWA_LOGO.jpg" alt="AWWA" class="left"/>
								<p>June 10th-13th, 2012 <br /> Booth 2513 <br /> <a href="http://www.awwa.org/"target="_blank">www.awwa.org</a></p>
								<a href="images/slides/awwahall2513.jpg" class="ozoniaButton left lightbox">Connect With Us</a>
							</li>

							<li class="slide">
								<h2>Visit our booth at ACHEMA in Frankfurt, Germany</h2>
								<br />
								<img src="images/slides/ACHEMA_LOGO.jpg" alt="AWWA" class="left"/>
								<p>June 18th-22nd, 2012 <br /> Hall 9.2 Booth C27 <br /> <a href="http://dechema.de" target="_blank">www.dechema.de</a></p>
								<a target="_blank" href="http://achema-online.dechema.de/pls/achema/iworld.pk_menue.p_build_menue?p_projekt_id=ACHEMA_ONLINE&p_spkz=E&p_messenr=00022&p_menue=140&p_faktor=800	" class="ozoniaButton left">Connect With Us</a>
							</li>
							-->


							<li class="slide">
								<h2>EU BIOCIDAL PRODUCTS REGULATIONS</h2>
								<img src="images/slides/echa_logo.jpg" width="200" alt="" style="float:right;padding-bottom:50px;"/>
								<p>From September 1st 2013 Ozone is regulated as an active substance. Under EU law the Biocidal Product Regulation requires both substance and product registration for ozone equipment. Four manufacturers of ozone equipment have joined forces to prepare and submit an active substance dossier for the approval of ozone.</p>
								<a href="#" id="biocide-modal" class="ozoniaButton left">Learn More</a>
							</li>
							<li class="slide">
								<h2>DISCOVER THE ozonia&reg; HISTORY BOOK</h2>
								<img src="images/ozonia-book.jpg" alt="ozonia&reg; History" class="right" width="250" style="margin:0;"/>
								<p>Being a worldwide leader in ozone and UV water treatment doesn't come from one day to another.</p>
								<p>Learn more about ozonia&reg;'s roots by reading our history book.</p>
								<a href="about.php" class="ozoniaButton left">Learn More</a>
							</li>

							<li class="slide">
								<h2 style="font-size:20px;">ozonia&reg; Introduces the Aquaray H<span class="lower">i</span>CAP&trade; </h2>
								<img src="images/slides/hicap.jpg" alt="Aquaray HiCAP" class="right" width="98" style="margin:0px 25px 0 0;"/>
								<p> <strong><em>The Next Generation Vertical UV System </em></strong></p>
								<!-- <ul> -->
									<p>
										&bull; 1000 Watt <strong>High CAP</strong>acity Lamp<br />
										&bull; Three (3) module sizes increases flexibility for design and expansion<br />
										<!-- &bull; Validated for Wastewater Disinfection and Reuse (Title 22)<br /> -->
										<!-- &bull; Integrated Automatic UV Bank Lifting System<br /><br /> -->
<!--
										&bull; 36 / 24 /12 Lamp Modules For Design Flexibility<br />
										&bull; Integrated Automatic UV Bank Lifting System <br />
										&bull; Automatic Quartz Sleeve Wiping System <br />
-->
										<strong>To find out more, visit us October 7-9 in the <br />ozonia&reg; Booth (2431) at WEFTEC 2013</strong>
									</p>
								<!-- </ul> -->
								<a href="uv.php?#hicap" class="ozoniaButton left">Learn More</a>
							</li>

							<li class="slide">
								<h2>Visit us at WEFTEC 2013 </h2>
								<br />
								<img src="images/slides/weftec.jpg" alt="AWWA" class="left" />
								<p> Visit us <strong>October 7-9</strong> in the ozonia&reg; <strong>Booth (2431)</strong> at WEFTEC 2013!</p>
								<!-- <a target="_blank" href="" class="ozoniaButton left">Connect With Us</a> -->
							</li>

							<li class="slide">
								<h2>ozonia&reg; celebrates the launch of its new website in Chinese</h2>
								<img src="images/slides/zh-welcome.png" alt="Chinese Welcome" class="right" width="250"/>
								<p><strong><em>ozonia&reg; enlarges its digital footprint with the creation of the Chinese version of ozonia&reg;.com</em></strong></p>
								<a href="zh" class="ozoniaButton left viewLang">View in Chinese <br />现在查看</a>
							</li>

							<li class="slide">
								<h2>Micropollutants in a nutshell:</h2>
								<img src="images/slides/Nuage-Micropolluants_opt.jpg" alt="Micropollutants" class="right" width="250"/>
								<p> <strong><em>What do you really know about micropollutants?</em></strong></p>
								<!-- <ul> -->
									<p>What are the sources of pollution? <br />
									How do they affect the environment? <br />
									Why are they so problematic? <br />
									What are the solutions?</p>
								<!-- </ul> -->
								<a href="municipalapp.php?#micropollutants" class="ozoniaButton left">Learn More</a>
							</li>

<!--
							<li class="slide">
								<h2><span style="text-transform:lowercase;">1st</span> Micropollutants Reference:</h2>
								<img src="images/slides/wastewater.jpg" alt="Wastewater Treatment" class="right"/>
								<p> <strong><em>Wastewater treatment plant Neugut in Dübendorf (Zürich).</em></strong></p>
				    			<p>This wastewater treatment plant will become the first plant in Switzerland
								complying with the new legislation on micropollutants treatment.</p>

								<a href="municipalapp.php?modal=swiss#micropollutants" class="ozoniaButton left">Learn More</a>
							</li>


							<li class="slide">
								<h2>Micropollutants:</h2>
								<img src="images/slides/montage-micropoll.jpg" alt="Micropollutants" class="right"/>
				    			<p>Discover our dedicated solutions for the removal of micropollutants.</p>
								<a href="municipalapp.php#micropollutants" class="ozoniaButton left">Learn More</a>
							</li>
-->
<!--
							<li class="slide">
								<h2>ozonia&reg; celebrates the opening of it's new production center</h2>
								<img src="images/slides/production-center-2.jpg" alt="ozonia&reg; Customer Care" class="left"/>
								<p>ozonia&reg; is proud to introduce its new high-tech and innovative production facility.</p>
								<a href="about.php" class="ozoniaButton left">Learn More</a>

							</li>
-->

							<li class="slide">
								<h2 style="margin-bottom:15px;">The New MEMBREL<sup>&reg;</sup> <span style="text-transform:none;">MkIV</span></h2>
								<img src="images/slides/membrel-with-logo.jpg" alt="Advanced Oxidation Process" class="right"/>
				    			<p>ozonia&reg; introduces the brand new MEMBREL<sup>&reg;</sup> MkIV, a major redesign of
								its state-of-the-art electrolytic ozone generation system.</p>
								<a id="membrel-modal" href="#" class="ozoniaButton left">Learn More</a>
							</li>
<!--

							<li class="slide">
								<h2 style="margin-bottom:15px;">Welcome to ozonia&reg;'s New Website</h2>
								<img src="images/slides/hero-welcome.png" alt="Advanced Oxidation Process" class="right"/>
				    			<p>Start by browsing our <a href="ozone.php">Ozone</a> or <a href="uv.php">UV</a> technology pages or try our new Solution Finder. </p>
								<a href="app.php" class="ozoniaButton left">Learn More</a>
							</li>
-->


<!--
							<li class="slide">
								<img src="images/slides/hero-app.jpg" alt="Advanced Oxidation Process" class="right"/>
								<h2>Discover a world of applications tailored to your needs</h2>
				    			<p>As a world leader in <a href="ozone.php">Ozone</a> and <a href="uv.php">UV</a>  water treatment, ozonia&reg; has the experience and know how to provide real solutions to your water treatment challenges.</p>
								<a href="app.php" class="ozoniaButton left">Learn More</a>
							</li>
-->

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

						</ul>
					</div>
					<div id="biocide">
						<img src="images/slides/echa_logo.jpg" width="160" alt="" align="right"/>
						<h2>EU BIOCIDAL <br />
							PRODUCTS REGULATIONS:</h2>
						<br />
						<p><strong>EU Biocidal Products Regulations: From September 1st 2013 Ozone is regulated as an active substance. Under EU law the Biocidal Product Regulation requires both substance and product registration for ozone equipment. Four manufacturers of ozone equipment have joined forces to prepare and submit an active substance dossier for the approval of ozone.</strong></p>
						<p>Since September 1st 2013 the Biocidal Product Regulation EU/528/2012 (BPR) is in force and is superseding the former Biocidal Product Directive 98/8/EC (BPD). In the past ozone was already recognized as a biocide, but its registration obligations were exempted under the BPD; following special rules for in-situ produced biocides. This special status has now been revoked under the BPR. As a result ozone equipment which is placed in the EU market for biocidal applications (e.g. disinfection) requires EU authorization. After September 2017 the transitional periods will come to an end and compliance with the BPR is required.</p>
						<p>The authorization is a two-step procedure. First, ozone itself has to be added to the list of approved “active substances” (AS). Second, the ozone generation equipment needs to be authorized as “biocidal product”. It is unlikely that users of ozone equipment will be able to undertake the authorization procedure alone. This is due to detailed specialist know-how required and the high cost associated with the process. Therefore the manufacturers of the equipment will have to provide the biocidal product authorization of ozone equipment to their customers.      </p>
						<p>Four ozone equipment manufacturers have joined forces as part of the “Ozone Registration Group” to accomplish the authorization of ozone as an active substance.  These manufacturers are BWT, Degrémont Technologies (ozonia&reg;), ProMinent and Xylem (WEDECO).  The target of this joint effort is to submit a so called “active substance dossier” for ozone; addressing several ozone applications (product types) and have ozone finally added to the list of active substances. This can be expected from
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
		    <li><a href="parts.php"><img src="images/features/service.png" alt="ozonia&reg; Customer Care" /><span>Service</span></a></li>
		</ul>

		<?php include('includes/footer.php') ?>


	</body>
</html>