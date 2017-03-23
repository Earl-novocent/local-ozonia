<?php require_once('includes/cookies.php'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
	<head>
		<?php 
			include('includes/common-head.php'); 
		?>		
		<title>ozonia&reg; | Micropollutants</title>
		
		<!-- Adobe Edge animation scripts
		<script type="text/javascript" src="aop-anim/edge_includes/jquery.easing.1.3.js"></script>
		<script type="text/javascript" src="aop-anim/edge_includes/edge.0.1.3.min.js"></script>
		<script type="text/javascript" src="aop-anim/edge_includes/edge.symbol.0.1.3.min.js"></script>
		<script type="text/javascript" charset="utf-8" src="aop-anim/aop-anim_edge.js"></script>
		<script type="text/javascript" charset="utf-8" src="aop-anim/aop-anim_edgeActions.js"></script>
		<link rel="stylesheet" href="aop-anim/aop-anim_edge.css" />
		-->
		<script type="text/javascript" src="scripts/ozonia_custom.js"></script>
		<script type="text/javascript">
			$(document).ready(function() {
				$("ul.literature li").ozoniaLit();
			});
		</script>
	</head>
	
	<body class="inner-page">
		<div class="wrapper whitebg round2 shadow1">
			<?php include('includes/header.php') ?>

			<div class="hero-inner  clearfix">
				<div class="hero-content" style="overflow:hidden">
					<h1>Efficient and Sustainable Solutions<span>Engineering Answers to Today's<br/>Water Treatment Challenges</span></h1>
					<img src="images/hero-bird.jpg" alt="" />
				</div>	
				<?php include('includes/solutions-nav.php') ?>
			</div>

			<div class="pagecontent cc-block clearfix">	
				<h2 class="section-title">Ozone Applications</h2>
				<div class="left">
					<h3>ARA Neugut - D&uuml;bendorf, Switzerland</h3>
					<p>
						<em>This sewage plant will be the first swiss one complying with the
							new legislation on the trace compounds treatment.</em>
					</p>
					<p>The wastewater treatment plant Neugut in D&uuml;bendorf (Z&uuml;rich) was one of the first swiss pilot plants for micropollutant elimination. The municipality was convinced during the tests by the results of ozone in comparison to activated carbon. They decided to choose ozonia&reg; as the supplier for the full-scale plant that will be build for spring 2013, however the company was not involved in the pilot tests.</p>
					<p>The chosen solution will include a CFV generator, providing ozone to treat up to 1455 m3/h of waste-water. ozonia&reg; will also offer a turnkey device, including vent diffusors, ozone destructors and all the needfull equipment. With this innovative and forward-looking building willing to protect the receiving environment, a key cleaning-compound will be added to the Water Treatment Plant Neugut.</p>
					<p>This sewage plant combining ease of use, reliability and environmental protection, will be a foundation stone for all the future projects in Switzerland, and ozonia&reg; is proud to be part of this revolution.</p>
				</div>
				<div class="right">
				</div>
			</div><!-- end corousel content -->				
		</div><!-- end content (wrapper) -->					

		<?php include('includes/footer.php') ?>
	</body>
</html>