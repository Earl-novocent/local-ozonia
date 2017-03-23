<?php require_once('includes/cookies.php'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
	<head>
		<?php include('includes/common-head.php'); ?>
		<title>ozonia&reg; | About</title>
		<link rel="stylesheet" type="text/css" href="scripts/jquery.lightbox/js/lightbox/themes/default/jquery.lightbox.css" />
		<!--[if IE 6]>
		<link rel="stylesheet" type="text/css" href="scripts/jquery.lightbox/js/lightbox/themes/default/jquery.lightbox.ie6.css" />
		<![endif]-->
		<script type="text/javascript" src="scripts/jquery.lightbox/src/jquery.lightbox.js"></script>
		<script type="text/javascript" src="scripts/jquery.insetBorderEffect.js"></script>

		<script type="text/javascript">
			$(document).ready(function($){
				$('.lightbox').lightbox();
				var h = $(window).height() - 100;
				var w = $(window).width() - 100;
				$('.modal').lightbox({width: w, height: h});

				$('a.lightbox img').insetBorder({
				  inset : 7,
				  borderColor : 'rgba(70,70,70,0.5)',
				  speed : 250,
				  borderType : 'solid'
				});
			});
		</script>
	</head>

	<body class="inner-page">
		<div class="wrapper whitebg round2 shadow1">
			<?php include('includes/header.php'); ?>

			<div class="hero-inner clearfix">
				<div class="hero-content" style="overflow:hidden">
					<h1>ozonia&reg; has more than <br />35 years of
						experience <br />in disinfection
						and oxidation processes</span></h1>
					<img src="images/hero-about2.jpg" alt="" />
				</div>
				<?php include('includes/solutions-nav.php'); ?>
			</div>

			<div class="pagecontent cc-block clearfix">
				<h2 class="section-title">News</h2>
				<div class="left">
<h4>Discover SUEZ Environment purification and disinfection systems for ozone, UV and membranes systems offer at the 22nd IOA World Congress & Exhibition</h4>

<p style="text-align: justify;"><strong>SUEZ environnement</strong> as the world’s largest producer of <strong>purification and disinfection systems for ozone, UV and membranes systems</strong> is sponsoring the 22<sup>nd</sup><strong>&nbsp;IOA world congress &amp; exhibition</strong> organised by the<strong> International Ozone Association.</strong></p>

<p style="text-align: justify;">The congress 2015 will take place in<strong> Barcelona (Spain) 28 June – 3 July</strong>, and will cover a wide range of topics on fundamentals, <strong>engineering and applied aspects of oxidation techniques</strong> involving ozone and advanced oxidation systems with the aim to highlight the key issues and the latest advances from scientific to operational disciplines. It reflects the IOA commitment to consider and discuss directions able to deliver innovative, competitive and sustainable solutions which address current and next challenges in the fields of environmental and human health protection, industrial manufacture and conditioning, medical therapy.<br>
<strong>A group of experts will be pleased to explain how our expertise and our cutting edge technologies for ozone, UV and membranes systems can help the industry in its goals of environmental and economic performance.</strong> To illustrate one of the key subject of this year which is “<strong>Ozone and Advanced Oxidation – Leading-edge science and technologies”</strong>, <strong>SUEZ environnement will participate</strong> in the following<strong> scientific sessions:</strong></p>
<p><strong>Monday, 29 June</strong><br>
<em>Session 4 – Fundamentals – Part 2</em><br>
14:50 to 15:10<br>
4.2 Impact of ozone application to primary urban wastewaters: micropollutant and organic matter change</p>
<p><strong>Tuesday, 30 June</strong><br>
<em>Session 16 – Advanced Oxidation: Catalytic ozonation</em><br>
14:50 to 15:10<br>
16.2 Urban wastewater treatment by catalytic ozonation</p>
<p><em>Session 21 – Micropollutants control – Part 1</em><br>
17:00 to 17:40<br>
21.1 First full-scale application of ozonation for wastewater treatment in Switzerland: elimination of micropollutants and formation of oxidation products</p>
<p>17:40 to 18:00<br>
21.2 Optimisation of full-scale ozonation tertiary treatment for micropollutants removal</p>
<p><strong>Wednesday, 1 July</strong><br>
<em>Session 23 – Industrial waters</em><br>
09:50 to 10:10<br>
23.5 Ozonation and UV radiation as alternatives to chemical biocides for cooling water</p>
<p><em>Session 24 – Micropollutants control – Part 2</em><br>
08:30 – 08:50<br>
24.1 The contribution of analytical and chemometric tools for the performance assessment of several wastewater treatment technologies</p>
<p>09:30 – 09:50<br>
24.4 Pharmaceuticals removal in wastewater by biological treatment and tertiary ozonation</p>
<p><em>Session 27 – Workshop – IOA highlights</em><br>
11:00 – 13:00<br>
Ozone as active substance under the Biocidal Products Regulation</p>
<p><em>Session 30 – Micropollutants control – Part 3</em><br>
15:50-16:10<br>
30.5 Ecotoxicological evaluation of wastewater treated by conventional biological and ozonation processes</p>
<p><strong>Come and discover the future of Ozone applications at the Exhibition Area on Booth #4!</strong></p>

				</div>
				<div class="right">
					<img style="width:100%;" src="images/news/XF-Skid-gerendert-460x259.jpg" class="attachment-featured-large wp-post-image" alt="XF Skid gerendert">
				</div>
			</div><!-- end corousel content -->
		</div><!-- end content (wrapper) -->

		<?php include('includes/footer.php'); ?>
	</body>
</html>