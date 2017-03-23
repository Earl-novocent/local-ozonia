<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
	<head>		
		<base href="http://www.ozonia.com/" /><!--[if lte IE 6]></base><![endif]--> <!-- required for URL rewrite -->
		<?php include('includes/common-head.php'); ?>		
		<title>ozonia<sup>&reg;</sup> | Parts and Services</title>
		<script type="text/javascript" src="scripts/ozonia_custom.js"></script>
		<link rel="stylesheet" type="text/css" href="scripts/jquery.lightbox/js/lightbox/themes/default/jquery.lightbox.css" />
		<!--[if IE 6]>
		<link rel="stylesheet" type="text/css" href="/scripts/jquery.lightbox/js/lightbox/themes/default/jquery.lightbox.ie6.css" />
		<![endif]-->
		<script type="text/javascript" src="scripts/jquery.lightbox/src/jquery.lightbox.js"></script>
		<script type="text/javascript" src="scripts/jquery.insetBorderEffect.js"></script>
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.18/jquery-ui.min.js"></script>
		
		<script type="text/javascript"src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>
		<script type="text/javascript" src="installations.json"></script> 		

		<script type="text/javascript">
			$(document).ready(function($){				
				$("ul.literature li").ozoniaLit();

				$('.lightbox').lightbox();
			
				$('a.lightbox img').insetBorder({
				  inset : 7,
				  borderColor : 'rgba(70,70,70,0.5)',
				  speed : 250,
				  borderType : 'solid'
				});      
			});
		</script>

		<script type="text/javascript">

		var geocoder;
		var map;
		function initialize() {
			geocoder = new google.maps.Geocoder();
			var center = new google.maps.LatLng(39.842286,-101.337891);
			
			map = new google.maps.Map(document.getElementById('map_canvas'), {
				zoom: 3,
				center: center,
				mapTypeId: google.maps.MapTypeId.ROADMAP,
				maxZoom: 5,
				panControl:false,
				streetViewControl: false,
				zoomControlOptions: {
					position: google.maps.ControlPosition.BOTTOM_LEFT
				}				
			});

			function createMarkers(){
				var point = data.placemark[i].point;
				var place = data.placemark[i];
				
				//Default/OZAT icon red
				var icon = 'images/red_Marker.png';			
				if(place.group=='AT'){
					icon = 'images/blue_Marker.png';
				}else if(place.group=='Aquaray'){
					icon = 'images/green_Marker.png';
				}
				
				var info = place.description /* + place.address */;  
				var coords = point.coordinates.split(",");   				 
				var latLng = new google.maps.LatLng(coords[1],coords[0]);
				var marker = new google.maps.Marker({map: map, position: latLng, icon: icon});
				
				google.maps.event.addListener(marker, 'click', function() {
					infowindow.setContent(info);
					infowindow.open(map,marker);
				});	
			}
			
			for (var i=0; i<data.placemark.length; i++) {
				createMarkers();
			}
			var infowindow = new google.maps.InfoWindow({
				size: new google.maps.Size(50,50)
			});			
		
		}
		</script>		
		
		<script type="text/javascript">
		$(document).ready(function() {
		  initialize();
		                  
		  $(function() {
		    $("#address").autocomplete({
		      //This bit uses the geocoder to fetch address values
		      source: function(request, response) {
		        geocoder.geocode( {'address': request.term }, function(results, status) {
		          response($.map(results, function(item) {
		            return {
		              label:  item.formatted_address,
		              value: item.formatted_address,
		              latitude: item.geometry.location.lat(),
		              longitude: item.geometry.location.lng()
		            }
		          }));
		        })
		      },
		      //This bit is executed upon selection of an address
		      select: function(event, ui) {
		        $("#latitude").val(ui.item.latitude);
		        $("#longitude").val(ui.item.longitude);
		        var location = new google.maps.LatLng(ui.item.latitude, ui.item.longitude);
		        //marker.setPosition(location);
		        map.setCenter(location);
		        map.setZoom(5);
		      }
		    });
		  });	
		});
		</script>
		
		<style type="text/css">
		#map_canvas{
			border-bottom: 5px solid rgb(75,75,75);
		}		
		#address{
			background-color: white;
			border:1px solid grey;
			border-radius:3px;
			height: 20px;
			width:250px;
			padding-left: 10px;
		}
		.mapsearch{
			padding:10px;
		}
		label.location{
			font-family: Tahoma;
			/* text-transform: uppercase; */
			color: #6E6E6E;		
			font-weight: bold;
		}
		.ui-autocomplete {
		    background-color: white;
		    width: 300px;
		    border: 1px solid rgb(75,75,75);
		    border-top:none;
		    border-radius:0 0 5px 5px;
		    list-style-type: none;
		    padding-left: 0px;
		    width:250px;
		}	
		.ui-widget-content{
			background:#aadc14;
		    padding-left: 10px;
		}	
		.ui-widget-content a {
			color: white;
		}	
		.ui-menu-item{
			margin: 3px 10px;		
		}	
		.locate-arrow{
			top: 7px;
			position: relative;
		}
		.info-head{
			color:#aadc14;
			font-family: Tahoma;
			font-weight: bold;
		}
		.icon{
		position: relative;
		top:10px;
		margin:0 3px 0 20px;
		}
		.icons{
		position: relative;
		top:-5px;
		float:right;
		font-family: Tahoma;
		font-weight: bold;
		color:#6E6E6E;
		}
		</style>
		<!--[if IE 7]>
		<style type="text/css">
		.icons{	top:-35px;}	
		.icon{margin:0}	
		</style>
		<![endif]-->
	</head>

	<body class="inner-page">
		<div class="wrapper whitebg round2 shadow1">
			<?php include('includes/header.php'); ?>

			
			<div class="clearfix">			


				<div id="map_canvas" style="width:100%; height:500px"></div>

				<div class="mapsearch">
					<img class="locate-arrow" src="images/location-arrow.png" alt="location-arrow" height="22" />
					<label class="location">Find a Location: </label>
					<input id="address"  type="text"/>
					
					<div class="icons">
						<img class="icon" src="images/red_Marker.png" alt="" /> OZAT
						<img class="icon" src="images/green_Marker.png" alt="" /> AQUARAY
						<img class="icon" src="images/blue_Marker.png" alt="" /> "AT"
					</div>
												
				</div>
			
			
			</div><!-- end corousel content -->				
		</div><!-- end content (wrapper) -->					

		<?php include('includes/footer.php'); ?>
	</body>
</html>