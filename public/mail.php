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
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <![endif]-->
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
                        <li><a href="about.php" class="hvr-sweep-to-bottom">O nas</a></li>
                        <li><a href="gallery.php" class="hvr-sweep-to-bottom">Galeria zdjęć</a></li>
                        <li class="active" ><a href="mail.php" class="hvr-sweep-to-bottom">Dojazd</a></li>
                        <li><a href="rodo.php" class="hvr-sweep-to-bottom">Rodo</a></li>
                    </ul>
                </nav>
            </div>
            <!-- /.navbar-collapse -->
        </nav>
    </div>
</div>
<!-- //header -->
<div class="banner about-banner">
    <div class="container">
        <h2>Kontakt</h2>
        <div class="agileits-line"> </div>
    </div>
</div>
<!-- //banner -->
<!-- contact -->
<div class="contact-top">
    <div class="container">
        <div class="contact-grids">
            <div class="col-md-7 contact-form">
                <div class="form-container">
                    <div class="note"></div>
                    <div class="fields">
                <form class="ajax-contact-form" name="contactform" id="contactform" action="">
                    <input type="text" name="name"  id="name"  placeholder="Imie" required>
                    <input type="email" class="email" name="email"  id="email" placeholder="Mail" required>
                    <textarea placeholder="Wiadomość"  name="message" required=""></textarea>
                    <input type="submit" id="submit" name = "submit" value="Wyslać">
                </form>
                    </div>
                </div>
            </div>

            </div>
            <div class="col-md-4 contact-right">
                <div class="contact-text">
                    <h4>Okres dostępności:</h4>
                    <p> Całorocznie </p>
                    <p><span class="glyphicon glyphicon-earphone"></span> +48 721047374</p>
                </div>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
</div>
<div class="map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2457.999496058385!2d18.5149223!3d51.970434!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x614311fb2600ebc0!2sAgroturystyka%20Nad%20Rzeczk%C4%85%20Wielkopolska!5e0!3m2!1sen!2spl!4v1574811522388!5m2!1sen!2spl" width="640" height="480" frameborder="0" style="border:0;" allowfullscreen=""></iframe>

    <script>
        function cheked(x) {
            if(x==0)
                document.getElementById('address_click').style.display="none";
            return;
        }
    </script>

    <div class="address agileits" id="address_click">
        <p>Ukryj<span class ="glyphicon glyphicon-remove" style="color: black" onclick="cheked(0) "></span></p>
        <div class="w3ls-title">
            <h3>Adres:</h3>
        </div>
        <p>Kowale Księże 13, 62-700 Turek </p>
        <p>Telefon stacjonarny : 63-2899770</p>
        <p>(aktywny codziennie po 20) </p>
        <p>Mail : <a href="mailto:agronadrzeczka@gmail.com">agronadrzeczka@gmail.com</a></p>
    </div>


</div>
<!-- //contact -->
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
<!-- //copyright -->
<script src="contactform.js"></script>
<script src="js/SmoothScroll.min.js"></script>
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<!-- here stars scrolling icon -->
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
<script src="js/jarallax.js"></script>
<script type="text/javascript">
    /* init Jarallax */
    $('.jarallax').jarallax({
        speed: 0.5,
        imgWidth: 1366,
        imgHeight: 768
    })
</script>
</body>
</html>

