<?
require_once('lib/PDO/config.php');
require_once('lib/PDO/PDODB.php');
require_once('lib/PDO/PDOResult.php');
require_once('news.class.php');
$id = @$_REQUEST['see'];
$cat = @$_REQUEST['cat'];

$n = new News();
if($id){
    $new = $n->byId($id)->UTF8Encode()->first();
}else if($cat){
    $news = $n->byCat($cat)->UTF8Encode()->get();
}else{
    $news = $n->all()->UTF8Encode()->get();
}
?>
<!DOCTYPE html>
<html>
    <? include('includes/head.php') ?>
    <body class="interior2">
        <? include('includes/navbar.php') ?>
        <div id="news" class="main container-fluid">
            <div class="row">
                <div class="col-xs-12 col-md-3 contenedor">
                    <ul class="smooth">
                        <li><a href="news.php">ALL</a></li>
                        <li><a href="news.php?cat=2">PRESS</a></li>
                        <li><a href="news.php?cat=1">PROJECTS</a></li>
                        <li><a href="news.php?cat=3">NEWS</a></li>
                    </ul>
                </div>
                <div class="col-xs-12 col-md-8">
                    <div class="col-md-12 new-info">
                        <? if($new): ?>
                            <div class="article row box">
                                <div class="date col-xs-12"><? echo date('F Y',strtotime($new->dateReg)) ?></div>
                                <div class="title col-xs-12"><? echo $new->title ?></div>
                                <div class="content col-xs-12">
                                    <img src="./uploads/<? echo $new->pic ?>" class="images">
                                    <div class="desc">
                                        <? echo $new->descr ?>
                                    </div>
                                    <ul class="social">
                                        <li><a href="<? echo $new->id_article ?>" class="fb"><span>Facebook</span></a></li>
                                        <li><a href="<? echo $new->id_article ?>" class="tw"><span>Twitter</span></a></li>
                                        <li><a href="<? echo $new->id_article ?>" class="in"><span>Linkedin</span></a></li>
                                    </ul>
                                </div>
                            </div>
                        <? else: ?>
                            <? if($news): ?>
                            <? foreach($news as $new): ?>
                            <div class="row box type-<? echo $new->type ?>">
                                <div class="margen col-sm-6">
                                    <img src="./uploads/<? echo $new->pic ?>" class="images">
                                </div>
                                <div class="margen col-sm-6">
                                    <h2 class="projects"><? switch ($new->type) {
                                        case '2':
                                            echo "PRESS"; 
                                            break;
                                        case '3':
                                            echo "NEWS";
                                            break;
                                        default:
                                            echo "PROJECTS";
                                            break;
                                    }?></h2>
                                    <p class="contenido-titulo"><? echo $new->title ?></p>
                                    <p class="contenido-texto"><? echo $new->intro ?></p>
                                    <a href="news.php?see=<? echo $new->id_article ?>" class="icons">SEE MORE<img src="./img/play2.png" class="play"></a>
                                </div>
                                <div class="row">
                                    <div class="col-xs-8"></div>
                                    <div class="col-xs-4"><? echo date('F Y',strtotime($new->dateReg)) ?></div>
                                </div>
                            </div>
                            <? endforeach; ?>
                            <? endif; ?>
                        <? endif; ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="main-view col-xs-12 col-md-9">
    </body>
</html>
<?
/*
$db = new Database();
$db->connect();
$db->exec("select dateReg,id_article,estatus,title,intro,descr,pic,type from articles where estatus=1 order by id_article desc LIMIT 0,10");
$result = $db->getResult();
$news = array_Values($result);
var_dump($news);
/*
include("includes/inicio_news.php");
include('07853(%ITJ.php');
$db = new Database();
$db->connect();
$db->exec("select dateReg,id_article,estatus,title,intro,descr,pic,type from articles where estatus=1 order by id_article desc LIMIT 0,10");
$result = $db->getResult();
$news = array_Values($result);
?>
<div id="news">
    <div id="sidebar">
        <ul>
            <!--            <li><a style="cursor: pointer;" onclick="jsAll();" class="smoodth">ALL</a><br/></li>-->
            <li><a style="cursor: pointer;" onclick="jsAll();" >ALL</a><br/></li>
            <li><a style="cursor: pointer;" onclick="jsPress();">PRESS</a><br/></li>
            <li><a style="cursor: pointer;" onclick="jsProjects();">PROJECTS</a><br/></li>
            <li><a style="cursor: pointer;" onclick="jsNews();">NEWS</a><br/></li>
        </ul>
    </div>
    <div id="contender">
        <div id="about-story"></div>
        <?php
        for ($i = 0; $i < sizeof($news); $i++) {
            if ($news[$i]['type'] == 1)
                $t = "projects";
            if ($news[$i]['type'] == 2)
                $t = "press";
            if ($news[$i]['type'] == 3)
                $t = "news";
            ?>
            <!-- repetir -->
            <div class="category" section="<?php echo $t; ?>">
                <div class="imagen"><img src="<?php echo 'uploads/' . $news[$i]['pic']; ?>" alt="<?php echo utf8_encode($news[$i]['title']); ?>" title="<?php echo utf8_encode($news[$i]['title']); ?>" /></div>
                <div class="box-article">
                    <div class="box-texto">
                        <div class="title"><?php echo strtoupper($t); ?></div>
                        <div class="subtitle"><?php echo utf8_encode($news[$i]['title']); ?></div>
                        <div class="texto"><?php echo utf8_encode($news[$i]['intro']); ?></div>
                        <div class="button"><a href="<?php echo 'article.php?art=' . $news[$i]['id_article']; ?>"><img src="images/btt_seemore_gray.png" alt="See More" title="See More" /></a></div>
                    </div>
                    <div class="data">
                        <?php
                        $date = new DateTime($news[$i]['dateReg']);
                        echo $date->format('F Y');
                        ?>
                    </div>
                </div>		
            </div>
            <!-- repetir -->
            <?php
        }
        ?>

    </div>
    <br clear="left" />
    <br/><br/>
</div>
<script>
    jsProjects=function(){
        $('div[section^="news"]').hide();
        $('div[section^="press"]').hide();
        $('div[section^="projects"]').show();
    }
    jsAll=function(){
        $('div[section^="news"]').show();
        $('div[section^="press"]').show();
        $('div[section^="projects"]').show();
    }
    jsNews=function(){
        $('div[section^="news"]').show();
        $('div[section^="press"]').hide();
        $('div[section^="projects"]').hide();
    }
    jsPress=function(){
        $('div[section^="news"]').hide();
        $('div[section^="press"]').show();
        $('div[section^="projects"]').hide();
    }
</script>
<?php include("includes/fin_news.php"); ?>
*/