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