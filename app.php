<?php require_once('includes/cookies.php'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
	<head>
		<?php
			include('includes/common-head.php');
		?>
		<title>Ozonia | UV Solutions</title>

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
				<h2 class="section-title">Process Applications</h2>
				<div class="left">
				    <h3>Countless Applications in Numerous Markets</h3>
				    <p>Ozone, UV and AOP based processes are today already used in numerous applications. For instance, drinking water treatment with ozone has been applied for decades providing us with well tasting, colorless crystal clear water. In the last decades ozone , UV and AOP based processes have become a solution for more complex processes also, for example for waste water treatment, the food industry or for soil remediation processes. All these processes have in common that typically the client benefits from more than one effect that makes the processes more and more attractive. Besides the well known use in water treatment applications ozone is also applied in lesser known applications such as  pulp bleaching, chemical synthesis and flue gas cleaning.</p>
					<h4 class="appshead">Applications by Market</h4>
				    <a class="ozoniaButton_small" href="municipalapp.php">Municipal</a> <a class="ozoniaButton_small" href="industrialapp.php">Industrial</a> <a class="ozoniaButton_small" href="http://www.triogen.com/" target="_blank">Leisure</a>
				</div>
				<div class="right">
				</div>
			</div><!-- end corousel content -->
		</div><!-- end content (wrapper) -->

		<?php include('includes/footer.php') ?>
	</body>
</html>