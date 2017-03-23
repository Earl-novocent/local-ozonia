	<!--ZOOMSTOP-->
			<div class="header clearfix">
				<h1 class="logo"><a href="index.php"><img src="images/logo-3.png" alt="ozonia<sup>&reg;</sup>"/></a></h1>
				<ul class="header-links">
					<!--
					<li><a href="http://www.suez-environnement.com">www.suez-environnement.com </a></li>
					<li><a href="http://www.degremont.com">www.degremont.com</a></li>
					-->
					<li><a href="http://www.degremont-technologies.com">www.degremont-technologies.com</a></li>
				</ul>
				<!--<form class="search-header"action="#">
					<input type="text" placeholder="search"/>
				</form>-->
	<form method="get" action="/search/search.php" class="search-header" name="searchozonia" id="searchozonia">
		<input type="text" id="sitesearch" name="zoom_query" maxlength="40" title="Enter a search term" placeholder="search">
		<!--<input type="submit" id="sitesearch_btn" border="0">-->
		<input type="hidden" name="zoom_per_page" value="10" />
		<input type="hidden" name="zoom_and" value="1" />
		<input type="hidden" name="zoom_sort" value="0" />
	</form>
				<div class="language">
					<?=$languageLinks?>
				</div>
				
				<?php if(isEnglish()): ?>
					<h2 class="logo-tag">The world leader in ozone and UV water treatment</h2>
					<?php include('nav.php') ?>
				<?php else: ?>
					<h2 class="logo-tag">全球臭氧和紫外线水处理技术的领军企业</h2>
					<?php include('nav.php') ?>
				<?php endif; ?>

			</div> <!-- end header -->
	<!--ZOOMRESTART-->