<?php require_once('includes/cookies.php'); ?>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
	<head>
		<?php include('includes/common-head.php'); ?>
		<title>ozonia<sup>&reg;</sup> | Events</title>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

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

				function shrinkmenu() {
					$('p.org').each(function(){
					    var list = $(this).next();
					    list.hide();

						$(this).hover(
						  function () {
						    $(this).addClass("over");
						  },
						  function () {
						    $(this).removeClass("over");
						  }
						);
					    //On click, show the hidden links
					    $(this).toggle(
					        function(e){
					            e.preventDefault();
					            list.show(300);
					            $(this).children("span").html('<img src="images/minus.png" alt="plus" width="10" height="10" />');
					    },
					        function(e){
					            e.preventDefault();
					            list.hide(300);
					            $(this).children("span").html('<img src="images/plus.png" alt="plus" width="10" height="10" />');
					    });
					});
				}

				shrinkmenu();

				//Bind event link to li
/*
				$('.events li').each(function(){
					var link = $(this).children('a').attr('href');
					$(this).click(function(){window.location = link;});
				});
*/

			});
		</script>

		<style type="text/css">
			.left ul.events li{
				list-style-type: none;
				float: left;
				width: 38%;
				padding: 10px;
				margin-bottom: 15px;
				cursor: pointer;
				background-color: rgb(255,255,255);
				border-radius: 10px;
				border:5px solid white;
				-webkit-transition: background-color .3s ease-in, border .3s ease-in, box-shadow .5s ease-in;
				-moz-transition: background-color .3s ease-in, border .3s ease-in, box-shadow .5s ease-in;
				transition: background-color .3s ease-in, border .3s ease-in, box-shadow .5s ease-in;
				min-height: 107px;
			}
			.left ul.events li:hover{
				border:5px solid #aadc14;
				background-color: rgb(248,248,248);
				box-shadow: 0 0 12px grey;
			}
			.events h3{
				font-size: 20px;
				margin:0px;
				line-height: 20px;
			}
			ul.ogal li:first-child {
				margin: 0 5px;
			}
		</style>

	</head>

	<body class="inner-page">
		<div class="wrapper whitebg round2 shadow1">
			<?php include('includes/header.php'); ?>

			<div class="hero-inner clearfix">
				<div class="hero-content" style="overflow:hidden">
					<h1>全球臭氧和紫外线<br />水处理行业的领<br />军企业</span></h1>
					<img src="images/hero-events.jpg" alt="" />
				</div>
				<?php include('includes/solutions-nav.php'); ?>
			</div>

			<div class="pagecontent cc-block clearfix">
				<h2 class="section-title">Upcoming Events</h2>
				<div class="left">
					<ul class="events">

<!--
						<li>
							<h3>WEFTEC</h3>
							<strong>Chicago, IL</strong> <br />
							Oct. 6-9 <br />
						</li>
						
						<li>
							<h3>Ecomondo</h3>
							<strong>Rimini, Italy</strong> <br />
							Nov. 6-9 <br />
						</li>
-->
						<li>
							<h3 style="font-size:18px;">INTERNATIONAL OZONE ASSOCIATION (IOA) CONFERENCE</h3>
							<strong>Shanghai, China</strong> <br />
							Ozone and Related Oxidants for Water Treatment <br />
							<em>December 2 – 3, 2013</em> <br />
							<a href="http://www.ioa-pag.org/">ioa-pag.org</a>
						</li>

					</ul>
				</div>
				<div class="right">
					<h4>Past event photos</h4>
					<ul class="ogal">
						<li><a href="images/events/DSC_0070.jpg" class="lightbox" rel="group1"><img src="images/events/thumb/DSC_0070.jpg" alt="DSC_0070" width="100" height="100" /></a></li>
						<li><a href="images/events/DSC_0240.jpg" class="lightbox" rel="group1"><img src="images/events/thumb/DSC_0240.jpg" alt="DSC_0240" width="100" height="100" /></a></li>
						<li><a href="images/events/DSC_0241.jpg" class="lightbox" rel="group1"><img src="images/events/thumb/DSC_0241.jpg" alt="DSC_0241" width="100" height="100" /></a></li>
						<li><a href="images/events/DSC_0263.jpg" class="lightbox" rel="group1"><img src="images/events/thumb/DSC_0263.jpg" alt="DSC_0263" width="100" height="100" /></a></li>

					</ul>
				</div>
			</div><!-- end corousel content -->
		</div><!-- end content (wrapper) -->

		<?php include('includes/footer.php'); ?>
	</body>
</html>