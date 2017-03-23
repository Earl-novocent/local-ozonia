<?php require_once('includes/cookies.php'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="zh">
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
					<img class="parts" src="images/hero-parts.jpg" alt="" />
				</div>
				<?php include('includes/solutions-nav.php'); ?>
			</div>

			<div class="pagecontent cc-block clearfix">
				<h2 class="section-title">服务</h2>
				<div class="left">
					<h4>维修及服务</h4>
					<p>为确保奥宗尼亚(ozonia<sup>&reg;</sup>)与Innoplana所设计研发产品的最长使用寿命，服务部门建议客户根据个人意愿签订服务协议，以便于定期对设备进行维护维修。</p>
					<h4>技术支持</h4>
					<p>对于任何奥宗尼亚(ozonia<sup>&reg;</sup>)产品运作方面出现问题的咨询，服务团队可通过电话，传真，电子邮件或现场服务工程师为客户提供服务支持。</p>
					<h4>备件</h4>
					<p>奥宗尼亚(ozonia<sup>&reg;</sup>)提供推荐的&ldquo;战略性备件&rdquo;和&ldquo;磨损零件&rdquo;以确保最小的停机时间和现场的最大灵活性。请将您的愿望和想法告知我们，我们将会为您设计个性化的服务。</p>
					<h4>培训</h4>
					<p>为了确保客户操作设备的能力，能够自行分析运行情况，我们将在瑞士和美国提供现场培训。</p>
					<h4>紧急干预</h4>
					<p>奥宗尼亚(ozonia<sup>&reg;</sup>)了解人员到位的重要性。我们的工作人员将随时出现在现场提供服务，因此如果您需要任何协助或者有进一步的问题, 请不要犹豫,随时致电与我们联系。</p>
			        <ul class="ogal clearfix">
			          <li><a href="images/service/service1.jpg" class="lightbox" rel="group1"><img src="images/service/service1t.jpg" alt=""/></a></li>
			          <li><a href="images/service/service2.jpg" class="lightbox" rel="group1"><img src="images/service/service2t.jpg" alt=""/></a></li>
			        </ul>
				</div>
				<div class="right">
					<h4>更多阅读</h4>
					<ul class="literature">
					    <li>
					    	<a target="_blank" href="media/pdf/ozonia<sup>&reg;</sup>-Services-US.pdf">
					    	<img src="media/pdf/tn/ozonia<sup>&reg;</sup>-Services-US-1.jpg" alt="ozonia<sup>&reg;</sup>-Services-US-1" width="106" height="150" />
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