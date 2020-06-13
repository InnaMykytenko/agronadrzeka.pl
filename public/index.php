<!DOCTYPE html>
<html lang="pl">
<head>
<title>Agroturystykanadrzeczka</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Web design" />
    <meta name='freelancehunt' content='6a245e2159ea78b' />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!--// bootstrap-css -->
<!-- css -->
<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
<!--// css -->
<!-- font-awesome icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<!-- font -->
<link href="//fonts.googleapis.com/css?family=Righteous&subset=latin-ext" rel="stylesheet">
<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,700italic,700,400italic,300italic,300' rel='stylesheet' type='text/css'>
<!-- //font -->
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/SmoothScroll.min.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
</head>
<body>
	<!-- header -->
	<div class="header">
		<div class="container">
			<nav class="navbar navbar-default">
				<!-- Brand  -->
				<div class="navbar-header">
				  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				  </button>
					<div class="dawid-logo">
						<h1><a href="index.php">Gospodarstwo </br>Agroturystyczne<span>"Nad Rzeczką"</span></a></h1>
					</div>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
					<nav>
						<ul class="nav navbar-nav dropdown">
							<li class="active"><a href="index.php">Strona Głowna</a></li>
							<li><a href="about.php" class="hvr-sweep-to-bottom">O nas</a></li>
							<li><a href="gallery.php" class="hvr-sweep-to-bottom">Galeria zdjęć</a></li>
							<li><a href="mail.php" class="hvr-sweep-to-bottom">Dojazd</a></li>
                            <li><a href="rodo.php" class="hvr-sweep-to-bottom">RODO</a></li>
						</ul>
					</nav>
				</div>
				<!-- /.navbar-collapse -->
			</nav>
		</div>
	</div>
	<!-- //header -->
	<!-- banner -->
	<div class="banner">
		<div class="container">
			<section class="slider">
					<div class="flexslider">
						<ul class="slides">
							<li>	
								<div class="banner_text">
									<h3>Zapraszamy chętnych</h3>
									<div class="w3ls-line"> </div>
									<p>do Kowali Księżych!</p>
                                    <div class="w3-button">
                                        <a href="single.php" class="btn btn-1 btn-1b">Księga gości</a>
                                    </div>
								</div>
							</li>
							<li>	
								<div class="banner_text">
									<h3>Oferujemy </h3>
									<div class="w3ls-line"> </div>
									<p>noclegi, pokoje i wiele więcej...</p>
                                    <div class="w3-button">
                                        <a href="single.php" class="btn btn-1 btn-1b">Księga gości</a>
                                    </div>
								</div>
							</li>
						</ul>
					</div>
			</section>
			<!-- flexSlider -->
			<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" property="" />
			<script defer src="js/jquery.flexslider.js"></script>
			<script type="text/javascript">
				$(window).load(function(){
					$('.flexslider').flexslider({
						animation: "slide",
						start: function(slider){
						$('body').removeClass('loading');
						}
					});
				});
			</script>
			<!-- //flexSlider -->
		</div>
	</div>
	<!-- //banner -->
	<!-- services -->
	<div class="services">
		<div class="container">
			<div class="services-main">
				<div class="services-heading">
					<h2>oferta</h2>
					<div class="agileits-line"> </div>
				</div>
				<div class="services-bottom">
					<div class="services-grid">
						<div class="col-md-6 services-grid-left">
							<div class="services-icon"><i class="fa fa-cutlery" aria-hidden="true"></i></div>
							<div class="services-text">
								<h4>Kuchnia regionalna</h4>
								<p>Smaczne potrawy z produktów własnego gospodarstwa.</p>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="col-md-6 services-grid-right">
							<img src="images/3.jpg" alt="" />
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="services-grid">					
						<div class="col-md-6 services-grid-right ulta-grid">
							<img src="images/4.jpg" alt="" />
						</div>
						<div class="col-md-6 services-grid-left ulta-grid">
							<div class="services-icon"><i class="fa fa-bicycle " aria-hidden="true"></i></div>
							<div class="services-text">
								<h4>Wycieczki</h4>
								<p>Organizujemy piesze wycieczki po okolicy.</p>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="services-grid">
						<div class="col-md-6 services-grid-left">
							<div class="services-icon"><i class="fa fa-bed" aria-hidden="true"></i></div>
							<div class="services-text">
								<h4>Noclegi</h4>
								<p>Oferujemy miejsca w pokojach.</p>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="col-md-6 services-grid-right">
							<img src="images/6.jpg" alt="" />
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!--services -->
	<!-- services-bottom -->
	<div class="text-grid">
		<div class="container">
			<h4>Zapraszamy Państwa..!</h4>
			<p>Gospodarstwo położone jest we wsi Kowale Księże nad rzeczką Kiełbaską.
                Otoczone łąkami, polami i lasami. Wokół panuje cisza i spokój. </br> W naszej miejscowości znajduje się stadnina koni "Roka" i Ośrodek Kultury Wiejskiej, w
                którym organizowane są zabawy dla dzieci. Pobliżu znajduje się zbiornik wodny "Przykona" gdzie jest kąpielisko strzeżone i plaża.
            </p>
		</div>
	</div>
	<!-- //services-bottom -->
	<!-- blog -->
	<div class="blog">
		<div class="container">
			<div class="services-heading">
				<h3>Informacja</h3>
				<div class="agileits-line"> </div>
			</div>
			<div class="agileinfo-blog-grids">
				<div class="col-md-4 wthree-blog">
					<div class="w3-agileits-blog">
						<div class="w3-agileits-blog-img">
							<a href="single.php"><img src="images/8.jpg" alt="" /></a>
						</div>
						<div class="w3-agileits-blog-text">
							<a href="single.php">Ognisko i grill</a>
							<p>Jeśli chcemy jeszcze bardziej odciąć się od miejskiego zgiełku,nie możesz sobie wyobrazić letniego wypoczynku bez grilla czy ogniska.
                                Pieczone na ruszcie specjały to nieodzowny smak lata, dlatego w naszej Agroturystyce jest to mozliwe.</p>
						</div>
					</div>
				</div>
				<div class="col-md-4 wthree-blog">
					<div class="w3-agileits-blog">
						<div class="w3-agileits-blog-img">
							<a href="single.php"><img src="images/7.jpg" alt="" /></a>
						</div>
						<div class="w3-agileits-blog-text">
							<a href="single.php">Nocleg, pokoje</a>
							<p>Oferujemy 7 miejsc. W dwóch pokojach 2-osobowych i jednym pokoju 3-osobowym. Możliwość zmiany ilości miejsc.</p>
						</div>
					</div>
				</div>
				<div class="col-md-4 wthree-blog">
					<div class="w3-agileits-blog">
						<div class="w3-agileits-blog-img">
							<a href="single.php"><img src="images/9.jpg" alt="" /></a>
						</div>
						<div class="w3-agileits-blog-text">
							<a href="single.php">Zabawy dla dzieci</a>
							<p>W naszej miejscowości znajduje się stadnina koni "Roka" i Ośrodek Kultury Wiejskiej,
                                w którym organizowane są zabawy dla dzieci.</p>
						</div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //blog -->
	<!-- footer -->
	<div class="footer">
		<div class="container">
			<div class="agileinfo_footer_grids">
				<div class="col-md-4 agileinfo_footer_grid">
					<div class="agile-logo">
                        <h4><a href="index.php">Gospodarstwo </br>Agroturystyczne<span>"Nad Rzeczką"</span></a></h4>
					</div>
					<p>Zapraszamy Państwa do naszego domu we
                        wsi Kowale Księże w województwie wielkopolskim, w powiecie tureckim, w gminie Turek, otoczonego lasem i łąkami.</p>
				</div>
				<div class="col-md-4 agileinfo_footer_grid">
					<h3>Kontakt</h3>
					<ul class="agileinfo_footer_grid_list">
						<li><i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i>Kowale Księże 13, <span>62-700 Turek</span></li>
						<li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i><a href="mailto:agronadrzeczka@gmail.com">agronadrzeczka@gmail.com</a></li>
                        <li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>721047374, tel. stacjonarny 63-2899770 (aktywny codziennie po 20) </li>
					</ul>
				</div>
				<div class="col-md-4 agileinfo_footer_grid">
					<h3>Nawigacja po stronie</h3>
					<ul class="agileinfo_footer_grid_nav">
						<li><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span><a href="index.php">Strona Glowna</a></li>
						<li><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span><a href="about.php">O nas</a></li>
						<li><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span><a href="gallery.php">Galeria zdjęć</a></li>
						<li><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span><a href="mail.php">Dojazd</a></li>
                        <li><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span><a href="rodo.php">Rodo</a></li>
					</ul>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="w3agile_footer_copy">
				<p>&copy; 2019 Gospodarstwo Agroturystyczne "Nad Rzeczką" | Realizacja: <a href="http://enkaprogweb.com/" target="_blank">InnaMykytenko</a></p>
			</div>
		</div>
	</div>
    <!-- //footer -->
    <!-- Cookie Bar -->
    <div id="cookiesalert" class="alert alert-info" role="alert">
        <div class="ctcc-inner ">
            <span class="ctcc-left-side">
        <strong>Ważne!&nbsp</strong>Ważne! Ochrona danych osobowych naszych gości i polityka prywatności dostępna jest w zakładce RODO. <a class="ctcc-more-info-link" tabindex="0" href="rodo.php" target="_blank"> Czytaj. </a>
        Zaakceptuj. <button id="cookiesaccept" type="button" class="close" aria-label="Close"><span class="glyphicon glyphicon-ok text-info" aria-hidden="true"></span></button>
            </span>
        </div>
    </div>
    <!-- //Cookie Bar -->

    <script src="js/custom1.js"></script>
    <script src="js/responsiveslides.min.js"></script>
    <script src="js/jquery.cookie.js"></script>
    <script src="js/SmoothScroll.min.js"></script>
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>
      <script type="text/javascript">
        $(document).ready(function() {

            /*
             var defaults = {
             containerID: 'toTop', // fading element id
             containerHoverID: 'toTopHover', // fading element hover id
             scrollSpeed: 1200,
             easingType: 'linear'
             };
         */


            $().UItoTop({ easingType: 'easeOutQuart' });

        });
    </script>
<!-- //here ends scrolling icon -->
</body>
</html>