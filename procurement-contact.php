<?php require_once('includes/cookies.php'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
	<head>
		<?php
			include('includes/common-head.php');
			if ($_SESSION['Location']=="US") {
				$isUSA=TRUE;
			}
		 ?>
		<title>ozonia&reg; | Contact</title>
		<script type="text/javascript" src="scripts/jquery.validate.min.js"></script>
		<script type="text/javascript" src="scripts/jquery.validate.additional-methods.js"></script>

	<!-- Novocent partners
		<script type="text/javascript" src="http://maps.google.com/maps?file=api&amp;v=2&amp;key=ABQIAAAAdpuYlT88MS5EjlUC6VLfsxSYof6Y74Bmo9XuOJOdQ8ZnU6JPixSOon6prw-ObgpuNA5L_rq9uQbPdQ"></script>	-->
	<!-- 192.168.1.14
		<script type="text/javascript" src="http://maps.google.com/maps?file=api&amp;v=2&amp;key=ABQIAAAAdpuYlT88MS5EjlUC6VLfsxQ_Zu-7BHeTikSrrThuN_kCyr6v3xT3LyezCBjGR_h9CIX-uCLoAhIW4Q"></script>	-->
	<!--localhost:8888 	 -->
	<!--<script type="text/javascript" src="http://maps.google.com/maps?file=api&amp;v=2&amp;key=ABQIAAAAdpuYlT88MS5EjlUC6VLfsxTb-vLQlFZmc2N8bgWI8YDPp5FEVBQi6en6GiLDA8mWjx4hJGB_MExskw"></script> -->


	<!--<script type="text/javascript" src="scripts/jquery.gmap-1.1.0-min.js"></script>-->
		<script type="text/javascript">
			$(document).ready(function() {

				//Set map, address and contact info defaults
				$('.map-info').children().not('<?php echo $isUSA==true ? "#map-default" : "#map-default";?>').hide();
				var currentInfo = '<?php echo $isUSA==true ? "map-default" : "map-default"; ?>';
				var currentAddress = '<?php echo $isUSA==true ? "600 Willow Tree Rd., Leonia NJ, USA" : "Stettbachstrasse 1, 8600 Duebendorf, Switzerland"; ?>';

				//If chinese translation active, show Chinese contact
				<?php if(!isEnglish()): ?>
					$('.map-info').children().hide();transmit
					$('#map-ch').show();
					var currentInfo = 'map-ch';
					var currentAddress = '9F, Jing Guang Office Building, Hu Jia Lou Chaoyang District, 100020 Beijing, China';
				<?php endif; ?>

				//Fade in contact info from anchor ref - update 'current' vars
				// $('.map-list li a').click(function(e){
				// 	e.preventDefault();
				// 	var thisLink = $(this);
				// 	$('#'+currentInfo).fadeOut(300, function(){
				// 		currentInfo = thisLink.attr('href');
				// 		currentAddress = thisLink.attr('rel');
				// 		$('#'+currentInfo).fadeIn(function(){
				// 			//scrollToContent($('#'+currentInfo));
				// 		});
				// 	});
				// });
				//Called after new content is faded in - After scroll, load gmap
				function scrollToContent(id){
					var bodyelem = "";
					if($.browser.safari) { bodyelem = $("body") } else{ bodyelem = $("html");}
				    $(bodyelem).animate({scrollTop: $(id).offset().top}, 'slow', function(){
					    var location = '#'+currentInfo;
					    //gmapLoad(location, currentAddress);
				    });
			    };
	    		//Validate form
                $('.contact-form').validate({
	                rules: {
		                name: 		{required: true},
		                surname: 	{required: true},
		                country: 	{required: true},
		                message: 	{required: true},
		                email: 		{required: true, email: true}
	                },
					messages: {
						email: {email: "Invalid address"}
					}
                });

                $('.contact-form').submit(function(e){
	                e.preventDefault();
	                var form = $(this);
	                if(form.valid()){
						$.post(
							'helpers/contact_process.php',
							form.serialize(),
							//callback
							function(data){
								form.fadeOut(400, function(){
									form.html(data);
									$(this).fadeIn(400);
								});


							}

						);
					}
                });

/*
				$('.map-list li').hover(function() {
				  var item = $(this).attr('id');
				  $('#'+item).animate({top: '-=10'}, 100),
				  $('#'+item).animate({top: '+=10'}, 100)
				});
*/

				function bounce() {
				  var list = $('.map-list li');
				  var listLength = $('.map-list li').length;

				  var eq = Math.floor(Math.random()*listLength);

				  $(list).eq(eq).animate({top: '-=10'}, 100, function(){
					   (list).eq(eq).animate({top: '+=10'}, 100);
				  });

				  //console.log('bounce called');

				}

				var rand = Math.round(Math.random() * (3500)) + 500;
				setInterval(function(){bounce()}, rand);



                //intialize google maps
				//$("#map-default .gmap").gMap({ markers: [{ address: "Stettbachstrasse 1, 8600 Duebendorf, Switzerland"}], zoom: 13});
	            /*
	            function gmapLoad(location, address){
		            $(location+" .gmap").gMap({ markers: [{ address: address}], zoom: 13});
	            }

	            //Load default gmap
	            gmapLoad("#map-default", currentAddress);
                */


			});
		</script>

	</head>


	<body class="inner-page">
		<div class="wrapper whitebg round2 shadow1">
			<?php
				include('includes/header.php');
			 ?>
			<div class="hero-inner clearfix">
				<div class="hero-content">
					<img src="images/contact-map-s.jpg" alt="Contact us" />
					<ul class="map-list">
						<li id="icon-ny"><a href="map-ny" rel="600 Willow Tree Rd., Leonia NJ, USA">USA</a></li>
						<!-- <li id="icon-uk"><a href="map-uk">United Kingdom</a></li> -->
						<li id="icon-fr"><a href="map-fr" rel="16 Place de l'Iris 92040 Paris La Defense, France">France</a></li>
						<li id="icon-sw"><a href="map-sw" rel="Stettbachstrasse 1, 8600 Duebendorf, Switzerland">Switzerland</a></li>
						<li id="icon-ru"><a href="map-ru" rel="26, Bolshaya Pecherskaya st., office 807, 603155 Nizhny Novgorod, Russia">Russia</a></li>
						<li id="icon-ch"><a href="map-ch" rel="9F, Jing Guang Office Building, Hu Jia Lou Chaoyang District, 100020 Beijing, China">China</a></li>
						<li id="icon-kr"><a href="map-kr" rel="Yatap Leaders B/D 4F(408#), 342-1, Yatap-Dong, Bundang-Gu, Seongnam City, Gyeonggi-Do, South Korea">Korea</a></li>
						<li id="icon-jp"><a href="map-jp" rel="2-21, Mita 3-chome, Minato-ku, Tokyo 108-0073 Japan">Japan</a></li>
					</ul>
				</div>
				<?php include('includes/solutions-nav.php') ?>
			</div>

			<div class="pagecontent clearfix">
				<div class="contact-left">
				<h2 class="section-title">Contact Us</h2>
				<!-- <h2>Your are in this country:</h2>	 -->
				<div class="map-info">
				    <div id="map-default">
				    	<h3>ozonia&reg;</h3>
						<ul>
							<li>Stettbachstrasse 1</li>
							<li>8600 Duebendorf Switzerland</li>
							<li>Tel: +41 44 801 85 11</li>
							<li>Fax: +41 44 801 85 05</li>
							<li><?php echo "<a href=\"".convert_email_adr("mailto:purchasing.ch@degtec.com")."\">".convert_email_adr("purchasing.ch@degtec.com")."</a>";?></li>
						</ul>
						<br />
						<h3>General Conditions of Purchase</h3>
						<p>The following general conditions of purchase apply to purchase orders placed by ozonia&reg;, CH-8600 Duebendorf, for the supply of goods and/or services:</p>
						<br />
						<!-- <p>
							<a taget="_blank" href="media/pdf/general/General_Conditions_of_Purchase_V12.2014.pdf"><img src="images/pdf-document.png" height="16" width="16" alt="" /></a>
							<a taget="_blank" href="media/pdf/general/General_Conditions_of_Purchase_V12.2014.pdf">General Conditions of Purchase</a>
						</p> -->
						<p>
							<a target="_blank" href="media/pdf/general/General_Conditions_of_Purchase_Edition_February_2015.pdf"><img src="images/pdf-document.png" height="16" width="16" alt="" /></a>
							<a target="_blank" href="media/pdf/general/General_Conditions_of_Purchase_Edition_February_2015.pdf">General Conditions of Purchase Edition February 2015</a>
						</p>
						<p>
							<a target="_blank" href="media/pdf/general/Allgemeine_Einkaufsbedingungen_Ausgabe_Februar_2015.pdf"><img src="images/pdf-document.png" height="16" width="16" alt="" /></a>
							<a target="_blank" href="media/pdf/general/Allgemeine_Einkaufsbedingungen_Ausgabe_Februar_2015.pdf">Allgemeine Einkaufsbedingungen Ausgabe Februar 2015</a>
						</p>


						<br />
						<p>The following general conditions of purchase apply to purchase orders placed by ozonia&reg; NORTH AMERICA, for the supply of goods and/or services: </p>
						<br />
						<p>
							<!-- <a target="_blank" href="media/pdf/general/purchasing_terms_and_conditions.pdf"><img src="images/pdf-document.png" height="16" width="16" alt="" /></a>
							<a target="_blank" href="media/pdf/general/purchasing_terms_and_conditions.pdf">Purchasing Terms and Conditions</a> -->
							<a target="_blank" href="media/pdf/general/suez-treatment-solutions-inc-purchasing-terms-and-conditions.pdf"><img src="images/pdf-document.png" height="16" width="16" alt="" /></a>
							<a target="_blank" href="media/pdf/general/suez-treatment-solutions-inc-purchasing-terms-and-conditions.pdf">Purchasing Terms and Conditions</a>
						</p>


				    </div>
				    <div id="map-ch">
				    	<h3>ozonia&reg; China</h3>
						<ul>
							<li>9F, Jing Guang Office Building</li>
							<li>Hu Jia Lou Chaoyang District</li>
							<li>100020 Beijing</li>
							<li>Tel: +86 10 6597 3860</li>
							<li>Fax: +86 10 6597 3660</li>
							<li><?php echo "<a href=\"".convert_email_adr("mailto:salesCN@ozonia.com")."\">".convert_email_adr("salesCN@ozonia.com")."</a>";?></li>
						</ul>
				    </div>

				</div>
			</div>

				<div class="contact-right">
				    <form class="contact-form clearfix" action="<?php $_SERVER['PHP_SELF'];?>" method="post">
				    	<h3>Contact Us</h3>
				    	<table>
				    		<tr><td><label for="name">*Name:</label><input name="name" type="text" /></td></tr>
				    		<tr><td><label for="surname">*Surname:</label><input name="surname" type="text" /></td></tr>
				    		<tr><td><label for="company">Company:</label><input name="company" type="text" /></td></tr>
				    		<tr><td><label for="country">*Country:</label><input name="country" type="text" /></td></tr>
				    		<tr><td><label for="email">*Email:</label><input name="email" type="text" /></td></tr>
				    		<tr><td><label for="phone">Phone:</label><input name="phone" type="text" /></td></tr>
				    		<tr><td><label for="message">*Message:</label><textarea name="message" ></textarea></td></tr>
				    		<input type="hidden" name="sendto" value="<?=isAmericas($_SESSION['Location']) ? "americas" : "world"; ?>" />
				    	</table>
				    	<input type="submit" class="ozoniaButton" value="Contact Us!"/>
				    </form>
				</div>

			</div><!-- end corousel content -->
		</div><!-- end content (wrapper) -->

		<?php include('includes/footer.php') ?>
	</body>
</html>
