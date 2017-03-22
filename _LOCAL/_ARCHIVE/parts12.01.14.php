<?php require_once('includes/cookies.php'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
	<head>
		<?php include('includes/common-head.php'); ?>
		<title>Ozonia | Parts and Services</title>
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
					<img class="parts" src="images/hero-parts.jpg" alt="" />
				</div>
				<?php include('includes/solutions-nav.php'); ?>
			</div>

			<div class="pagecontent cc-block clearfix">
				<h2 class="section-title">Parts and Services</h2>
				<div class="left">
					<h4>Maintenance & Services</h4>
					<p>To ensure the longest lifespan, which Ozonia and Innoplana products are designed for, the service department recommends service agreements, according to you individual wishes, at a fixed rate.</p>
					<h4>Technical Support</h4>
					<p>For any query that arises in connection with the operation of an Ozonia product, the service team offers client support by telephone, fax, e-mail or by on-site service engineers.</p>
					<h4>Spare Parts</h4>
					<p>Ozonia provides recommended &ldquo;strategic spare parts&rdquo; and &ldquo;wear & tear parts&rdquo; in order to allow minimum down-time and maximum flexibility on site. Let us know you wishes and ideas and we will design a personalized concept for you.</p>
					<h4>Training</h4>
					<p>To ensure the client's ability to operate the plant and to enable him to analyze operating situations, we offer on-site <!-- as well as -->training in our facilities in Switzerland and the United States.</p>
					<h4>Emergency Interventions</h4>
					<p>Ozonia knows about the importance of manpower availability. We are there when you need us, so don't hesitate to call us.</p>
			        <ul class="ogal clearfix">
			          <li><a href="images/service/service1.jpg" class="lightbox" rel="group1"><img src="images/service/service1t.jpg" alt=""/></a></li>
			          <li><a href="images/service/service2.jpg" class="lightbox" rel="group1"><img src="images/service/service2t.jpg" alt=""/></a></li>
			        </ul>
				</div>
				<div class="right">
					<h4>Additional Reading</h4>
					<ul class="literature">
					    <li>
					    	<a target="_blank" href="media/pdf/OZONIA-Services-US.pdf">
					    	<img src="media/pdf/tn/OZONIA-Services-US-1.jpg" alt="OZONIA-Services-US-1" width="106" height="150" />
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