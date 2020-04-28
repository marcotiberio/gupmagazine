jQuery.noConflict()
jQuery(document).ready(function(){
    (function($){
	$('#open_menuOverlay').click(function(){
    	$('#menuOverlay').slideToggle();
    });
    })(jQuery);
});