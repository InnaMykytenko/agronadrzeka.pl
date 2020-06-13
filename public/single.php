<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <title>Agroturystykanadrzeczka</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="WebDesign" />
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
    <link href="//fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
    <!-- //font -->
    <script src="js/jquery-1.11.1.min.js"></script>
    <script src="js/bootstrap.js"></script>
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
<div class="banner about-banner">
    <div class="container">
        <h2>Księga gości</h2>
        <div class="agileits-line"> </div>
    </div>
</div>
<!-- //banner -->
<!-- single -->
<div class="single">
    <div class="container">
        <div class="agileits-single-img">
            <img src="images/about.jpg" alt="" />

            <h4>Dodaj wpis</h4>
            <p>Jeśli chcesz coś napisać, możesz zrobić to tutaj skorzystać z formularza.
                Jesteśmy bardzo wdzięczni za wasze komentarze. Twoje zdanie jest dla nas ważne. Dziękujęmy.</p>
        </div>


        <!-- leave-comments -->
        <div class="w3_leave_comment">
            <h3>Zostaw komentarz tutaj</h3> <br>
            <form action="wyslij.php" method="post" class="form">
                <input type="text" name="autor" placeholder="Imie" required="">
                <textarea placeholder="Wiadomość" name="tresc" required=""></textarea>
                <input type="submit" name ="send" value="Wyślij">
            </form>
            <?php
            if(isset($_SESSION['blad'])){
                echo '<div style="color: red;">'.$_SESSION['blad'].'</div>';
                unset($_SESSION['blad']);
            }
            else if(isset($_SESSION['wyslano'])){
                echo '<div style="color: green;">'.$_SESSION['wyslano'].'</div>';
                unset($_SESSION['wyslano']);
            }
            ?>
            <hr/>
            <?php

            try{
                require_once("connect.php");

                $polaczenie = new mysqli($host, $user, $password, $name);

                if($polaczenie->connect_errno != 0){
                    throw new Exception(mysqli_connect_error());
                }
                else{

                    mysqli_query($polaczenie, "SET CHARSET utf8");
                    mysqli_query($polaczenie, "SET NAMES 'utf8' COLLATE 'utf8_polish_ci'");

                    $sprawdz = $polaczenie->query("SELECT * FROM komentarze");

                    if($sprawdz->num_rows > 0){
                        $num = $sprawdz->num_rows+1;

                        for($i = 1; $i < $num; $i += 1){
                            if($komentarz = $sprawdz = $polaczenie->query("SELECT * FROM komentarze WHERE id='$i'")){
                                $wiersz = $komentarz->fetch_assoc();

                                if($wiersz['banned']==1){
                                    continue;
                                }

                                echo '
                                <div class="komentarz">'.
                                    $wiersz['autor'].' / '.
                                    $wiersz['data'].'
                                    <br/>'.$wiersz['tresc'].'
                                    <a href="usun.php?id='.$i.'">Usuń komentarz</a>
                                    </div>
                                    <br/>
                                ';

                            }
                        }
                    }

                    $polaczenie->close();
                }
            }
            catch(Excample $error){
                echo "ERROR!";
            }

            ?>
        </div>
        <!-- //leave-comments -->

    </div>
</div>
<!-- //single -->
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
                    <li><i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i>Kowale Księże 13, <span>62-700 Turek.</span></li>
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
<script src="js/lightbox-plus-jquery.min.js"> </script>
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
</body>
</html>