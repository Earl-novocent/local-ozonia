<?php require_once('includes/cookies.php'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
	<head>
		<?php
			include('includes/common-head.php');
		?>
		<title>Ozonia | AOP Solutions</title>

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
				$("ul.multilit").ozoniaMultiLit();
				$("ul.literature li").ozoniaLit();
			});
		</script>
	</head>

	<body class="inner-page">
		<div class="wrapper whitebg round2 shadow1">
			<?php include('includes/header.php') ?>

			<div class="hero-inner clearfix">
				<div class="hero-content" style="overflow:hidden">
					<img src="images/hero-aop.jpg" alt="" />
					<!-- <div id="stage" class="EDGE-190466591"></div> -->
				</div>
				<?php include('includes/solutions-nav.php') ?>
			</div>

			<div class="pagecontent cc-block clearfix">
				<h2 class="section-title">AOP</h2>
				<div class="left">
				    <h3>Complex Problems Require Radical Solutions</h3>
				    <p>State-of-the-art AOP systems developed by Ozonia use or combine three proven treatment technologies (Ozone, UV, Hydrogen Peroxide) to create hydroxyl radicals, the ultimate oxidant for elimination of organic pollutants.</p>
				    <p>AOP are aqueous phase oxidation methods consisting of highly reactive species used in the oxidative destruction of target pollutants. AOP creates a more powerful and less selective secondary oxidant, hydroxyl radicals, in the water. This secondary oxidant can cause the oxidation of most organic compounds until they are fully mineralized as carbon dioxide and water. The hydroxyl radical has a much higher oxidation potential than ozone or hydrogen peroxide and usually reacts at least one million times faster, thus leading to a smaller contact time and footprint.</p>
				    <img src="images/aop-graphic.jpg" alt="AOP process" />
					<h4 class="appshead">Applications by Market</h4>
				    <a class="ozoniaButton_small" href="municipalapp.php">Municipal</a> <a class="ozoniaButton_small" href="industrialapp.php">Industrial</a> <a class="ozoniaButton_small" href="http://www.triogen.com/" target="_blank">Leisure</a>
				</div>
				<div class="right">
				    <h4>Literature</h4>
					<ul class="literature">
					    <li>
					    	<a target="_blank" href="media/pdf/aop/AOP_brochure.pdf">
					    	<img src="media/pdf/tn/aop/AOP_brochure001.jpg" alt="AOP_brochure001" width="106" height="150" />
					    	<div><span>AOP Solutions Brochure</span></div>
					    	</a>
					    </li>
					</ul>
				</div><!-- end right -->
			</div><!-- end corousel content -->
		</div><!-- end content (wrapper) -->

		<?php include('includes/footer.php') ?>
	</body>
</html>