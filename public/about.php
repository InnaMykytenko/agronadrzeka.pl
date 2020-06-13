<!DOCTYPE html>
<html lang="pl">
<head>
    <title>Agroturystykanadrzeczka</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Web design" />
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
                    <ul class="nav navbar-nav">
                        <li><a href="index.php">Strona Głowna</a></li>
                        <li class="active"><a href="about.php" class="hvr-sweep-to-bottom">O nas</a></li>
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
<div class="banner about-banner">
    <div class="container">
        <h2>O nas</h2>
        <div class="agileits-line"> </div>
    </div>
</div>
<!-- //banner -->
<!-- about -->
<!-- about-top -->
<div class="about-top">
    <div class="container">
        <div class="about-w3ls-row">
            <div class="col-md-4 about-left">
                <div class="about-dawid-pic">

                </div>
            </div>
            <div class="col-md-8 about-right">
                <h5>Agroturystyczne "Nad Rzeczką" - pokoje gościnne </h5>
                <p class="lead">Zapraszamy chętnych, na swojskie klimaty, łyk wiejskiej herbaty i śpiew zwierząt rogatych.  </p>
                <!-- history -->
                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingOne">
                            <h4 class="panel-title asd">
                                <a class="pa_italic" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    <span class="glyphicon glyphicon-ok" aria-hidden="true"></span> oprócz pokoi
                                </a>
                            </h4>
                        </div>
                        <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                            <div class="panel-body panel_text">
                                <p class = "lead">Do dyspozycji Państwa (oprócz pokoi) pozostawiamy duży salon, TV, Wi-Fi i kuchnię oraz z wspólną łazienką wyposażoną w uchwyty dla osób z częściową niesprawnością.
                                    Do dyspozycji gości jest pralka i lodówka, dla dzieci piaskownica oraz zabawki.
                                Ciekawie zagospodarowany ogród umożliwia wypoczynek wśród zieleni, a także spędzenie miłych chwil przy ognisku lub grillu w gronie rodziny, przyjaciół i znajomych.
                                    Istnieje możliwość organizowania spotkań towarzyskich. Czeka na Państwa przyjazny dom, ciekawi ludzie oraz dobra zabawa.</p>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingTwo">
                            <h4 class="panel-title asd">
                                <a class="pa_italic collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    <span class="glyphicon glyphicon-ok" aria-hidden="true"></span> kuchnia regionalna
                                </a>
                            </h4>
                        </div>
                        <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                            <div class="panel-body panel_text">
                                <p class = "lead">Polecamy kuchnie regionalną, smaczne potrawy z produktów własnego gospodarstwa- masła, sery, mięsa oraz warzywa z przydomowego ogródka.
                                    Proponujemy możliwość uczestnictwa w wypieku ciast robieniu serów i masła oraz prac gospodarskich.</p>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingThree">
                            <h4 class="panel-title asd">
                                <a class="pa_italic collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    <span class="glyphicon glyphicon-ok" aria-hidden="true"></span> Dla dzieci
                                </a>
                            </h4>
                        </div>
                        <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                            <div class="panel-body panel_text">
                                <p class = "lead">Dzieci mogą zaprzyjaźnić się z zwierzętami w naszym obejściu oraz zabrać ze sobą swoje domowe zwierzątka. Organizujemy piesze wycieczki po okolicy.
                                Oprócz tego w naszej miejscowości znajduje się stadnina koni<a href="http://stajnia-roka.pl//" target="_blank"> "Roka" &nbsp;</a>i Ośrodek Kultury Wiejskiej, w którym organizowane są zabawy dla dzieci.
                                Zaletą tego miejsca są duże tereny do jazdy konnej (łąki, las i nieużytki). Stajnia specjalizuje się w hodowli, nauce jazdy konnej i imprezach
                                    integracyjnych.</p>

                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingFour">
                            <h4 class="panel-title asd">
                                <a class="pa_italic collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    <span class="glyphicon glyphicon-ok" aria-hidden="true"></span> Atrakcje w pobliżu
                                </a>
                            </h4>
                        </div>
                        <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
                            <div class="panel-body panel_text">
                                <p class ="lead">Sanktuarium Maryjne w Licheniu (57 km)
                                Muzeum Tkactwa oraz kościół z malowidłami Mehoffera(5 km)
                                Wspaniałe dywany kwiatowe z okazji Bożego Ciała w pobliskim Spycimierzu(21km)
                                    Zamek w Uniejowie wraz z parkiem i kąpielisko z wodami geotermalnymi(20 km).</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- //history -->
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
</div>
<!-- //about-top -->
<!-- //about -->
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
                    <li><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span><a href="rodo.php">Rodo</a></li>file
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
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<!-- here stars scrolling icon -->
<script type="text/javascript">
    $(document).ready(function() {

            var defaults = {
            containerID: 'toTop', // fading element id
            containerHoverID: 'toTopHover', // fading element hover id
            scrollSpeed: 1200,
            easingType: 'linear'
            };


        $().UItoTop({ easingType: 'easeOutQuart' });

    });
</script>
<!-- //here ends scrolling icon -->
</body>
</html>