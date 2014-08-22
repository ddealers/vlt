<?
require_once('lib/PDO/config.php');
require_once('lib/PDO/PDODB.php');
require_once('lib/PDO/PDOResult.php');
require_once('news.class.php');
$n = new News();
$news = $n->all(3)->UTF8Encode()->get();
?>
<!DOCTYPE html>
<html>
	<? include('includes/head.php') ?>
	<body>
		<? include('includes/navbar.php') ?>
<!-- Carousel
================================================== -->
		<div id="myCarousel" class="carousel slide" data-ride="carousel">
			<!-- Indicators -->
				<ol class="carousel-indicators">
					<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
					<li data-target="#myCarousel" data-slide-to="1"></li>
					<li data-target="#myCarousel" data-slide-to="2"></li>
					<li data-target="#myCarousel" data-slide-to="3"></li>
				</ol>
				<div class="carousel-inner">
					<div class="item active slider-0">
						<img src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="First slide">
						<div class="container">
							<div class="carousel-caption row">
								<div class="col-xs-12 col-sm-4">
									<h1>FIFA WORLD CUP<span>TM<br></span>BRAZIL 2014<span class="borde-cocacola"></span></h1>
									<h2 class="tittle">Here we come!</h2>
									<p class="tittle">Coca-Cola, official partner in this one-of-a-kind event, has commissioned us to develop its Shopper Marketing Platform for the US General Market.</p>
									<p><a class="btn btn-lg btn-primary" href="#" role="button">SEE MORE<img src="./img/play.png" class="play"></a></p>
								</div>
								<div class="col-xs-12 col-sm-8">
									<img src="./img/coca.png" class="imagen">
								</div>
							</div>
						</div>
					</div>
					<div class="item slider-1">
						<img src="data:image/gif;base64,R0lGODlhAQABAIAAAGZmZgAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Second slide">
						<div class="container">
							<div class="carousel-caption row">
								<div class="col-xs-12 col-sm-4">
									<p class="tittle">Philips Female Beauty Europe</p>
									<h1>ASANCTUARY FOR BEAUTY<span class="borde-cocacola"></h1>
									<h2 class="tittle">A smoothing purchase</h2>
									<p class="tittle">In a category where woman find the experience too daunting  and too masculine, we combined crucial female insights with a sophisticated approach to bring to life Philips Female Beauty products.</p>
									<p><a class="btn btn-lg btn-primary" href="#" role="button">SEE MORE<img src="./img/play.png" class="play"></a></p>
								</div>
								<div class="col-xs-12 col-sm-8">
									<img src="./img/philips.png" class="imagen">                    
								</div>
							</div>
						</div>
					</div>
					<div class="item slider-2">
						<img src="data:image/gif;base64,R0lGODlhAQABAIAAAFVVVQAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Third slide">
						<div class="container">
							<div class="carousel-caption row">
								<div class="col-xs-12 col-sm-4">
									<p class="tittle">Zucaritas Latin America Toolkit</p>
									<h1>BRING HOME A ROARING BREAKFAST<span class="borde-cocacola"></h1>
									<h2 class="tittle">Kick-start achievements</h2>
									<p class="tittle">Stepping up to the challenge of switching shoppers, we boosted Zucaritas nutrition energy into accomplishments, becoming Moms' ally while helping their children perform at their best.</p>
									<p><a class="btn btn-lg btn-primary" href="#" role="button">SEE MORE<img src="./img/play.png" class="play"></a></p>                       
								</div>
								<div class="col-xs-12 col-sm-8">
									<img src="./img/zucaritas.png" class="imagen">
								</div>
							</div>
						</div>
					</div>
					<div class="item slider-3">
						<img src="data:image/gif;base64,R0lGODlhAQABAIAAAGZmZgAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Second slide">
						<div class="container">
							<div class="carousel-caption row">
								<div class="col-xs-12 col-sm-4">
									<p class="tittle">Colgate México "Tres pasitos"</p>
									<h1 >EDUCATION THAT ENTERTRAINS<span class="borde-cocacola"></h1>
									<h2 class="tittle">A tale of oral care</h2>
									<p class="tittle">Stepping up to  the challenge of switching shoppers,we boosted Zucaritas nutrition, turning energy into accomplishments, becoming Moms' ally while helping their children perform at their best.</p>
									<p><a class="btn btn-lg btn-primary" href="#" role="button">SEE MORE<img src="./img/play.png" class="play"></a></p>
								</div>
								<div class="col-xs-12 col-sm-8">  
									<img src="./img/Colgate_img.png" class="imagen">
								</div>
							</div>
						</div>
					</div>
				</div>
				<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
				<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
		</div>
<!-- /.carousel -->
<!-- ******************************************** -->
		<!-- START THE FEATURETTES -->
		<div class="row featurette">
			<div class="col-xs-12 col-sm-6">
				<img src="./img/sep1-elemento1.png" class="featurette-image img-responsive" data-src="holder.js/500x500/auto" alt="Generic placeholder image ">
			</div>
			<div class="col-xs-12 col-sm-6">
				<div class="bloque">
					<h3 class="verde">In the age <br> of digital shoppers</h3>
					<h2 class="featurette-heading"><span class="cabeza"></span>MARKETING IS LIMITLESS!<span class="pies"></span></h2>
					<p class="porcentaje"> <span>44%</span><br>use mobile to research products in the beginning of a shopping trip</p>
					<p class="porcentaje2"> <span>21%</span><br>who started with a local search ended up marking the purchase online</p>
					<p class="liga">Numbers for Argentina 2013 from http://think.withgoogle.com/mobileplanet/en/</p>
				</div>
			</div>
		</div>
<!-- ******************************************** -->

		<div id="about" class="container marketing">
			<div class="row">
				<h2 class="distinctive">A distinctive view mixed with Latin passion.<span class="background"></span></h2>
				<h1 class="gris">WE CREATE SHOPPER SOLUTIONS THAT IMPACT SALES.</h1>
				<div class="col-sm-6 col-md-3">
					<img src="./img/icon-WHY.png" class="icon1">
					<h2 class="text-tittle">Who we are</h2>
					<p class="contenido">Our vast experience across multiple markets empowers us to understand unique shopping behaviors in many different cultures.</p>
					<a href="about.php#why" class="icons">SEE MORE<img src="./img/play2.png" class="play"></a>
				</div><!-- /.col-lg-4 -->
				<div class="col-sm-6 col-md-3">
					<img src="./img/mundo_marcado.png" class="icon2">
					<h2 class="text-tittle">Our story</h2>
					<p class="contenido">We started before Shopper Marketing even existed and today after  a little over 25 years, we have expanded to the US, LATAM & Europe, with global clients.</p>
					<a href="about.php#story" class="icons">SEE MORE<img src="./img/play2.png" class="play"></a>
				</div>
				<div class="col-sm-6 col-md-3">
					<img src="./img/icon-bolsa.png" class="icon3">
					<h2 class="text-tittle">Our capabilities</h2>
					<p class="contenido">We create shopper marketing campaigns that the changes people's  behavior when they're in the mood to shop, in both the real world and the digital world.</p>
					<a href="about.php#capabilities" class="icons">SEE MORE<img src="./img/play2.png" class="play"></a>
				</div>
				<div class="col-sm-6 col-md-3">
					<img src="./img/carro_compras.png" class="icon4">
					<h2 class="text-tittle">Who we are</h2>
					<p class="contenido">Latin America's fastest growing shopper marketing agency -independent, creative, free spirited, nimble and entrepreneurial.</p>
					<a href="about.php#who" class="icons">SEE MORE<img src="./img/play2.png" class="play"></a>
				</div>
			</div>
		</div>
<!-- ******************************************** -->
		<div class="row featurette-coca">
			<div class="col-md-5 col-sm-6">
				<img src="./img/sep2-elemento1.png" class="heart">
			</div>
			<div class="col-md-7 col-sm-6">
				<h3 class="normal">We manage to seduce <br> the hottest brands</h3>
				<h2 class="featurette-heading-rojo"><span class="rojo-heart"></span>STARTING WITH<br> COCA-COLA!<span class="rojo-sub"></span></h2>
				<p class="tittle-coca-cola">Over 24 years later, we still continue <br> to choose each other everyday!</p>
			</div>
		</div>
<!-- ******************************************** -->
		<div id="clients" class="row featurette-white">
			<div class="col-md-7 col-sm-6">
				<h1 class="seduce">WE <br> SEDUCE <br> SHOPPERS <span class="borde-we"></span></h1>
				<h2 class="tittle-forAll">for all of these <br> great brands</h2>
			</div>
			<div class="col-md-5 col-sm-6">
				<img src="./img/clients.png" class="logos-marcas">
			</div>
		</div>
<!-- ******************************************** -->
		<div class="row featurette-divider car">
			<div class="col-md-5 col-sm-6">
				<img src="./img/sep3-elemento1.png" class="car">
			</div>
			<div class="col-md-7 col-sm-6">
				<h2 class="tittle-all">All shoppers are diverse, <br> so is every shopping trip<span class="verde"></span></h2>
				<h1 class="solution-every">EVERY CHALLENGE <br> REQUIRES<span class="text-green"><br>A TOILER MADE <br> SOLUTION</span></h1>
			</div>
		</div>
<!-- ******************************************** -->
		<div id="work" class="row featurette-clients y">
			<div class="col-md-8">
				<h2 class="tittle">We create<br> tailor-made solutions<span class="made-s"></span></h2>
				<h1 class="solution-text">FOR VARIETY OF CATEGORIES AND SHOPPER MINDSETS</h1>
			</div>
			<div class="moreinfo col-sm-12 col-md-4">
				<img src="./img/coca-1.png" class="marca-co">
				<div class="addon">
					<p class="marcas">COCA-COLA</p>
					<p class="leyenda">PREPARING TO CELEBRATE</p>
				</div>
			</div>
			<div class="moreinfo col-sm-12 col-md-4">
				<img src="./img/philips-2.png" class="marca-p">
				<div class="addon">
					<p class="marcas">PHILIPS</p>
					<p class="leyenda">FEMALE BEAUTY RANGE</p>
				</div>
			</div>
			<div class="moreinfo col-sm-12 col-md-4">
				<img src="./img/zucaritas-2.png" class="marca-z">
				<div class="addon">
					<p class="marcas">KELLOG'S</p>
					<p class="leyenda">BRING HOME A ROARING BREAKFAST</p>
				</div>
			</div>
			<div class="moreinfo col-sm-12 col-md-4">
				<img src="./img/colgate-2.png" class="marca-c">
				<div class="addon">
					<p class="marcas">COLGATE</p>
					<p class="leyenda">EDUCATION THAT ENTERTRAINS</p>
				</div>
			</div>
		</div>
<!-- ******************************************** -->
		<div class="row featurette-hand">
			<div class="col-md-7">
				<h2 class="tittle-women">We change <br> people's shopping <br> behaviors <span class="botella"></span></h2>
				<h1 class="h1Tittle">WHEN THEY <br> ARE IN THE MOOD <br> TO SHOP</h1>
			</div>
		</div>
<!-- ******************************************** -->
		<div class="container news">
			<div class="row">
				<div class="col-sm-12">
					<h3><i class="green-line"></i>Read our latest shopper news or subscribe to our newsletter<i class="green-line"></i></h3>
				</div>
				<? if($news): ?>
					<? foreach($news as $new): ?>
					<div class="card col-sm-12 col-md-4">
						<div class="card-img">
							<img src="./uploads/<? echo $new->pic ?>">
						</div>
						<div class="card-content">
							<h5><? switch ($new->type) {
                                case '2':
                                	echo "PRESS"; 
                                    break;
                                case '3':
                                	echo "NEWS";
                                    break;
                                default:
                                	echo "PROJECTS";
                                    break;
                            }?></h5>
							<div class="card-abstract"><? echo $new->intro ?></div>
							<a href="news.php?see=<? echo $new->id_article ?>">SEE MORE<img src="./img/play2.png" class="play"></a>
							<div class="row">
								<p class="border col-sm-8"></p>
								<p class="border col-sm-4"><? echo date('F Y',strtotime($new->dateReg)) ?></p>
							</div>
						</div>
					</div>
					<? endforeach; ?>
				<? endif; ?>
				<div class="col-sm-12">
					<div class="newsletter col-sm-offset-2 col-sm-5">
						<input type="text" class="campo" placeholder="Enter your email adress to get our newsletter"><input type="submit" class="button" value="SUBMIT">
					</div>
					<div class="col-sm-2">
						<a class="more-news" href="news.php">More News</a>
					</div>
				</div>
			</div>
		</div>
<!-- ******************************************** -->
		<div class="row featurette-grisc">
			<div class="col-md-7 col-sm-6">
				<h1 class="titulo">WE' LOVE <br> TO HEAR <span class="we-loved"></span></h1>
				<h2 class="tittle-love">about your <br> business <br> challenges</h2>
			</div>
			<div class="col-md-5 col-sm-6">
				<img src="./img/sep5-elemento2.png" class="canasto">
				<p class="leyend">Contact us and we'll get back to you with some provocative though starters.</p>
			</div>
		</div>
<!-- ******************************************** -->
		<div id="contact" class="container marketing-fondoUl">
			<div class="row">
				<div class="col-md-4">
					<h2 class="holaContact">Hola!<span class="hellow"></span></h2>
					<p class="contact">CONTACT US <br> AND WE'LL COME BACK <br> WITH IDEAS</p>
				</div>
				<div class="col-sm-6 col-md-4">
					<P class="pais">Global</p>
					<p class="direccion">We work for people all around the world, but if you are close to one of our offices let usknow so we can meet.</p>
					<a href="Tel: +54 11 4797 9669" class="links"> <p>Tel: +54 11 4797 9669</p></a>
					<a href="Cel: +54 911 4526 3905" class="links"> <p>Cel: +54 911 4526 3905</p> </a>
					<a href="mailto:diego.blanco@visuallatina.com" class="links"><p>diego.blanco@visuallatina.com</p></a>
					<p class="pais">Atlanta</p>
					<p class="direccion">1117 Peachtree Street Suite 1222, Atlanta , GA 30309.</p>
					<a href="Tel: +1 404 630 9079" class="links"> <p>Tel: +1 404 630 9079</p> </a>
					<a href="Cel: +1 678 772 0118" class="links"> <p>Cel: +1 678 772 0118</p> </a>
					<a href="mailto:guadalupe.cano@visuallatina.com" class="links"><p>guadalupe.cano@visuallatina.com</p></a>
					<p class="pais">London</p>
					<p class="direccion">Willoughby House, 439 Richmond Road Richmond-Upon-Thames, Surrey, London, TW1 2AG.</p>
					<a href="Tel: +44 7872 171 400" class="links"> <p>Tel: +44 7872 171 400</p> </a>
					<a href="Cel: +44 7980 595 323" class="links"> <p>Cel: +44 7980 595 323</p> </a>
					<a href="mailto:simone.dyson@visuallatina.com" class="links"><p>simone.dyson@visuallatina.com</p></a>
					<p class="pais">New York</p>
					<a href="Cel: +1 917 399 8770" class="links"> <p>Cel: +1 917 399 8770</p> </a>
					<a href="mailto:claudia.orci@visuallatina.com" class="links"><p>claudia.orci@visuallatina.com</p></a>
				</div>
				<div class="col-sm-6 col-md-4">
					<p class="pais">México D.F.</p>
					<p class="direccion">Hegel No. 618 Col. Bosques de Chapultepec, Delegación Miguel Hidalgo , C.P. 11580.</p>
					<a href="Tel: +52 55 3003 0530" class="links"> <p>Tel: +52 55 3003 0530</p> </a>
					<a href="Cel: +52 155 2979 4416" class="links"> <p>Cel: +52 155 2979 4416</p> </a>
					<a href="mailto:natalya.tatarin@visuallatina.com" class="links"><p>natalya.tatarin@visuallatina.com</p></a>
					<p class="pais">São Paulo</p>
					<p class="direccion">Rua República do Iraque, 1585 Campo Belo São Paulo SP – Brasil CEP: 04611-003.</p>
					<a href="Tel: +55 11 5093 0297" class="links"> <p>Tel: +55 11 5093 0297</p> </a>
					<a href="Cel: +55 11 99722 4582" class="links"> <p>Cel: +55 11 99722 4582</p> </a>
					<a href="mailto:renato.tura@visuallatina.com.br" class="links"><p>renato.tura@visuallatina.com.br</p></a>
					<p class="pais">Buenos Aires</p>
					<p class="direccion">Gaspar Campos 647 Vicente Lopez , B1638ARK.</p>
					<a href="Tel: +5411 4797 9669" class="links"> <p>Tel: +5411 4797 9669</p> </a>
					<a href="Cel: +54 11 3596 6020" class="links"> <p>Cel: +54 11 3596 6020</p> </a>
					<a href="mailto:eugenio.bory@visuallatina.com" class="links"><p>eugenio.bory@visuallatina.com</p></a>
					<p class="pais">Santiago de Chile</p>
					<p class="direccion">Cerro Colorado 5240 Torre II, p10, of1015 Las Condes, Santiago , CP 7550000.</p>
					<a href="Tel: +56 2 2434 5314" class="links"> <p>Tel: +56 2 2434 5314</p> </a>
					<a href="Cel: +56 9 9276 2749" class="links"> <p>Cel: +56 9 9276 2749</p> </a>
					<a href="mailto:gustavo.maspero@visuallatina.com" class="links"><p>gustavo.maspero@visuallatina.com</p></a>
				</div>
			</div>
		</div>
	</body>
</html>