<?php 
include("includes/inicio_news.php");
include('07853(%ITJ.php');
$db = new Database();
$db->connect();
$db->exec("select id_article,estatus,title,intro,descr,pic,type from articles where estatus=1 and id_article=".$_REQUEST['art']);
$result = $db->getResult();
$news = array_Values($result);
?>
<div id="news">
	<div id="sidebar">
		<ul>
			<li><a href="news.php" class="smooth">ALL</a><br/></li>
			<li><a href="news.php" class="smooth">PRESS</a><br/></li>
			<li><a href="news.php" class="smooth">PROJECTS</a><br/></li>
			<li><a href="news.php" class="smooth">NEWS</a><br/></li>
		</ul>
	</div>
	<div id="contender">
		<div class="boxarticle">
			<div class="box">
				<div class="fecha">January 2014</div>
                                <div class="title-box"><div class="title-box-txt"><?php echo utf8_encode($news[0]['title'])?></div></div>
				<div class="singletxt">
					<img src="<?php echo "uploads/".$news[0]['pic'];?>" alt="<?php echo utf8_encode($news[0]['title'])?>" title="<?php echo utf8_encode($news[0]['title'])?>" width="394" height="249" class="img-single-left" />
					<p><?php echo utf8_encode($news[0]['descr'])?></p>
				</div>
				<div class="social">
					<img src="images/icon-facebook.jpg" alt="facebook" title="facebook" />
					<img src="images/icon-twitter.jpg" alt="twitter" title="twitter" />
					<img src="images/icon-in.jpg" alt="in" title="in" />
				</div>
			</div>
			<div class="remate"></div>
		</div>
	</div>
<br clear="left" />
<br/><br/>
</div>
<?php include("includes/fin_news.php"); ?>