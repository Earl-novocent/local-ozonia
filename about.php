<?php require_once('includes/cookies.php'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
	<head>
		<?php include('includes/common-head.php'); ?>
		<title>ozonia<sup>&reg;</sup> | About</title>
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
					<h1>ozonia<sup>&reg;</sup> has more than <br />35 years of
						experience <br />in disinfection
						and oxidation processes</span></h1>
					<img src="images/hero-about2.jpg" alt="" />
				</div>
				<?php include('includes/solutions-nav.php'); ?>
			</div>

			<div class="pagecontent cc-block clearfix">
				<h2 class="section-title">About ozonia<sup>&reg;</sup></h2>
				<div class="left">
<p>Although ozonia<sup>&reg;</sup> was founded in 1990 it has more than 35 years of experience in developing, designing, manufacturing and installing treatment systems due to its ABB Asea Brown Boveri and Degrémont roots back in the 70s. ozonia<sup>&reg;</sup> is owned by Degrémont which took over the ozone and UV business activities and professionals from ABB. ozonia<sup>&reg;</sup>’s products are available worldwide through 9 affiliates located in Zurich (Headquarters, Switzerland), New York (USA), Glasgow (Scotland) , Paris (France), Nizhny Novgorod (Russia), Beijing and Tianjin (China), Seoul (Korea) and Tokyo (Japan). In addition to these wholly owned affiliates ozonia<sup>&reg;</sup> has a network of Resellers and Original Equipment Manufacturers all over the world.</p>
<p>ozonia<sup>&reg;</sup> has developed the most efficient ozone and ultraviolet generating technologies available today, and is ranked as one of the world’s leading suppliers for this type of equipment. ozonia<sup>&reg;</sup> can draw on extensive knowledge relating to both ozone and ultraviolet application technology and, because of this expertise, has built-up a unique ability to deliver complete systems which ensure economical operation as well as the highest operational and personal safety.</p>
<p>ozonia<sup>&reg;</sup>’s aim is to design each plant in close co-operation with the client to suit the application and site conditions. This high level of flexibility is achieved through the implementation of fully engineered standardized equipment in conjunction with a wealth of experience.</p>

          <ul class="ogal clearfix">
            <li><a href="images/office/oag1.jpg" class="lightbox" rel="group1"><img class="inset" src="images/office/oag1t.jpg" alt=""/></a></li>
            <li><a href="images/office/oag2.jpg" class="lightbox" rel="group1" title="ozonia<sup>&reg;</sup> Ltd Headquarters, Design & Manufacturing Facilities in Duebendorf,
Switzerland"><img src="images/office/oag2t.jpg" alt=""/></a></li>
            <li><a href="images/office/ona1.jpg" class="lightbox" rel="group1" title="ozonia<sup>&reg;</sup> North America corporate Headquarters in Leonia, NJ"><img src="images/office/ona1t.jpg" alt=""/></a></li>
            <li><a href="images/office/ona2.jpg" class="lightbox" rel="group1" ><img src="images/office/ona2t.jpg" alt=""/></a></li>
          </ul>



				</div>
				<div class="right">
					<h4>ozonia<sup>&reg;</sup> - What a Story!</h4>
					<img src="images/ozonia-book.jpg" height="200" width="300" alt="" />
					<p><a href="media/flash/ozonia-book.swf" class="ozoniaButton modal">Read the Book Now</a></p>
					<p style="margin-top:30px;">ozonia<sup>&reg;</sup> is proud to be OHSAS 18001 and ISO 9001 certified</p>
					<img src="images/certs.jpg" alt="certs" width="150" height="146" />
					<p><a href="media/pdf/certs/ENG_CERTIFICATIONS_OZONIA.pdf">Full Certifications List &raquo;</a></p>
					

					<h4>Careers</h4>
					<ul>
						<li><a href="http://www.suez-environnement.com/careers/join-us/jobs/" target="_blank">Job Opportunities</a></li>
					</ul>
				</div>
			</div><!-- end corousel content -->
		</div><!-- end content (wrapper) -->

		<?php include('includes/footer.php'); ?>
	</body>
</html>