<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
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
				$('.events li').each(function(){
					var link = $(this).children('a').attr('href');
					$(this).click(function(){window.location = link;});
				});
				
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
				border:5px solid #00B9E8;
				background-color: rgb(248,248,248);
				box-shadow: 0 0 12px grey;
			}
			.events h3{
			font-size: 22px;
			margin:0px;
			line-height:25px;
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
					<h1>A world leader in<br/>industrial and municipal<br/>water treatment</span></h1>
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
							<h3>IFAT Münich</h3>
							<strong>Germany</strong> 
							7-11 May 2012, <br /> 
							Hall 3, booth 227-326 <br />
							<a href="http://www.ifat.de/">ifat.de</a>
						</li>
						
						<li>
							<h3>ECWATEC</h3> 
							<strong>Moscow, Russia</strong> 5-8 June 2012 <br />
							&nbsp;<br />
							<a href="http://www.ecwatech.com/">ecwatech.com</a>
						</li>
-->
<!--
							<li class="slide">	
								<h2>Visit our booth at AWWA in <br />Dallas, Texas</h2>
								<br />							
								<img src="images/slides/AWWA_LOGO.jpg" alt="AWWA" class="left"/>								
								<p>June 10th-13th, 2012 <br /> Booth 2513 <br /> <a href="http://www.awwa.org/"target="_blank">www.awwa.org</a></p>
								<a href="images/slides/awwahall2513.jpg" class="ozoniaButton left lightbox">Connect With Us</a>
							</li>	
						

						<li>
							<h3>AQUATEC</h3>
							<strong>Shanghaï, China</strong> 6-8 June 2012 <br />
							&nbsp;<br />
							<a href="http://www.aquatechtrade.com/china/Pages/default.aspx">aquatechtrade.com</a>
						</li>
-->							
						<li>
							<h3>AWWA</h3>
							<strong>Dallas, Texas</strong> June 10-13, 2012 <br />
							&nbsp;<br />
							 Booth 2513 <br /> <a href="http://www.awwa.org/"target="_blank">www.awwa.org</a>
						</li>
						
						<li>
							<h3>ACHEMA</h3>
							<strong>Frankfurt, Germany</strong> June 18-22, 2012 <br />
							&nbsp;<br />							
							Hall 9.2 Booth C27<br />							
							<a href="http://www.achema.de/">achema.de</a>
						</li>

						<li>
							<h3>IUVA</h3>
							<em>International Ultraviolet Association</em>
							Sustainable UV Solutions <br />
							<strong>Washington</strong>, DC Aug. 12-14, 2012 <br />
							
						</li>
						
						<li>
							<h3>ISPE</h3>
							<em>International Society for Pharmaceutical Engineering</em> <br />
							Technology Showcase <br />
							<strong>East Rutherford, NJ</strong> Sept. 12, 2012
						</li>
						
						<li>
							<h3>IWA Congress</h3>
							<strong>Busan Korea</strong>, September 16-21, 2012 <br />
							&nbsp;<br />
							<a href="http://www.iwa2012busan.org/">iwa2012busan.org</a>
						</li>
						
						<li>
							<h3>IOA</h3>
							<em>International Ozone Association</em> <br />
							Ozone - Protection of Public Health <br />
							<strong>Milwaukee, WI</strong> Sept. 24-26, 2012
						</li>						
						
						<li>
							<h3>Weftec 2012</h3>
							<strong>New Orleans, USA</strong>, September 29 - October 3, 2012 <br />
							&nbsp;<br />
							<a href="http://www.weftec.org/">weftec.org</a>
						</li>
						
						<li>
							<h3>Pollutec</h3>
							<strong>Lyon, France</strong>, November 27-30,  2012 <br />
							&nbsp;<br />
							<a href="http://www.pollutec.com/Pollutec-Lyon.htm">pollutec.com</a>
						</li>
						
						<li>
							<h3>Power-Gen International</h3>
							<strong>Orlando, FL</strong> Dec. 11-13 2012
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