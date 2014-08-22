$(document).on('ready', function(){
	$('body').scrollspy({ target: '.navbar-collapse' });
	$('.addon').css({display:'none'});
    $( 'a.btn' ). colorbox (); 
});

//jQuery for show addon
$(function() {
	$('.moreinfo').on('mouseenter', function(event) {
		$more = $(this);
    	$more.children('.addon').fadeIn(500);
    });
    $('.moreinfo').on('mouseleave', function(event) {
    	$more = $(this);
    	$more.children('.addon').fadeOut(500);
    });
});

//jQuery for page scrolling feature - requires jQuery Easing plugin
$(function() {
    $('a.page-scroll').bind('click', function(event) {
        var $anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top
        }, 1500);
        event.preventDefault();
    });
});
//jQuery para galleria de botones
