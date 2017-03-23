<?php require_once('includes/cookies.php'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
	<head>
		<?php include('includes/common-head.php'); ?>
		<title>ozonia<sup>&reg;</sup> | Parts and Services</title>
		<script type="text/javascript" src="scripts/ozonia_custom.js"></script>
		<link rel="stylesheet" type="text/css" href="scripts/jquery.lightbox/js/lightbox/themes/default/jquery.lightbox.css" />
		<!--[if IE 6]>
		<link rel="stylesheet" type="text/css" href="scripts/jquery.lightbox/js/lightbox/themes/default/jquery.lightbox.ie6.css" />
		<![endif]-->
		<script type="text/javascript" src="scripts/jquery.lightbox/src/jquery.lightbox.js"></script>
		<script type="text/javascript" src="scripts/jquery.insetBorderEffect.js"></script>

		<script type="text/javascript">
			$(document).ready(function($){
				$("ul.literature li").ozoniaLit();

				$('.lightbox').lightbox();

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

			<div class="hero-inner" style="height:321px;">
				<div class="hero-content">
<!-- 				<img class="parts" src="images/hero-parts.jpg" alt="" /> -->
					<img class="parts" src="images/service/service4.jpg" height="320" width="510" />
				</div>
				<?php include('includes/solutions-nav.php'); ?>
			</div>

			<div class="pagecontent cc-block clearfix">
				<h2 class="section-title">Services</h2>
				<div class="left">
					<h4>360° Customer Care Services</h4>
					<p>ozonia<sup>&reg;</sup> offers a broad range of customer care services and support, which ensure top quality standards and fast problem resolution.</p>
					<p>Our expertly trained teams provide customer service, repairs and maintenance, training, and know-how transfer, offering real added value to suppliers and customers alike.</p>
					<h4>Benefits:</h4>
					<ul>
						<li>​Worldwide Service</li>
						<li>​Detailed overview on maintenance and servicing requirements</li>
						<li>​Commissioning</li>
						<li>​Spare parts management</li>
						<li>​Ozone plant all-in-one service</li>
						<li>​Health and Safety</li>
						<li>​Remote services</li>
						<li>​Performance Test</li>
						<li>​Technical support on-site</li>
						<li>​Help desk</li>
						<li>​Renting services</li>
						<li>​Repair/Exchange</li>
						<li>​Equipment upgrade</li>
						<li>​And more!</li>
					</ul>
				</div>
				<div class="right">
					<h4>Additional Reading</h4>
					<ul class="literature">
					    <li>
					    	<a target="_blank" href="media/pdf/services/360 Brochure_English_vertical.pdf">
					    	<img src="media/pdf/tn/services/ozonia<sup>&reg;</sup>-Services-US-1.jpg" alt="ozonia<sup>&reg;</sup>-Services-US-1" width="106" height="150" />
					    	<div><span>Parts and Service</span></div>
					    	</a>
					    </li>
					</ul>
				</div>


			</div><!-- end corousel content -->
		</div><!-- end content (wrapper) -->

		<?php include('includes/footer.php'); ?>
	</body>
</html>