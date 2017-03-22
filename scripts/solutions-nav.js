$(document).ready(function(){
	$('.cc-block').not(':first-child').hide();

	$('.carousel ul').roundabout({
		//debug: true,
		reflect:false,
		shape: 'square',
		minScale: .4,
		btnPrev: '#carPrev',
		btnNext: '#carNext',
		btnNextCallback: function(){showContent()},
		btnPrevCallback: function(){showContent()}
	});
	
	
	function showContent(active){					
	  	if(active===undefined){
			active = $('li.roundabout-in-focus a').attr('rel');
			}
	    window.location.hash = active;
		$('div.carousel-content div.active').fadeOut(300, function(){
		    $("div#"+active).fadeIn().addClass('active');
		}).removeClass("active");
	};
	
	
	$('div.carousel li a').click(function(e) {
		e.preventDefault();
		showContent($(this).attr('rel'));
	});
	
	
	if(location.hash){
	    var hash = location.hash;
	    var hashItem = $('div#'+hash);
	    var AnimateTo = $('div.cc-block').index(hashItem);
	    $('.carousel ul').roundabout('animateToChild',AnimateTo);			
	    showContent(hash);					
	};
		
	$(window).bind('hashchange', function() {
		var hash = location.hash;
		var hashItem = $('div#'+hash);
		var AnimateTo = $('div.cc-block').index(hashItem);
		$('.carousel ul').roundabout('animateToChild',AnimateTo);			
		showContent(hash);					
	});
		
	$('#hierarchy').menu({
		content: $('#hierarchy').next().html(),
		crumbDefaultText: ' ',
		positionOpts: { directionV: 'down', detectV: true, detectH: true, offsetY: 20 },	    		
	});
	$('#hierarchy2').menu({
		content: $('#hierarchy2').next().html(),
		crumbDefaultText: ' ',
		positionOpts: { directionV: 'down', detectV: true, detectH: true, offsetY: 20 },	    		
	});
	$('#hierarchy3').menu({
		content: $('#hierarchy3').next().html(),
		crumbDefaultText: ' ',
		positionOpts: { directionV: 'down', detectV: true, detectH: true, offsetY: 20 },	    		
	});

	
// BUTTONS
$('.fg-button').hover(
	function(){ $(this).removeClass('ui-state-default').addClass('ui-state-focus'); },
	function(){ $(this).removeClass('ui-state-focus').addClass('ui-state-default'); }
);
	
});