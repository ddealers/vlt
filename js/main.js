$(document).on('ready', function(){
	$('body').scrollspy({ target: '.navbar-collapse' });
	$('.addon').css({display:'none'});
    $( 'a.btn' ).colorbox ({
    	iframe : true,
        width : "100%",
        height : "100%"
    }); 
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
        var $anchor = $(this),
        	$link = $anchor.attr('href').replace('index.php','');
        $('html, body').stop().animate({
            scrollTop: $($link).offset().top
        }, 1500);
        event.preventDefault();
    });
});