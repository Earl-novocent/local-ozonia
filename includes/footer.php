	<!--ZOOMSTOP-->
		<?php if(isEnglish()===true): ?>
			<div class="footer">
				<div class="footer-nav-wrap">
					<ul class="footer-nav">
						<li><strong>Technology</strong></li>
						<li><a href="ozone.php">Ozone</a></li>
						<li><a href="uv.php">UV</a></li>
						<li><a href="aop.php">AOP</a></li>
					</ul>
					<ul class="footer-nav">
						<li><strong>Market</strong></li>
						<li><a href="municipalapp.php">Municipal</a></li>
						<li><a href="industrialapp.php">Industrial</a></li>
						<li><a href="http://www.triogen.com/" target="_blank">Leisure</a></li>
					</ul>
					<ul class="footer-nav">
						<li><strong>Process</strong></li>
						<li><a href="app.php">Applications</a></li>
						<li><a href="innovation.php">Innovations</a></li>
						<li><a href="#">Case Studies</a></li>
					</ul>
					<ul class="footer-nav company">
						<li><strong>Company</strong></li>
						<li><a href="about.php">About Us</a></li>
						<li><a href="http://www.suez-environnement.com/careers/join-us/jobs/">Careers</a></li>
						<li><a href="contact.php">Sales Contacts</a></li>
						<li><a href="contact.php">Service Contacts</a></li>
						<li><a href="procurement-contact.php">Procurement Contact/GCP</a></li>
					</ul>
					<ul class="footer-nav social">
						<!-- <li><strong>Social</strong></li> -->
						<li><a href="http://www.youtube.com/user/OZONIAchannel "><img src="images/youtube_icon.png" />Youtube</a></li>
						<li><a href="https://twitter.com/ozoniasolutions "><img src="images/twitter_icon.png" />Twitter</a></li>

					</ul>
				</div><!-- end footer nav wrap -->
				<ul id="degremontlink">
					<li id="degreomntbranding"><img src="images/logo_degremont.png" alt="Degremont"/></li>
					<li><a href="http://www.degremont.com">www.degremont.com</a></li>
					<li><a href="http://www.suez-environment.com">www.suez-environment.com</a></li>
					<!--<li><a href="http://www.degremon-technologies.com">www.degremon-technologies.com</a></li>-->
				</ul>
			</div><!-- end footer -->
		<?php else: ?>
			<div class="footer">
				<div class="footer-nav-wrap">
					<ul class="footer-nav">
						<li><strong>技术</strong></li>
						<li><a href="ozone.php">臭氧</a></li>
						<li><a href="uv.php">紫外线</a></li>
						<li><a href="aop.php">AOP</a></li>
					</ul>
					<ul class="footer-nav">
						<li><strong>市场</strong></li>
						<li><a href="municipalapp.php">市政</a></li>
						<li><a href="industrialapp.php">工业</a></li>
						<li><a href="http://www.triogen.com/" target="_blank">休闲</a></li>
					</ul>
					<ul class="footer-nav">
						<li><strong>工艺</strong></li>
						<li><a href="app.php">应用</a></li>
						<li><a href="innovation.php">创新</a></li>
						<li><a href="#">案例研究</a></li>
					</ul>
					<ul class="footer-nav">
						<li><strong>公司</strong></li>
						<li><a href="about.php">关于我们</a></li>
						<li><a href=" http://www.suez-environnement.com/careers/join-us/jobs/">人才招聘</a></li>
						<li><a href="contact.php">销售联系人</a></li>
						<li><a href="contact.php">服务联系人</a></li>
					</ul>
				</div><!-- end footer nav wrap -->
				<ul id="degremontlink">
					<li id="degreomntbranding"><img src="images/logo_degremont.png" alt="Degremont"/></li>
					<li><a href="http://www.degremont.com">www.degremont.com</a></li>
					<li><a href="http://www.suez-environment.com">www.suez-environment.com</a></li>
					<!--<li><a href="http://www.degremon-technologies.com">www.degremon-technologies.com</a></li>-->
				</ul>
			</div><!-- end footer -->
		<?php endif; ?>
<!-- 			<p class="footerText">If you're disabled and need assistance with the application process, please contact the Human Resources recruiter at 804-756-7613.</p> -->
			<p class="copyright">&copy; 2012 - All rights reserved &bull; Site design by <a href="http://novocent.com">Novocent</a>, <?php echo ("Location: ".$_SESSION['Location']);?>
			</p>
	<!--ZOOMRESTART-->
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-32221401-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
<!-- GALACTIC MODULE -->
<?php if(isEnglish()): ?>
	<script>(function(s,u,e,z){ s.lamaId = z; var a=u.createElement(e); a.src='//d43nnxuzbylze.cloudfront.net/lama/lama.min.js'; var b=u.getElementsByTagName(e)[0]; b.parentNode.insertBefore(a,b);}(window,document,'script','oth-06-en_uk'));</script>
<?php else: ?>
	<script>(function(s,u,e,z){ s.lamaId = z; var a=u.createElement(e); a.src='//d43nnxuzbylze.cloudfront.net/lama/lama.min.js'; var b=u.getElementsByTagName(e)[0]; b.parentNode.insertBefore(a,b);}(window,document,'script','oth-06-cn_zh'));</script>
<?php endif; ?>