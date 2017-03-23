<?php require_once('includes/cookies.php'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="zh">
	<head>
	<?php
		include('includes/common-head.php');
		include('includes/common-headcarousel.php');
	?>
		<title>ozonia<sup>&reg;</sup> | UV Solutions</title>
		<script type="text/javascript" src="scripts/ozonia_custom.js"></script>
		<script type="text/javascript">
			$(document).ready(function() {
				$("ul.literature li").ozoniaLit();
			});
		</script>
		<link rel="stylesheet" type="text/css" href="scripts/jquery.lightbox/js/lightbox/themes/default/jquery.lightbox.css" />
		<!--[if IE 6]>
		<link rel="stylesheet" type="text/css" href="scripts/jquery.lightbox/js/lightbox/themes/default/jquery.lightbox.ie6.css" />
		<![endif]-->
		<script type="text/javascript" src="scripts/jquery.lightbox/js/lightbox/jquery.lightbox.min.js"></script>

		<script type="text/javascript">
		  $(document).ready(function($){
		    $('.lightbox').lightbox();
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
							<li><a href="uv.php#uv" rel="uv"><img src="images/product/uv/uv.jpg" alt="uv" /></a></li>
							<li><a href="uv.php#aqr3x" rel="aqr3x"><img src="images/product/uv/aquaray-3x.jpg" alt="aquaray-3x"/></a></li>
							<li><a href="uv.php#aqr40ho" rel="aqr40ho"><img src="images/product/uv/aquaray-ho.jpg" alt="aquaray-ho"/></a></li>
							<li><a href="uv.php#aqrh2o" rel="aqrh2o"><img src="images/product/uv/aquaray-h2o.jpg" alt="aquaray-h20"/></a></li>
							<li><a href="uv.php#aqrlp" rel="aqrlp"><img src="images/product/uv/aquaray-lp.jpg" alt="aquaray-lp"/></a></li>
							<li><a href="uv.php#aqrslp" rel="aqrslp"><img src="images/product/uv/aquaray-slp.jpg" alt="aquaray-slp"/></a></li>
							<li><a href="uv.php#aqrsmp" rel="aqrsmp"><img src="images/product/uv/aquaray-smp.jpg" alt="aquaray-smp"/></a></li>
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

				<h2 class="section-title">紫外线产品</h2>

				<div class="carousel-content clearfix">

					<div class="cc-block active" id="uv">
						<div class="left">
							<h3>紫外线</h3>
							<p>紫外线（UV）是有利于环保的有效消毒手段，克灭活大范围的病毒等病原体。得利满技术-Ozonia公司生产的Aquaray紫外线系统经过20余年的发展和完善，已被证明是成熟的环保消毒手段，可有效防止加氯等产生的有害消毒副产品。得利满技术-Ozonia公司的紫外线系列产品广泛用于市政污水、饮用水和工业消毒处理。</p>
							<p>紫外线系统通过灭活水中细菌、病毒和寄生虫等病原体微生物达到消毒目的。</p>



							<p>在紫外线光谱中，波长为200 - 280nm,波长254nm的紫外线经证实是破坏核酸(DNA和RNA)灭火微生物的最有效波长。</p>
							<p>在正常的应用中，紫外线系统的优势在于无需在被处理的水中添加化学制品，不会形成消毒副产物。由于较低的运行成本， 紫外线设备可以很容易地被集成到大部分现有污水处理厂的装置中。</p>
							<p>奥宗尼亚(ozonia<sup>&reg;</sup>)公司已研制出一种非常适合用于市政和工业领域应用的AQUARAY<sup>&reg;</sup>系列产品。</p>

							<p><a class="lightbox ozoniaButton_small" href="media/flash/ARloader.swf?lightbox[width]=850&lightbox[height]=516">Aquaray H<sub>2</sub>O演示动画 &raquo;</a></p>

							<!-- <h4 class="appshead">Applications by Market</h4> -->
							<h4 class="appshead">应用市场</h4>
				    		<a class="ozoniaButton_small" href="municipalapp.php"><!-- Municipal -->市政</a> <a class="ozoniaButton_small" href="industrialapp.php"><!-- Industrial -->工业</a> <a class="ozoniaButton_small" href="http://www.triogen.com/" target="_blank"><!-- Leisure -->休闲</a>
						</div>
						<div class="right">
							<!-- <h4>Additional Reading</h4> -->
							<h4>更多阅读</h4>
							<ul class="literature">
							    <li>
							    	<a target="_blank" href="media/pdf/uv/UV-Range-screen.pdf">
							    	<img src="media/pdf/tn/uv/UV-Range-screen001.jpg" alt="UV-Range-screen001" width="106" height="150" />
							    	<div><span>UV Range</span></div>
							    	</a>
							    </li>
							</ul>
							<h4>紫外线产品:</h4>
							<ul class="product-side-nav">
								<li><a rel="aqr3x" href="uv.php#aqr3x">Aquaray 3x</a></li>
								<li><a rel="aqr40ho" href="uv.php#aqr40ho">Aquaray 40 HO</a></li>
								<li><a rel="aqrh2o" href="uv.php#aqrh2o">Aquaray H<sub>2</sub>O</a></li>
								<li><a rel="aqrlp" href="uv.php#aqrlp">Aquaray LP</a></li>
								<li><a rel="aqrslp" href="uv.php#aqrslp">Aquaray SLP</a></li>
								<li><a rel="aqrsmp" href="uv.php#aqrsmp">Aquaray SMP</a></li>
							</ul>

						</div><!-- end right -->
					</div><!-- end cc block -->

					<div class="cc-block" id="aqr3x">
						<div class="left">
							<h3>Aquaray<sup>&reg;</sup> 3X</h3>
							<p>Aquaray<sup>&reg;</sup> 3X 立式灯管系统紫外线输出强度高且占地面积小，即使是对出水要求最为严格的污水回用处理也能达到其所要求的消毒水</p>
							<p>Aquaray<sup>&reg;</sup> 3X 高输出立式灯管紫外消毒系统为较大型污水厂应用而设计，特别适用于在有效占地面积方面有所限制的大型水厂消毒处理。紫外光的杀菌效果在于灭活细菌、病毒和寄生虫等大多数微生物，无需添加和使用危险的化学药剂。</p>
							<ul>
								<li>节能：Aquaray<sup>&reg;</sup> 3X系列的可变输出电子镇流器和高效汞齐灯管与成排灯管开/关控制单元相结合，确保根据流量调整紫外剂量输出，从而达到节能的目的。</li>
								<li>经验定的性能：在污水消毒和污水回用领域Aquaray<sup>&reg;</sup> 3X系列经第三方验定并通过严格的生物验定测试。</li>
								<li>易于维护：Aquaray<sup>&reg;</sup> 3X系列独特的立式设计，方便安装/检修/替换紫外线灯管和石英套管（无需将紫外模块移出消毒渠外）。</li>
								<li>节省占地面积：Aquaray<sup>&reg;</sup> 3X系列采用低压高输出汞齐灯管和立式设计最小化占地面积。</li>
							</ul>

						</div>
							<div class="right">
								<h4>文献</h4>
								<ul class="literature">
								    <li>
								    	<a target="_blank" href="media/pdf/uv/Aquaray-3X-screen.pdf">
								    	<img src="media/pdf/tn/uv/Aquaray-3X-screen001.jpg" alt="Aquaray-3X-screen001" width="106" height="150" />
								    	<div><span>ozonia<sup>&reg;</sup> - Aquaray<sup>&reg;</sup> 3X</span></div>
								    	</a>
								    </li>
								</ul>
								<h4>Applications</h4>
								<ul>
									<li><a href="municipalapp.php#wastewater">Wastewater Disinfection</a>, Reuse and CSO (Combined Sewer Overflow)</li>
								</ul>
							</div>
					</div><!-- end cc block -->

					<div class="cc-block" id="aqr40ho">
						<div class="left">
							<h3>Aquaray<sup>&reg;</sup> 40 HO</h3>
							<p>Aquaray<sup>&reg;</sup> 40 HO(高输出)垂直灯管式系统具有高效紫外线输出且占地面积小的特点，即使是对出水要求最为严格的污水回用处理等也能达到其所要求的消毒水平。</p>
							<p>Aquaray<sup>&reg;</sup> 40 HO垂直灯管紫外消毒系统设计用于污水处理厂的消毒处理，特别适用于在有效占地面积方面有所限制的消毒应用。紫外光的杀菌效果在于灭活细菌、病毒和寄生虫等大多数微生物，无需添加和使用危险的化学药剂。</p>
							<ul>
								<li>易于维护：Aquaray<sup>&reg;</sup> 40 HO系统独特的垂直式设计，方便安装/检修/替换紫外线灯管和石英套管（而无需将紫外模块移出消毒渠外）。</li>
								<li>节省占地面积：Aquaray<sup>&reg;</sup> 40 HO系列采用低压高输出汞齐灯管和垂直式设计最小化占地面积。</li>
								<li>节能：Aquaray<sup>&reg;</sup> 40 HO 系统将高效电子镇流器与成排灯管开/关控制单元相结合，确保根据流量信号和紫外透光率对紫外输出剂量进行调整，从而达到节能的目的。</li>
								<li>经验定的性能：对于污水消毒和污水回用领域，Aquaray<sup>&reg;</sup> 40 HO系列经第三方验定并通过严格的生物验定测试。</li>
							</ul>
						</div>
							<div class="right">
								<h4>文献</h4>
								<ul class="literature">
								    <li>
								    	<a target="_blank" href="media/pdf/uv/Aquaray-40HO-screen.pdf">
								    	<img src="media/pdf/tn/uv/Aquaray-40HO-screen001.jpg" alt="Aquaray-40HO-screen001" width="106" height="150" />
								    	<div><span>ozonia<sup>&reg;</sup> - Aquaray<sup>&reg;</sup> 40 HO</span></div>
								    	</a>
								    </li>
								</ul>
								<h4>Applications</h4>
								<ul>
									<li><a href="municipalapp#wastewater">Wastewater Disinfection</a>, Reuse and CSO (Combined Sewer Overflow)</li>
								</ul>
							</div>
					</div><!-- end cc block -->

					<div class="cc-block" id="aqrh2o">
						<div class="left">
							<h3>Aquaray<sup>&reg;</sup> H<sub>2</sub>O</h3>
							<p>Aquaray<sup>&reg;</sup> H<sub>2</sub>O系列处理能力范围300-8600m<sup>3</sup>/h。这一反应装置利用呈特定方式排列的中压紫外线灯管产生的有效紫外线剂量灭活水中病原体。</p>
							<p>Aquaray<sup>&reg;</sup> H<sub>2</sub>O系列设计用于饮用水的消毒处理。紫外线的杀菌效果体现在灭活病菌、细菌和寄生虫等大多数微生物。众所周知，紫外线对灭活小的似隐孢子虫和蓝式贾第鞭毛虫尤为有效。</p>
							<ul>
								<li>最优化处理效果：Aquaray<sup>&reg;</sup> H<sub>2</sub>O系列产品经计算机流体动力CFD模型软件最优化设计，最大化紫外线剂量和最小化水头损失。</li>
								<li>节能：可变输出的电子镇流器可根据需要对用电量进行调整。</li>
								<li>节省占地面积：Aquaray<sup>&reg;</sup> H<sub>2</sub>O系列产品采用高功率密度的中压灯管，最小化占地面积。</li>
								<li>经验证的处理效果：Aquaray<sup>&reg;</sup> H<sub>2</sub>O系列经第三方验定，并获得DVGW认证。</li>
							</ul>
						</div>
							<div class="right">
								<h4>文献</h4>
								<ul class="literature">
								    <li>
								    	<a target="_blank" href="media/pdf/uv/Aquaray-H2O-screen.pdf">
								    	<img src="media/pdf/tn/uv/Aquaray-H2O-screen001.jpg" alt="Aquaray-H2O-screen001" width="106" height="150" />
								    	<div><span>ozonia<sup>&reg;</sup> - H2O</span></div>
								    	</a>
								    </li>
								</ul>
								<h4>Applications</h4>
								<ul>
									<li><a href="municipalapp.php#drinking">Drinking Water Disinfection</a></li>
								</ul>
							</div>
					</div><!-- end cc block -->

					<div class="cc-block" id="aqrlp">
						<div class="left">
							<h3>Aquaray<sup>&reg;</sup> LP / LPTS</h3>
							<p>Aquaray<sup>&reg;</sup> LP系列产品专为小型水厂消毒处理而设计，具有占地面积小、系统处理效率高、超强可靠性能和操作简易等特点，处理流量范围10~40m<sup>3</sup>/h</p>
							<p>Aquaray<sup>&reg;</sup> LP系列产品设计用于饮用水或工艺水的消毒处理。紫外线的杀菌效果体现在灭活病毒、细菌和寄生虫等大多数微生物。众所周知，紫外线对灭活小的似隐孢子虫和蓝式贾第鞭毛虫尤为有效。</p>
							<ul>
								<li>高效、低压汞灯</li>
								<li>灯管寿命高达16,000小时</li>
								<li>水平或立式安装</li>
								<li>安装简便，在新建或现有水厂内均适用</li>
								<li>小型处理装置适合安装在有限的有效可用空间内</li>
								<li>操作简单、微处理器控制</li>
							</ul>
						</div>
							<div class="right">
								<h4>文献</h4>
								<ul class="literature">
									<li>
										<a target="_blank" href="media/pdf/uv/LP-screen.pdf">
										<img src="media/pdf/tn/uv/LP-screen001.jpg" alt="LP-screen001" width="106" height="150" />
										<div><span>ozonia<sup>&reg;</sup> - Aquaray<sup>&reg;</sup> LP</span></div>
										</a>
									</li>
									<li>
										<a target="_blank" href="media/pdf/uv/LPTS-screen.pdf">
										<img src="media/pdf/tn/uv/LPTS-screen001.jpg" alt="LPTS-screen001" width="106" height="150" />
										<div><span>ozonia<sup>&reg;</sup> - Aquaray<sup>&reg;</sup> LPTS</span></div>
										</a>
									</li>
								</ul>
								<h4>Applications</h4>
								<ul>
									<li><a href="municipalapp#drinking">Drinking water</a></li>
									<li><a href="industrialapp.php#process">Process water</a></li>
									<li><a href="industrialapp.php#aquaculture">Aquaculture</a></li>
									<li><a href="industrialapp.php#towers">Cooling tower</a></li>
								</ul>
							</div>
					</div><!-- end cc block -->

					<div class="cc-block" id="aqrslp">
						<div class="left">
							<h3>Aquaray<sup>&reg;</sup> SLP</h3>
							<p>Aquaray<sup>&reg;</sup>SLP UV 小型紫外线消毒装置专为中小型水厂(流量范围：25～600m<sup>3</sup>/h)应用而设计，消毒处理高效、可靠且易于操作。</p>
							<p>Aquaray<sup>&reg;</sup> LP系列产品设计用于饮用水或工艺水的消毒处理。紫外线的杀菌效果体现在灭活病毒、细菌和寄生虫等大多数微生物。众所周知，紫外线对灭活小的似隐孢子虫和蓝式贾第鞭毛虫尤为有效。</p>
							<ul>
								<li>内置高效反应装置</li>
								<li>设计满足DVGW标准</li>
								<li>灯管寿命16,000小时</li>
								<li>操作简单、微处理器控制</li>
								<li>安装简便，在新建或现有水厂内均适用</li>
								<li>反应装置水平或垂直式安装</li>
							</ul>

						</div>
							<div class="right">
								<h4>文献</h4>
								<ul class="literature">
									<li>
										<a target="_blank" href="media/pdf/uv/SLP-DW-PW-screen.pdf">
										<img src="media/pdf/tn/uv/SLP-DW-PW-screen001.jpg" alt="SLP-DW-PW-screen001" width="106" height="150" />
										<div><span>ozonia<sup>&reg;</sup> - Aquaray<sup>&reg;</sup> SLP DW/PW</span></div>
										</a>
									</li>
									<li>
										<a target="_blank" href="media/pdf/uv/SLP-WW-screen.pdf">
										<img src="media/pdf/tn/uv/SLP-WW-screen001.jpg" alt="SLP-WW-screen001" width="106" height="150" />
										<div><span>ozonia<sup>&reg;</sup> - Aquaray<sup>&reg;</sup> SLP WW</span></div>
										</a>
									</li>
								</ul>
								<h4>Applications</h4>
								<ul>
									<li><a href="municipalapp.php#drinking">Drinking water</a></li>
									<li><a href="industrialapp.php#process">Process water</a></li>
									<li><a href="industrialapp.php#aquaculture">Aquaculture</a></li>
									<li><a href="industrialapp.php#towers">Cooling tower</a></li>
									<li><a href="aop.php">Advanced oxidation</a></li>
								</ul>
							</div>
					</div><!-- end cc block -->

					<div class="cc-block" id="aqrsmp">
						<div class="left">
							<h3>Aquaray<sup>&reg;</sup> SMP</h3>
							<p>Aquaray<sup>&reg;</sup> SMP-DW/PW系列产品专为中小型污水厂消毒处理而设计，具有占地面积小、系统处理效率高、超强可靠性能和操作简易等特点，处理流量范围22 ~ 440 m<sup>3</sup>/h(1.39 to 27.9 MGD)。</p>
							<p>The Aquaray<sup>&reg;</sup> SMP-DW/PW系列产品设计用于饮用水或工艺水的消毒处理。紫外线的杀菌效果体现在灭活病毒、细菌和寄生虫等大多数微生物。众所周知，紫外线对灭活小的似隐孢子虫和蓝式贾第鞭毛虫尤为有效。</p>
							<p>中压紫外线灯管所发出的紫外光作用于核酸和蛋白质，从而达到灭活微生物的目的。紫外线剂量（紫外线强度 x 接触时间）确定紫外线设备可达到的消毒处理效果。所投加的有效紫外线剂量取决于紫外线在待处理水中的穿透率和紫外线系统的适当水力设计</p>
							<ul>
								<li>多色光束、中压紫外线灯管确保最佳杀菌效率</li>
								<li>灯管数少</li>
								<li>安装简便，在新建或现有水厂内均适用</li>
								<li>操作简单、微处理器控制</li>
								<li>•长达一年运行参数记录</li>
							</ul>
						</div>
							<div class="right">
								<h4>文献</h4>
								<ul class="literature multilit">
									<li>
										<a target="_blank" href="media/pdf/uv/SMP-DW-PW-screen.pdf">
										<img src="media/pdf/tn/uv/SMP-DW-PW-screen001.jpg" alt="SMP-DW-PW-screen001" width="106" height="150" />
										<div><span>ozonia<sup>&reg;</sup> - Aquaray<sup>&reg;</sup> SMP DW/PW</span></div>
										</a>
									</li>
									<li>
										<a target="_blank" href="media/pdf/uv/SMP-WW-screen.pdf">
										<img src="media/pdf/tn/uv/SMP-WW-screen001.jpg" alt="SMP-WW-screen001" width="106" height="150" />
										<div><span>ozonia<sup>&reg;</sup> - Aquaray<sup>&reg;</sup> SMP WW</span></div>
										</a>
									</li>
								</ul>
								<h4>Applications</h4>
								<ul>
									<li><a href="municipalapp.php#drinking">Drinking water</a></li>
									<li><a href="industrialapp.php#process">Process water</a></li>
									<li><a href="industrialapp.php#aquaculture">Aquaculture</a></li>
									<li><a href="industrialapp.php#towers">Cooling tower</a></li>
									<li><a href="aop.php">Advanced oxidation</a></li>
								</ul>
							</div>
					</div><!-- end cc block -->


				</div><!-- end corousel content -->


			</div><!-- end pagecontent -->
		</div><!-- end content (wrapper) -->

		<?php include('includes/footer.php') ?>
	</body>