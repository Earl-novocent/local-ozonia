<?php require_once('includes/cookies.php'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="zh">
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
					<!-- <h1>A world leader in industrial and<br/>municipal water treatment</span></h1> -->
					<h1>在工业和市政水处理<br />方面的全球领军企业</h1>
					<img src="images/hero-about2.jpg" alt="" />
				</div>
				<?php include('includes/solutions-nav.php'); ?>
			</div>

			<div class="pagecontent cc-block clearfix">
				<h2 class="section-title">关于奥宗尼亚(ozonia<sup>&reg;</sup>)</h2>
				<div class="left">
<p>虽然奥宗尼亚(ozonia<sup>&reg;</sup>)始建于1990年，但它在处理系统设计，制造和安装领域拥有超过30年的经验，处理系统的发展历史可追溯至其前身ABB公司（最初为瑞士Brown Boveri公司）和Degr&eacute;mont（得利满）公司， </p>
<p>法国得利满集团在收购Asea Brown Boveri (ABB)公司臭氧业务后，于1990年和Air Liquide公司共同创立奥宗尼亚(ozonia<sup>&reg;</sup>)国际公司，但臭氧和紫外线技术的发展历史可追溯至70年代其前身ABB公司（最初为瑞士Brown Boveri公司）。通过设在苏黎世（瑞士）Leonia，新泽西州（美国），首尔（韩国），巴黎（法国）和格拉斯哥（苏格兰）的五个子公司，奥宗尼亚公司的产品在全球上市。除了这些全资子公司，奥宗尼亚还在世界各地拥有经销商和原始设备制造商网络。</p>
<p>奥宗尼亚(ozonia<sup>&reg;</sup>)现今已经研发出了最高效的臭氧和紫外线生成技术，成为全球领先的臭氧和紫外线消毒技术提供商和设备制造厂商之一。奥宗尼亚(ozonia<sup>&reg;</sup>)公司在臭氧和紫外线消毒两项技术应用领域拥有悠久的历史和广泛的经验，借助其全球销售网络向用户提供专业的消毒方案、技术和设备，并致力于开发创新性的新技术，利用完善的服务体系使用户受益于经济型运作，最高运作和人身安全的确保。</p>
<p>奥宗尼亚(ozonia<sup>&reg;</sup>)的宗旨是与客户紧密合作，确保每个处理系统根据每个工厂的实际应用与场地条件需要而设计。并通过实施充分的标准化设备设计，结合丰富的经验，达到高水准的灵活性。</p>

          <ul class="ogal clearfix">
            <li><a href="images/office/oag1.jpg" class="lightbox" rel="group1"><img class="inset" src="images/office/oag1t.jpg" alt=""/></a></li>
            <li><a href="images/office/oag2.jpg" class="lightbox" rel="group1" title="ozonia<sup>&reg;</sup> Ltd Headquarters, Design & Manufacturing Facilities in Duebendorf,
Switzerland"><img src="images/office/oag2t.jpg" alt=""/></a></li>
            <li><a href="images/office/ona1.jpg" class="lightbox" rel="group1" title="ozonia<sup>&reg;</sup> North America corporate Headquarters in Leonia, NJ"><img src="images/office/ona1t.jpg" alt=""/></a></li>
            <li><a href="images/office/ona2.jpg" class="lightbox" rel="group1" ><img src="images/office/ona2t.jpg" alt=""/></a></li>
          </ul>



				</div>
				<div class="right">
					<h4>加入我们</h4>
					<ul>
						<li><a href="http://www.suez-environnement.com/careers/join-us/jobs/" target="_blank">工作机会</a></li>
					</ul>
					<!-- <p style="margin-top:30px;">ozonia<sup>&reg;</sup> is proud to be OHSAS 18001 and ISO 9001 certified</p> -->
					<img src="images/certs.jpg" alt="certs" width="150" height="146" />
				</div>
			</div><!-- end corousel content -->
		</div><!-- end content (wrapper) -->

		<?php include('includes/footer.php'); ?>
	</body>
</html>