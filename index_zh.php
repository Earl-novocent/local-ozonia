<?php require_once('includes/cookies.php'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
	<head>
		<?php 
			include('includes/common-head.php');
		?>
		<title>ozonia&reg;</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<script type="text/javascript" src="scripts/jquery.innerfade.js"></script>
		<script type="text/javascript" src="scripts/jquery.hoverIntent.minified.js"></script>

		<link rel="stylesheet" type="text/css" href="scripts/jquery.lightbox/js/lightbox/themes/default/jquery.lightbox.css" />
		<!--[if IE 6]>
		<link rel="stylesheet" type="text/css" href="scripts/jquery.lightbox/js/lightbox/themes/default/jquery.lightbox.ie6.css" />
		<![endif]-->
		<script type="text/javascript" src="scripts/jquery.lightbox/src/jquery.lightbox.js"></script>
		<script type="text/javascript" src="scripts/jquery.insetBorderEffect.js"></script>


		<script type="text/javascript">
		$(document).ready(function(){
			//Slide nav setup
			$('.slide-wrap .slide').each(function(){
				$('.slide-nav').append('<li><a href="#">&nbsp;</a></li>');
			});


			$('.slide-nav li a').eq(0).addClass('active');

			//Slide nav
			var slideTotal = $('.slide-wrap .slide').length;
			var currentSlide = 0;
			var slideHeight = $('.slide-wrap').height();

			//Bullet nav
			var bullNum =  0;
			$('.slide-nav li a').each(function(){
				$(this).attr({href: bullNum});
				$(this).click(function(e){
					e.preventDefault();
					$('.slide-nav li a').eq(currentSlide).removeClass('active');
					currentSlide = $(this).attr('href');
					animSlide();
					$('.slide-nav li a').eq(currentSlide).addClass('active');
				});
				bullNum++;
			});

			//Slide navigate Function
			function animSlide(){
				var animAmount = (currentSlide * slideHeight) * -1;
				$('.slide-wrap ul').animate({marginTop: animAmount},300)
			};

			setInterval(function(){
				if(currentSlide < slideTotal-1){
					$('.slide-nav li a').eq(currentSlide).removeClass('active');
					currentSlide++;
					$('.slide-nav li a').eq(currentSlide).addClass('active');
					animSlide();
				}else if(currentSlide == slideTotal-1){
					$('.slide-nav li a').eq(currentSlide).removeClass('active');
					currentSlide = 0;
					$('.slide-nav li a').eq(currentSlide).addClass('active');
					animSlide();
				}
			}, 9500);


			//Phone number display code
			$('.phones .info').hide();
			$(".phone").hoverIntent(
			    function() {$(this).find("li.info").slideToggle("fast");},
			    function() {$(this).find("li.info").slideToggle("fast");}
			);

			//Nav state preview
			//$('.nav li a[href="app.php"]').addClass('active');

			//Instatiate hero lightbox
			//$('.lightbox').lightbox();

			$('a.lightbox img').insetBorder({
			  inset : 7,
			  borderColor : 'rgba(70,70,70,0.5)',
			  speed : 250,
			  borderType : 'solid'
			});

			//Modal window for membrel hero
			$("#membrel-modal").click(function() {
			  var html = $('<a href="ozone.php#membrel"><img src="images/slides/membrel-modal-2.png" alt="modal-membrel" width="578" height="495" /></a>');

			  $.lightbox(html, {
			    width   : 585,
			    height  : 510
			  });

			  return false;
			});

		});


		</script>

	</head>

	<body id="home-page">

		<div class="wrapper whitebg round1 shadow1">
				<?php include('includes/header.php') ?>

			<div class="hero-hp">
				<div class="hero-content">
					<ul class="slide-nav clearfix"></ul>
					<div id="slider" class="slide-wrap">
						<ul>

							<!-- <li class="slide">
								<h2>ozonia&reg; celebrates the launch of its new website in Chinese</h2>
								<img src="images/slides/zh-welcome.png" alt="Chinese Welcome" class="right" width="250"/>
								<p><strong><em>ozonia&reg; enlarges its digital footprint with the creation of the Chinese version of ozonia&reg;.com</em></strong></p>
								<a href="zh" class="ozoniaButton left viewLang">View in Chinese <br />现在查看</a>
							</li> -->

							<li class="slide">
								<!-- <h2>ozonia&reg; celebrates the opening of it's new production center</h2> -->
								<h2>庆祝新生产中心开业</h2>
								<img src="images/slides/production-center-2.jpg" alt="ozonia&reg; Customer Care" class="left"/>
								<!-- <p>ozonia&reg; is proud to introduce its new high-tech and innovative production facility.</p> -->
								<p>为引入最新高科技创新生产设施深感骄傲。</p>
								<!-- <a href="about.php" class="ozoniaButton left">Learn More</a> -->
								<a href="about.php" class="ozoniaButton left">了解更多</a>

							</li>

							<li class="slide">
								<!-- <h2 style="margin-bottom:15px;">The New MEMBREL<sup>&reg;</sup> <span style="text-transform:none;">MkIV</span></h2> -->
								<h2 style="margin-bottom:15px;">新的 MEMBREL<sup>&reg;</sup> <span style="text-transform:none;">MkIV</span></h2>
								<img src="images/slides/membrel-with-logo.jpg" alt="Advanced Oxidation Process" class="right"/>
				    			<!-- <p>ozonia&reg; introduces the brand new MEMBREL<sup>&reg;</sup> MkIV, a major redesign of its state-of-the-art electrolytic ozone generation system.</p> -->
				    			<p>ozonia&reg; 推出了新的 MEMBREL<sup>&reg;</sup> 系列，这是对于先进的电解水臭氧发生系统的重要创新设计。</p>
								<a id="membrel-modal" href="#" class="ozoniaButton left">了解更多</a>
							</li>

							<li class="slide">
								<img src="images/slides/hero-app.jpg" alt="Advanced Oxidation Process" class="right"/>
								<!-- <h2>Discover a world of applications tailored to your needs</h2> -->
								<h2>发现一个为您的需求量身打造的应用世界 </h2>
				    			<!-- <p>As a world leader in <a href="ozone.php">Ozone</a> and <a href="uv.php">UV</a>  water treatment, ozonia&reg; has the experience and know how to provide real solutions to your water treatment challenges.</p> -->
				    			<p>作为在 <a href="ozone.php">臭氧</a> 和 <a href="uv.php">紫外线</a> 水处理方面的全球领军公司，Ozonia拥有充分的经验和技术能力为您在水处理方面遇到的难题提供切实的解决方案。</p>
								<a href="app.php" class="ozoniaButton left">了解更多</a>
							</li>

							<li class="slide">
								<img src="images/slides/hero-pulp2.jpg" alt="OZAT CFV ozone disinfection" class="right"/>
								<!-- <h2>Pulp &amp; Paper</h2> -->
								<h2>纸浆造纸</h2>
								<!-- <p>Bahia Specialty Cellulose relies on ozonia&reg; to produce 60kg Ozone/h.</p> -->
								<!-- <p>巴伊亚特种纤维素厂依靠Ozonia的技术实现每小时60千克臭氧的产量。</p> -->
								<p>巴伊亚特种纤维厂依靠Ozonia的技术实现每小时60千克臭氧的产量。</p>
								<a href="industrialapp.php#pulp" class="ozoniaButton left">了解更多</a>

							</li>

							<li class="slide">
								<img src="images/slides/hero-service.jpg" alt="ozonia&reg; Customer Care" class="left"/>
								<!-- <h2>Protect your process. Optimize your operation.</h2> -->
								<h2>保护您的工艺。优化您的操作。</h2>
								<!-- <p>ozonia&reg; is committed to providing complete technical support. For any query that arises in connection with the operation of an ozonia&reg; product our service team is easily accessible and ready to help.</p> -->
								<p>Ozonia致力于提供完整的技术支持。我们的服务团队联系方便，随时准备好处理任何同Ozonia产品操作相关的问题。</p>
								<!-- <a href="contact.php" class="ozoniaButton right">Contact Us</a> -->
								<a href="contact.php" class="ozoniaButton right">联系我们</a>

							</li>

						</ul>
					</div>
				</div>

				<?php 
					include('includes/solutions-nav.php'); 
					
					$stel = "+41 44 801 85 11";
					$sfax = "+41 44 801 85 02";
					$semail = convert_email_adr("sales@ozonia.com");
					
					$ctel = "+41 44 801 86 63";
					$cfax = "+41 44 801 85 02";
					$cemail = convert_email_adr("service-ozoniach@degtec.com");
				?>
				<div class="phones">
					<ul id="phonesales" class="phone">
						<li class="title">销售</li>
						<li class="info">
							<ul>
								<li>Tel: <?php echo $stel;?></li>
								<li>Fax: <?php echo $sfax;?></li>
								<li><a href="mailto:<?php echo $semail;?>">Email Sales</a></li>
							</ul>
						</li>
					</ul>
					<ul id="phonecustomer" class="phone">
						<li class="title">客服</li>
						<li class="info">
							<ul>
								<li>Tel: <?php echo $ctel;?></li>
								<li>Fax: <?php echo $cfax;?></li>
								<li><a href="mailto:<?php echo $cemail;?>">Email Customer Service</a></li>
							</ul>
						</li>
					</ul>
				</div>

			</div>

		</div>



<!--
		<div class="wrapper news">
			<h5 class="ticker-h5">Latest <span class="red">&raquo;</span></h5>
		    <ul class="ticker round2">
		    	<li><a href="#">News Ticker Item</a></li>
		    	<li><a href="#">News Ticker 2</a></li>
		    	<li><a href="#">News Ticker 3</a></li>
		    	<li><a href="#">News Ticker 4</a></li>
		    	<li><a href="#">News Ticker 5</a></li>
		    </ul>
		</div>
-->

		<ul class="wrapper features">
		    <li><a href="ozone.php"><img src="images/features/ozone.png" alt="ozone generator"/><span>臭氧</span></a></li>
		    <li><a href="uv.php"><img src="images/features/uv.png" alt="Ultraviolet Disinfection" /><span>紫外线</span></a></li>
		    <li><a href="aop.php"><img src="images/features/aop.png" alt="Advanced Oxidation Process"/><span>高级氧化</span></a></li>
		    <li><a href="app.php"><img src="images/features/applications2.png" alt="Ozone and UV disinfection application" /><span>应用</span></a></li>
		    <li><a href="parts.php"><img src="images/features/service.png" alt="ozonia&reg; Customer Care" /><span>服务</span></a></li>
		</ul>

		<?php include('includes/footer.php') ?>


	</body>
</html>