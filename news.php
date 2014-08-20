<?php
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