<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
	<head>
		<?php 
			include('includes/common-head.php'); 
			include('includes/common-headcarousel.php'); 
		?>		
		<title>Ozonia | Ozone Solutions</title>
		
		<link rel="stylesheet" type="text/css" href="scripts/jquery.lightbox/js/lightbox/themes/default/jquery.lightbox.css" />
		<!--[if IE 6]>
		<link rel="stylesheet" type="text/css" href="scripts/jquery.lightbox/js/lightbox/themes/default/jquery.lightbox.ie6.css" />
		<![endif]-->
		<script type="text/javascript" src="scripts/jquery.lightbox/js/lightbox/jquery.lightbox.min.js"></script>
		<script type="text/javascript" src="scripts/ozonia_custom.js"></script>
		
		<script type="text/javascript">
		  $(document).ready(function($){
		    $('.lightbox').lightbox();
		    $("ul.literature li").ozoniaLit();
		    
			$("#membrel-modal").click(function() {
			  var html = $('<a href="ozone.php#membrel"><img src="images/slides/modal-membrel-feat.jpg" alt="modal-membrel" width="575" height="442" /></a>');
			
			  $.lightbox(html, {
			    width   : 585,
			    height  : 452
			  });
			  
			  return false;
			});		    
		    
		  });
		  
			  
		  
		</script>
	</head>
	
	<body class="inner-page">
		<div class="wrapper whitebg round2 shadow1">
			<?php include('includes/header.php') ?>

			<div class="hero-inner clearfix">
				<div class="hero-content">

					<div class="carousel">
						<ul>
							<li><a href="ozone.php#general" rel="general"><img src="images/product/ozone/ozone.jpg" alt="ozone" /></a></li>
							<li><a href="ozone.php#cfs" rel="cfs"><img src="images/product/ozone/ozat-cfs.jpg" alt="ozat-cfs" /></a></li>
							<li><a href="ozone.php#cfv" rel="cfv"><img src="images/product/ozone/ozat-cfv.jpg" alt="ozat-cfv"/></a></li>
							<li><a href="ozone.php#xf" rel="xf"><img src="images/product/ozone/xfvessels.jpg" alt="xfvessels" /></a></li>
							<li><a href="ozone.php#igs" rel="igs"><img src="images/product/ozone/igs.jpg" alt="igs" /></a></li>
							<li><a href="ozone.php#modipac" rel="modipac"><img src="images/product/ozone/modipac.jpg" alt="modipac"/></a></li>
							<li><a href="ozone.php#lab2b" rel="lab2b"><img src="images/product/ozone/lab2b.jpg" alt="lab2b" /></a></li>
							<!-- <li><a href="ozone.php#membrel" rel="membrel"><img src="images/product/ozone/membrel.jpg" alt="membrel" /></a></li> -->
							<li><a href="ozone.php#membrel" rel="membrel"><img src="images/product/ozone/membrel-mkiv.jpg" alt="membrel" /></a></li>
							<li><a href="ozone.php#togc" rel="togc"><img src="images/product/ozone/togc8x.jpg" alt="togc8x" /></a></li>
							<li><a href="ozone.php#ozfil" rel="ozfil"><img src="images/product/ozone/ozfil.jpg" alt="ozfil" /></a></li>
							<li><a href="ozone.php#vod" rel="vod"><img src="images/product/ozone/vod.jpg" alt="vod" /></a></li>
							<li><a href="ozone.php#odt" rel="odt"><img src="images/product/ozone/odt.jpg" alt="odt" /></a></li>
							<li><a href="ozone.php#ikseries" rel="ikseries"><img src="images/product/ozone/ik.jpg" alt="ikseries" /></a></li>
							<li><a href="ozone.php#radialdiffuser" rel="radialdiffuser"><img src="images/product/ozone/radial.jpg" alt="radialdiffuser" /></a></li>
							<li><a href="ozone.php#domediffuser" rel="domediffuser"><img src="images/product/ozone/dome.jpg" alt="domediffuser" /></a></li>
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

				<h2 class="section-title">Ozone Products</h2>

				<div class="carousel-content clearfix">
					<div class="cc-block active" id="general">
						<div class="left">
							<h3>Ozone</h3>
							<p>As a world leader in ozone disinfection treatment, Ozonia designs and manufactures ozone generators incorporating the most sophisticated electronics technology available. Offering wide-range of ozone generators from the laboratory scale to the largest ozone systems in the world. All Ozonia ozone systems have a variety of technical features developed to simplify installation and allow minimal operator attention and maintenance.</p>	
							<p>Ozone has been used by municipal bodies for many years to improve the aesthetic qualities of water and for its germicidal action. It is an accepted fact that drinking water is disinfected when a residual ozone level of 0.4 mg/l has been maintained for a period of 4 minutes. Ozone has many additional benefits in the drinking water process:</p>
							<ul class="text">	
								<li>In preozonation, ozone improves clarification, limits the formation of haloform precursors, reduces iron and manganese and promotes the destruction of micro-organisms such as algae.</li>
								<li>Main ozonation treatment breaks down trace contaminants and enhances the biodegradability of organic substances which are then removed in a biological treatment step.</li>
								<li>Finally, combined treatment steps involving ozone and activated carbon or ozone and peroxide are currently the most powerful means available to water process engineers for the removal of contaminants and constitute a vital safeguard against contamination entering a drinking water system.</li>
							</ul>							
							<h4 class="appshead">Applications by Market</h4>
				    		<a class="ozoniaButton_small" href="municipalapp.php">Municipal</a> <a class="ozoniaButton_small" href="industrialapp.php">Industrial</a> <a class="ozoniaButton_small" href="http://www.triogen.com/" target="_blank">Leisure</a>
						</div>
						<div class="right">
							<h4>Additional Reading</h4>
							<ul class="literature">
								<li>
									<a target="_blank" href="media/pdf/ozone/Ozone-range-screen.pdf">
									<img src="media/pdf/tn/ozone/Ozone-range-screen001.jpg" alt="Ozone-range-screen001" width="106" height="150" />
									<div><span>Ozone Range</span></div>
									</a>
								</li>
								<li>
									<a target="_blank" href="media/pdf/ozone/Ozone-range-light-screen.pdf">
									<img src="media/pdf/tn/ozone/Ozone-range-light-screen001.jpg" alt="Ozone-range-light-screen001" width="106" height="150" />
									<div><span>Ozone Range Comparison</span></div>
									</a>
								</li>
							</ul>
							
							<h4>Ozone Products:</h4>
							<ul class="product-side-nav">
								<li><a href="ozone.php#cfs" rel="cfs">OZAT CFS</a></li>
								<li><a href="ozone.php#cfv" rel="cfv">OZAT CFV</a></li>
								<li><a href="ozone.php#xf" rel="xf">XF Vessels</a></li>
								<li><a href="ozone.php#igs" rel="igs">IGS Technology</a></li>
								<li><a href="ozone.php#modipac" rel="modipac">Modipac</a></li>
								<li><a href="ozone.php#lab2b" rel="lab2b">Lab2B</a></li>
								<li><a href="ozone.php#membrel" rel="membrel">Membrel MkIV</a></li>
								<li><a href="ozone.php#togc" rel="togc">TOGC</a></li>
								<li><a href="ozone.php#ozfil" rel="ozfil">OZFIL & OZSKID Systems</a></li>
								<li><a href="ozone.php#vod" rel="vod">VOD Series RB</a></li>
								<li><a href="ozone.php#odt" rel="odt">ODT Series</a></li>
								<li><a href="ozone.php#ikseries" rel="ikseries">IK Series</a></li>
							</ul>
  						</div>
					</div><!-- end cc block -->					

					<div class="cc-block" id="cfs">
						<div class="left">
							<h3>OZAT<sup>&reg;</sup> CFS Series</h3>
							<p>The OZAT<sup>&reg;</sup> CFS range is Ozonia's answer for small to medium sized ozone applications. The design is based on feedback from hundreds of operators and includes the latest technology to ensure continuous operation at full load in industrial environments.</p>
							
							<p>An OZAT<sup>&reg;</sup> CFS range integrates the ozone generator, the power supply, control system, process related control equipment and interconnections inside a single compact cabinet. The control system ensures flexible operation and allows integration into all types of plant concepts.</p>
							<ul>
								<li>Production rates from 55 to 730 gO<sub>3</sub>/h from oxygen</li>
								<li>Production rates from 37 to 470 gO<sub>3</sub>/h from air</li>
								<li>Robust industrial quality for reliability and long service life</li>
								<li>High ozone concentration at full-load</li>
								<li>Very compact dimensions for easy integration</li>
								<li>Low maintenance and service personnel requirement Second generation technology</li>
							</ul>																		
						</div>
							<div class="right">
								<h4>Literature</h4>
								<ul class="literature">
									<li>
										<a target="_blank" href="media/pdf/ozone/OZAT-CFS-screen.pdf">
										<img src="media/pdf/tn/ozone/OZAT-CFS-screen001.jpg" alt="OZAT-CFS-screen001" width="106" height="150" />
										<div><span>Ozonia - OZAT<sup>&reg;</sup> CFS</span></div>
										</a>
									</li>
								</ul>
								<h4>Applications</h4>
								<ul>
									<li><a href="industrialapp.php#bottling">Bottled water plants</a></li>
									<li><a href="industrialapp.php#towers">Cooling towers</a></li>
									<li><a href="industrialapp.php#aquaculture">Aquaculture, etc.   </a></li>
								</ul>
							</div>
					</div><!-- end cc block -->					

					<div class="cc-block" id="cfv">
						<div class="left">
							<h3>OZAT<sup>&reg;</sup> CFV Series</h3>
								<p>The OZAT<sup>&reg;</sup> CFV range is Ozonia's latest development of generators for medium-sized ozone applications. The design is based on feedback from hundreds of operators and includes the latest technology to ensure continuous operation at full-load in industrial environments. A feature of the larger units is the fused dielectric tubes which makes them particularly suitable for remote service in drinking water plants.</p>
								<p>An OZAT<sup>&reg;</sup> CFV unit is completely integrated with ozone generator, power supply, PLC control, process related control equipment and interconnections all built on a common skid. The PLC system and optional bus ensures flexible operation and allows integration into all types of plant concepts.</p> 
								
								<ul>
									<li>Production rates from 1.24 to 25.7 kgO<sub>3</sub>/h from oxygen</li>
									<li>High ozone concentration at full-load</li>
									<li>Robust industrial quality for reliability and long service life</li>
									<li>Skid mounted with a small footprint for easy integration</li>
									<li>Minimum maintenance and service personnel requirement</li>
									<li>Choice of PLC with user friendly interface and optional bus</li>
									<li>Water cooled horizontal vessel type ozone generator</li>
									<li>The OZAT<sup>&reg;</sup> CFV Series is available on oxygen or air feed gas</li>
								</ul>				
						</div>
						<div class="right">
								<h4>Literature</h4>
								<ul class="literature">
									<li>
										<a target="_blank" href="media/pdf/ozone/OZAT-CFV-screen.pdf">
										<img src="media/pdf/tn/ozone/OZAT-CFV-screen001.jpg" alt="OZAT-CFV-screen001" width="107" height="149" />
										<div><span>Ozonia - OZAT<sup>&reg;</sup> CFV</span></div>
										</a>
									</li>
								</ul>
								<h4>Applications</h4>
								<ul>
									<li><a href="municipalapp.php#drinking">Drinking Water</a></li>
									<li><a href="municipalapp.php#effluent">Wastewater</a></li>
									<li><a href="industrialapp.php#process">Process water</a></li>
								</ul>							
						</div>
					</div><!-- end cc block -->					

					<div class="cc-block" id="xf">
						<div class="left">
							<h3>XF&trade; Vessels</h3>
							<p>The XF&trade; range of ozone generators is Ozonia's latest development that will set new standards for ozone production world-wide.</p> 
							<p>Not only has the Ozonia research team established a new calculation basis for the vessel design they have also developed a completely new dielectric technology that will compliment the phenomenally successful &ldquo;AT (Advanced Technology)&trade;&rdquo; in the larger units.</p>
							<p>The new patented technology, trademarked &ldquo;IGS&trade; (Intelligent Gap System)&rdquo;, takes ozone generation to levels never thought possible. This technological breakthrough, in conjunction with Ozonia's new <a href="ozone.php#modipac">MODIPAC&trade; power supply</a> unit, improves operating efficiency to reduce costs to the lowest possible levels.</p>
							<ul>
								<li>Concentrations from 6 wt% to 14 wt%</li>
								<li>Ozone production capacities from 24 kg/h up to 100 kg/h at 10 wt% concentration from oxygen feed gas with a single generator unit.</li>
								<li>Available in component form for easy installation, or as part of a fully assembled and tested containerized plant</li>
							</ul>
						</div>
							<div class="right">
								<h4>Literature</h4>
								<ul class="literature">
									<li>
										<a target="_blank" href="media/pdf/ozone/XF-VESSELS-screen.pdf">
										<img src="media/pdf/tn/ozone/XF-VESSELS-screen001.jpg" alt="XF-VESSELS-screen001" width="106" height="150" />
										<div><span>Ozonia - XF&trade; Vessels</span></div>
										</a>
									</li>
								</ul>
								<h4>Applications</h4>
								<ul>
									<li><a href="municipalapp.php#drinking">Drinking water treatment </a></li>
									<li><a href="municipalapp.php#wastewater">Waste water treatment</a></li>
									<li><a href="industrialapp.php#pulp">Pulp & paper applications</a></li>
								</ul>
							</div>	
					</div><!-- end cc block -->					

					<div class="cc-block" id="igs">
						<div class="left">
							<h3>IGS&trade; Technology</h3>
							<p>IGS&trade; (Intelligent Gap System) : the most innovative, cost-efficient and environmentally friendly innovation to ozone generation systems in a decade.</p>
							<p>Ozonia's new IGS&trade; Technology is a patented ozone generation process that uses revolutionary technology and materials to take ozone generation to levels never before commercially available. The revolutionary IGS&trade; Technology actually tailors the plasma (corona discharge) to optimize ozone generation and minimize non-productive energy.</p>
							<p>Dramatic improvement of energy efficiency from Ozonia' IGS&trade; Technology reduces ozonation cost of ownership. The economic impact makes ozone an effective solution to address the ever more demanding situation.
							<ul class="igs-list">
								<li>Stable production of high ozone concentration (14wt.%) on a continuous basis</li>
								<li>Reduces the energy consumption up to 30% compared to conventional ozone generators</li>
								<li>Reduces the feed gas consumption and consequently the operating costs</li>
								<li>Reduces equipment costs and footprints as a result of the high ozone concentration</li>
								<li>Improves safety and reliability with the exclusive system of individual fuses for each tube</li>
							</ul>			
						</div>
						<div class="right">
							<h4>Associated Media</h4>
				    		<a href="media/flash/OzoneProduction_IGSTechnology.swf?lightbox[width]=850&lightbox[height]=516"><img src="images/product/ozone/igs_tn.jpg" alt="igs_tn" width="250" height="155" style="border:1px solid rgb(100,100,100);" /></a>			

<a class="lightbox ozoniaButton_small" href="media/flash/OzoneProduction_IGSTechnology.swf?lightbox[width]=850&lightbox[height]=516">IGS technology animation &raquo;</a>		
						</div>
							
										
					</div><!-- end cc block -->					


					<div class="cc-block" id="modipac">
						<div class="left">
							<h3>MODIPAC&trade;</h3>
							<p>The MODIPAC&trade; product is the latest development of power supply units for Ozonia ozone generators. The main feature of the new PSU is an innovative frequency converter based on state of the art Insulated Gate Bipolar Transistor (IGBT) semiconductor technology.</p>
							<p>The development of the &ldquo;insulated gate bipolar transistors&rdquo; was a major step forward in semiconductor power technology, clearly destined to replace existing technologies such as thyristors and associated designs for certain applications. In order to keep abreast with technological development, Ozonia embarked on a development program which has resulted in the top-of-the-line MODIPAC&trade; modular power supply systems.</p>
							<p>These new power stages can be grouped together in 250 kW steps which will provide the necessary power for the ozone generator in question at a frequency of 1450 Hz.</p> 
							
							<ul>
								<li>State of the art semiconductor technology High power factor of 0.98 at the mains means no additional power factor correction equipment is needed</li>
								<li>Because of the unique frequency switching at the mains, a low harmonic content is achieved which fulfills the US standard IEEE 519.</li>
								<li>This technology improvement makes the expensive 12 pulse power supply units obsolete</li>
								<li>The high voltage transformer is always inside of the PSU cubicle</li>
								<li>The output frequency is matched to the new Ozonia ozone generator technology</li>
							</ul>
						</div>
							<div class="right">
								<h4>Literature</h4>
								<ul class="literature">
									<li>
										<a target="_blank" href="media/pdf/ozone/MODIPAC-screen.pdf">
										<img src="media/pdf/tn/ozone/MODIPAC-screen001.jpg" alt="MODIPAC-screen001" width="106" height="150" />
										<div><span>Ozonia - MODIPAC&trade;</span></div>
										</a>
									</li>
								</ul>
								
							</div>	
					</div><!-- end cc block -->			

					<div class="cc-block" id="lab2b">
						<div class="left">
							<h3>Lab2B Ozone Generator</h3>
							<p>The LAB2B is a corona discharge type ozone generator with variable ozone output. Producing up to 4g/h using air and 10g/h using oxygen. The LAB2B is designed specifically for laboratory research.</p>
							<p>Operating on various feed gases such as dried air or oxygen the LAB2B is capable of producing concentrations up to 10% volume. Output variation is manually adjustable using a control knob mounted on the front panel.</p>
								<ul>
									<li> Variable ozone output up to 10g/h</li>
									<li> Operate under vacuum or at maximum pressure of 10psig</li>
									<li> Illuminating switches indicating ozone production and faults</li>
									<li> Air cooled</li>
									<li> Operating and maintenance manual included performance graphs</li>
									<li> Full twelve month warranty and technical backup facilities</li>
								</ul>
						</div>
							<div class="right">
								<h4>Literature</h4>
								<ul class="literature">
									<li>
										<a target="_blank" href="media/pdf/ozone/LAB2B-screen.pdf">
										<img src="media/pdf/tn/ozone/LAB2B-screen001.jpg" alt="LAB2B-screen001" width="106" height="150" />
										<div><span>Ozonia - LAB2B</span></div>
										</a>
									</li>
								</ul>
							</div>	
					</div><!-- end cc block -->			


					<div class="cc-block" id="membrel">
						<div class="left">
							<h3>MEMBREL<sup>&reg;</sup> MkIV</h3>

							<p>The most effective way to disinfect Ultra Pure Water loops in industrial and pharmaceutical applications.</p>
							<p>Originally developed in the early 1980's MEMBREL<sup>&reg;</sup> MkIV is Ozonia's latest generation of electrolytic ozone generators which uses solid polymer electrolyte with a brand new GFRP cell body, and state-of-the-art electronics for ozone production.</p>
							<p>Installation of a MEMBREL<sup>&reg;</sup> MkIV is an effective way of sanitizing a pure water loop. Because the ozone is produced from the water being treated there are no contaminants. The use of chemicals or additional treatment steps is not necessary.</p>
							<ul>
								<li>Electrolytic ozone production</li>
								<li>Easily upgradeable from 3 gO<sub>3</sub> /h to 9 gO<sub>3</sub> /h</li>
								<li>User friendly with individual cell controls</li>
								<li>Remote control capabilities</li>
								<li>No ionic contamination</li>
								<li>Easily installed maintaining system integrity</li>
								<li>Recognized by all major pharmaceutical guidelines</li>
							</ul>
							
							<a class="ozoniaButton"id="membrel-modal" href="images/slides/modal-mebrel-feat.png"><!-- <img src="images/modal-membrel-btn.png" alt="" /> -->Discover more about the new Membrel<sup>&reg;</sup> <span style="text-transform:none;">MkIV</span></a>
								
						</div>
							<div class="right">
								<h4>Literature</h4>
								<ul class="literature">
									<li>
										<a target="_blank" href="media/pdf/ozone/MEMBREL_screen-MKIV.pdf">
										<img src="media/pdf/tn/ozone/MEMBREL-screen002.jpg" alt="MEMBREL-screen001" width="106" height="150" />
										<div><span>Ozonia - MEMBREL<sup>&reg;</sup> MkIV</span></div>
										</a>
									</li>
								</ul>
								<h4>Applications</h4>
								<ul>
									<li><a href="industrialapp.php#ultrapure">Sanitization of ultra pure water</a> for:
										<ul>
											<li>Pharmaceutical UPW</li>
											<li>Cosmetic UPW</li>
											<li>Semi-conductor UPW</li>
										</ul>
									</li>
								</ul>
							</div>	
					</div><!-- end cc block -->			

					<div class="cc-block" id="togc">
						<div class="left">
							<h3>TOGC Range</h3>
							<p>The TOGC8X, 13X & 45X are corona discharge ozone generators with variable output complete with an integrated oxygen concentrator and compressor. These models produce up to 8g/h, 13g/h or 45g/h, respectively, for smaller industrial ozone applications.</p>
							<p>Each system incorporates function indicators, feed gas flowmeter, oxygen concentrator and variable output control, as well as a compressor driven oxygen concentrator with automatically regenerated desiccant columns.</p>
							<ul>
								<li>Variable ozone output up to either 8g/h or 13g/h or 45g/h</li>
								<li>Complete with an oxygen concentrator and compressor</li>
								<li>Operating and maintenance manual included performance graphs</li>
								<li>Operates under negative or positive pressure</li>
								<li>Illuminating switches indicating ozone production and faults</li>
								<li>Air cooled (8X & 13X)</li>
								<li>Water cooled (45X)</li>
							</ul>																										
						</div>
							<div class="right">
								<h4>Product Range</h4>
								<ul class="literature">
									<li>
										<a target="_blank" href="media/pdf/ozone/TOGC2-screen.pdf">
										<img src="media/pdf/tn/ozone/TOGC2-screen001.jpg" alt="TOGC2-screen001" width="106" height="150" />
										<div><span>TOGC2</span></div>
										</a>
									</li>
									<li>
										<a target="_blank" href="media/pdf/ozone/TOGCX-screen.pdf">
										<img src="media/pdf/tn/ozone/TOGCX-screen001.jpg" alt="TOGCX-screen001" width="106" height="150" />
										<div><span>TOGC8X, 13X & 45X</span></div>
										</a>
									</li>
									<li>
										<a target="_blank" href="media/pdf/ozone/TOGCX-IS-screen.pdf">
										<img src="media/pdf/tn/ozone/TOGCX-IS-screen001.jpg" alt="TOGCX-IS-screen001" width="106" height="150" />
										<div><span>TOGC8XIS, 13XIS & 45XIS</span></div>
										</a>
									</li>
								</ul>
								<h4>Applications</h4>
								<ul>
									<li><a href="aop.php">Industrial oxidation process</a></li>
									<li><a href="municipalapp.php#drinking">Drinking Water</a></li>
									<li><a href="industrialapp.php#bottling">Bottled Water</a></li>
								</ul>
							</div>	
					</div><!-- end cc block -->			

					<div class="cc-block" id="ozfil">
						<div class="left">
							<h3>OZFIL&trade; &amp; OZSKID&trade; Water Treatment Systems</h3>
							<p>The OZFIL&trade;  &amp; OZSKID&trade; water treatment systems incorporates all of the components required to produce and apply ozone to the process water. Each skid mounted system includes an air dryer for the feed gas preparation; OZAT<sup>&reg;</sup> ozone generator; motive water pump and injector system; stainless steel contact chamber; automatic degassing valve with vent ozone destruct unit; residual ozone analyzer; flow meter; circulation bypass; control system and all skid interconnections.</p>
							<ul>
								<li>Complete treatment system on a skid</li>
								<li>Processor controlled</li>
								<li>Long service life</li>
								<li>Virtually maintenance-free</li>
								<li>Easy integration</li>
								<li>Compact dimensions</li>
								<li>High product integrity</li>
								<li>Reliable and repeatable control</li>
							</ul>
																	
						</div>
							<div class="right">
								<h4>Product Range</h4> 
								<ul class="literature">
									<li>
										<a target="_blank" href="media/pdf/ozone/OZFIL-screen.pdf">
										<img src="media/pdf/tn/ozone/OZFIL-screen001.jpg" alt="OZFIL Water Treatment Systems" width="106" height="150" />
										<div><span>Ozonia - OZFIL&trade;</span></div>
										</a>
									</li>
									<li>	
										<a target="_blank" href="media/pdf/ozone/OZSKID-screen.pdf">
										<img src="media/pdf/tn/ozone/OZSKID-screen001.jpg" alt="OZSKID Water Treatment Systems" width="106" height="150" />
										<div><span>Ozonia - OZSKID&trade;</span></div>
										</a>
									</li>
								</ul>
								<h4>Applications</h4>
								<p>The OZFIL&trade; &amp; OZSKID&trade; have been designed primarily for the treatment of <a href="industrialapp.php#bottling">bottled water</a> but are ideally suited for <a href="municipalapp.php#drinking">small drinking water installations as well.</a></p>
							</div>	
					</div><!-- end cc block -->			
				
					
					<div class="cc-block" id="vod">
						<div class="left">
							<h3>VOD Series RB&trade;</h3>
							<p>Exhaust gases from processes where ozone has been used invariably contain residual amounts of un-reacted ozone. Before this exhaust can be vented to atmosphere it is necessary to decompose the traces of ozone. In most countries it is forbidden to exhaust even low concentrations to atmosphere.</p>
							<p>The vent gases leaving the process are routed to the RO vent ozone destruct unit. In the reaction chamber the gases are heated-up to around 752&deg;F which radically reduces the half-life of the ozone molecule and, consequently, accelerates the decomposition rate so that the ozone content in the gas stream leaving the VOD is well below the recognized safety limits (&#060;0.1 ppm). In order to reduce the electrical requirement for heating the system incorporates a heat recuperation feature.</p>
							<ul>
								<li>Very high ozone destruct efficiency</li>
								<li>Low power consumption</li>
								<li>Long service life</li>
								<li>Virtually maintenance-free</li>
								<li>Easy integration</li>
								<li>Compact dimensions</li>
								<li>High product integrity</li>
							</ul>
						</div>
							<div class="right">
								<h4>Product Range</h4> 
								<ul class="literature">
									<li>
										<a target="_blank" href="media/pdf/ozone/VOD-SERIES-RB-screen.pdf">
										<img src="media/pdf/tn/ozone/VOD-SERIES-RB-screen001.jpg" alt="VOB Series RB" width="106" height="150" />
										<div><span>Ozonia - VOD Series RB</span></div>
										</a>
									</li>
								</ul>
							</div>	
					</div><!-- end cc block -->			
					
							
					<div class="cc-block" id="odt">
						<div class="left">
							<h3>ODT&trade; Series</h3>
							<p>Exhaust gases from processes where ozone has been used invariably contain residual amounts of un-reacted ozone. Before this exhaust can be vented to atmosphere it is necessary to decompose the traces of ozone. In most countries it is forbidden to exhaust even low concentrations to atmosphere.</p>
							<p>The vent gases leaving the process are routed to the ODT&trade; vent ozone destruct unit. In the reaction chamber the gases are heated up to around 400&deg;C which radically reduces the half-life of the ozone molecule and, consequently, accelerates the decomposition rate so that the ozone content in the gas stream leaving the ODT&trade; is well below the recognized safety limits (&#060;0.1 ppm).</p>
							<p>The temperature in the reaction chamber is thermostatically controlled.</p>
							<ul>
								<li>Very high ozone destruct efficiency</li>
								<li>Processor controlled</li>
								<li>Long service life</li>
								<li>Virtually maintenance-free</li>
								<li>Easy integration</li>
								<li>Compact dimensions</li>
								<li>High product integrity</li>
							</ul>
						</div>
							<div class="right">
								<h4>Product Range</h4> 
								<ul class="literature">
									<li>
										<a target="_blank" href="media/pdf/ozone/ODT-screen.pdf">
										<img src="media/pdf/tn/ozone/ODT-screen001.jpg" alt="ODT" width="106" height="150" />
										<div><span>Ozonia - ODT Series</span></div>
										</a>
									</li>
								</ul>
							</div>	
					</div><!-- end cc block -->		
					
					<div class="cc-block" id="ikseries">
						<div class="left">
							<h3>IK&trade; Series</h3>
							<p>Exhaust gases from processes where ozone has been used invariably contain residual amounts of un-reacted ozone. Before this exhaust can be vented to atmosphere it is necessary to decompose the traces of ozone. In most countries it is forbidden to exhaust even low concentrations to atmosphere.</p>
							<p>Normally, vent gases are saturated with water vapor and contain ozone levels up to 1.5 wt%. Before these gases can be treated it is necessary to heat them so that the relative humidity is less than 100% in order to prevent condensation forming on the surface of the catalyst.</p>
							<p>Catalytic destruction does not require high temperatures and very rapidly decomposes ozone to oxygen. Care has to be taken to ensure that catalytic poisons do not enter the system. The IK units include the heater and reaction chamber.</p>
							<ul>
								<li>Very high ozone destruct efficiency</li>
								<li>Low power consumption</li>
								<li>Long service life</li>
								<li>Virtually maintenance-free</li>
								<li>Easy integration</li>
								<li>Compact dimensions</li>
								<li>High product integrity</li>
							</ul>
						</div>
							<div class="right">
								<h4>Product Range</h4> 
								<ul class="literature">
									<li>
										<a target="_blank" href="media/pdf/ozone/IK-screen.pdf">
										<img src="media/pdf/tn/ozone/IK-screen001.jpg" alt="IK" width="106" height="150" />
										<div><span>Ozonia - IK Series</span></div>
										</a>
									</li>
								</ul>
							</div>	
					</div><!-- end cc block -->	
					
					<div class="cc-block" id="radialdiffuser">
						<div class="left">
							<h3>RADIAL DIFFUSER</h3>
							<p>It is important that the ozone is introduced to the process in the most efficient way. The radial diffuser is an excellent alternative to traditional bubble column components such as porous diffusers and, in certain circumstances, is to be considered preferential. The application, process medium flow rate and ozone dose rate are critical factors which determine the size and positioning of the radial diffuser unit.</p>
							<p>After leaving the generator the ozone containing feed gas is routed to the process as quickly as possible. Radial diffusers offer plant designers an elegant method of introducing ozone to process mediums and are particularly interesting when there are space restraints, risk of dogging or when a more dynamic mixing effect is required.</p>
<!--
							<h4>HOW IT WORKS</h4>
							<p>The main component of a radial diffuser system is the injector which mixes the ozone containing feed gas with a relatively low motive water flow. In turn, this motive water flow is routed to a radial diffuser head. The throwing power of the diffuser head ensures that the motive water containing the ozone is intensively mixed with the process medium.</p>
							<p>The radial diffuser elements are designed so that in addition to the ozonated motive water, a cloud of homogeneous small-sized bubbles are produced creating a large bubble/water contact area to ensure a maximum mass-transfer rate. Radial diffusers are easily integrated in pipe systems as well as in contact chambers.</p>		
-->					
							<ul>
								<li>Very high mass-transfer rate</li>
								<li>Homogeneous bubble formation</li>
								<li>Highly resistant component materials</li>
								<li>Extreme stability over long service periods</li>
								<li>Dynamic mixing / contacting</li>
								<li>Virtually maintenance-free</li>
								<li>Widely accepted technology</li>
							</ul>
						</div>
							<div class="right">
								<h4>Literature</h4> 
								<ul class="literature">
									<li>
										<a target="_blank" href="media/pdf/ozone/RADIAL-DIFFUSER-screen.pdf">
										<img src="media/pdf/tn/ozone/RADIAL-DIFFUSER-screen001.jpg" alt="IK" width="106" height="150" />
										<div><span>Ozonia - Radial Diffuser</span></div>
										</a>
									</li>
								</ul>
							</div>	
					</div><!-- end cc block -->	
					
					<div class="cc-block" id="domediffuser">
						<div class="left">
							<h3>DOME DIFFUSERS KTL<sup>&trade;</sup></h3>
							<p>It is important that the ozone is introduced to the process in the most efficient way. One of the more popular methods is to install dome type diffusers at the bottom of a contact tank and to bubble the ozone containing gas through the water volume in the tank.</p> <p>The application, medium flow rate and ozone dose rate are critical factors which will determine the size and number of dome diffusers required and will also influence the geometry of the contact tank. As an example, drinking water applications require a relatively low ozone dose, short contact time and one ozonation chamber with diffusers whereas waste treatment plants require a much higher ozone dose, longer contact times and a multiple of ozonation chambers.</p>
<!--
							<h4>HOW IT WORKS</h4>
							<p>After leaving the generator the ozone containing feed gas is routed to the process as quickly as possible. When porous diffusers are used to introduce the ozone to the process, these are typically located at the bottom of the ozonation chamber in a contact tank with a hydraulic head of five to six meters. The diffuser elements are designed that a cloud of homogeneous small-sized bubbles are produced creating a large bubble/water contact area to ensure a maximum mass-transfer rate.</p>
-->						
							<ul>
								<li>Mass-transfer rate >90%</li>
								<li>Homogeneous bubble formation</li>
								<li>Highly resistant ceramic material</li>
								<li>Extreme stability over long service periods</li>
								<li>Easy installation</li>
								<li>Maintenance-free</li>
								<li>Widely accepted technology</li>
							</ul>
						</div>
							<div class="right">
								<h4>Literature</h4> 
								<ul class="literature">
									<li>
										<a target="_blank" href="media/pdf/ozone/DOME-Diffusers-screen.pdf">
										<img src="media/pdf/tn/ozone/DOME-Diffusers-screen001.jpg" alt="IK" width="106" height="150" />
										<div><span>Ozonia - Dome Diffuser</span></div>
										</a>
									</li>
								</ul>
							</div>	
					</div><!-- end cc block -->	
					
				</div><!-- end corousel content -->							


			</div><!-- end pagecontent -->				
		</div><!-- end content (wrapper) -->					

		<?php include('includes/footer.php') ?>
	</body>