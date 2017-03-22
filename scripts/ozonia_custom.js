(function ($) {
    $.fn.ozoniaLit = function (options) {
        var defaults = {
	    	speed: 500,
	    	delay: 1000
        };
        var options = $.extend(defaults, options);
	    var title = this.children("a").children("div");
	    var instruct = $('<div class="note">Download Literature</div>');

	    title.addClass("intruct").append(instruct);
	    
	    this.hover(
	    	function() {
	    		var title = $(this).children("a").children("div");
	    		title.animate({"opacity": "toggle"}, defaults.speed);
	    	}, 
	    	function() {
	    		var title = $(this).children("a").children("div");
	    		title.hide();
	    	}
	    );
    };
    
    $.fn.ozoniaMultiLit = function () {
  	    var link = $('<a class="ozoniaButton_small">More Literature</a>');
  	    var $this = this
  	    link.bind("click", function(){
  	    	var visible = $this.find('li:visible');
			var next = visible.next();
  	    	if ( next.length == 0 ) { next = $this.find('li:first-child'); }
			visible.fadeOut( function() {
				next.fadeIn();
			});
  	    });
		this.children("li:gt(0)").hide();
	    this.after(link);
    };
})(jQuery);
