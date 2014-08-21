<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Visual Latina</title>
<meta name="generator" content="PHP" />
<meta name="Author" content="" />
<meta name="Subject" content="" />
<meta name="Description" content="" />
<meta name="Keywords" content="" />
<meta name="Language" content="Spanish" />
<meta name="Copyright" content="" />
<!-- facebook -->
<meta property="og:image" content=""/>
<meta property="og:site_name" content="" /> 
<meta property="og:url" content="" /> 
<meta property="og:description" content="" /> 
<!-- facebook -->

<!-- CSS -->
<link rel="stylesheet" href="css/news.css" type="text/css" />
<!-- CSS -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
<script type="text/javascript" src="js/jb_fws.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		JBFWS = new JBFWS();
		JBFWS.init({
			width            : "100%",
			height           : "780px",
			showBigButtons   : 1, 
			showSmallButtons : 1, 
			slideSpeed       : 1000, 
			slideEffect      : "easeInOutExpo",
			slideDelay       : 600, 
			slideSpeed2      : 1000,
			slideEffect2     : "easeOutExpo",
			dragSlide        : 1,
			autoSlide        : 1,  
			autoSlideDelay   : 10000 
		});
	});
</script>
<script>
$('a.smooth').live('click', function(e) {  
    var $link = $(this);  
    var anchor  = $link.attr('href');  
    $('html, body').stop().animate({  
        scrollTop: $(anchor).offset().top  
    }, 1000);  
});  
</script>
</head>
<body>
<div id="header-nav">
	<div class="logo"><a href="index.php#index-anchor" class="smooth"><img src="images/logo.png" alt="titulo" title="titulo" /></a></div>
	<div class="menu">
		<div id="cssmenu">
		<ul>
		<li><a href="index.php#about-anchor">About us</a></li>
		<li><a href="index.php#clients-anchor">Clients</a></li>
		<li><a href="index.php#work-anchor">Work</a></li>
<!--		<li><a href="index.php#news-anchor">News</a></li>-->
		<li><a href="index.php#contact-anchor">Contact</a></li>
		</ul>
		</div>
	</div>
	<?php include("includes/social.php"); ?>
</div>