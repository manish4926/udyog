<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <!-- For IE -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <!-- For Resposive Device -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>{{$companydetail->companyname}}</title>

        <!-- Favicon -->
        <link rel="icon" type="image/png" sizes="56x56" href="{{ asset( 'microweb/images/fav-icon/icon.png') }}">

        <!-- Main style sheet -->
        <link rel="stylesheet" type="text/css" href="{{ asset('microweb/style.css') }}">
        <!-- responsive style sheet -->
        <link rel="stylesheet" type="text/css" href="{{ asset('microweb/responsivew.css') }}">

        <!-- Fix Internet Explorer ______________________________________-->

        <!--[if lt IE 9]>
            <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
            <script src="vendor/html5shiv.js"></script>
            <script src="vendor/respond.js"></script>
        <![endif]-->
            
    </head>

    <body>
        <div class="main-page-wrapper">


            <!-- 
            =============================================
                Theme Header
            ============================================== 
            -->
            <header class="theme-main-header">
                <div class="container">
                    <a href="index.html" class="logo float-left tran4s"><img src="https://botw-pd.s3.amazonaws.com/styles/logo-thumbnail/s3/072011/untitled-1_114.png?itok=HxFV7s-N"height="50" width="60" alt="Logo"></a>
                    
                    <!-- ========================= Theme Feature Page Menu ======================= -->
                    <nav class="navbar float-right theme-main-menu one-page-menu">
                       <!-- Brand and toggle get grouped for better mobile display -->
                       <div class="navbar-header">
                         <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1" aria-expanded="false">
                           <span class="sr-only">Toggle navigation</span>
                           Menu
                           <i class="fa fa-bars" aria-hidden="true"></i>
                         </button>
                       </div>
                       <!-- Collect the nav links, forms, and other content for toggling -->
                       <div class="collapse navbar-collapse" id="navbar-collapse-1">
                         <ul class="nav navbar-nav">
                            <li class="active"><a href="#home">HOME</a></li>
                            <li><a href="#about-us">ABOUT</a></li>
                            <li><a href="#service-section">SERVICES</a></li>
                            <li><a href="#project-section">PRODUCTS</a></li>
                            <li><a href="#team-section">TEAM</a></li>
                            <li><a href="#our-client">CLIENTS</a></li>
                            <li><a href="#contact-section">CONTACT</a></li>
                         </ul>
                       </div><!-- /.navbar-collapse -->
                    </nav> <!-- /.theme-feature-menu -->
                </div>
            </header> <!-- /.theme-main-header -->

            <!--
            =====================================================
                Theme Main SLider
            =====================================================
            -->
            <div id="home" class="banner">
                <div class="rev_slider_wrapper" style="overflow: visible; height:700px;">
                    <!-- START REVOLUTION SLIDER 5.0.7 auto mode -->
                        <div id="main-banner-slider" class="rev_slider video-slider-initialised tp-simpleresponsive" data-version="5.0.7" style="margin-top: 0px; margin-bottom: 0px;height:700px;">
                            <ul class="tp-revslider-mainul" style="visibility: visible;display: block; overflow: hidden; width: 695px; height: 100%; max-height: none;left: 0px;">

                                <!-- SLIDE1  -->
                                <li data-index="rs-280" data-transition="fade" data-slotamount="default" data-easein="default" data-easeout="default" data-masterspeed="default"  data-title="Title Goes Here" data-description="">
                                    <!-- MAIN IMAGE -->
                                    <img src="https://5.imimg.com/data5/OK/KT/GLADMIN-2825054/bike-brake-linings-500x500.png"  alt="image" class="rev-slidebg" data-bgparallax="3" data-bgposition="center center" data-duration="20000" data-ease="Linear.easeNone" data-kenburns="on" data-no-retina="" data-offsetend="0 0" data-offsetstart="0 0" data-rotateend="0" data-rotatestart="0" data-scaleend="100" data-scalestart="140">
                                    <!-- LAYERS -->

                                    <!-- LAYER NR. 1 -->
                                    <div class="tp-caption" 
                                        data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                                        data-y="['middle','middle','middle','middle']" data-voffset="['-58','-58','0','-50']" 
                                        data-width="none"
                                        data-height="none"
                                        data-whitespace="nowrap"
                                        data-transform_idle="o:1;"
                             
                                        data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" 
                                        data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                                        data-mask_in="x:0px;y:[100%];" 
                                        data-mask_out="x:inherit;y:inherit;" 
                                        data-start="1000" 
                                        data-splitin="none" 
                                        data-splitout="none" 
                                        data-responsive_offset="on" 
                                        style="z-index: 6; white-space: nowrap;">
                                        <h1>{{$companydetail->companyname}}</h1>
                                    </div>

                                    <!-- LAYER NR. 2 -->
                        <!--            <div class="tp-caption" 
                                        data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                                        data-y="['middle','middle','middle','middle']" data-voffset="['-05','-05','63','0']"
                                        data-width="none"
                                        data-height="none"
                                        data-whitespace="nowrap"
                                        data-transform_idle="o:1;"
                             
                                        data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" 
                                        data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                                        data-mask_in="x:0px;y:[100%];" 
                                        data-mask_out="x:inherit;y:inherit;" 
                                        data-start="2000" 
                                        data-splitin="none" 
                                        data-splitout="none" 
                                        data-responsive_offset="on" 
                                        style="z-index: 6; white-space: nowrap;">
                                        <h6></h6>
                                    </div>

                                    <-- LAYER NR. 3 -->
                        -->
                                    <!-- LAYER NR. 3 -->
                                    <div class="tp-caption"
                                        data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                                        data-y="['middle','middle','middle','middle']" data-voffset="['52','52','125','80']"
                                        data-transform_idle="o:1;"
                             
                                        data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" 
                                        data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                                        data-mask_in="x:0px;y:[100%];" 
                                        data-mask_out="x:inherit;y:inherit;" 
                                        data-start="3000" 
                                        data-splitin="none" 
                                        data-splitout="none" 
                                        data-responsive_offset="on">
                                        <a href="contact-us.html" class="project-button hvr-bounce-to-right">Our Projects</a>
                                    </div>
                                
                                </li>

                                <!-- SLIDE2  -->
                                <li data-index="rs-20" data-transition="fade" data-slotamount="default" data-easein="default" data-easeout="default" data-masterspeed="default"  data-thumb="video/drinkwinecover.jpg"  data-rotate="0"  data-saveperformance="off"  data-title="Title Goes Here" data-description="">
                                    <!-- MAIN IMAGE -->
                                    <img src="https://cpimg.tistatic.com/01356719/b/4/Mitsubishi-Canter-Truck-Mirror.jpg"  alt="image" class="rehttps://cpimg.tistatic.com/01356719/b/4/Mitsubishi-Canter-Truck-Mirror.jpgv-slidebg" data-bgparallax="3" data-bgposition="center center" data-duration="20000" data-ease="Linear.easeNone" data-kenburns="on" data-no-retina="" data-offsetend="0 0" data-offsetstart="0 0" data-rotateend="0" data-rotatestart="0" data-scaleend="100" data-scalestart="140">
                                    <!-- LAYERS -->

                                    <!-- BACKGROUND VIDEO LAYER -->
                                    <div class="rs-background-video-layer" 
                                        data-forcerewind="on" 
                                        data-volume="mute" 
                                        data-videowidth="100%" 
                                        data-videoheight="100%" 
                                        data-videomp4="video/Drink-Wine.mp4" 
                                        data-videopreload="preload" 
                                        data-videoloop="loopandnoslidestop" 
                                        data-forceCover="1" 
                                        data-aspectratio="16:9" 
                                        data-autoplay="true" 
                                        data-autoplayonlyfirsttime="false" 
                                        data-nextslideatend="true" 
                                    ></div>

                                    <!-- LAYER NR. 1 -->
                                    <div class="tp-caption" 
                                        data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                                        data-y="['middle','middle','middle','middle']" data-voffset="['-58','-33','-33','-100']" 
                                        data-width="none"
                                        data-height="none"
                                        data-whitespace="nowrap"
                                        data-transform_idle="o:1;"
                             
                                        data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" 
                                        data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                                        data-mask_in="x:0px;y:[100%];" 
                                        data-mask_out="x:inherit;y:inherit;" 
                                        data-start="1000" 
                                        data-splitin="none" 
                                        data-splitout="none" 
                                        data-responsive_offset="on" 
                                        style="z-index: 6; white-space: nowrap;">
                                        <h1>{{$companydetail->companyname}}</h1>
                                    </div>

                                    <!-- LAYER NR. 2 -->
                            <!--        <div class="tp-caption" 
                                        data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                                        data-y="['middle','middle','middle','middle']" data-voffset="['-05','93','93','20']"
                                        data-width="none"
                                        data-height="none"
                                        data-whitespace="nowrap"
                                        data-transform_idle="o:1;"
                             
                                        data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" 
                                        data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                                        data-mask_in="x:0px;y:[100%];" 
                                        data-mask_out="x:inherit;y:inherit;" 
                                        data-start="2000" 
                                        data-splitin="none" 
                                        data-splitout="none" 
                                        data-responsive_offset="on" 
                                        style="z-index: 6; white-space: nowrap;">
                                        <h6></h6>
                                    </div>

                                    <-- LAYER NR. 3 -->
                                    <!-- LAYER NR. 3 -->
                                    <div class="tp-caption"
                                        data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                                        data-y="['middle','middle','middle','middle']" data-voffset="['52','185','185','105']"
                                        data-transform_idle="o:1;"
                             
                                        data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" 
                                        data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                                        data-mask_in="x:0px;y:[100%];" 
                                        data-mask_out="x:inherit;y:inherit;" 
                                        data-start="3000" 
                                        data-splitin="none" 
                                        data-splitout="none" 
                                        data-responsive_offset="on">
                                        <a href="contact-us.html" class="project-button hvr-bounce-to-right">Our Projects</a>
                                    </div>
                                </li>

                                <!-- SLIDE3  -->
                                <li data-index="rs-18" data-transition="fade" data-slotamount="default" data-easein="default" data-easeout="default" data-masterspeed="default"  data-thumb="images/home/slide-2.jpg"  data-rotate="0"  data-saveperformance="off"  data-title="Title Goes Here" data-description="">
                                    <!-- MAIN IMAGE -->
                                    <img src="https://4.imimg.com/data4/UH/GP/NSDMERP-65125850/breaklining-250x250.png"  alt="image" class="rev-slidebg" data-bgparallax="3" data-bgposition="center center" data-duration="20000" data-ease="Linear.easeNone" data-kenburns="on" data-no-retina="" data-offsetend="0 0" data-offsetstart="0 0" data-rotateend="0" data-rotatestart="0" data-scaleend="100" data-scalestart="140">
                                    <!-- LAYERS -->

                                    <!-- LAYER NR. 1 -->
                                    <div class="tp-caption" 
                                        data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                                        data-y="['middle','middle','middle','middle']" data-voffset="['-58','-33','-33','-100']" 
                                        data-width="none"
                                        data-height="none"
                                        data-whitespace="nowrap"
                                        data-transform_idle="o:1;"
                             
                                        data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" 
                                        data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                                        data-mask_in="x:0px;y:[100%];" 
                                        data-mask_out="x:inherit;y:inherit;" 
                                        data-start="1000" 
                                        data-splitin="none" 
                                        data-splitout="none" 
                                        data-responsive_offset="on" 
                                        style="z-index: 6; white-space: nowrap;">
                                        <h1>{{$companydetail->companyname}}</h1>
                                    </div>

                                    <!-- LAYER NR. 2 -->
                            <!--        <div class="tp-caption" 
                                        data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                                        data-y="['middle','middle','middle','middle']" data-voffset="['-05','93','93','20']"
                                        data-width="none"
                                        data-height="none"
                                        data-whitespace="nowrap"
                                        data-transform_idle="o:1;"
                             
                                        data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" 
                                        data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                                        data-mask_in="x:0px;y:[100%];" 
                                        data-mask_out="x:inherit;y:inherit;" 
                                        data-start="2000" 
                                        data-splitin="none" 
                                        data-splitout="none" 
                                        data-responsive_offset="on" 
                                        style="z-index: 6; white-space: nowrap;">
                                        <h6></h6>
                                    </div>

                                    <-- LAYER NR. 3 -->
                                    <!-- LAYER NR. 3 -->
\                                    <div class="tp-caption"
                                        data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                                        data-y="['middle','middle','middle','middle']" data-voffset="['52','185','185','105']"
                                        data-transform_idle="o:1;"
                             
                                        data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" 
                                        data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                                        data-mask_in="x:0px;y:[100%];" 
                                        data-mask_out="x:inherit;y:inherit;" 
                                        data-start="3000" 
                                        data-splitin="none" 
                                        data-splitout="none" 
                                        data-responsive_offset="on">
                                        <a href="contact-us.html" class="project-button hvr-bounce-to-right">Our Projects</a>
                                    </div>
                                </li>
                            </ul>   
                        </div>
                    </div><!-- END REVOLUTION SLIDER -->
            </div> <!--  /#banner -->


            <!--
            =====================================================
                About us Section
            =====================================================
            -->
            <section id="about-us">
                <div class="container">
                    <div class="theme-title">
                        <h2>ABOUT {{$companydetail->companyname}}</h2>
                        <p>{{$companydetail->companyname}} Products was established in the year 1971. We are a leading Manufacturer, Supplier of Brake Shoes, Brake Linings. The products we manufacture are in compliance with industry laid norms and guidelines. We take into consideration all the technical details provided to us by our clients while fabricating these products.</p>
                    </div> <!-- /.theme-title -->

                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-6">
                            <div class="single-about-content">
                                <div class="icon round-border tran3s">
                                    <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                </div>
                                <h5><a href="#" class="tran3s">Web Development</a></h5>
                                <p>Lorem ipsum dolor sit amet, consect et adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
                                <a href="#" class="more tran3s hvr-bounce-to-right">More Details</a>
                            </div> <!-- /.single-about-content -->
                        </div> <!-- /.col -->

                        <div class="col-lg-3 col-md-3 col-sm-6">
                            <div class="single-about-content">
                                <div class="icon round-border tran3s">
                                    <i class="fa fa-camera" aria-hidden="true"></i>
                                </div>
                                <h5><a href="#" class="tran3s">PHOTOGRAPHY</a></h5>
                                <p>Lorem ipsum dolor sit amet, consect et adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
                                <a href="#" class="more tran3s hvr-bounce-to-right">More Details</a>
                            </div> <!-- /.single-about-content -->
                        </div> <!-- /.col -->

                        <div class="col-lg-3 col-md-3 col-sm-6">
                            <div class="single-about-content">
                                <div class="icon round-border tran3s">
                                    <i class="fa fa-life-ring" aria-hidden="true"></i>
                                </div>
                                <h5><a href="#" class="tran3s">Digital Media</a></h5>
                                <p>Lorem ipsum dolor sit amet, consect et adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
                                <a href="#" class="more tran3s hvr-bounce-to-right">More Details</a>
                            </div> <!-- /.single-about-content -->
                        </div> <!-- /.col -->

                        <div class="col-lg-3 col-md-3 col-sm-6">
                            <div class="single-about-content">
                                <div class="icon round-border tran3s">
                                    <i class="fa fa-line-chart" aria-hidden="true"></i>
                                </div>
                                <h5><a href="#" class="tran3s">Online Marketing</a></h5>
                                <p>Lorem ipsum dolor sit amet, consect et adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
                                <a href="#" class="more tran3s hvr-bounce-to-right">More Details</a>
                            </div> <!-- /.single-about-content -->
                        </div> <!-- /.col -->
                    </div> <!-- /.row -->
                </div> <!-- /.container -->
            </section> <!-- /#about-us -->

            <!--
            =====================================================
                Service Section
            =====================================================
            -->
            <div id="service-section">
                <div class="container">
                    <div class="theme-title">
                        <h2>SERVICES WE PROVIDE</h2>
                        <p>“Don’t try to tell the customer what he wants. If you want to be smart, be smart in the shower. Then get out, go to work, and serve the customer!”</p>
                    </div> <!-- /.theme-title -->

                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <div class="single-service-content">
                                <div class="icon-heading tran3s">
                                    <div class="icon tran3s"><i class="fa fa-paint-brush" aria-hidden="true"></i></div>
                                    <h6><a href="#" class="tran3s">Brake Parts</a></h6>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur scing elit, sed do eiusmod, tempor incididunt labore et dolore magna aliqua. Ut enim ad minim ut veniam, quis nostrud exercitation ullamco aliquip ex ea commodo consequat. </p>
                            </div> <!-- /.single-service-content -->
                        </div> <!-- /.col-lg -->

                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <div class="single-service-content">
                                <div class="icon-heading tran3s">
                                    <div class="icon tran3s"><i class="fa fa-camera" aria-hidden="true"></i></div>
                                    <h6><a href="#" class="tran3s">Other Parts</a></h6>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur scing elit, sed do eiusmod, tempor incididunt labore et dolore magna aliqua. Ut enim ad minim ut veniam, quis nostrud exercitation ullamco aliquip ex ea commodo consequat. </p>
                            </div> <!-- /.single-service-content -->
                        </div> <!-- /.col-lg -->

                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <div class="single-service-content">
                                <div class="icon-heading tran3s">
                                    <div class="icon tran3s"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></div>
                                    <h6><a href="#" class="tran3s">Web Development</a></h6>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur scing elit, sed do eiusmod, tempor incididunt labore et dolore magna aliqua. Ut enim ad minim ut veniam, quis nostrud exercitation ullamco aliquip ex ea commodo consequat. </p>
                            </div> <!-- /.single-service-content -->
                        </div> <!-- /.col-lg -->

                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <div class="single-service-content">
                                <div class="icon-heading tran3s">
                                    <div class="icon tran3s"><i class="fa fa-line-chart" aria-hidden="true"></i></div>
                                    <h6><a href="#" class="tran3s">Online Marketing</a></h6>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur scing elit, sed do eiusmod, tempor incididunt labore et dolore magna aliqua. Ut enim ad minim ut veniam, quis nostrud exercitation ullamco aliquip ex ea commodo consequat. </p>
                            </div> <!-- /.single-service-content -->
                        </div> <!-- /.col-lg -->

                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <div class="single-service-content">
                                <div class="icon-heading tran3s">
                                    <div class="icon tran3s"><i class="fa fa-life-ring" aria-hidden="true"></i></div>
                                    <h6><a href="#" class="tran3s">Digital Media</a></h6>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur scing elit, sed do eiusmod, tempor incididunt labore et dolore magna aliqua. Ut enim ad minim ut veniam, quis nostrud exercitation ullamco aliquip ex ea commodo consequat. </p>
                            </div> <!-- /.single-service-content -->
                        </div> <!-- /.col-lg -->

                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <div class="single-service-content">
                                <div class="icon-heading tran3s">
                                    <div class="icon tran3s"><i class="fa fa-anchor" aria-hidden="true"></i></div>
                                    <h6><a href="#" class="tran3s">Support</a></h6>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur scing elit, sed do eiusmod, tempor incididunt labore et dolore magna aliqua. Ut enim ad minim ut veniam, quis nostrud exercitation ullamco aliquip ex ea commodo consequat. </p>
                            </div> <!-- /.single-service-content -->
                        </div> <!-- /.col-lg -->
                    </div> <!-- /.row -->
                </div> <!-- /.container -->
            </div> <!-- /#service-section -->


            <!--
            =====================================================
                Project Section
            =====================================================
            -->
            <div id="project-section">
                <div class="container">
                    <div class="theme-title">
                        <h2>PRODUCTS</h2>
                        <p>We use automated machinery and equipment in our manufacturing unit to produce these products. All the stages of production and post production are effectively supervised by our team of professionals. Their motivated spirits and sincere attitude are the reasons of our success in the domestic market.</p>
                    </div> <!-- /.theme-title -->

                    <div class="project-menu">
                        <ul>
                            <li class="filter active tran3s" data-filter="all">All</li>
                            <li class="filter tran3s" data-filter=".web">Brake Shoes</li>
                            <li class="filter tran3s" data-filter=".photo">Brake Lining</li>
                            <li class="filter tran3s" data-filter=".webd">Bike Brake Lining</li>
                            <li class="filter tran3s" data-filter=".om">Industrial Brake Lining</li>
                            <li class="filter tran3s" data-filter=".dmedia">Fail Safe Brake Lining</li>
                            <li class="filter tran3s" data-filter=".support">Roll Brake Lining</li>
                        </ul>
                    </div>

                    <div class="project-gallery clear-fix">
                        <div class="mix grid-item photo om dmedia">
                            <div class="single-img">
                                <img src="https://3.imimg.com/data3/XN/FB/MY-2809961/brake-shoes-500x500.jpg" alt="Image" height="250" width="250">
                                <div class="opacity">
                                    <div class="border-shape"><div><div>
                                        <h6><a href="#"></a>Brake Shoes</h6>
                                        <ul>
                                            <li>Service /</li>
                                            <li>Product </li>
                                        </ul></div></div>
                                    </div> <!-- /.border-shape -->
                                </div> <!-- /.opacity -->
                            </div> <!-- /.single-img -->
                        </div> <!-- /.grid-item -->

                        <div class="mix grid-item web webd dmedia support">
                            <div class="single-img">
                                <img src="https://3.imimg.com/data3/GC/IX/MY-3737801/mercedes-brake-lining-250x250.jpg" alt="Image" height="250" width="250">
                                <div class="opacity">
                                    <div class="border-shape"><div><div>
                                        <h6><a href="#">Brake Lining</a></h6>
                                        <ul>
                                            <li>Service /</li>
                                            <li>Product </li>
                                        </ul></div></div>
                                    </div> <!-- /.border-shape -->
                                </div> <!-- /.opacity -->
                            </div> <!-- /.single-img -->
                        </div> <!-- /.grid-item -->

                        <div class="mix grid-item photo webd support">
                            <div class="single-img">
                                <img src="https://5.imimg.com/data5/WY/XB/MY-424719/brake-shoe-250x250.jpg" alt="Image"height="https://5.imimg.com/data5/WY/XB/MY-424719/brake-shoe-250x250.jpg" width="250">
                                <div class="opacity">
                                    <div class="border-shape"><div><div>
                                        <h6><a href="#">Bike Brake Lining</a></h6>
                                        <ul>
                                            <li>Service /</li>
                                            <li>Product </li>
                                        </ul></div></div>
                                    </div> <!-- /.border-shape -->
                                </div> <!-- /.opacity -->
                            </div> <!-- /.single-img -->
                        </div> <!-- /.grid-item -->

                        <div class="mix grid-item web om">
                            <div class="single-img">
                                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQQkUo7ABnbqbu1Ymr1gZMcWqMqcMGyCdTU9s45zPgN06FfQAHz" alt="Image" height="250" width="250">
                                <div class="opacity">
                                    <div class="border-shape"><div><div>
                                        <h6><a href="#">Industrial Brake Lining</a></h6>
                                        <ul>
                                            <li>Service /</li>
                                            <li>Product /</li>
                                        </ul></div></div>
                                    </div> <!-- /.border-shape -->
                                </div> <!-- /.opacity -->
                            </div> <!-- /.single-img -->
                        </div> <!-- /.grid-item -->

                        <div class="mix grid-item photo webd dmedia om">
                            <div class="single-img">
                                <img src="https://5.imimg.com/data5/MH/KD/MY-2060395/pethe-industrial-brake-250x250.png" alt="Image" height="250" width="250">
                                <div class="opacity">
                                    <div class="border-shape"><div><div>
                                        <h6><a href="#">Fail Safe Brake Lining</a></h6>
                                        <ul>
                                            <li>Service /</li>
                                            <li>Product /</li>
                                        </ul></div></div>
                                    </div> <!-- /.border-shape -->
                                </div> <!-- /.opacity -->
                            </div> <!-- /.single-img -->
                        </div> <!-- /.grid-item -->

                        <div class="mix grid-item web webd dmedia om">
                            <div class="single-img">
                                <img src="https://5.imimg.com/data5/LO/SI/MY-14242303/roll-brake-linings-500x500.jpg" alt="Image" height="250" width="250">
                                <div class="opacity">
                                    <div class="border-shape"><div><div>
                                        <h6><a href="#">Roll Brake Lining</a></h6>
                                        <ul>
                                            <li>Service /</li>
                                            <li>Product /</li>
                                        </ul></div></div>
                                    </div> <!-- /.border-shape -->
                                </div> <!-- /.opacity -->
                            </div> <!-- /.single-img -->
                        </div> <!-- /.grid-item -->

                    <!--    <div class="mix grid-item photo om support">
                            <div class="single-img">
                                <img src="images/project/7.jpg" alt="Image">
                                <div class="opacity">
                                    <div class="border-shape"><div><div>
                                        <h6><a href="#">Sweet Photo</a></h6>
                                        <ul>
                                            <li>Business /</li>
                                            <li>Service /</li>
                                            <li>Product /</li>
                                            <li>Template</li>
                                        </ul></div></div>
                                    </div> 
                                </div> 
                            </div> 
                        </div> 

                        <div class="mix grid-item web support">
                            <div class="single-img">
                                <img src="images/project/8.jpg" alt="Image">
                                <div class="opacity">
                                    <div class="border-shape"><div><div>
                                        <h6><a href="#">Sweet Photo</a></h6>
                                        <ul>
                                            <li>Business /</li>
                                            <li>Service /</li>
                                            <li>Product /</li>
                                            <li>Template</li>
                                        </ul></div></div>
                                    </div> 
                                </div> 
                            </div> 
                        </div> 

                        <div class="mix grid-item photo webd dmedia support">
                            <div class="single-img">
                                <img src="images/project/9.jpg" alt="Image">
                                <div class="opacity">
                                    <div class="border-shape"><div><div>
                                        <h6><a href="#">Sweet Photo</a></h6>
                                        <ul>
                                            <li>Business /</li>
                                            <li>Service /</li>
                                            <li>Product /</li>
                                            <li>Template</li>
                                        </ul></div></div>
                                    </div> 
                                </div> 
                            </div> 
                        </div> -->

                    </div> <!-- /.project-gallery -->
                </div> <!-- /.container -->
            </div> <!-- /#project-section -->

            <!--
            =====================================================
                Page middle banner
            =====================================================
            -->

            <div class="page-middle-banner">
                <div class="opacity">
                    <h3>We Create Creative <span class="p-color">&amp;</span> Best Unique Design</h3>
                    <a href="#" class="hvr-bounce-to-right">Let's Work Together</a>
                </div> <!-- /.opacity -->
            </div> <!-- /.page-middle-banner -->

            <!--
            =====================================================
                Team Section
            =====================================================
            -->
            <div id="team-section">
                <div class="container">
                    <div class="theme-title">
                        <h2>Our Team</h2>
                        <p>We don't just teach product marketing- It's how we built our company.</p>
                    </div> <!-- /.theme-title -->

                    <div class="clear-fix team-member-wrapper">
                        <div class="float-left">
                            <div class="single-team-member">
                                <div class="img">
                                    <img src="{{ asset('microweb/images/team/1.jpg') }}" alt="Image">
                                    <div class="opacity tran4s">
                                        <h4>Sant Kumar Sharma</h4>
                                        <span>CEO</span>
                                        <p>On the other hand, We denounce ut with righteo indignation and dislike men who are so beguiled and demoralized.</p>
                                    </div>
                                </div> <!-- /.img -->
                                <div class="member-name">
                                    <h6>Sant Kumar Sharma</h6>
                                    <p>CEO</p>
                                    <ul>
                                        <li><a href="#" class="tran3s round-border"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                        <li><a href="#" class="tran3s round-border"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                        <li><a href="#" class="tran3s round-border"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                                        <li><a href="#" class="tran3s round-border"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div> <!-- /.member-name -->
                            </div> <!-- /.single-team-member -->
                        </div> <!-- /float-left -->
<!--
                        <div class="float-left">
                            <div class="single-team-member">
                                <div class="img">
                                    <img src="images/team/2.jpg" alt="Image">
                                    <div class="opacity tran4s">
                                        <h4>Holly Vincenzini</h4>
                                        <span>Media Partner</span>
                                        <p>On the other hand, We denounce ut with righteo indignation and dislike men who are so beguiled and demoralized.</p>
                                    </div>
                                </div> <-- /.img -->
                                </div> --><!-- /.img -->
            <!--                    <div class="member-name">
                                    <h6>Holly Vincenzini</h6>
                                    <p>Media Partner</p>
                                    <ul>
                                        <li><a href="#" class="tran3s round-border"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                        <li><a href="#" class="tran3s round-border"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                        <li><a href="#" class="tran3s round-border"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                                        <li><a href="#" class="tran3s round-border"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div> <-- /.member-name -->
                                </div> --><!-- /.member-name -->
                            </div> <!-- /.single-team-member -->
                        </div> <!-- /float-left -->
<!--
                        <div class="float-left">
                            <div class="single-team-member">
                                <div class="img">
                                    <img src="images/team/3.jpg" alt="Image">
                                    <div class="opacity tran4s">
                                        <h4>Ramirez Minita</h4>
                                        <span>Graphic Design</span>
                                        <p>On the other hand, We denounce ut with righteo indignation and dislike men who are so beguiled and demoralized.</p>
                                    </div>
                                </div> <-- /.img -->
                                </div> --><!-- /.img -->
        <!--                        <div class="member-name">
                                    <h6>Ramirez Minita</h6>
                                    <p>Graphic Design</p>
                                    <ul>
                                        <li><a href="#" class="tran3s round-border"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                        <li><a href="#" class="tran3s round-border"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                        <li><a href="#" class="tran3s round-border"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                                        <li><a href="#" class="tran3s round-border"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div> <-- /.member-name -->
                                </div> --><!-- /.member-name -->
                            </div> <!-- /.single-team-member -->
                        </div> <!-- /float-left -->
                    </div> <!-- /.team-member-wrapper -->
                </div> <!-- /.conatiner -->
            </div> <!-- /#team-section -->


            <!--
            =====================================================
                Skill Section
            =====================================================
            -->
            <!--
            <div id="skill-section">
                <div class="container">
                    <div class="clear-fix">
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <div class="img"><img src="images/home/2.jpg" alt="Image"></div>
                        </div> <-- /.col- -->
<!--
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <div class="skills-progress skills">
                                <div class="habilidades_contenedor">
                                    <div class="codeconSkills">
                                        <div class="codeconSkillbar">
                                            <div class="skill-text">
                                                <span class="codeconSkillArea">Web Development</span>
                                            </div>
                                            <div class="skillBar" data-percent="89%">
                                                <span class="PercentText">89%</span>
                                            </div>
                                        </div>
                                        <div class="codeconSkillbar">
                                            <div class="skill-text">
                                                <span class="codeconSkillArea ">Online Marketing</span>
                                                
                                            </div>
                                            <div class="skillBar" data-percent="58%">
                                                <span class="PercentText">58%</span>
                                            </div>
                                        </div>
                                        <div class="codeconSkillbar">
                                            <div class="skill-text">
                                                <span class="codeconSkillArea">Digital Media</span>
                                                
                                            </div>
                                            <div class="skillBar" data-percent="49%">
                                                <span class="PercentText">49%</span>
                                            </div>
                                        </div>
                                        <div class="codeconSkillbar">
                                            <div class="skill-text">
                                                <span class="codeconSkillArea">Photography</span>
                                                
                                            </div>
                                            <div class="skillBar" data-percent="76%">
                                                <span class="PercentText">76%</span>
                                            </div>
                                        </div>
                                        <div class="codeconSkillbar">
                                            <div class="skill-text">
                                                <span class="codeconSkillArea">Creative Design</span>
                                                
                                            </div>
                                            <div class="skillBar" data-percent="64%">
                                                <span class="PercentText ">64%</span>
                                            </div>
                                        </div>
                                    </div> <!- /.codeconSkills -->
                               </div> <!-- /.habilidades_contenedor -->
                            </div> <!-- /.skills-progress -->
                        </div>
                    </div> <!-- /.clear-fix -->
                </div> <!-- /.container -->
            </div> <!-- /#skill-section -->


            <!--
            =====================================================
                Our Client
            =====================================================
            -->
            <div id="our-client">
                <div class="container">
                    <div class="theme-title">
                        <h2>OUR HAPPY CLIENTS</h2>
                        <p>“Satisfied customer is the best source of advertisement” </p>
                    </div> <!-- /.theme-title -->

                    <div class="client-slider">
                        <div class="item">
                            <img src="{{ asset('microweb/images/home/c1.jpg') }}" alt="Client">
                            <p>Our successful construction approach is based on aggressive subcontractor administration, employ-ment of competent personnel, accurate schedule control, quality control and cost control. We employ only qualified subcontractors who share our goal in creating quality projects.</p>
                            <h6>- Spryte Loriano -</h6>
                        </div> <!-- /.item -->
                        <div class="item">
                            <img src="{{ asset('microweb/images/home/c2.jpg') }}" alt="Client">
                            <p>Our successful construction approach is based on aggressive subcontractor administration, employ-ment of competent personnel, accurate schedule control, quality control and cost control. We employ only qualified subcontractors who share our goal in creating quality projects.</p>
                            <h6>- Spryte Loriano -</h6>
                        </div> <!-- /.item -->
                        <div class="item">
                            <img src="{{ asset('microweb/images/home/c3.jpg') }}" alt="Client">
                            <p>Our successful construction approach is based on aggressive subcontractor administration, employ-ment of competent personnel, accurate schedule control, quality control and cost control. We employ only qualified subcontractors who share our goal in creating quality projects.</p>
                            <h6>- Spryte Loriano -</h6>
                        </div> <!-- /.item -->
                    </div> <!-- /.client-slider -->
                </div> <!-- /.container -->
            </div> <!-- /#our-client -->

            

            <!--
            =====================================================
                Pricing Section
            =====================================================
            -->
            <!--
            <div id="pricing-section">
                <div class="container">
                    <div class="clear-fix">
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <div class="single-price-table hvr-float-shadow">
                                <h4>Basic</h4>
                                <p>The best to start</p>
                                <strong class="color1">$9.99 <span>/monthly</span></strong>
                                <ul>
                                    <li>3,600 Keywords</li>
                                    <li>50 Social Accounts</li>
                                    <li>25 Analytics Campaigns</li>
                                    <li>45 Email Accounts</li>
                                    <li>24/7 Support</li>
                                </ul>
                                <a href="#" class="tran3s p-color-bg">BUY IT NOW</a>
                            </div> <-- /.single-price-table -->
                            </div>--> <!-- /.single-price-table -->
                        </div> <!-- /.col -->
<!--
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <div class="single-price-table hvr-float-shadow">
                                <h4>Advanced</h4>
                                <p>The best to start</p>
                                <strong class="color2">$39.99 <span>/monthly</span></strong>
                                <ul>
                                    <li>3,600 Keywords</li>
                                    <li>50 Social Accounts</li>
                                    <li>25 Analytics Campaigns</li>
                                    <li>45 Email Accounts</li>
                                    <li>24/7 Support</li>
                                </ul>
                                <a href="#" class="tran3s p-color-bg">BUY IT NOW</a>
                            </div> <-- /.single-price-table -->
                            </div>--> <!-- /.single-price-table -->
                        </div> <!-- /.col -->
<!--
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <div class="single-price-table hvr-float-shadow">
                                <h4>PREMIUM</h4>
                                <p>The best to start</p>
                                <strong class="color3">$59.99 <span>/monthly</span></strong>
                                <ul>
                                    <li>3,600 Keywords</li>
                                    <li>50 Social Accounts</li>
                                    <li>25 Analytics Campaigns</li>
                                    <li>45 Email Accounts</li>
                                    <li>24/7 Support</li>
                                </ul>
                                <a href="#" class="tran3s p-color-bg">BUY IT NOW</a>
                            </div> <-- /.single-price-table -->
                            </div>--> <!-- /.single-price-table -->
                        </div> <!-- /.col -->
                    </div>
                </div> <!-- /.container -->
            </div> <!-- /#pricing-section -->


            <!--
            =====================================================
                Blog Section
            =====================================================
            -->
            <!--
            <div id="blog-section">
                <div class="container">
                    <div class="theme-title">
                        <h2>OUR LATEST Blog</h2>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type.</p>
                    </div> <-- /.theme-title -->
                    </div> --><!-- /.theme-title -->
<!--
                    <div class="clear-fix">
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <div class="single-news-item">
                                <div class="img"><img src="images/blog/1.jpg" alt="Image">
                                    <a href="blog-details.html" class="opacity tran4s"><i class="fa fa-link" aria-hidden="true"></i></a>
                                </div> <-- /.img -->
                                </div>--> <!-- /.img -->
<!--
                                <div class="post">
                                    <h6><a href="blog-details.html" class="tran3s">Playback: Akufo-Addo speaks to business community</a></h6>
                                    <a href="blog-details.html">Posted by <span class="p-color">admin</span>  at 04 Feb, 2017</a>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam sagittis iaculis velit in tristique. Curabitur ac urna urna sed accumsan... <a href="blog-details.html" class="tran3s">Read More</a></p>
                                </div> <-- /.post -->
                                </div>--> <!-- /.post -->
                            </div> <!-- /.single-news-item -->
                        </div> <!-- /.col- -->
<!--
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <div class="single-news-item">
                                <div class="img"><img src="images/blog/2.jpg" alt="Image">
                                    <a href="blog-details.html" class="opacity tran4s"><i class="fa fa-link" aria-hidden="true"></i></a>
                                </div> <-- /.img -->
                                </div>--> <!-- /.img -->
<!--
                                <div class="post">
                                    <h6><a href="blog-details.html" class="tran3s">Playback: Akufo-Addo speaks to business community</a></h6>
                                    <a href="blog-details.html">Posted by <span class="p-color">admin</span>  at 04 Feb, 2017</a>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam sagittis iaculis velit in tristique. Curabitur ac urna urna sed accumsan... <a href="blog-details.html" class="tran3s">Read More</a></p>
                                </div> <-- /.post -->
                                </div>--> <!-- /.post -->
                            </div> <!-- /.single-news-item -->
                        </div> <!-- /.col- -->
<!--
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <div class="single-news-item">
                                <div class="img"><img src="images/blog/3.jpg" alt="Image">
                                    <a href="blog-details.html" class="opacity tran4s"><i class="fa fa-link" aria-hidden="true"></i></a>
                                </div> <-- /.img -->
                               </div>--> <!-- /.img -->
<!--
                                <div class="post">
                                    <h6><a href="blog-details.html" class="tran3s">Playback: Akufo-Addo speaks to business community</a></h6>
                                    <a href="blog-details.html">Posted by <span class="p-color">admin</span>  at 04 Feb, 2017</a>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam sagittis iaculis velit in tristique. Curabitur ac urna urna sed accumsan... <a href="blog-details.html" class="tran3s">Read More</a></p>
                                </div> <-- /.post -->
                                </div>--> <!-- /.post -->
                            </div> <!-- /.single-news-item -->
                        </div> <!-- /.col- -->
                    </div> <!-- /.clear-fix -->
                </div> <!-- /.container -->
            </div> <!-- /#blog-section -->


            <!--
            =====================================================
                Partner Section
            =====================================================
            -->
            <!--
            <div id="partner-section">
                <div class="container">
                    <div id="partner_logo" class="owl-carousel owl-theme">
                        <div class="item"><img src="images/logo/p1.png" alt="logo"></div>
                        <div class="item"><img src="images/logo/p2.png" alt="logo"></div>
                        <div class="item"><img src="images/logo/p3.png" alt="logo"></div>
                        <div class="item"><img src="images/logo/p4.png" alt="logo"></div>
                        <div class="item"><img src="images/logo/p5.png" alt="logo"></div>
                        <div class="item"><img src="images/logo/p2.png" alt="logo"></div>
                    </div> <-- End .partner_logo -->
                    </div>--> <!-- End .partner_logo -->
                </div> <!-- /.container -->
            </div> <!-- /#partner-section -->


            <!--
            =====================================================
                Contact Section
            =====================================================
            -->
            <div id="contact-section">
                <div class="container">
                    <div class="clear-fix contact-address-content">
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <div class="left-side">
                                <h2>Contact Info</h2>
                                <p>Sharma Auto Products was established in the year 1971. We are a leading Manufacturer, Supplier of Brake Shoes, Brake Linings.</p>

                                <ul>
                                    <li>
                                        <div class="icon tran3s round-border p-color-bg"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
                                        <h6>Address</h6>
                                        <p>Sharma Auto Products</p>
                                        <p> S.K. Sharma(Owner) </p>
                                        <p>Office Number A-2,Dsidc Industrial Area,Bawana,Sector1,Delhi-110039, India </p>
                                    </li>
                                    <li>
                                        <div class="icon tran3s round-border p-color-bg"><i class="fa fa-phone" aria-hidden="true"></i></div>
                                        <h6>Phone</h6>
                                        <p>08048621967</p>
                                    </li>
                                    <li>
                                        <div class="icon tran3s round-border p-color-bg"><i class="fa fa-envelope-o" aria-hidden="true"></i></div>
                                        <h6>Email</h6>
                                        <p>backpiper.com@gmail.com</p>
                                    </li>
                                </ul>
                            </div> <!-- /.left-side -->
                        </div> <!-- /.col- -->

                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <div class="map-area">
                                <h2>Our Location</h2>
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6992.909035671204!2d77.03489342527185!3d28.795526229414907!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390da9f621ace391%3A0xb18a2afb574734b6!2sSHARMA+AUTO+PRODUCTS!5e0!3m2!1sen!2sin!4v1554711196742!5m2!1sen!2sin" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3499.019341339903!2d77.10664051494741!3d28.71896798238373!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d014e7953d073%3A0xa1df99c8551f3812!2sJagan+Institute+of+Management+Studies+-+JIMS+Rohini!5e0!3m2!1sen!2sin!4v1554708915211!5m2!1sen!2sin" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                            </div> <!-- /.map-area -->
                        </div> <!-- /.col- -->
                    </div> <!-- /.contact-address-content -->


                    <!-- Contact Form -->
                    <div class="send-message">
                        <h2>Send Message</h2>

                        <form action="inc/sendemail.php" class="form-validation" autocomplete="off" method="post">
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                    <div class="single-input">
                                        <input type="text" placeholder="First Name*" name="Fname">
                                    </div> <!-- /.single-input -->
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                    <div class="single-input">
                                        <input type="text" placeholder="Last Name*" name="Lname">
                                    </div> <!-- /.single-input -->
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                    <div class="single-input">
                                        <input type="email" placeholder="Your Email*" name="email">
                                    </div> <!-- /.single-input -->
                                </div>
                            </div> <!-- /.row -->
                            <div class="single-input">
                                <input type="text" placeholder="Subject" name="sub">
                            </div> <!-- /.single-input -->
                            <textarea placeholder="Write Message" name="message"></textarea>

                            <button class="tran3s p-color-bg">Send Message</button>
                        </form>

                        <!-- Contact Form Validation Markup -->
                        <!-- Contact alert -->
                        <div class="alert-wrapper" id="alert-success">
                            <div id="success">
                                <button class="closeAlert"><i class="fa fa-times" aria-hidden="true"></i></button>
                                <div class="wrapper">
                                    <p>Your message was sent successfully.</p>
                                 </div>
                            </div>
                        </div> <!-- End of .alert_wrapper -->
                        <div class="alert-wrapper" id="alert-error">
                            <div id="error">
                                <button class="closeAlert"><i class="fa fa-times" aria-hidden="true"></i></button>
                                <div class="wrapper">
                                    <p>Sorry!Something Went Wrong.</p>
                                </div>
                            </div>
                        </div> <!-- End of .alert_wrapper -->
                    </div> <!-- /.send-message -->
                </div> <!-- /.container -->
            </div> <!-- /#contact-section -->


            <!--
            =====================================================
                Footer
            =====================================================
            -->
            <footer>
                <div class="container">
                    <a href="index.html" class="logo"><img src="https://botw-pd.s3.amazonaws.com/styles/logo-thumbnail/s3/072011/untitled-1_114.png?itok=HxFV7s-N" alt="Logo"></a>

                    <ul>
                        <li><a href="#" class="tran3s round-border"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="#" class="tran3s round-border"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a href="#" class="tran3s round-border"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                        <li><a href="#" class="tran3s round-border"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                        <li><a href="#" class="tran3s round-border"><i class="fa fa-skype" aria-hidden="true"></i></a></li>
                        <li><a href="#" class="tran3s round-border"><i class="fa fa-flickr" aria-hidden="true"></i></a></li>
                        <li><a href="#" class="tran3s round-border"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
                        <li><a href="#" class="tran3s round-border"><i class="fa fa-rss" aria-hidden="true"></i></a></li>
                    </ul>
                <!-- <p>Copyright @2018 All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a></p>  -->
                </div>
            </footer>



            <!-- =============================================
                Loading Transition
            ============================================== -->
            {{-- <div id="loader-wrapper">
                <div id="preloader_1">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div> --}}

            
            <!-- Scroll Top Button -->
            <button class="scroll-top tran3s p-color-bg">
                <i class="fa fa-long-arrow-up" aria-hidden="true"></i>
            </button>



        <!-- Js File_________________________________ -->

        <!-- j Query -->
        <script type="text/javascript" src="{{ asset('microweb/vendor/jquery.2.2.3.min.js') }}"></script>

        <!-- Bootstrap JS -->
        <script type="text/javascript" src="{{ asset('microweb/vendor/bootstrap/bootstrap.min.js') }}"></script>

        <!-- Vendor js _________ -->
        
        <!-- revolution -->
        <script src="{{ asset('microweb/vendor/revolution/jquery.themepunch.tools.min.js') }}"></script>
        <script src="{{ asset('microweb/vendor/revolution/jquery.themepunch.revolution.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('microweb/vendor/revolution/revolution.extension.slideanims.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('microweb/vendor/revolution/revolution.extension.layeranimation.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('microweb/vendor/revolution/revolution.extension.navigation.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('microweb/vendor/revolution/revolution.extension.kenburn.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('microweb/vendor/revolution/revolution.extension.actions.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('microweb/vendor/revolution/revolution.extension.video.min.js') }}"></script>

        <!-- Google map js -->
        <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBZ8VrXgGZ3QSC-0XubNhuB2uKKCwqVaD0&callback=goMap" type="text/javascript"></script> <!-- Gmap Helper -->
        <script src="{{ asset('microweb/vendor/gmaps.min.js') }}"></script>
        <!-- owl.carousel -->
        <script type="text/javascript" src="{{ asset('microweb/vendor/owl-carousel/owl.carousel.min.js') }}"></script>
        <!-- mixitUp -->
        <script type="text/javascript" src="{{ asset('microweb/vendor/jquery.mixitup.min.js') }}"></script>
        <!-- Progress Bar js -->
        <script type="text/javascript" src="{{ asset('microweb/vendor/skills-master/jquery.skills.js') }}"></script>
        <!-- Validation -->
        <script type="text/javascript" src="{{ asset('microweb/vendor/contact-form/validate.js') }}"></script>
        <script type="text/javascript" src="{{ asset('microweb/vendor/contact-form/jquery.form.js') }}"></script>

        <!-- Theme js -->
        <script type="text/javascript" src="{{ asset('microweb/js/theme.js') }}"></script>
        <script type="text/javascript" src="{{ asset('microweb/js/map-script.js') }}"></script>

        </div> <!-- /.main-page-wrapper -->
    </body>
</html>

