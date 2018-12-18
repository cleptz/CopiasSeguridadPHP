<?php
echo '<script>alert("Este formulario es para copias de seguridad")</script>   ';

?>
<form action ="RealizarCopia.php" method="POST">
<html>  
<head>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta charset="utf-8" />
    <title>Copias de seguridad en MySQL</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta content="" name="description" />
    <meta content="" name="author" />
    <link rel="stylesheet" type="text/css" href="assets/plugins/owl-carousel/owl.carousel.css" />
    <link rel="stylesheet" type="text/css" href="assets/plugins/owl-carousel/owl.theme.css" />
    <link rel="stylesheet" type="text/css" href="assets/plugins/headereffects/css/component.css">
    <link rel="stylesheet" type="text/css" href="assets/plugins/headereffects/css/normalize.css" />
    <link href="assets/plugins/pace/pace-theme-flash.css" rel="stylesheet" type="text/css"
        media="screen" />
    <!-- BEGIN CORE CSS FRAMEWORK -->
    <link href="assets/plugins/boostrapv3/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/boostrapv3/css/bootstrap-theme.min.css" rel="stylesheet"
        type="text/css" />
    <link href="assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet"
        type="text/css" />
    <!-- END CORE CSS FRAMEWORK -->
    <!-- BEGIN CSS TEMPLATE -->
    <link href="assets/css/style.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/magic_space.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/responsive.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/animate.min.css" rel="stylesheet" type="text/css" />
    <!-- END CSS TEMPLATE -->
    <script type="text/javascript" src="assets/plugins/jquery-1.8.3.min.js"></script>
    <!-- SLIDER REVOLUTION 4.x SCRIPTS  -->
    <script type="text/javascript" src="assets/plugins/slider-plugin/js/slider1.min.js"></script>
    <script type="text/javascript" src="assets/plugins/slider-plugin/js/slider2.min.js"></script>
    <link rel="stylesheet" type="text/css" href="assets/plugins/slider-plugin/css/settings.css"
        media="screen" />
</head></form>
<body>
    <div class="main-wrapper">
        
        <div class="section ha-waypoint" data-animate-down="ha-header-hide" data-animate-up="ha-header-hide">
            <div role="navigation" class="navbar navbar-transparent navbar-top">
                <div class="container">
                    <div class="compressed">
                        
                        <div class="navbar-collapse collapse">
                            <ul class="nav navbar-nav navbar-right">
                                <li><a href="index.php">Inicio</a></li>
                                <li><a href="RealizarCopia.php">Realizar copia de seguridad</a></li>
                                <li><a href="RestaurarCopia.php">Restaurar copia de seguridad</a></li>
                                
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!--BEGIN SLIDER -->
            <div class="tp-banner-container">
                <div class="tp-banner" id="home">
                    <ul>
                        <!-- SLIDE  -->
                        <li data-transition="fade" data-slotamount="5" data-masterspeed="700">
                            <!-- MAIN IMAGE -->
                            <img src="assets/img/bg/slide_one.jpg" alt="slidebg1" data-bgfit="cover" data-bgposition="center center"
                                data-bgrepeat="no-repeat">
                            <!-- LAYERS -->
                            <div class="tp-caption mediumlarge_light_white_center sft tp-resizeme slider" data-x="center"
                                data-hoffset="0" data-y="80" data-speed="500" data-start="800" data-easing="Power4.easeOut"
                                data-endspeed="300" data-endeasing="Power1.easeIn" data-captionhidden="off" style="z-index: 6">
                                <input type="radio" name="rbCopia" value="0" checked="checked"/> &nbsp; Todas las BD <br><br>
                                <input type="radio" name="rbCopia" value="0" /> &nbsp; Una sola BD 
                                <input type="text" name="txtbd" value="" /> <br><br>
                                <input type="submit" value="Realizar" name="realizar" />
                                
                            </div>
                            <div class="tp-caption sfb slider tp-resizeme slider" data-x="center" data-hoffset="0"
                                data-y="320" data-speed="800" data-start="1000" data-easing="Power4.easeOut"
                                data-endspeed="300" data-endeasing="Power1.easeIn" data-captionhidden="off" style="z-index: 6">
                            </div>
                        </li>
                        
                            
                            
                       
                        
                    </ul>
                    <div class="tp-bannertimer">
                    </div>
                </div>
            </div>

    </div>
    <script src="assets/plugins/boostrapv3/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="assets/plugins/pace/pace.min.js" type="text/javascript"></script>
    <script src="assets/plugins/jquery-unveil/jquery.unveil.min.js" type="text/javascript"></script>
    <script src="assets/plugins/owl-carousel/owl.carousel.min.js" type="text/javascript"></script>
    <script src="assets/plugins/waypoints.min.js"></script>
    <script type="text/javascript" src="assets/plugins/parrallax/js/jquery.parallax-1.1.3.js"></script>
    <script type="text/javascript" src="assets/plugins/jquery-nicescroll/jquery.nicescroll.min.js"></script>
    <script type="text/javascript" src="assets/plugins/jquery-appear/jquery.appear.js"></script>
    <script src="assets/plugins/jquery-numberAnimate/jquery.animateNumbers.js" type="text/javascript"></script>
    <script type="text/javascript" src="assets/js/core.js"></script>
</body>

</html>
