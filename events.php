<?php require_once('includes/cookies.php'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
	<head>
		<?php include('includes/common-head.php'); ?>
		<title>ozonia&reg; | Events</title>
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
				min-height: 122px;
			}
			.left ul.events li:hover{
				border:5px solid #00B9E8;
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

						<li>
							<h3>AQUATEC</h3>
							<strong>Shanghaï, China</strong> 6-8 June 2012 <br />
							&nbsp;<br />
							<a href="http://www.aquatechtrade.com/china/Pages/default.aspx">aquatechtrade.com</a>
						</li>

						<li class="slide">
						    <h2>Visit our booth at AWWA in <br />Dallas, Texas</h2>
						    <br />
						    <img src="images/slides/AWWA_LOGO.jpg" alt="AWWA" class="left"/>
						    <p>June 10th-13th, 2012 <br /> Booth 2513 <br /> <a href="http://www.awwa.org/"target="_blank">www.awwa.org</a></p>
						    <a href="images/slides/awwahall2513.jpg" class="ozoniaButton left lightbox">Connect With Us</a>
						</li>

						<li>
							<h3>AWWA</h3>
							<strong>Dallas, Texas</strong> 10-13 June 2012 <br />
							&nbsp;<br />
							 Booth 2513 <br /> <a href="http://www.awwa.org/"target="_blank">www.awwa.org</a>
						</li>

						<li>
							<h3>ACHEMA</h3>
							<strong>Frankfurt, Germany</strong> 18-22 June 2012 <br />
							&nbsp;<br />
							Hall 9.2 Booth C27<br />
							<a href="http://www.achema.de/">achema.de</a>
						</li>
-->

<!--
						<li>
							<h3>WateReuse Symposium </h3>
							<strong>Hollywood, FL </strong>, <br />9-12 September 2012 <br />
							Booth 13<br />
							<a href="http://www.watereuse.org/symposium27">watereuse.org </a>
						</li>


						<li>
							<h3>ISPE Supplier Showcase</h3>
							<strong>East Rutherford, NJ </strong>, <br />12 September 2012 <br />
							&nbsp;<br />
							<a href="http://www.ispe.org/new-jersey-chapter">ispe.org</a>
						</li>


						<li>
							<h3>IWA Congress</h3>
							<strong>Busan Korea</strong>, <br />16-21 September 2012 <br />
							&nbsp;<br />
							<a href="http://www.iwa2012busan.org/">iwa2012busan.org</a>
						</li>


						<li>
							<h3>IOA 2012</h3>
							<em>Annual Exhibition and Conference</em><br />
							<strong>Milwaukee, WI </strong>, <br />23-26 September 2012 <br />
							Booth 14<br />
							<a href="http://www.ioa-pag.org/milwaukee2012.php">ioa-pag.org</a>
						</li>

						<li>
							<h3>Weftec 2012</h3>
							<strong>New Orleans, USA</strong>, <br /> 29 September - 3 October 2012 <br />
							&nbsp;<br />
							<a href="http://www.weftec.org/">weftec.org</a>
						</li>



						<li>
							<h3>AquaSur</h3>
							<strong>Puerto Montt, Chile</strong>, <br /> 10-13 October 2012 <br />
							Booth A252 <br />
							<a href="http://www.aqua-sur.cl/">aqua-sur.cl</a>
						</li>

						<li>
							<h3>PAP-FOR</h3>
							<strong>Russia, Saint Petersburg</strong> <br />
							30th October - 2nd November 2012 <br />
							Booth: 8E40 <br />
							<a href="http://www.papfor.com/en/">papfor.com</a>
						</li>


						<li>
							<h3>Ecomondo</h3>
							<strong>Rimini</strong> <br />
							7th - 10th November <br />
							Pavilion: C1 Booth: 145 <br />
							<a href="http://en.ecomondo.com/">ecomondo.com</a>
						</li>

						<li>
							<h3>Pollutec</h3>
							<strong>Lyon, France</strong>, <br />27- 30 November 2012 <br />
							&nbsp;<br />
							<a href="http://www.pollutec.com/Pollutec-Lyon.htm">pollutec.com</a>
						</li>

						<li>
							<h3>Power-Gen International</h3>
							<strong>Orlando, FL </strong>, <br />11 - 13 December 2012 <br />
							Booth 5062<br />
							<a href="http://www.power-gen.com/index.html">power-gen.com</a>
						</li>

						<li>
							<h3>NEWEA</h3>
							<em>New England Water <br />Environment Association</em> <br />
							<strong>Boston, MA </strong>, <br />27 - 30 January 2013 <br />
							<a href="http://www.newea.org/Events/AnnualConference/ExhibitionInformation/tabid/343/Default.aspx">newea.org</a>
						</li>

						<li>
							<h3>NYWEA</h3>
							<em>New York Water <br />Environment Association <br /></em>
							<strong>New York, NY </strong>, <br />4 - 6 February 2013 <br />
							<a href="http://nywea.org">nywea.org</a>
						</li>


						<li>
							<h3>WEF Disinfection </h3>
							<strong>Indianapolis, IN </strong> <br />24 - 26 February 2013 <br />
							<a href="http://www.wef.org/disinfection/">wef.org</a>
						</li>

						<li>
							<h3>CleanTecCity 2013</h3>
							<strong>BernExpo, Bern, CH</strong><br /> 19 - 21 March 2013 <br />
							<a href="http://www.cleanteccity.ch">cleanteccity.ch</a>
						</li>

						<li>
							<h3>MWEA</h3>
							<em>Missouri Water Environment <br /></em>
							<strong>Osage Beach, MO  </strong> <br />23 - 27 March 2013 <br />
							<a href="http://mwea.org">mwea.org</a>
						</li>

						<li>
							<h3>AALSO</h3>
							<strong>Oakland, CA </strong> <br />24 - 27 March 2013 <br />
							<a href="http://new.aalso.org/">aalso.org</a>
						</li>

						<li>
							<h3>Hannover Messe</h3>
							<strong>Hannover, Germany</strong><br /> 6 - 12 April 2013 <br />
							<a href="http://hannovermesse.de">hannovermesse.de</a>
						</li>

						<li>
							<h3>Texas Water 2013</h3>
							<strong>Galveston, TX  </strong> <br />6 - 12 April 2013 <br />
							<a href="http://www.texas-water.com/">texas-water.com</a>
						</li>

						<li>
							<h3>CWEA</h3>
							<em>California Water Environment Assoc.  <br /></em>
							<strong>Palm Springs, CA   </strong> <br />16 - 19 April 2013 <br />
						</li>

						<li>
							<h3>NJ-WEA</h3>
							<strong>Atlantic City, NJ</strong> <br />
							14-16 May <br />
						</li>

						<li>
							<h3>Penn Tec</h3>
							<strong>Lancaster, PA</strong> <br />
							3-4 June <br />
						</li>

						<li>
							<h3>AWWA</h3>
							<strong>Denver, CO</strong> <br />
							9-13 June <br />
						</li>
						<li>
							<h3>IWA, Micropol & Ecohazard</h3>
							<strong>Zürich, Switzerland</strong><br /> 17 - 20 June 2013 <br />
						</li>

						<li>
							<h3>28th Annual Water Reuse Symposium</h3>
							<strong>Denver, Colorado USA</strong> <br /> 15-18 Sept, 2013 <br />
						</li>

						<li>
							<h3>IOA/IUVA World Congress</h3>
							<strong>Las Vegas, NV</strong> <br />
							22-25 Sept. <br />
						</li>

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

						<li>
							<h3 style="font-size:17px;">INTERNATIONAL OZONE ASSOCIATION (IOA) CONFERENCE</h3>
							<strong>Shanghai, China</strong> <br />
							Ozone and Related Oxidants for Water Treatment <br />
							<em>December 2 – 3, 2013</em> <br />
							<a href="http://www.ioa-pag.org/">ioa-pag.org</a>
						</li>


						<li>
							<h3>New England Water Environment Association</h3>
							<strong>Boston, MA</strong> <br />
							<em>January 26-29</em> <br />
							<a href="http://www.newea.org">newea.org</a>
						</li>

						<li>
							<h3>New York Water Environmental Association</h3>
							<strong>New York, NY</strong> <br />
							<em>February 4-5</em> <br />
							<a href="http://nywea.org/">nywea.or/</a>
						</li>
						<li>
							<h3>Texas Water</h3>
							<strong>Dallas, TX</strong> <br />
							<em>April 14-17</em> <br />
							<a href="http://www.texas-water.com/">texas-water.com</a>
						</li>

						<li>
							<h3 style="font-size:17px;">IFAT 2014</h3>
							<strong>Munich, Germany</strong> <br />
							World's Leading Trade Fair for Water, Sewage, Waste and Raw Materials Management <br />
							<em>May 5 - 9, 2014</em> <br />
							<a href="http://www.ifat.de/">ifat.de</a>
						</li>

						<li>
							<h3>AWWA Annual Conference & Exposition (ACE 14)</h3>
							<strong>Boston, MA</strong> <br />
							<em>June 8-12</em> <br />
							<a href="http://www.awwa.org/">awwa.org</a>
						</li>

						<li>
							<h3>WEFTEC 2014</h3>
							<strong>New Orleans, LA</strong> <br />
							<em>September 27 - October 1</em> <br />
							<a href="http://www.weftec.org/">weftec.org</a>
						</li>

						<li>
							<h3>Journées Information Eaux 2014</h3>
							<strong>Poitiers, France</strong> <br />
							<em>November 4-6, 2014</em> <br />
							<a href="http://www.jie-poitiers.com">jie-poitiers.com</a>
						</li>

						<li>
							<h3>Nebraska AWWA Fall Conference</h3>
							<strong>Kearney, NE</strong> <br />
							<em>November 6-7, 2014</em> <br />
							<a href="http://www.awwaneb.org/fallconference/">awwaneb.org/</a>
						</li>

						<li>
							<h3>Annual SWWA Conference 2014</h3>
							<strong>Saskatoon, SK</strong> <br />
							<em>November 5-7, 2014</em> <br />
							<a href="https://www.swwa.ca/events/details/annual-swwa-conference--tradeshow.html">swwa.ca</a>
						</li>

						<li>
							<h3>NC AWWA-WEA Annual Conference</h3>
							<strong>Winston-Salem, NC</strong> <br />
							<em>November 16-19, 2014</em> <br />
							<a href="http://www.ncsafewater.org/events_education/conferences/annual/">ncsafewater.org</a>
						</li>

						<li>
							<h3>Salon des Maires 2014</h3>
							<strong>Paris, France</strong> <br />
							<em>November 25-27, 2014</em> <br />
							<a href="http://www.salondesmaires.com">salondesmaires.com</a>
						</li>

						<li>
							<h3>Pollutec 2014</h3>
							<strong>Lyon, France</strong> <br />
							<em>December 2-5, 2014</em> <br />
							<a href="http://www.pollutec.com/GB.htm">pollutec.com</a>
						</li>
-->

						<h2>ozonia&reg; Systems is the main sponsor of:</h2>

						<li>
							<h3>22nd IOA World Congress and Exhibition</h3>
							<strong>Barcelona, Spain</strong> <br />
							<em>28 June - 3 July</em> <br />
							<a target="_blank" href="http://www.ioa-ea3g.org/congress2015/">ioa-ea3g.org</a>
						</li>

						<li>
							<h3>Micropol &amp; Ecohazard Conference 2015</h3>
							<strong>Singapore, China</strong> <br />
							<em>22 – 25 November 2015</em> <br />
							9th IWA Specialist Conference on Assessment and Control of Micropollutants and Hazardous Substances in Water <br />
							<a target="_blank" href="http://www.micropol2015.sg/">micropol2015.sg</a>
						</li>
						<hr />

						<h2>Other Events</h2>


						<li>
							<h3>PennTec - Pennsylvania WEA Conference</h3>
							<strong>Lancaster, PA</strong> <br />
							<em>5/31 to 6/3</em> <br />
							<a target="_blank" href="http://www.pwea.org/">pwea.org/</a>
						</li>
						<li>
							<h3>AWWA</h3>
							<strong>Anaheim, CA</strong> <br />
							<em>6/7 to 6/10</em> <br />
							<a target="_blank" href="http://www.awwa.org/">awwa.org/</a>
						</li>
						<li>
							<h3>WEFTEC</h3>
							<strong>Chicago, IL</strong> <br />
							<em>9/26 to 9/30</em> <br />
							<a target="_blank" href="http://www.weftec.org/">weftec.org/</a>
						</li>
						<li>
							<h3>Watereuse Symposium</h3>
							<strong>Seattle, WA</strong> <br />
							<em>9/13 to 9/16</em> <br />
							<a target="_blank" href="https://www.watereuse.org/symposium">watereuse.org/symposium</a>
						</li>
						<li>
							<h3>IOA Pan American Conference</h3>
							<strong>Dallas, TX</strong> <br />
							<em>9/19 to 9/22</em> <br />
							<a target="_blank" href="http://www.ioa-pag.org/calendar/montreal-2014/">ioa-pag.org</a>
						</li>
						<li>
							<h3>International Water Conference</h3>
							<strong>Orlando, FL</strong> <br />
							<em>11/15 to 11/19</em> <br />
							<a target="_blank" href="http://www.eswp.com/water/">eswp.com</a>
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