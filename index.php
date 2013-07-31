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

        <link rel="icon" href="favicon.ico">

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
    <body>
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
                        
                        <a id="simple-menu" class="pull-right" href="#sidr"><img style="padding-right:8px;" src="img/icon_menu.gif" alt=""></a>
     
                        <div id="sidr">
                          
                          <ul>
                                <li class="active" id="qui_href2"><img src="img/icon_qui_href.gif" alt="" style="margin-right:5px;"/>quiénes somos</li>
                                <li id="ded_href2"><img src="img/icon_ded_href.gif" alt="" style="margin-right:5px;"/>de dónde venimos</li>
                                <li id="don_href2"><img src="img/icon_don_href.gif" alt="" style="margin-right:5px;"/>dónde encontrarnos</li>

                          </ul>
                          <div>
                              <a class="close"><img src="img/icon_cerrar.gif" alt=""/></a>
                          </div>
                        </div>

                        <img src="img/logo.png" alt="" style="position:absolute;margin:0 auto;left:0;right:0;z-index:999999;"/>

                    </div>

                </header>
                
                <header class="row-fluid head_cont hidden-phone">
                    
                    <div class="span2">
                        
                        <div class="logo">
                            <img src="img/logo.png" alt="">
                        </div>

                    </div>
                    
                    <div class="span7">
                        
                        <nav>
                            <ul class="unstyled nav nav-pills">
                                <li id="qui_href" class="active">quiénes somos</li>
                                <li id="ded_href">de dónde venimos</li>
                                <li id="don_href">dónde encontrarnos</li>
                            </ul>
                        </nav>

                    </div>

                    <div class="span3">

                        <div class="tools">

                            <div class="lang pull-right">

                                <img src="img/mund_lang.gif" alt="" class="pull-left"/>
                                
                                <ul class="unstyled pull-left cont_lang">
                                    <li>español</li>
                                    <ul id="cont_lang2" class="unstyled"> 
                                        <li class="pull-left" id="eng">english</li>
                                        <li class="pull-left">/</li>
                                        <li class="pull-left" id="kor">korea</li>   
                                    </ul>
                                </ul>

                                <img src="img/arrow_lang.gif" alt=""/>

                            </div>

                            <!--div class="tw pull-right" style="margin-right:10px;border-right:2px solid #3598dc;padding-right:10px;"><img src="img/icon_tw.gif" alt=""></div>
                            <div class="fb pull-right" style="margin-right:10px;"><img src="img/icon_fb.gif" alt=""></div-->
                            
                            <div class="tw pull-right" style="padding-top:5px;margin-right:10px;border-right:2px solid #3598dc;padding-right:10px;">

                                <a href="https://twitter.com/share" class="twitter-share-button" data-dnt="true" data-count="none" data-text="Hola mundo" data-lang="es">Twitea</a>
                                <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="https://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
                            
                            </div>                      
                            <div class="fb pull-right" style="padding-top:3px;margin-right:10px;width:80px;overflow:hidden;">
                               
                                <div class="fb-like" data-href="http://www.bowl.cl" data-send="false" data-width="450" data-show-faces="false"></div>
                            
                            </div>
                            
                            <div class="clearfix"></div>
                        </div>

                    </div>

                </header>

                <section id="quienes" class="sectionnav row-fluid" style="background-color:#000;">

                    <div class="hidden-desktop hidden-tablet">

                        <div class="clearfix"></div>

                        <div class="video_ext">
                            
                            <div class="cont_play">
                                <a href="http://www.youtube.com/watch?v=a5iDPFbIRdo" target="_blank"><img src="img/play_resp.png" alt=""/></a>
                            </div>

                        </div>

                    </div>

                    <video data-type="video" id="youtube1" class="hidden-phone" style="display:none;" width="100%" height="100%" loop>
                        
                        <source src="http://www.youtube.com/watch?v=a5iDPFbIRdo" type="video/youtube">
                        <track kind="subtitles" src="sub/agrosuper-es.srt" srclang="es" />

                        <track kind="subtitles" src="sub/agrosuper-en.srt" srclang="en" />
                        <track kind="subtitles" src="sub/agrosuper-kr.srt" srclang="kr" />
                        <track kind="subtitles" src="sub/agrosuper-jp.srt" srclang="jp" />
                       
                    </video>

                    <span id="youtube1-mode"></span>

                </section>
                <section id="dedonde" class="sectionnav row-fluid cont_slide">
                    
                    <div id="myCarousel" class="carousel slide">
                      <!-- Carousel items -->
                      <div class="carousel-inner">

                        <div class="active item">
                            
                            <p>01somos una marca chilena de proteína presente en<br/> <span>más de 65 países</span>.</p>

                            <video class="hidden-phone" autoplay style="width:100% !important;height:auto;" loop="true" mute>

                                <source src="img/korea_cinema.mp4" type="video/mp4">
                                <source src="img/korea_cinema.webm" type="video/webm">
                                <source src="img/korea_cinema.ogv" type="video/ogg">

                            </video>

                            <div class="hidden-desktop hidden-tablet view-cinema cin_01">

                            </div>

                        </div>

                        <div class="item">
                            
                            <p>02somos una marca chilena de proteína presente en<br/> <span>más de 65 países</span>.</p>

                            <video class="hidden-phone" autoplay style="width:100% !important;height:auto;" loop="true" mute>

                                <source src="img/pata_3_cinema.mp4" type="video/mp4">
                                <source src="img/pata_3_cinema.webm" type="video/webm">
                                <source src="img/pata_3_cinema.ogv" type="video/ogg">

                            </video>

                            <div class="hidden-desktop hidden-tablet view-cinema cin_02">

                            </div>

                        </div>
                        <div class="item">
                            
                            <p>03somos una marca chilena de proteína presente en<br/> <span>más de 65 países</span>.</p>

                            <video class="hidden-phone" autoplay style="width:100% !important;height:auto;" loop="true" mute>

                                <source src="img/pollo_cinema.mp4" type="video/mp4">
                                <source src="img/pollo_cinema.webm" type="video/webm">
                                <source src="img/pollo_cinema.ogv" type="video/ogg">

                            </video>

                            <div class="hidden-desktop hidden-tablet view-cinema cin_03">


                            </div>

                        </div>

                        <div class="item">
                            
                            <p>04somos una marca chilena de proteína presente en<br/> <span>más de 65 países</span>.</p>

                            <video class="hidden-phone" autoplay style="width:100% !important;height:auto;" loop="true" mute>

                                <source src="img/puerto_cinema.mp4" type="video/mp4">
                                <source src="img/puerto_cinema.webm" type="video/webm">
                                <source src="img/puerto_cinema.ogv" type="video/ogg">

                            </video>

                            <div class="hidden-desktop hidden-tablet view-cinema cin_04">


                            </div>

                        </div>

                      </div>
                        <div class="cont_resp_arrow hidden-tablet hidden-desktop pull-right">
                            
                            <!-- Carousel nav -->
                            <a class="carousel-control left" href="#myCarousel" data-slide="prev"></a>
                            <a class="carousel-control right" href="#myCarousel" data-slide="next"></a>

                        </div>
                       <!-- Carousel nav -->
                        <a class="carousel-control left hidden-phone" href="#myCarousel" data-slide="prev"></a>
                        <a class="carousel-control right hidden-phone" href="#myCarousel" data-slide="next"></a>

                    </div>

                </section>

                <section id="donde2" class="sectionnav row-fluid cont_map hidden-tablet hidden-desktop">
                   
                    <div class="map">
                        
                        <div class="cont_leyenda well-small">
                            
                            <div class="paises_map">
                                
                                <h1>exportaciones</h1>
                                <h2>agrosuper</h2>

                                <ul class="unstyled pull-left">
                                    <li class="pull-left" id="eur2">europa</li>
                                    <li class="pull-left" id="mex2">méxico</li>
                                    <li class="pull-left" id="sud2">sudamerica</li>
                                    <li class="pull-left" id="usa2">usa</li>
                                    <li class="pull-left" id="asi2">asia</li>
                                    <li class="pull-left" id="afr2">áfrica</li>
                                </ul>

                            </div>
                            <div class="clearfix"></div>
                            <div class="marcas_map">
                                
                                <h1>nuestras</h1>
                                <h2>marcas</h2>

                                <ul class="unstyled cont_marc_resp" style="width:95%;">
                                    <li id="mar_cri2" class="pull-left"></li>
                                    <li id="mar_san2" class="pull-left"></li>
                                    <li id="mar_cha2" class="pull-left"></li>

                                    <li id="mar_sop2" class="pull-left"></li>
                                    <li id="mar_spo2" class="pull-left"></li>
                                    <li id="mar_sce2" class="pull-left"></li>

                                    <li id="mar_kin2" class="pull-left"></li>
                                    <li id="mar_ssa2" class="pull-left"></li>
                                    <li id="mar_and2" class="pull-left"></li>
                                </ul>

                            </div>

                        </div>

                    </div>

                </section>

                <section id="donde" class="sectionnav row-fluid cont_all_map hidden-phone">

                    <div class="dash_map">
                    
                        <div class="btn_open_map2 well-small" style="display:none;"><img src="img/arrow_map.gif" alt=""/></div>
                        <div class="btn_open_map well-small"><img src="img/arrow_map_close.gif" alt=""/></div>

                        <div class="cont_leyenda well-small">
                            
                            <div class="paises_map">
                                
                                <h1>exportaciones</h1>
                                <h2>agrosuper</h2>

                                <ul class="unstyled pull-left">
                                    <li class="pull-left" id="eur">europa</li>
                                    <li class="pull-left" id="mex">méxico</li>
                                    <li class="pull-left" id="sud">sudamerica</li>
                                    <li class="pull-left" id="usa">usa</li>
                                    <li class="pull-left" id="asi">asia</li>
                                    <li class="pull-left" id="afr">áfrica</li>
                                </ul>

                            </div>
                            
                            <div class="marcas_map">
                                
                                <h1>nuestras</h1>
                                <h2>marcas</h2>

                                <ul class="unstyled">

                                    <li id="mar_cri" class="pull-left"></li>
                                    <li id="mar_san" class="pull-left"></li>
                                    <li id="mar_cha" class="pull-left"></li>

                                    <li id="mar_sop" class="pull-left"></li>
                                    <li id="mar_spo" class="pull-left"></li>
                                    <li id="mar_sce" class="pull-left"></li>

                                    <li id="mar_kin" class="pull-left"></li>
                                    <li id="mar_ssa" class="pull-left"></li>
                                    <li id="mar_and" class="pull-left"></li>

                                </ul>

                            </div>

                        </div>

                    </div>

                    <div class="text-center mapa_mundi hidden-phone">
                        <img id="map_normal" src="img/mapa_mundi.gif" alt=""/>

                        <img id="map_eur" src="img/hover_mapa/mapa_mundi_eur.gif" alt=""/>
                        <img id="map_mex" src="img/hover_mapa/mapa_mundi_mex.gif" alt=""/>
                        <img id="map_usa" src="img/hover_mapa/mapa_mundi_usa.gif" alt=""/>
                        <img id="map_afr" src="img/hover_mapa/mapa_mundi_afr.gif" alt=""/>
                        <img id="map_sud" src="img/hover_mapa/mapa_mundi_sud.gif" alt=""/>
                        <img id="map_asi" src="img/hover_mapa/mapa_mundi_asi.gif" alt=""/>

                        <div class="clearfix"></div>
                    </div>
                <div class="clearfix"></div>
                </section>

            </div> <!-- /container -->

        </div>


        <footer class="footer-fix container-fluid hidden-phone">
            
            <div class="row-fluid">
                
                <div class="pull-left" style="margin-left:5px;padding-left:10px;">
                    © 2013 Agrosuper. All rights reserved.
                </div>

                <div class="nav_key pull-right" style="margin-right:10px;">
                    
                    <p id="txt_key" class="pull-left">navega con tu teclado</p>

                    <div id="key" class="pull-left" style="margin-left:10px;cursor:pointer;">
                        
                        <img src="img/icon_nav_key.png" alt="">

                    </div>
                </div>

            </div>
            <div style="width:100%;height:10px;background-color:#3399cc;position:absolute;bottom:0;"></div>
        </footer>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.9.1.min.js"><\/script>')</script>
        
        <script src="js/vendor/bootstrap.min.js"></script>

        <script src="js/main.js"></script>
        <script src="js/vendor/jquery.keyboardScroll.js"></script>
        <script src="build/mediaelement-and-player.js"></script>
        <script src="js/vendor/jquery.sidr.js"></script>
        <script src="js/vendor/jquery.easing.min.js"></script>
        <script src="js/vendor/jquery.scrollTo-min.js"></script>
        
		<!--google analytics-->

        <!--script>
            var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
            (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
            g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
            s.parentNode.insertBefore(g,s)}(document,'script'));
        </script-->
    </body>
</html>
