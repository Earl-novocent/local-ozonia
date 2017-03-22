<!--ZOOMSTOP-->
<script type="text/javascript">
// Dynamic active state
$(document).ready(function() {
	var url = window.location.pathname;
	var filename = url.substring(url.lastIndexOf('/')+1);
	$('.nav li a').each(function(){
		var href = $(this).attr('href');
		if(filename == href){
			$(this).addClass('active');
		}

	});
});
</script>
		<?php if(isEnglish()): ?>
			<div class="nav-bar">
				<ul class="nav" id="onav">
					<li><a href="ozone.php">Ozone</a></li>
					<li><a href="uv.php">UV</a></li>
					<li><a href="aop.php">AOP</a></li>
					<li><a href="app.php">Applications</a></li>
					<li><a href="parts.php">Service</a></li>
					<li><a href="innovation.php">Innovation</a></li>
					<li><a href="about.php">About Us</a></li>
					<li><a href="events.php">Events</a></li>
					<li><a href="contact.php">Contacts</a></li>
				</ul>
			</div><!-- end nav-bar -->
		<?php else: ?>
			<div class="nav-bar">
				<ul class="nav" id="onav">
					<li><a href="ozone_zh.php"><!-- Ozone -->臭氧</a></li>
					<li><a href="uv_zh.php"><!-- UV -->紫外线</a></li>
					<li><a href="aop_zh.php">高级氧化</a></li>
					<li><a href="app_zh.php"><!-- Applications -->应用</a></li>
					<li><a href="parts_zh.php"><!-- Service -->服务</a></li>
					<li><a href="innovation_zh.php"><!-- Innovation -->创新</a></li>
					<li><a href="about_zh.php"><!-- About Us -->关于我们</a></li>
					<li><a href="events_zh.php"><!-- Events -->会展信息</a></li>
					<li><a href="contact.php"><!-- Contacts -->联系我们</a></li>
				</ul>
			</div><!-- end nav-bar -->
		<?php endif; ?>
	<!--ZOOMRESTART-->
