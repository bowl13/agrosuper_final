<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Agrosuper B2C</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">
        
        <!--meta facebook-->
        <meta property="fb:app_id" content="178779322280867"/>
        <meta property="og:url" content="http://fb.bowl.cl/fbprub/"/>
        <meta property="og:title" content="TITULO PROYECTO"/>
        <meta property="og:description" content="DESCRIPCION APP FACEBOOK"/>
        <meta property="og:site_name" content="PROYECTO"/>
        <meta property="og:type" content="video">
        
        <!--meta property="og:video" content="http://garethhooper.s3.amazonaws.com/garethhooper_com/embed/player.swf?config=http://garethhooper.s3.amazonaws.com/garethhooper_com/embed/flvplayer_facebook_embed_video_config.xml&file=http://garethhooper.s3.amazonaws.com/garethhooper_com/articles/social_media/integration/the_avengers_trailer.mp4" />
        
        <meta property="og:video:secure_url" content="https://garethhooper.s3.amazonaws.com/garethhooper_com/embed/player.swf?config=http://garethhooper.s3.amazonaws.com/garethhooper_com/embed/flvplayer_facebook_embed_video_config.xml&file=http://garethhooper.s3.amazonaws.com/garethhooper_com/articles/social_media/integration/the_avengers_trailer.mp4" /-->
        
        <meta property="og:video:height" content="300" />
        <meta property="og:video:width" content="250" />
        <meta property="og:video:type" content="application/x-shockwave-flash" />
        
        <meta property="og:video" content="http://fb.bowl.cl/fbprub/300x250.swf" />
        <meta property="og:video:secure_url" content="https://fb.bowl.cl/fbprub/300x250.swf" />
        
        <meta property="og:image" content="http://garethhooper.com/images/stories/articles/social_media/integration/facebook_how_to_embed_your_own_videos.jpg"/>

        <link rel="stylesheet" href="css/bootstrap.min.css">
        
        <link rel="stylesheet" href="css/bootstrap-responsive.min.css">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/mediaelementplayer.css">
        <link rel="stylesheet" href="css/jquery.sidr.light.css">

        <script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    
        <?php
          $bg = array('bg_01.jpg', 'bg_02.jpg', 'bg_03.jpg', 'bg_04.jpg' ); // array of filenames

          $i = rand(0, count($bg)-1); // generate random number size of the array
          $selectedBg = "$bg[$i]"; // set variable equal to which random filename was chosen
        ?>

        <style type="text/css">
        <!--
        .mejs-overlay{
            background: url(img/<?php echo $selectedBg; ?>) no-repeat;
            background-size: cover;
        }
        -->
        </style>
    </head>
    <body id="quienes">
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->

        <div id="fb-root"></div>
        <script>(function(d, s, id) {
          var js, fjs = d.getElementsByTagName(s)[0];
          if (d.getElementById(id)) return;
          js = d.createElement(s); js.id = id;
          js.src = "//connect.facebook.net/es_LA/all.js#xfbml=1";
          fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>
        
        <div class="load"></div>

        <div id="wrap">

            <div class="container-fluid">

                <header class="hidden-desktop hidden-tablet row-fluid head_cont_resp">
                    
                    <div class="span2 text-center">
                        
                        <img src="img/logo.gif" alt="">

                    </div>

                    <div class="span2 well-small">
                          
                        <div class="pull-left">
                            
                            <a id="simple-menu" class="pull-right" href="#sidr">menú <img style="padding-bottom:3px;" src="img/icon_menu.gif" alt=""></a>
     
                            <div id="sidr">
                              
                              <ul>
                                    <li class="active"><a href="#quienes">quiénes somos</a></li>
                                    <li><a href="#dedonde">de dónde venimos</a></li>
                                    <li><a href="#donde">dónde encontrarnos</a></li>

                              </ul>
                              <div>
                                  <a class="close">cerrar</a>
                              </div>
                            </div>

                        </div>  
                        
                        <div class="pull-right">
                            
                            <div class="lang pull-right">spa</div>

                            <div class="tw pull-right" style="margin-right:15px;border-right:2px solid #3598dc;padding-right:5px;"><img src="img/icon_tw.gif" alt=""></div>
                            <div class="fb pull-right" style="margin-right:15px;"><img src="img/icon_fb.gif" alt=""></div>

                        </div>

                        <div class="clearfix"></div>
                    </div>

                </header>
                
                <header class="row-fluid head_cont hidden-phone">
                    
                    <div class="span2">
                        
                        <div class="logo">
                            <img src="img/logo.gif" alt="">
                        </div>

                    </div>
                    
                    <div class="span8">
                        
                        <nav>
                            <ul class="unstyled nav nav-pills">
                                <li><a href="#">quiénes somos</a></li>
                                <li><a href="#">de dónde venimos</a></li>
                                <li><a href="#">dónde encontrarnos</a></li>
                            </ul>
                        </nav>

                    </div>

                    <div class="span2">

                        <div class="tools">

                            <div class="lang pull-right">spa</div>

                            <div class="tw pull-right" style="margin-right:5px;border-right:2px solid #3598dc;padding-right:5px;"><img src="img/icon_tw.gif" alt=""></div>
                            <div class="fb pull-right" style="margin-right:5px;"><img src="img/icon_fb.gif" alt=""></div>
                            
                        </div>

                    </div>

                </header>

                <section class="sectionnav row-fluid" style="background-color:#000;">

                    <div class="hidden-desktop hidden-tablet">

                        <div class="clearfix"></div>

                        <div class="video_ext" style="height:auto;min-height:480px;max-width:768px;width:100%;">
                            
                            hola

                        </div>

                    </div>

                    <video id="youtube1" class="hidden-phone" style="display:none;" width="100%" height="100%" loop>
                        
                        <source src="http://www.youtube.com/watch?v=a5iDPFbIRdo" type="video/youtube">
                        <track kind="subtitles" src="sub/agrosuper-es.srt" srclang="es"/>

                        <track kind="subtitles" src="sub/agrosuper-en.srt" srclang="en"/>
                        <track kind="subtitles" src="sub/agrosuper-jp.srt" srclang="jp"/>
                        <track kind="subtitles" src="sub/agrosuper-kr.srt" srclang="kr"/>
                       
                    </video>

                    <span id="youtube1-mode"></span>

                </section>

                <section id="dedonde" class="sectionnav row-fluid cont_slide">
                    
                    <div id="myCarousel" class="carousel slide">
                      <!-- Carousel items -->
                      <div class="carousel-inner">

                        <div class="active item">
                            
                            <p>somos una marca chilena de proteína presente en<br/> <span>más de 65 países</span>.</p>

                            <video class="hidden-phone" autoplay style="width:100% !important;height:auto;" loop="true" mute>

                            <source src="img/parr.mp4" type="video/mp4">
                            <source src="img/parr.webm" type="video/webm">
                            <source src="img/parr.ogv" type="video/ogg">

                            </video>

                            <div class="hidden-desktop hidden-tablet view-cinema">

                                <img src="img/cinema_japan_low.gif" alt="">

                            </div>

                        </div>

                        <div class="item">
                            
                            <p>somos una marca chilena de proteína presente en<br/> <span>más de 65 países</span>.</p>

                            <video class="hidden-phone" autoplay style="width:100% !important;height:auto;" loop="true" mute>

                            <source src="img/pai.mp4" type="video/mp4">
                            <source src="img/pai.webm" type="video/webm">
                            <source src="img/pai.ogv" type="video/ogg">

                            </video>

                            <div class="hidden-desktop hidden-tablet view-cinema">

                                <img src="img/cinema_japan_low.gif" alt="">

                            </div>

                        </div>
                        <div class="item">
                            
                            <p>somos una marca chilena de proteína presente en<br/> <span>más de 65 países</span>.</p>

                            <video class="hidden-phone" autoplay style="width:100% !important;height:auto;" loop="true" mute>

                            <source src="img/parr.mp4" type="video/mp4">
                            <source src="img/parr.webm" type="video/webm">
                            <source src="img/parr.ogv" type="video/ogg">

                            </video>

                            <div class="hidden-desktop hidden-tablet view-cinema">

                                <img src="img/cinema_japan_low.gif" alt="">

                            </div>

                        </div>

                      </div>

                       <!-- Carousel nav -->
                        <a class="carousel-control left" href="#myCarousel" data-slide="prev"></a>
                        <a class="carousel-control right" href="#myCarousel" data-slide="next"></a>

                    </div>

                </section>

                <section id="donde" class="sectionnav row-fluid cont_map">
                    
                    <div class="map">hola</div>

                </section>

            </div> <!-- /container -->

            <!--div id="push"></div-->

        </div>


        <footer class="footer-fix container-fluid hidden-phone">
            
            <div class="row-fluid">
                
                <div class="like_fb pull-left" style="margin-left:10px;">
                                        
                    <div class="fb-like" data-href="http://www.bowl.cl" data-send="false" data-width="450" data-show-faces="false"></div>

                </div>

                <div id="open_map" class="pull-left" style="cursor:pointer;">
                    
                    abrir mapa

                </div>

                <div class="nav_key pull-right" style="margin-right:10px;">
                    
                    <p id="txt_key" class="pull-left">navega con tu teclado</p>

                    <div id="key" class="pull-left" style="margin-left:10px;cursor:pointer;">
                        
                        <img src="img/icon_nav_key.png" alt="">

                    </div>
                </div>

            </div>
                
        </footer>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.9.1.min.js"><\/script>')</script>
        
        <script src="js/vendor/bootstrap.min.js"></script>

        <script src="js/main.js"></script>
        <script src="js/vendor/jquery.keyboardScroll.js"></script>
        <script src="build/mediaelement-and-player.js"></script>
        <script src="js/vendor/jquery.sidr.js"></script>
        
		<!--google analytics-->

        <!--script>
            var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
            (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
            g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
            s.parentNode.insertBefore(g,s)}(document,'script'));
        </script-->
    </body>
</html>
