$(document).on('ready', function(){
	$('body').scrollspy({ target: '.navbar-collapse' });
	$('.addon').css({display:'none'});
    $('a.btn').colorbox({
    	iframe : true,
        width : "100%",
        height : "100%"
    }); 
    $('#news .article ul.social li a').on('click', function(e){
    	e.preventDefault();
    	if($(this).hasClass('fb')){
    		window.open('http://www.facebook.com/sharer.php?u='+location.href, 'Compartir en Facebook','width=480, height=320');
    	}
    	if($(this).hasClass('tw')){
    		window.open('https://twitter.com/share?url='+location.href, 'Compartir en Twitter','width=480, height=320');
    	}
    	if($(this).hasClass('in')){
    		window.open('http://www.linkedin.com/shareArticle?mini=true&url='+location.href,'Compartir en LinkedIn','width=480, height=320');
    	}
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
    $('a.page-scroll').on('click', function(event) {
        var $anchor = $(this),
        	$link = $anchor.attr('href').replace('index.php','');
        $('html, body').stop().animate({
            scrollTop: $($link).offset().top
        }, 1500);
        event.preventDefault();
    });
});