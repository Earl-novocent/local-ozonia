$(document).ready(function(){
	//Initilize Sloutions menu
	$('#hierarchy').menu({
		content: $('#hierarchy').next().html(),
		menuAnchor: $('#hierarchyMenuAnchor'),
		crumbDefaultText: ' ',
		positionOpts: { detectV: false, detectH: false }
	});
	$('#hierarchy2').menu({
		content: $('#hierarchy2').next().html(),
		menuAnchor: $('#hierarchy2MenuAnchor'),
		crumbDefaultText: ' ',
		positionOpts: { detectV: false, detectH: false}
	});
	$('#hierarchy3').menu({
		content: $('#hierarchy3').next().html(),
		menuAnchor: $('#hierarchy3MenuAnchor'),
		crumbDefaultText: ' ',
		positionOpts: { detectV: false, detectH: false }
	});


	// BUTTONS
	$('.fg-button').hover(
		function(){ $(this).removeClass('ui-state-default').addClass('ui-state-focus'); },
		function(){ $(this).removeClass('ui-state-focus').addClass('ui-state-default'); }
	);

	//Set Language cookie on click
	$('.language').on('click', '.changeLanguage', function(e){
		e.preventDefault();
		var thisAnchor = $(this);
		var newLang = $(this).attr('href');
		$.cookie('lang', newLang);
		$('.active').removeClass('active');
		$(this).addClass('active');
		location.reload();
	});
	//Set Language cookie on hero click
	$('.viewLang').click(function(e){
		e.preventDefault();
		var thisAnchor = $(this);
		var newLang = $(this).attr('href');
		$.cookie('lang', newLang);
		$('.active').removeClass('active');
		$('.language[href='+newLang+']').addClass('active');
		location.reload();
	});

});