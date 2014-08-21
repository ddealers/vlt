
<?php
require_once('lib/PDO/config.php');
require_once('lib/PDO/PDODB.php');
require_once('lib/PDO/PDOResult.php');
class News extends PDODB{
    public function __construct(){
        parent::__construct();
        $this->table = 'articles';
        $this->record = false;
    }
    public function all(){
        return $this->_where("id_article,estatus,title,intro,descr,pic,type", "estatus=1", 10, "id_article DESC");
    }
}
$n = new News();
$news = $n->all();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no, width=device-width">
        <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
        <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
    </head>
    <body class="interior">
        <div class="navbar-wrapper">
            <div class="container">
                <div class="navbar navbar-inverse navbar-static-top" role="navigation">
                    <div class="container">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand" href="#"><img src="./img/loglogin.png" class="logo"></a>
                        </div>
                        <div class="navbar-collapse collapse">
                            <ul class="nav navbar-nav">
                                <li><a href="./#about">ABOUT US</a></li>
                                <li><a href="./#clients">CLIENTS</a></li>
                                <li><a href="./#work">WORK</a></li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">CONTACT<span class="caret"></span></a>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a href="#" class="facebook">Facebook</a></li>
                                        <li><a href="#" class="twitter">Twitter</a></li>
                                        <li><a href="#" class="linkedin">Linkedin</a></li>
                                        <li><a href="#" class="news">News</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="main container-fluid">
            <div class="row">
                <div class="col-xs-12 col-md-4">
                    <ul>
                        <li><a href="#">WHY VISUAL LATINA</a></li>
                        <li><a href="#">OUR STORY</a></li>
                        <li><a href="#">OUR CAPABILITIES</a></li>
                        <li><a href="#">WHO WE ARE</a></li>
                    </ul>
                </div>
                <div class="col-xs-12 col-md-8">
                    <div class="block-1">
						<img src="images/txt_about1.png" alt="A distinctive view mixed with Latin passion. WE CREATE SHOPPER SOLUTIONS<br/>THAT IMPACT SALES." title="A distinctive view mixed with Latin passion. WE CREATE SHOPPER SOLUTIONS<br/>THAT IMPACT SALES." />
						<img src="images/about-img1.png" alt="WHY VISUAL LATINA?" title="WHY VISUAL LATINA?" /><br/>
					</div>
					<div>
					<br clear="left" /><br /><br /><br /><br /><br />
						<div class="box-lef"><img src="images/txt_about2.png" alt="WHY VISUAL LATINA?" title="WHY VISUAL LATINA?" /></div>
						<div class="box-rig"><img src="images/img-why.png" alt="WHY VISUAL LATINA?" title="WHY VISUAL LATINA?" /></div>
					</div>
					<br clear="left" /><br />
					<div id="about-story"></div>
					<br /><br /><br /><br /><br /><br /><br />
					<div class="block-1"><img src="images/txt_about3.png" alt="OUR STORY" title="OUR STORY" /></div>
					<br clear="left" />
					<div>
						<div class="box-lef-our"><img src="images/img-our.png" alt="OUR STORY" title="OUR STORY" /></div>
						<div class="box-rig-our"><img src="images/txt_about4.png" alt="OUR STORY" title="OUR STORY" /></div>
					</div>
					<br clear="left" />
					<div id="about-capabilities"></div>
					<br /><br /><br /><br /><br /><br />
					<div><img src="images/txt_about5.png" alt="OUR CAPABILITIES" title="OUR CAPABILITIES" /><br />
						<div class="box-lef-capa"><img src="images/txt_about6.png" alt="OUR CAPABILITIES" title="OUR CAPABILITIES" /></div>
						<div class="box-rig-capa"><img src="images/img-capa.png" alt="OUR STORY" title="OUR STORY" /></div>
					</div>
					<br clear="left" />
					<div id="about-we-are"></div>
					<br clear="left" /><br /><br /><br /><br /><br /><br /><br />
					<div>
						<img src="images/txt_about7.png" alt="WHO WE ARE" title="WHO WE ARE" />
						<br /><br /><br />
						<div class="content-thumb">
							<div class="thumb"><img src="images/thumb1.jpg" alt="WHO WE ARE" title="WHO WE ARE" /></div>
							<div class="thumb"><img src="images/thumb2.jpg" alt="WHO WE ARE" title="WHO WE ARE" /></div>
							<div class="thumb"><img src="images/thumb3.jpg" alt="WHO WE ARE" title="WHO WE ARE" /></div>
							<div class="thumb"><img src="images/thumb4.jpg" alt="WHO WE ARE" title="WHO WE ARE" /></div>			
						</div>
						<br clear="left" /><br />
					</div>
                </div>
            </div>
        </div>
    </body>
</html>
<?php /* include("includes/inicio_about.php"); ?>
<div id="about-why"></div>
<div id="about">
	<div id="sidebar">
		<ul>
			<li><a href="#about-why" class="smooth">WHY VISUAL LATINA?</a><br/></li>
			<li><a href="#about-story" class="smooth">OUR STORY</a><br/></li>
			<li><a href="#about-capabilities" class="smooth">OUR CAPABILITIES</a><br/></li>
			<li><a href="#about-we-are" class="smooth">WHO WE ARE</a><br/></li>
		</ul>
	</div>
	<div id="contender">
		<div class="block-1">
			<img src="images/txt_about1.png" alt="A distinctive view mixed with Latin passion. WE CREATE SHOPPER SOLUTIONS<br/>THAT IMPACT SALES." title="A distinctive view mixed with Latin passion. WE CREATE SHOPPER SOLUTIONS<br/>THAT IMPACT SALES." />
			<img src="images/about-img1.png" alt="WHY VISUAL LATINA?" title="WHY VISUAL LATINA?" /><br/>
		</div>
		<div>
		<br clear="left" /><br /><br /><br /><br /><br />
			<div class="box-lef"><img src="images/txt_about2.png" alt="WHY VISUAL LATINA?" title="WHY VISUAL LATINA?" /></div>
			<div class="box-rig"><img src="images/img-why.png" alt="WHY VISUAL LATINA?" title="WHY VISUAL LATINA?" /></div>
		</div>
		<br clear="left" /><br />
		<div id="about-story"></div>
		<br /><br /><br /><br /><br /><br /><br />
		<div class="block-1"><img src="images/txt_about3.png" alt="OUR STORY" title="OUR STORY" /></div>
		<br clear="left" />
		<div>
			<div class="box-lef-our"><img src="images/img-our.png" alt="OUR STORY" title="OUR STORY" /></div>
			<div class="box-rig-our"><img src="images/txt_about4.png" alt="OUR STORY" title="OUR STORY" /></div>
		</div>
		<br clear="left" />
		<div id="about-capabilities"></div>
		<br /><br /><br /><br /><br /><br />
		<div><img src="images/txt_about5.png" alt="OUR CAPABILITIES" title="OUR CAPABILITIES" /><br />
			<div class="box-lef-capa"><img src="images/txt_about6.png" alt="OUR CAPABILITIES" title="OUR CAPABILITIES" /></div>
			<div class="box-rig-capa"><img src="images/img-capa.png" alt="OUR STORY" title="OUR STORY" /></div>
		</div>
		<br clear="left" />
		<div id="about-we-are"></div>
		<br clear="left" /><br /><br /><br /><br /><br /><br /><br />
		<div>
			<img src="images/txt_about7.png" alt="WHO WE ARE" title="WHO WE ARE" />
			<br /><br /><br />
			<div class="content-thumb">
				<div class="thumb"><img src="images/thumb1.jpg" alt="WHO WE ARE" title="WHO WE ARE" /></div>
				<div class="thumb"><img src="images/thumb2.jpg" alt="WHO WE ARE" title="WHO WE ARE" /></div>
				<div class="thumb"><img src="images/thumb3.jpg" alt="WHO WE ARE" title="WHO WE ARE" /></div>
				<div class="thumb"><img src="images/thumb4.jpg" alt="WHO WE ARE" title="WHO WE ARE" /></div>			
			</div>
			<br clear="left" /><br />
		</div>
		<br clear="left" /><br /><br /><br /><br /><br /><br /><br /><br clear="left" /><br /><br /><br />
	</div>
<br clear="left" />
<br/><br/><br/><br/><br/><br/>
</div>
<?php include("includes/fin_about.php"); */?>