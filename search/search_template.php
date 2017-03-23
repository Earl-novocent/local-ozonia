<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
	<head>
		<?php include('includes/common-head.php'); ?>		
		<title>ozonia&reg; | Search</title>
		<style type="text/css">
			.highlight { background: #FFFF40; }
			.searchheading { font-size: 130%; font-weight: bold; margin: 15px 0; }
			.summary { font-family: Georgia, "Times New Roman", Times, serif; font-size: 22px; font-weight: bold; font-style: italic; color: rgb(120,120,120); }
			.suggestion { font-size: 100%; }
			.results { font-size: 100%; }
			.category { color: #999999; }
			.sorting { text-align: right; }
	
			.result_title { font-size: 100%; }		
			.description { font-size: 100%; color: #008000; }
			.context { font-size: 100%; }
			.infoline { font-size: 80%; font-style: normal; color: #808080;}
	
			.zoom_searchform { font-size: 100%; }
			.zoom_results_per_page { font-size: 80%; margin-left: 10px; }
			.zoom_match { font-size: 80%; margin-left: 10px;}				
			.zoom_categories { font-size: 80%; }
			.zoom_categories ul { display: inline; margin: 0px; padding: 0px;}
			.zoom_categories li { display: inline; margin-left: 15px; list-style-type: none; }
			
			input.zoom_button {  }
			input.zoom_searchbox {  }		
			
			.results { font-family: Geneva, Arial, Helvetica, sans-serif; font-size: 12px;}
			.result_image { float: left; display: block; }
			.result_image img { margin: 10px; width: 80px; border: 0px; }
	
			.result_block { margin-top: 15px; margin-bottom: 15px; clear: left; }
			.result_altblock { margin-top: 15px; margin-bottom: 15px; clear: left; }
			
			.result_pages { font-family: Geneva, Arial, Helvetica, sans-serif; font-size: 12px;  }
			.result_pagescount { font-family: Geneva, Arial, Helvetica, sans-serif; font-size: 12px; }
			
			.searchtime { font-size: 80%; }
			
			.recommended 
			{ 
				background: #DFFFBF; 
				border-top: 1px dotted #808080; 
				border-bottom: 1px dotted #808080; 
				margin-top: 15px; 
				margin-bottom: 15px; 
			}
			.recommended_heading { float: right; font-weight: bold; }
			.recommend_block { margin-top: 15px; margin-bottom: 15px; clear: left; }		
			.recommend_title { font-size: 100%; }
			.recommend_description { font-size: 100%; color: #008000; }
			.recommend_infoline { font-size: 80%; font-style: normal; color: #808080;}
		</style>	
	
	</head>

	<body class="inner-page" onload="if (document.getElementById('zoom_searchbox')) {document.getElementById('zoom_searchbox').focus();}">

		<div class="wrapper whitebg round2 shadow1">
			<?php include('includes/header.php'); ?>

			<div class="pagecontent cc-block clearfix">			
				<h2 class="section-title">Search this site</h2>
				<p>Enter one or more keywords to search for. Note that '*' and '?' wildcards are supported.</p>	
				<!--ZOOMSEARCH-->	

			</div><!-- end corousel content -->				
		</div><!-- end content (wrapper) -->					

		<?php include('includes/footer.php'); ?>
	</body>
</html>