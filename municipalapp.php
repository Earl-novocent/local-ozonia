<?php require_once('includes/cookies.php'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
	<head>
		<?php
			include('includes/common-head.php');
			include('includes/common-headcarousel.php');
			if ($_SESSION['Location']=="CH") {
				$isSwitzerland=TRUE;
			}

		?>
		<title>ozonia&reg; | Process Applications</title>


		<!--[if IE 6]>
		<link rel="stylesheet" type="text/css" href="scripts/jquery.lightbox/js/lightbox/themes/default/jquery.lightbox.ie6.css" />
		<![endif]-->
		<link rel="stylesheet" type="text/css" href="scripts/jquery.lightbox/js/lightbox/themes/default/jquery.lightbox.css" />
		<script type="text/javascript" src="scripts/jquery.lightbox/src/jquery.lightbox.js"></script>
		<script type="text/javascript" src="scripts/purl.js"></script><!-- URL Plugin -->

		<script type="text/javascript" src="scripts/ozonia_custom.js"></script>

		<style type="text/css">
			.modalHide{display:none;}
			a[href$='.pdf'] {
				background:transparent url(images/page_white_acrobat.png) center left no-repeat;
				display:inline-block;
				padding-left:20px;
				line-height:18px;
			}
			.literature a[href$='.pdf']{
				background:none;
				padding-left:0px;
			}
			.jquery-lightbox-html p{
				margin-bottom:15px;
				line-height: 18px;
			}
			.jquery-lightbox-html .left, .jquery-lightbox-html .right{
				float: left;
			}
			.jquery-lightbox-html .left{
				width:62%;
				margin-right: 45px;
			}
			.jquery-lightbox-html .right{
				width:30%;
			}

		</style>

		<script type="text/javascript">
		$(document).ready(function() {

			//Check URL for modal request
			var url = $.url();
			//Retrieve modal query
			var getModal = url.param('modal');
			//If modal exists trigger popup
			if(getModal){
				var modalID = '#'+getModal;

				$.lightbox(modalID, {
					'width'       : 700,
					'height'      : 500,
					'autoresize'  : false
				});

			}

		    $(".modalLink").lightbox({
			    width: 700,
			    height: 500
		    });
		    $(".mediaLink").lightbox({
			    width: 1000,
			    height: 700
		    });

			 $("ul.literature li").ozoniaLit();

		});

		</script>

	</head>

	<body class="inner-page">
		<div class="wrapper whitebg sround2 shadow1">
			<?php include('includes/header.php') ?>
			<div class="hero-inner clearfix">
				<div class="hero-content">
					<div class="carousel">
						<ul>
							<li><a href="municipalapp.php#general" rel="general"><img src="images/carousel/apps/applications.jpg" alt="general" /></a></li>
							<li><a href="municipalapp.php#disinfection" rel="disinfection"><img src="images/carousel/apps/disinfection.jpg" alt="disinfection" /></a></li>
							<li><a href="municipalapp.php#removal" rel="removal"><img src="images/carousel/apps/colorremoval.jpg" alt="color removal" /></a></li>
							<li><a href="municipalapp.php#drinking" rel="drinking"><img src="images/carousel/apps/drinkingwater.jpg" alt="drinking water" /></a></li>
							<li><a href="municipalapp.php#pools" rel="pools"><img src="images/carousel/apps/swimmingpools.jpg" alt="swimming pools" /></a></li>
							<li><a href="municipalapp.php#wastewater" rel="wastewater"><img src="images/carousel/apps/industrialeffluent.jpg" alt="wastewater" /></a></li>
							<li><a href="municipalapp.php#micropollutants" rel="micropollutants"><img src="images/carousel/apps/micropollutants2.jpg" alt="micropollutants" /></a></li>
						</ul>
					</div>
					<ul class="carousel-nav">
						<li><a href="#" id="carPrev">&laquo;</a></li>
						<li class="last"><a href="#" id="carNext">&raquo;</a></li>
					</ul>
				</div>
				<?php include('includes/solutions-nav.php') ?>
			</div>

			<div class="pagecontent">
				<h2 class="section-title">Municipal Applications</h2>

				<div class="carousel-content clearfix">

					<div class="cc-block active" id="general">
						<div class="left">
							<h3>Countless Applications in Numerous Markets</h3>
							<p>Because of its comprehensive portfolio, ozonia&reg; can offer a wide range of solutions for municipal applications. ozonia&reg;'s products have been designed so that they can be integrated into all types of treatment steps with the minimum amount of work and time. Equipment technologies include a large spectrum of UV reactors and ozone generators. Depending on the application in question, ozonia&reg; can supply either a single technology or adopt a multi-process approach to achieve the desired result.
</p>
						</div>
						<div class="right">
							<h4>Municipal Applications</h4>
					        <ul>
					    	    <li><a href="municipalapp.php#removal" rel="removal">Color Removal</a></li>
					    	    <li><a href="municipalapp.php#disinfection" rel="disinfection">Disinfection</a></li>
					    	    <li><a href="municipalapp.php#drinking" rel="drinking">Drinking Water</a></li>
					    	    <li><a href="municipalapp.php#pools" rel="pools">Swimming Pools</a></li>
					    	    <li><a href="municipalapp.php#wastewater" rel="wastewater">Wastewater</a></li>
					    	    <li><a href="municipalapp.php#micropollutants" rel="micropollutants">Micropollutants</a></li>
					        </ul>
							<!-- <h4>Additional Reading</h4>
							<ul>
								<li><a href="media/pdf/app/Process_application.pdf" target="_blank">Process Applications</a></li>
							</ul>-->
						</div>
					</div><!-- end cc block -->


					<div class="cc-block" id="disinfection">
						<div class="left">
							<h3>Disinfection</h3>
							<p>Both Ozone and UV are well recognized methods for water and wastewater disinfection in the industrial and municipal markets. Each can be used for the inactivation of viruses, giardia, cryptospordium, bacteria and other microbial contaminants.</p>
							<p>UV is a proven cost effective disinfection alternative for water and wastewater, as well as numerous industrial applications. ozonia&reg; offers several UV products for water and wastewater treatment which are fully bioassay validated with independent third party certification per recognized regulatory guidelines.</p>
							<p>In addition to disinfection, ozone is also an effective treatment for taste, odor and color removal, iron and manganese reduction, as well as being a flocculating agent.</p>
							<p>Ozone and/or UV are effective and environmentally friendly alternatives to chlorine and chlorine derivatives for water and wastewater disinfection.</p>
						</div>
						<div class="right">
							<h4>Associated Products</h4>
							<ul>
								<li><a href="ozone.php">Ozone</a></li>
								<li><a href="uv.php">UV</a></li>
							</ul>
							<h4>Additional Reading</h4>
							<ul>
								<li><a href="media/pdf/app/advancement_cho-9729e.pdf" target="_blank">Ozone in the Advancement of Drinking Water Treatment Technology</a></li>
								<li><a href="media/pdf/app/ozonation_and_gac-e.pdf" target="_blank">Ozonation And Granular Activated Carbon Filtration </a></li>
								<li><a href="media/pdf/app/ozone_as_a_disinfecting_agent-e.pdf" target="_blank">Ozone As A Disinfecting Agent In The Reuse Of Wastewater</a></li>
							</ul>
						</div>

							<!--<p>In recent years there has been an increased focus on food safety and in particular the methods used to reduce and eliminate pathogens from fresh produce. With the rise in consumption of fresh fruits and vegetables, incidents of food-borne illness have also greatly increased in the US, drawing significant attention from researchers and authorities. Traditional methods revolve around the use of chemicals such as chlorine in the sanitizing of produce, specifically in rinsing and washing. Chlorine is widely used in these processes but it has a limited effect in killing bacteria on fruit and vegetables surfaces. There is also wide concern with regards to the by-products of chlorine and its effects on health and the environment.</p>
							<p>Ozone is becoming a popular alternative solution to traditional sanitizing agents and providing additional benefits. Ozone as an oxidizing agent, 1.5 times more powerful than chlorine and effective over a much wider spectrum of microorganisms. Ozone kills viruses and bacteria such as Escherichia coli and Listeria much faster than chlorine and other chemical agents and is free of chemical residues as it decomposes into simple oxygen.</p>
							<p>Ozone can effectively be used in several applications in the food and packing industries including the disinfection of process water, poultry chill water treatment, produce washing and rinsing, process water recycling and produce storage.</p>
						</div>
						<div class="right">
							<h4>Additional Reading</h4>
							<ul>
								<li><a href="media/pdf/app/bottling-e.pdf"  target="_blank">Ozone for bottling applications</a></li>
								<li><a href="media/pdf/app/FDA-e.pdf"  target="_blank">U.S. FDA Regulatory Approval of Ozone as an Antimicrobial Agent</a></li>
								<li><a href="media/pdf/app/fish_hatcheries_cho-9522e.pdf"  target="_blank">The use of ozone as a disinfectant in fish hatcheries and fish farms</a></li>
							</ul>
						</div>-->
					</div><!-- end cc block -->


					<div class="cc-block" id="removal">
						<div class="left">
							<h3>Color Removal</h3>
							<p>Color due to organic molecules or products break down quickly when they come into contact with ozone. The powerful oxidation potential of ozone has made color removal one of the "classic" ozone applications for drinking water along with taste and odor removal which are also organic based. This need has crossed over to wastewater treatment (industrial and municipal) and today ozone is used extensively to remove color from effluents from dye manufacturers, textile mills, pharmaceutical factories and other industrial companies.</p>
							<p>Ozone is also used extensively as a "bleach" in many processes such pulp and paper manufacturing, kaolin production and even textiles (stone washed denim). ozonia&reg; has a broad range of products from laboratory scale ozonators to large engineered ozone plants to satisfy any possible color removal need.</p>
						</div>
						<div class="right">
							<h4>Associated Products</h4>
					        <ul>
								<li><a href="ozone.php#xf" rel="xf">XF Vessels</a></li>
					        </ul>
						</div>
					</div><!-- end cc block -->


					<div class="cc-block" id="drinking">
						<div class="left">
							<h3>Drinking Water</h3>
							<p>Both Ozone and UV are well recognized methods for municipal drinking water treatment and disinfection. Each can be used for the inactivation of viruses, giardia, cryptospordium, bacteria and other microbial contaminants. While UV is limited to disinfection, ozone is also an effective treatment for taste, odor and color removal, iron and manganese reduction, as well as being a flocculating agent. Ozone and/or UV require a relatively short residence times for disinfection unlike chemicals such as chlorine and chlorine derivatives.</p>
							<p>Drinking water is treated to kill or inactivate any pathogenic micro-organisms such as viruses, bacteria and parasites, to remove inorganic and organic trace contaminants which have found their way into the water system because of pollution and to reduce the naturally occurring organic compounds such as humic acid and algal metabolites. In general, surface waters such as lakes and rivers contain higher levels of micro-organisms and are more prone to contamination than groundwater and require different treatment regimes. To reduce the risk to consumers, more and more countries are introducing new drinking water regulations containing stricter limits on pathogens and  contaminants.</p>
						</div>
						<div class="right">
							<h4>Associated Products</h4>
					        <ul>
								<li><a rel="aqrlp" href="uv.php#aqrlp">Aquaray LP/LPTS</a></li>
								<li><a rel="aqrslp" href="uv.php#aqrslp">Aquaray SLP-DW/PW</a></li>
								<li><a rel="aqrsmp" href="uv.php#aqrsmp">Aquaray SMP-DW/PW</a></li>
								<li><a rel="aqrh2o" href="uv.php#aqrh2o">Aquaray H<sub>2</sub>O</a></li>
								<li><a href="ozone.php#cfv" rel="cfv">OZAT CFV</a></li>
								<li><a href="ozone.php#xf" rel="xf">XF Vessels</a></li>
					        </ul>

							<!--<h4>Additional reading:</h4>
							<ul>
								<li><a href="media/pdf/app/advancement_cho-9729e.pdf" target="_blank">Ozone in the Advancement of Drinking Water Treatment Technology</a></li>
								<li><a href="media/pdf/app/aox_cod_removal-e.pdf" target="_blank">AOX and COD removal from landfill leachates with ozone and radical reactions</a></li>
								<li><a href="media/pdf/app/Byproductsofozonation-e.pdf" target="_blank">Study on By-Products of Ozonation during Ammonia Removal under the Existence of Bromide</a></li>
								<li><a href="media/pdf/app/ozonation_and_gac-e.pdf" target="_blank">Ozonation and granular activated carbon filtration</a></li>
								<li><a href="media/pdf/app/ozone_as_a_disinfecting_agent-e.pdf" target="_blank">Ozone as a disinfecting agent in the reuse of wastewater</a></li>
							</ul>-->
						</div>
					</div><!-- end cc block -->

					<div class="cc-block" id="pools">
						<div class="left">
							<h3>Swimming Pools</h3>
							<p>Ozone and UV are very effective alternatives to chlorine and other chemicals as a disinfection agent in swimming pools. Ozone and UV can safely prevent the formation of chlorine byproducts, such as chloramines and trihalomethanes. Ozone and UV can breakdown chlorinated byproducts, therefore reducing the typical problems associated with pools such as red eyes and respiration ailments. Ozone will also oxidize oils and other contaminants in swimming pools and spa water into safer elements. The use of ozone and UV can play an essential role in providing a clean and pleasant environment for bathers and pool staff.</p>
						</div>
						<div class="right">
							<h4>Additional Information:</h4>
							<p>Discover our full line of solutions for swimming pools and leisure market applications at <a href="http://www.triogen.com/" target="_blank">http://www.triogen.com/</a></p>
							<p><a href="http://www.triogen.com/" target="_blank"><img src="images/TriogenLogo.gif" alt="Triogen" width="170" height="64" /></a></p>
						</div>
					</div><!-- end cc block -->

					<div class="cc-block" id="wastewater">
						<div class="left">
							<h3>Wastewater</h3>
							<p>Effluent wastewater from an industrial facility may carry a broad and variable range of contaminants, including BOD, COD, color, phenols, cyanides, sanitary waste and a host of complex chemicals. Ozone, in combination with UV and/or other physical, chemical or biological processes, has the potential to treat complex industrial wastes due to its strong oxidative nature. In combination with medium pressure UV, ozone exhibits the power of advanced oxidation for TOC reduction, as well as destruction of organics. Potential industries that can benefit from ozone and UV include  pharmaceuticals, textiles, automotive, foundry, etc.</p>
							<p>In arid areas, due to water scarcity, treated wastewater can be used for a reuse application such as land or golf irrigation. Water recycling avoids water shortages and protects water resources. Water recycling is safe, environmentally sustainable and cost-effective for decision-makers who care about environmental resources. For operating cost reduction, municipalities and industry are smart to invest in reuse installations to reduce their fresh water consumption. ozonia&reg; and Aquasource can implement different solutions to contribute to integrated water management.</p>
						</div>
						<div class="right">
							<h4>Associated Products</h4>
					        <ul>
								<li><a rel="aqrslp" href="uv.php#aqrslp">Aquaray SLP-WW</a></li>
								<li><a rel="aqrsmp" href="uv.php#aqrsmp">Aquaray SMP-WW</a></li>
								<li><a rel="aqr40ho" href="uv.php#aqr40ho">Aquaray 40 HO</a></li>
								<li><a rel="aqr3x" href="uv.php#aqr3x">Aquaray 3x</a></li>
					        </ul>
							<!--<h4>Additional reading:</h4>
							<ul>
								<li><a href="media/pdf/app/aox_cod_removal-e.pdf" target="_blank">AOX and COD removal from landfill leachates with ozone and radical reactions</a></li>
								<li><a href="media/pdf/app/leachate-e.pdf" target="_blank">Landfill leachate treatment: case studies</a></li>
								<li><a href="media/pdf/app/municiple_wastewater-e.pdf" target="_blank">Pilot plant investigation of ozone disinfection of physicochemically treated municipal wastewater</a></li>
								<li><a href="media/pdf/app/ozonation_and_gac-e.pdf" target="_blank">Ozonation and granular activated carbon filtration</a></li>
							</ul>-->
						</div>
					</div><!-- end cc block -->

					<div class="cc-block" id="micropollutants">
						<div class="left">
							<h3>Micropollutants</h3>

<p>Urban wastewater is becoming increasingly contaminated with organic substances such as biocides, EDCs, PCPs and pharmaceuticals. These contaminants, many know to be harmful to aquatic ecosystems and human health, have become a major issue for utilities. Many facilities struggle to eliminate micropollutants with conventional treatment processes. To combat these emerging pollutants ozonia&reg; has developed a comprehensive product range to treat micropollutants.</p>

<p>Ozone-based treatment processes have demonstrated their effectiveness under many conditions and are an economical and energy efficient solution compared to the other treatment technologies. Ozonation also has the added benefit of disinfection and improved water quality.</p>

<p>ozonia&reg; offers the most powerful solution available to eliminate micropollutants in urban wastewater: Ozonation. ozonia&reg; is a recognized leader in the treatment of emerging pollutants due to years of focused research, company expertise and pilot study support from Suez Environment. Find out how ozonia&reg;'s patented technology can help solve your water treatment challenges.</p>
<!--

							<p>Urban waste waters are increasingly contaminated with organic substances such as biocides, endocrine disruptor compounds (EDCs), personal care products (PCPs) and pharmaceutical substances. These contaminants, with their known or potential harmfulness for aquatic ecosystems and human health, have become a major issue for the Water Utilities. Indeed, the actual facilities struggle to eliminate those pollutions, additional treatment processes will therefore be required. Thus, ozonia&reg; developed a large and safe range of application to answer this emergent question.</p>

							<p>Drawing on its long experience in the field of municipal waste water treatment using oxidation technologies, ozonia&reg; can offer the most powerful solution available to water process engineers for the elimination of micropollutants in urban waste water. ozonia&reg; became a world leader on that topic thanks to years of research and piloting in support of its parent company, Suez Environnement.</p>

							<p>Ozone-based treatments demonstrated their effectiveness in all conditions to remove the trace compounds, and provide with them welcome side-effects. Indeed ozonation presents economical and energetical benefits compared to all the others treatment solutions, in addition to consequent water quality improvement. ozonia&reg; has grown in years a know-how allowing to ensure those benefits, thanks to it’s state of the art and unique patended technology.</p>
-->

							<h4>References</h4>
							<a class="ozoniaButton_small modalLink" href="#swiss">Dübendorf</a>
							<a class="ozoniaButton_small modalLink" href="#france">Sophia - Antipolis</a>
						</div>
						<div class="right">
<!--
							<h4>Associated Products</h4>
					        <ul>
								<li><a rel="aqrslp" href="uv.php#aqrslp">Aquaray SLP-WW</a></li>
								<li><a rel="aqrsmp" href="uv.php#aqrsmp">Aquaray SMP-WW</a></li>
								<li><a rel="aqr40ho" href="uv.php#aqr40ho">Aquaray 40 HO</a></li>
								<li><a rel="aqr3x" href="uv.php#aqr3x">Aquaray 3x</a></li>
					        </ul>
-->

							<h4>Associated Media</h4>
							<a class="mediaLink" href="media/flash/micro-nutshell.swf"><img src="images/micro-nutshell.jpg" alt="micro-nutshell" width="275" /></a>
							<h4>Additional reading:</h4>
							<ul class="literature">
								<li>
									<a target="_blank" href="media/pdf/app/MicropollutantBrochure.pdf">
									<img src="media/pdf/tn/app/MarketingBrochureMicropolluantsFinal.jpg" alt="Ozone-range-screen001" width="106" height="150" />
									<div><span>Micropollutant Brochure</span></div>
									</a>
								</li>
							</ul>
							<ul>

								<li><a href="https://projetamperes.cemagref.fr/Documentation%20projet%20AMPERES" target="_blank">Amperes Research</a></li>
								<li><a href="http://www.cirsee.fr/fr/la-recherche/proteger-l-environnement-et-la-qualite-de-vie/poseidon/poseidon/" target="_blank">POSEIDON Research</a></li>

								<?php if($isSwitzerland): ?>
								<li><a href="http://www.eawag.ch/forschung/eng/schwerpunkte/abwasser/strategie_micropoll/index_EN" target="_blank">Strategy Micropoll (Switzerland)</a></li>
								<li><a href="http://www.bafu.admin.ch/gewaesserschutz/03716/index.html?lang=en" target="_blank">Swiss Legislation</a></li>
								<?php endif; ?>
							</ul>

							<?php if($isSwitzerland): ?>
							<h4>Local service</h4>
							<img src="images/micro-localmap.jpg" alt="micro-localmap" width="180"  />
							<?php endif; ?>

						</div>

<div class="modalHide">
	<div id="swiss" class="clearfix">
		<div class="left">
			<h3>WWTP Neugut - D&uuml;bendorf, Switzerland</h3>
			<p>The “Neugut” water treatment plant in D&uuml;bendorf (Z&uuml;rich) was one of the first Swiss pilot plants for micropollutant elimination.</p>
			<p>After reviewing the results, the municipality choose ozonia&reg; to supply the full-scale plant that will be build for spring 2013. This sewage plant will be the first to comply with the new Swiss regulation on trace compounds treatment.</p>
			<p>The Neugut facilities will be designed to treat up to 1’455 m3/h, and will be supplied by ozonia&reg; as a turnkey treatment stage. The system will include ozone generation, dome diffusion, vent ozonedestruction and instrumentation. With this innovative and forward looking building willing to protect the receiving environment, a key cleaning-compound will be added to the “Neugut” Water Treatment Plant.</p>
			<p>The city of D&uuml;bendorf awarded the Neugut project to ozonia&reg; basedon the extensive know-how, experience and reliability that ozonia&reg; is known for around the world. The Neugut sewage plant will be used as a foundation for future projects in Switzerland.</p>

			<img src="images/micro-swiss1.jpg" alt="micro-swiss1" width="120" height="87"/>
			<img src="images/micro-swiss2.jpg" alt="micro-swiss2" width="120" height="87"/>
			<img src="images/micro-swiss3.jpg" alt="micro-swiss3" width="120" height="87"/>
		</div>

		<div class="right">
			<h4>Additional Reading</h4>
			<ul class="literature">
				<li>
					<a target="_blank" href="media/pdf/app/MicropollutantBrochure.pdf">
					<img src="media/pdf/tn/app/MarketingBrochureMicropolluantsFinal.jpg" alt="Ozone-range-screen001" width="106" height="150" />
					<div><span>Micropollutant Brochure</span></div>
					</a>
				</li>
			</ul>
			<br />
			<ul>
				<li><a href="ozone.php#cfv" target="_blank">CFV Series</a></li>
<!--
				<li><a href="ozone.php#domediffuser" target="_blank">Dome Diffusers</a></li>
				<li><a href="ozone.php#vod" target="_blank">Ozone Destruct</a></li>
-->
				<li><a href="http://www.eawag.ch/forschung/eng/schwerpunkte/abwasser/strategie_micropoll/index_EN" target="_blank">Strategy micropoll (Switzerland)</a></li>
				<li><a href="http://www.neugut.ch/organisation/projekte" target="_blank">ARA Neugut (in German)</a></li>
			</ul>
		</div>
	</div>

	<div id="france" class="clearfix">
		<div class="left">
			<h3>STEP Sophia Antipolis - France</h3>
			<p>The wastewater treatment plant of Sophia Antipolis became during summer 2012 the first french sewage plant treating the micropollutants. Since, the receiving environment is perfectly preserved, protecting the drinking water resource of Antibes.</p>

			<p>When the municipality resolved to enlarge and improve its sewage	plant, they decided to upgrade the treatment line by setting up an ozone step. With this ozone generator, the plant benefits of a high-performance device combining flexibility and ease-of-use. Located between the biological treatment and the biofiltration, the ozonation fits ideally in an existing processing line.</p>

			<p>Drawing on its know-how ozonia&reg; offered a solution including a CFV-10 generator, allowing the sewage plant to adapt the ozone	amount to every requirement, from today to 2030, where 50 000 population equivalent are expected (840 m3/hour).</p>

			<p>With this first reference in France equipped by ozonia&reg;, the municipality	does a forward-looking investment perfectly framing the	sustainable development.</p>

			<img src="images/micro-france1.jpg" alt="micro-france" width="120" height="87"/>
			<img src="images/micro-swiss2.jpg" alt="micro-swiss2" width="120" height="87"/>
			<img src="images/micro-france2.jpg" alt="micro-france" width="120" height="87"/>
		</div>

		<div class="right">
			<h4>Additional Reading</h4>
			<ul class="literature">
				<li>
					<a target="_blank" href="media/pdf/app/MicropollutantBrochure.pdf">
					<img src="media/pdf/tn/app/MarketingBrochureMicropolluantsFinal.jpg" alt="Ozone-range-screen001" width="106" height="150" />
					<div><span>Micropollutant Brochure</span></div>
					</a>
				</li>
			</ul>
			<br />
			<ul>
				<li><a href="ozone.php#cfv" target="_blank">CFV Series</a></li>
<!--
				<li><a href="ozone.php#domediffuser">Dome Diffusers</a></li>
				<li><a href="ozone.php#vod">Ozone Destruct</a></li>
-->
				<li><a href="http://ec.europa.eu/environment/water/water-framework/info/intro_en.htm" target="_blank">Water Framework Directive</a></li>
				<li><a href="http://www.actu-environnement.com/ae/news/step-micropolluant-ozonation-17231.php4#xtor=EPR-1" target="_blank">Video Report (FR) on the WWTP</a></li>
			</ul>
		</div>
	</div>
</div> <!-- end modals -->

					</div><!-- end cc block -->

    				</div><!-- end corousel content -->
<!-- Modals -->

			</div><!-- end pagecontent -->
		</div><!-- end content (wrapper) -->



		<?php include('includes/footer.php') ?>
	</body>