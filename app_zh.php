<?php require_once('includes/cookies.php'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="zh">
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
					<!-- <h1>Efficient and Sustainable Solutions<span>Engineering Answers to Today's<br/>Water Treatment Challenges</span></h1> -->
					<h1>对当前水处理挑战提供<br />高效可持续性的工<br />程解决方案</h1>
					<img src="images/hero-bird.jpg" alt="" />
				</div>
				<?php include('includes/solutions-nav.php') ?>
			</div>

			<div class="pagecontent cc-block clearfix">
				<h2 class="section-title">工艺应用</h2>
				<div class="left">
				    <h3>在众多市场领域中的无数应用</h3>
				    <p>臭氧，紫外线和AOP为基础的工艺现今已经在众多应用中使用。例如，使用臭氧进行饮用水处理已应用了几十年，臭氧消毒设备为我们提供了品味好，无色清澈的清洁水。在过去的几十年，臭氧，紫外线和AOP为基础的工艺也已成为更复杂处理过程的解决方案，例如，食品行业或土壤修复过程中的废水处理。臭氧，紫外线和AOP为基础的工艺的共同之点在于通过完善的服务体系使客户多方受益。除了众所周知的臭氧在水处理中的应用，臭氧消毒设备也适用于鲜为人知的应用，如纸浆漂白，化学合成和烟气净化。</p>
					<!--<h4 class="appshead">Applications by Market</h4>
				    <a class="ozoniaButton_small" href="municipalapp.php">Municipal</a> <a class="ozoniaButton_small" href="industrialapp.php">Industrial</a> <a class="ozoniaButton_small" href="http://www.triogen.com/" target="_blank">Leisure</a>-->
					<h4 class="appshead">应用市场</h4>
				    <a class="ozoniaButton_small" href="municipalapp.php"><!-- Municipal -->市政</a> <a class="ozoniaButton_small" href="industrialapp.php"><!-- Industrial -->工业</a> <a class="ozoniaButton_small" href="http://www.triogen.com/" target="_blank"><!-- Leisure -->休闲</a>
				</div>
				<div class="right">
				</div>
			</div><!-- end corousel content -->
		</div><!-- end content (wrapper) -->

		<?php include('includes/footer.php') ?>
	</body>
</html>