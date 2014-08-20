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
<link rel="stylesheet" href="css/main.css" type="text/css" />
<link rel="stylesheet" href="css/separadores.css" type="text/css" />
<link rel="stylesheet" type="text/css" href="css/style_common.css" />
<link rel="stylesheet" type="text/css" href="css/style6.css" />
<link rel="stylesheet" type="text/css" href="css/style7.css" />
<link rel="stylesheet" href="css/colorbox.css" />
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
<script src="js/jquery.colorbox.js"></script>
<script>
	$(document).ready(function(){
		//Examples of how to assign the ColorBox event to elements
		$("#slider1,#slider2,#slider3,#slider4").colorbox({iframe:true, width:"1015px", height:"540px"});
		$("#clietbox,#clietbox1").colorbox({iframe:true, width:"600px", height:"400px"});
		$(".callbacks").colorbox({
			onOpen:function(){ alert('onOpen: colorbox is about to open'); },
			onLoad:function(){ alert('onLoad: colorbox has started to load the targeted content'); },
			onComplete:function(){ alert('onComplete: colorbox has displayed the loaded content'); },
			onCleanup:function(){ alert('onCleanup: colorbox has begun the close process'); },
			onClosed:function(){ alert('onClosed: colorbox has completely closed'); }
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
	<div class="logo"><a href="#index-anchor" class="smooth"><img src="images/logo.png" alt="titulo" title="titulo" /></a></div>
	<div class="menu">
		<div id="cssmenu">
		<ul>
		<li><a href="#about-anchor" class="smooth">About us</a></li>
		<li><a href="#clients-anchor" class="smooth">Clients</a></li>
		<li><a href="#work-anchor" class="smooth">Work</a></li>
		<li><a href="#news-anchor" class="smooth">News</a></li>
		<li><a href="#contact-anchor" class="smooth">Contact</a></li>
		</ul>
		</div>
	</div>
	<?php include("includes/social.php"); ?>
</div>