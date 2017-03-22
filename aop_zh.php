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
				    <h3>复杂问题需要根本解决方案</h3>
				    <p>奥宗尼亚(Ozonia)公司研发的最新型AOP系统使用或结合了三种成熟的处理技术（臭氧，紫外线，过氧化氢），产生超强氧化剂羟基自由基， 去除有机污染物。</p>
				    <p>AOP是液相氧化方法，包括用于目标污染物氧化破坏的高活性物质。AOP在水中制造更强大和选择性较差的二级氧化剂， 羟基自由基。这一二级氧化剂能引起大多数有机化合物的氧化直至它们完全被矿化为二氧化碳和水。羟自由基与臭氧或过氧化氢相比，具有较高氧化电位，速度至少快100万倍，因此确保较小接触时间与运行成本。</p>
				    <img src="images/aop-graphic_zh.jpg" alt="AOP process" />
					<h4 class="appshead">应用市场</h4>
				    <a class="ozoniaButton_small" href="municipalapp.php"><!-- Municipal -->市政</a> <a class="ozoniaButton_small" href="industrialapp.php"><!-- Industrial -->工业</a> <a class="ozoniaButton_small" href="http://www.triogen.com/" target="_blank"><!-- Leisure -->休闲</a>
				</div>
				<div class="right">
				    <h4>文献</h4>
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