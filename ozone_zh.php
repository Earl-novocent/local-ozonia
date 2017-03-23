<?php require_once('includes/cookies.php'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="zh">
	<head>
		<?php
			include('includes/common-head.php');
			include('includes/common-headcarousel.php');
		?>
		<title>ozonia<sup>&reg;</sup> | Ozone Solutions</title>

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

				<h2 class="section-title">臭氧产品</h2>

				<div class="carousel-content clearfix">
					<div class="cc-block active" id="general">
						<div class="left">
							<h3>臭氧</h3>
							<p>作为全球领先的臭氧消毒技术提供商和设备制造厂商，奥宗尼亚(ozonia<sup>&reg;</sup>)公司自行研发、设计和制造的系列臭氧发生器采用了最尖端的电子技术。所提供的臭氧发生器应用范围广泛， 涉及世界各地的实验室规模以及最大规模臭氧系统的提供业务。 奥宗尼亚(ozonia<sup>&reg;</sup>)公司每一臭氧系统均拥有独特的技术特征，采用相应的专利技术以简化安装和最小化维护工作量。</p>
							<p>众所周知，将浓度为0.4mg/l的臭氧在饮用水中保持4分钟即可达到消毒之目的。除此之外，臭氧用于饮用水处理工艺中还可带来其他收获。</p>
							<ul class="text">
								<li>预臭氧处理可增强澄清效果，避免有机物转化为卤仿，同时还可促进藻类等微生物的死亡。</li>
								<li>臭氧化处理对于消除微污染物特别有效，可提高较难去除有机物的生物可降解性。</li>
								<li>最后，臭氧和活性炭或与过氧化氢组合工艺是目前去除水污染物的最有效方式，是应对突发性污染事故的重要手段。</li>
							</ul>
					<h4 class="appshead">应用市场</h4>
				    <a class="ozoniaButton_small" href="municipalapp.php"><!-- Municipal -->市政</a> <a class="ozoniaButton_small" href="industrialapp.php"><!-- Industrial -->工业</a> <a class="ozoniaButton_small" href="http://www.triogen.com/" target="_blank"><!-- Leisure -->休闲</a>
						</div>
						<div class="right">
							<h4>更多阅读</h4>
							<ul class="literature">
								<li>
									<!-- <a target="_blank" href="media/pdf/ozone/Ozone-range-screen.pdf"> -->
									<a target="_blank" href="media/pdf/cn/ozone_final_version_cn.pdf">
									<img src="media/pdf/tn/ozone/Ozone-range-screen001.jpg" alt="Ozone-range-screen001" width="106" height="150" />
									<div><span>Ozone Range</span></div>
									</a>
								</li>
								<li>
									<!-- <a target="_blank" href="media/pdf/ozone/Ozone-range-light-screen.pdf"> -->
									<a target="_blank" href="media/pdf/cn/ozone_prodect_range_comparison_cn.pdf">
									<img src="media/pdf/tn/ozone/Ozone-range-light-screen001.jpg" alt="Ozone-range-light-screen001" width="106" height="150" />
									<div><span>Ozone Range Comparison</span></div>
									</a>
								</li>
							</ul>

							<h4>臭氧产品:</h4>
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
								<li><a href="ozone.php#radialdiffuser" rel="radialdiffuser">Radial Diffuser</a></li>
								<li><a href="ozone.php#domediffuser" rel="domediffuser">Dome Diffusers KTL</a></li>
							</ul>
  						</div>
					</div><!-- end cc block -->

					<div class="cc-block" id="cfs">
						<div class="left">
							<h3>OZAT<sup>&reg;</sup> CFS系列</h3>
							<p>CFS 系列代表奥宗尼亚臭氧发生装置的二代研发产品，专为中小型臭氧处理应用而设计，并在大量用户反馈信息的基础上不断完善，利用最新技术确保满负荷工业运行的连续性。</p>

							<p>OZAT<sup>&reg;</sup> CFS 处理装置包括臭氧发生器单元、高压中频电源、控制系统、工艺控制设备和内部接线等。控制系统保证设备运行的灵活性且便于融入到各类工厂的整体设计中。</p>
							<ul>
								<li>臭氧产量55 ~ 730gO<sub>3</sub>/h ( 采用氧气作为原料气)</li>
								<li>臭氧产量37 ~ 470 gO<sub>3</sub>/h ( 采用空气作为原料气）</li>
								<li>可靠性好、使用寿命长</li>
								<li>满负荷工作时臭氧浓度高</li>
								<li>结构紧凑、易于安装集成</li>
								<li>维护工作量小</li>
							</ul>
						</div>
							<div class="right">
								<h4>文献</h4>
								<ul class="literature">
									<li>
										<!-- <a target="_blank" href="media/pdf/ozone/OZAT-CFS-screen.pdf"> -->
										<a target="_blank" href="media/pdf/cn/CFS_CN.pdf">
										<img src="media/pdf/tn/ozone/OZAT-CFS-screen001.jpg" alt="OZAT-CFS-screen001" width="106" height="150" />
										<div><span>ozonia<sup>&reg;</sup> - OZAT<sup>&reg;</sup> CFS</span></div>
										</a>
									</li>
								</ul>
								<h4>应用</h4>
								<ul>
									<li><a href="industrialapp.php#bottling">Bottled water plants</a></li>
									<li><a href="industrialapp.php#towers">Cooling towers</a></li>
									<li><a href="industrialapp.php#aquaculture">Aquaculture, etc.   </a></li>
								</ul>
							</div>
					</div><!-- end cc block -->

					<div class="cc-block" id="cfv">
						<div class="left">
							<h3>OZAT<sup>&reg;</sup> CFV系列</h3>
								<p>CFV 系列产品是奥宗尼亚开发的最新一代臭氧发生器， 适合中等规模的臭氧应用处理。其设计在大量用户反馈意见的基础上不断完善，并利用最新技术确保满负荷工业运行的连续性。这类较大型处理装置的一个显著特点是采用了带保险的放电管，特别适于饮用水厂的远程控制和操作。</p>
								<p>OZAT<sup>&reg;</sup> CFV 系列产品为一体化的臭氧发生器，配备高压中频供电单元、PLC 控制单元、工艺控制设备和内部连接等。PLC 控制系统和可选总线确保运行的灵活性且便于融入到各类工厂的整体设计中。</p>

								<ul>
									<li>原料气为氧气，臭氧产量从1.24到25.7 kgO<sub>3</sub>/h</li>
									<li>满负荷工作时臭氧浓度高</li>
									<li>可靠性好、使用寿命长</li>
									<li>安装简便、占地面积小</li>
									<li>维护工作量小</li>
									<li>PLC 采用用户友好界面、总线可选</li>
									<li>水冷型管式臭氧发生器、水平安装</li>
									<li>有空气源和氧气源两种机型</li>
								</ul>
						</div>
						<div class="right">
								<h4>文献</h4>
								<ul class="literature">
									<li>
										<!-- <a target="_blank" href="media/pdf/ozone/OZAT-CFV-screen.pdf"> -->
										<a target="_blank" href="media/pdf/CFV_CN.pdf">
										<img src="media/pdf/tn/ozone/OZAT-CFV-screen001.jpg" alt="OZAT-CFV-screen001" width="107" height="149" />
										<div><span>ozonia<sup>&reg;</sup> - OZAT<sup>&reg;</sup> CFV</span></div>
										</a>
									</li>
								</ul>
								<h4>应用</h4>
								<ul>
									<li><a href="municipalapp.php#drinking">Drinking Water</a></li>
									<li><a href="municipalapp.php#effluent">Wastewater</a></li>
									<li><a href="industrialapp.php#process">Process water</a></li>
								</ul>
						</div>
					</div><!-- end cc block -->

					<div class="cc-block" id="xf">
						<div class="left">
							<h3>XF&trade;系列</h3>
							<p>XF&trade;系列产品是奥宗尼亚研发的最新一代臭氧发生器。该产品的面世将全球臭氧生产技术提升至新的水平和高度</p>
							<p>奥宗尼亚的研发小组不仅为臭氧发生器的设计建立新的计算基础，还开发出全新的放电管技术以代替闻名遐迩的&ldquo;AT&trade; (advanced Technology)&rdquo;应用到大型的臭氧生产装置中。</p>
							<p>新的专利技术&ldquo;IGS&trade; (Intelligent Gap System)&rdquo;将臭氧生产技术提高至前所未有的新高度。这项技术突破结合奥宗尼亚开发的新型<a href="ozone.php#modipac">MODIPAC&trade;</a>供电单元解除人们在成本控制方面的顾虑</p>
							<ul>
								<li>臭氧浓度6 ～ 14 wt%。</li>
								<li>氧气源产量从24 kg/h高至 100 kg/h，臭氧浓度10wt%。</li>
								<li>设备可按部件供货便于在用户车间进行现场安装，也可整机组装测试后，以集装箱方式供货</li>
							</ul>
						</div>
							<div class="right">
								<h4>文献</h4>
								<ul class="literature">
									<li>
										<!-- <a target="_blank" href="media/pdf/ozone/XF-VESSELS-screen.pdf"> -->
										<a target="_blank" href="media/pdf/cn/XF_CN.pdf">
										<img src="media/pdf/tn/ozone/XF-VESSELS-screen001.jpg" alt="XF-VESSELS-screen001" width="106" height="150" />
										<div><span>ozonia<sup>&reg;</sup> - XF&trade;系列</span></div>
										</a>
									</li>
								</ul>
								<h4>应用</h4>
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
							<p>IGS&trade; (Intelligent Gap System 智能间隙系统)专利技术：十年来最具创新性，成本效益和环保革新性的臭氧生成系统</p>
							<p>奥宗尼亚(ozonia<sup>&reg;</sup>)公司新型 IGS&trade; (Intelligent Gap System 智能间隙系统)技术是专利臭氧生成工艺，采用革新性的技术和材料，将臭氧生产技术提高至前所未有的新高度。创新型 IGS&trade; (Intelligent Gap System 智能间隙系统)技术按实际需要处理等离子（电晕放电），优化臭氧产生，显著降低能耗。</p>
							<p>奥宗尼亚(ozonia<sup>&reg;</sup>)公司新型 IGS&trade; (Intelligent Gap System 智能间隙系统)技术显著降低电耗，降低臭氧制备成本。其良好的经济效益使臭氧的应用面日益扩大。
							<ul class="igs-list">
								<li>稳定连续生产高浓度臭氧（14wt.％）</li>
								<li>与传统的臭氧发生器相比，降低能耗达30％</li>
								<li>降低进气损耗，节约运营成本</li>
								<li>高臭氧浓度，有助于降低了设备成本和运行费用</li>
								<li>每一放电管单元均配备专用保险，保证单一放电管出现故障不会影响整个臭氧生产系统的停机，提高臭氧生成系统的安全性和可靠性</li>
							</ul>
						</div>
						<div class="right">
							<h4>相关媒体</h4>
				    		<a href="media/flash/OzoneProduction_IGSTechnology.swf?lightbox[width]=850&lightbox[height]=516"><img src="images/product/ozone/igs_tn.jpg" alt="igs_tn" width="250" height="155" style="border:1px solid rgb(100,100,100);" /></a>

<a class="lightbox ozoniaButton_small" href="media/flash/OzoneProduction_IGSTechnology.swf?lightbox[width]=850&lightbox[height]=516">IGS技术演示动画 &raquo;</a>
						</div>


					</div><!-- end cc block -->


					<div class="cc-block" id="modipac">
						<div class="left">
							<h3>MODIPAC&trade;</h3>
							<p>MODIPAC&trade;系列为最新推出的、奥宗尼亚臭氧发生器的供电单元模块。新型PSU的主要优势体现在采用技术独创性的变频器和先进的IGBT半导体技术。</p>
							<p>IGBT（insulated gate bipolar transistors）技术开发是半导体工业的一次飞跃，在某些特定应用中取代先前所用的晶闸管和其他相关设计产品成为必然。奥宗尼亚一直站在最新科技发展前沿，自主研发MODIPAC&trade;模块化供电系统。</p>
							<p>该系列产品可按250kW 成组连接在一起，为频率1450 Hz 的臭氧发生器提供所需电源。</p>

							<ul>
								<li>最先进的半导体技术，系统供电的功率系数高达0.99 意味着无需提供</li>
								<li>量低，完全符合美国IEEE 519 标准要求。</li>
								<li>此项技术革新淘汰了不经济的12脉冲电源装置</li>
								<li>HV 变压器置于PSU 柜内部。</li>
								<li>输出频率和奥宗尼亚的臭氧发生器在技术上相匹配。</li>
							</ul>
						</div>
							<div class="right">
								<h4>文献</h4>
								<ul class="literature">
									<li>
										<!-- <a target="_blank" href="media/pdf/ozone/MODIPAC-screen.pdf"> -->
										<a target="_blank" href="media/pdf/cn/MODIPAC_CN.pdf">
										<img src="media/pdf/tn/ozone/MODIPAC-screen001.jpg" alt="MODIPAC-screen001" width="106" height="150" />
										<div><span>ozonia<sup>&reg;</sup> - MODIPAC&trade;</span></div>
										</a>
									</li>
								</ul>

							</div>
					</div><!-- end cc block -->

					<div class="cc-block" id="lab2b">
						<div class="left">
							<h3>Lab2B臭氧发生器</h3>
							<p>LAB2B系列产品为电晕放电式臭氧发生器，可变臭氧输出，臭氧产量可达4gO<sub>3</sub>/h(原料气为空气)或10gO<sub>3</sub>/h(原料气为氧气)。LAB2B系列专为实验室研究应用而设计。</p>
							<p>输出变化通过安装在前部面板上的控制旋钮手动调节实现。不论采用干燥空气还是氧气作为原料气，LAB2B 系列臭氧发生器的臭氧浓度均达到10%</p>
								<ul>
									<li> 可变臭氧输出，产量高达10gO<sub>3</sub>/h</li>
									<li> 真空或最大压力10psig 条件下工作</li>
									<li> 指示开关显示臭氧生产或故障状态</li>
									<li> 空气冷却型</li>
									<li> 操作或维护手册包含功能图标</li>
									<li> 12 个月质保期和技术支持</li>
								</ul>
						</div>
							<div class="right">
								<h4>文献</h4>
								<ul class="literature">
									<li>
										<!-- <a target="_blank" href="media/pdf/ozone/LAB2B-screen.pdf"> -->
										<a target="_blank" href="media/pdf/cn/LAB2B_CN.pdf">
										<img src="media/pdf/tn/ozone/LAB2B-screen001.jpg" alt="LAB2B-screen001" width="106" height="150" />
										<div><span>ozonia<sup>&reg;</sup> - LAB2B</span></div>
										</a>
									</li>
								</ul>
							</div>
					</div><!-- end cc block -->


					<div class="cc-block" id="membrel">
						<div class="left">
							<h3>MEMBREL<sup>&reg;</sup> MkIV</h3>

							<p>用于工业和制药行业超纯水回路的最有效消毒方式</p>
							<p>Originally developed in the early 1980's MEMBREL<sup>&reg;</sup> MkIV is ozonia<sup>&reg;</sup>'s latest generation of electrolytic ozone generators which uses solid polymer electrolyte with a brand new GFRP cell body, and state-of-the-art electronics for ozone production.</p>
							<p>Installation of a MEMBREL<sup>&reg;</sup> MkIV is an effective way of sanitizing a pure water loop. Because the ozone is produced from the water being treated there are no contaminants. The use of chemicals or additional treatment steps is not necessary.</p>
							<ul>
								<li>电解式臭氧制备</li>
								<li>容易升级：3 gO<sub>3</sub>/h ~ 9 gO<sub>3</sub>/h</li>
								<li>用户友好的单元控制方式</li>
								<li>远程控制</li>
								<li>无电离污染</li>
								<li>易于安装的一体化维护系统</li>
								<li>已为制药行业标准所认可</li>
							</ul>

							<a class="ozoniaButton"id="membrel-modal" href="images/slides/modal-mebrel-feat.png"><!-- <img src="images/modal-membrel-btn.png" alt="" /> -->Discover more about the new Membrel<sup>&reg;</sup> <span style="text-transform:none;">MkIV</span></a>

						</div>
							<div class="right">
								<h4>文献</h4>
								<ul class="literature">
									<li>
										<!-- <a target="_blank" href="media/pdf/ozone/MEMBREL_screen-MKIV.pdf"> -->
										<!-- <a target="_blank" href="media/pdf/ozone/Brochure-MEMBREL.pdf"> -->
										<a target="_blank" href="media/pdf/cn/MEMBREL_MKIII_CN.pdf">
										<img src="media/pdf/tn/ozone/MEMBREL-screen002.jpg" alt="MEMBREL-screen001" width="106" height="150" />
										<div><span>ozonia<sup>&reg;</sup> - MEMBREL<sup>&reg;</sup> MkIV</span></div>
										</a>
									</li>
								</ul>
								<h4>应用</h4>
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
							<p>TOGC8X,13X,45X系列臭氧发生器为产量可变的电晕放电式臭氧发生器，配备内置式氧气浓缩机和压缩机。该系列设备臭氧产量可达到为8gO<sub>3</sub>/h或13gO<sub>3</sub>/h或45gO<sub>3</sub>/h，适于小型的工业臭氧处理和应用。</p>
							<p>该处理装置配备功能指示、原料气流量计、氧气浓缩机和可变输出控制。除此之外，处理装置还配备用于氧气浓缩机驱动的压缩机、自动再生型干燥柱。</p>
							<ul>
								<li>可变臭氧输出到任何一个 8g/h 或者 13g/h或者45g/h</li>
								<li>配套制氧机，氧气压缩机</li>
								<li>操作或维护手册包含功能图标</li>
								<li>负压或正压下运行</li>
								<li>指示开关显示臭氧生产或故障状态</li>
								<li>空气冷却型 (8X & 13X)</li>
								<li>水冷（45X）</li>
							</ul>
						</div>
							<div class="right">
								<h4>Product Range</h4>
								<ul class="literature">
									<li>
										<!-- <a target="_blank" href="media/pdf/ozone/TOGC2-screen.pdf"> -->
										<a target="_blank" href="media/pdf/cn/TOGC2_CN.pdf">
										<img src="media/pdf/tn/ozone/TOGC2-screen001.jpg" alt="TOGC2-screen001" width="106" height="150" />
										<div><span>TOGC2</span></div>
										</a>
									</li>
									<li>
										<!-- <a target="_blank" href="media/pdf/ozone/TOGCX-screen.pdf"> -->
										<a target="_blank" href="media/pdf/cn/TOGC8X_CN.pdf">
										<img src="media/pdf/tn/ozone/TOGCX-screen001.jpg" alt="TOGCX-screen001" width="106" height="150" />
										<div><span>TOGC8X, 13X & 45X</span></div>
										</a>
									</li>
									<li>
										<!-- <a target="_blank" href="media/pdf/ozone/TOGCX-IS-screen.pdf"> -->
										<a target="_blank" href="media/pdf/cn/TOGC8XIS_CN.pdf">
										<img src="media/pdf/tn/ozone/TOGCX-IS-screen001.jpg" alt="TOGCX-IS-screen001" width="106" height="150" />
										<div><span>TOGC8XIS, 13XIS & 45XIS</span></div>
										</a>
									</li>
								</ul>
								<h4>应用</h4>
								<ul>
									<li><a href="aop.php">Industrial oxidation process</a></li>
									<li><a href="municipalapp.php#drinking">Drinking Water</a></li>
									<li><a href="industrialapp.php#bottling">Bottled Water</a></li>
								</ul>
							</div>
					</div><!-- end cc block -->

					<div class="cc-block" id="ozfil">
						<div class="left">
							<h3>OZFIL&trade; &amp; OZSKID&trade; 水处理系统</h3>
							<p>OZFIL 系列产品包括生产臭氧和将臭氧导入工艺水所需的各要素：原料气制备所用的空气干燥机；OZAT® 臭氧发生器；动力水泵和加注系统；不锈钢反应室（ 停留时间至少4 分钟）；以配备臭氧破坏单元的自动脱气阀；余留臭氧分析仪；流量计；循环旁通；控制系统和所有内部连接。</p>
							<ul>
								<li>成套处理系统</li>
								<li>微处理器控制</li>
								<li>使用寿命长</li>
								<li>基本无维护</li>
								<li>易于集成</li>
								<li>占地面积小</li>
								<li>产量高</li>
								<li>可靠的、可重复性控制手段</li>
							</ul>

						</div>
							<div class="right">
								<h4>Product Range</h4>
								<ul class="literature">
									<li>
										<!-- <a target="_blank" href="media/pdf/ozone/OZFIL-screen.pdf"> -->
										<a target="_blank" href="media/pdf/cn/OZFIL_CN.pdf">
										<img src="media/pdf/tn/ozone/OZFIL-screen001.jpg" alt="OZFIL Water Treatment Systems" width="106" height="150" />
										<div><span>ozonia<sup>&reg;</sup> - OZFIL&trade;</span></div>
										</a>
									</li>
									<li>
										<!-- <a target="_blank" href="media/pdf/ozone/OZSKID-screen.pdf"> -->
										<a target="_blank" href="media/pdf/cn/OZKID_CFS_CN.pdf">
										<img src="media/pdf/tn/ozone/OZSKID-screen001.jpg" alt="OZSKID Water Treatment Systems" width="106" height="150" />
										<div><span>ozonia<sup>&reg;</sup> - OZSKID&trade;</span></div>
										</a>
									</li>
								</ul>
								<h4>应用</h4>
								<p>The OZFIL&trade; &amp; OZSKID&trade; have been designed primarily for the treatment of <a href="industrialapp.php#bottling">bottled water</a> but are ideally suited for <a href="municipalapp.php#drinking">small drinking water installations as well.</a></p>
							</div>
					</div><!-- end cc block -->


					<div class="cc-block" id="vod">
						<div class="left">
							<h3>VOD Series RB&trade;</h3>
							<p>处理过程中排放的废气含有少量尚未反应的臭氧，在排放之前必须进行分解处理。大多数国家对此类气体的排放有严格限制，即便所含臭氧浓度极低也必须进行处理。</p>
							<p>排出的废气送入RBTM 臭氧尾气破坏装置，在反应室内被加热至752°F左右，此时臭氧分子的半衰期已缩短至毫秒，臭氧分解速率也相应加快。尾气破坏装置出口气流中的臭氧含量低于公认的安全限值(&lt;0.1 ppm)。该系列产品特别配备热量回收系统，以最小化系统加热的电气要求。</p>
							<ul>
								<li>臭氧破坏效率高</li>
								<li>能耗低</li>
								<li>使用寿命长</li>
								<li>基本无维护</li>
								<li>易于集成</li>
								<li>占地面积小</li>
								<li>产量高</li>
							</ul>
						</div>
							<div class="right">
								<h4>Product Range</h4>
								<ul class="literature">
									<li>
										<!-- <a target="_blank" href="media/pdf/ozone/VOD-SERIES-RB-screen.pdf"> -->
										<a target="_blank" href="media/pdf/cn/VOD_RB_CN.pdf">
										<img src="media/pdf/tn/ozone/VOD-SERIES-RB-screen001.jpg" alt="VOB Series RB" width="106" height="150" />
										<div><span>ozonia<sup>&reg;</sup> - VOD Series RB</span></div>
										</a>
									</li>
								</ul>
							</div>
					</div><!-- end cc block -->


					<div class="cc-block" id="odt">
						<div class="left">
							<h3>ODT&trade; 系列</h3>
							<p>处理过程中排放的废气含有少量尚未反应的臭氧，在排放之前必须进行分解处理。大多数国家对此类气体的排放有严格限制，即便所含臭氧浓度极低也必须进行处理。</p>
							<p>排出的废气送入ODT&trade; 尾气破坏装置，在反应室内被加热至400℃左右，此时臭氧分子的半衰期已缩短至毫秒，臭氧分解速率相应加快。尾气破坏装置出口气流中的臭氧含量在公认的安全限值(&lt;0.1ppm) 以下。</p>
							<p>反应室内的温度为恒温控制。</p>
							<ul>
								<li>臭氧破坏效率高</li>
								<li>微处理器控制</li>
								<li>使用寿命长</li>
								<li>基本无维护</li>
								<li>易于集成</li>
								<li>占地面积小</li>
								<li>产量高</li>
							</ul>
						</div>
							<div class="right">
								<h4>Product Range</h4>
								<ul class="literature">
									<li>
										<!-- <a target="_blank" href="media/pdf/ozone/ODT-screen.pdf"> -->
										<a target="_blank" href="media/pdf/cn/ODT_CN.pdf">
										<img src="media/pdf/tn/ozone/ODT-screen001.jpg" alt="ODT" width="106" height="150" />
										<div><span>ozonia<sup>&reg;</sup> - ODT Series</span></div>
										</a>
									</li>
								</ul>
							</div>
					</div><!-- end cc block -->

					<div class="cc-block" id="ikseries">
						<div class="left">
							<h3>IK&trade; 系列</h3>
							<p>处理过程中排放的废气含有少量尚未反应的臭氧，在排放之前必须进行分解处理。大多数国家对此类气体的排放有严格限制，即便所含臭氧浓度极低也必须进行处理。</p>
							<p>通常情况下，排放气体和水蒸汽混合处于饱和状态，臭氧含量最高不超过1.5wt%。在进行处理之前，有必要对排放气体进行加热，使其相对湿度低于100%，以防止在触媒表面出现冷凝情况。</p>
							<p>催化破坏并不要求高温快速分解臭氧。处理过程中须谨慎操作保证催化有毒物质不会重新进入系统中。IKTM 系列配备加热器和反应室。</p>
							<ul>
								<li>臭氧破坏效率高</li>
								<li>能耗低</li>
								<li>使用寿命长</li>
								<li>基本无维护</li>
								<li>易于集成</li>
								<li>占地面积小</li>
								<li>产量高</li>
							</ul>
						</div>
							<div class="right">
								<h4>Product Range</h4>
								<ul class="literature">
									<li>
										<!-- <a target="_blank" href="media/pdf/ozone/IK-screen.pdf"> -->
										<a target="_blank" href="media/pdf/cn/IK_CN.pdf">
										<img src="media/pdf/tn/ozone/IK-screen001.jpg" alt="IK" width="106" height="150" />
										<div><span>ozonia<sup>&reg;</sup> - IK Series</span></div>
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
								<li>基本无维护</li>
								<li>Widely accepted technology</li>
							</ul>
						</div>
							<div class="right">
								<h4>文献</h4>
								<ul class="literature">
									<li>
										<!-- <a target="_blank" href="media/pdf/ozone/RADIAL-DIFFUSER-screen.pdf"> -->
										<a target="_blank" href="media/pdf/cn/RADIAL_diff_CN.pdf">
										<img src="media/pdf/tn/ozone/RADIAL-DIFFUSER-screen001.jpg" alt="IK" width="106" height="150" />
										<div><span>ozonia<sup>&reg;</sup> - Radial Diffuser</span></div>
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
								<h4>文献</h4>
								<ul class="literature">
									<li>
										<!-- <a target="_blank" href="media/pdf/ozone/DOME-Diffusers-screen.pdf"> -->
										<a target="_blank" href="media/pdf/cn/DOME_diff_CN.pdf">
										<img src="media/pdf/tn/ozone/DOME-Diffusers-screen001.jpg" alt="IK" width="106" height="150" />
										<div><span>ozonia<sup>&reg;</sup> - Dome Diffuser</span></div>
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