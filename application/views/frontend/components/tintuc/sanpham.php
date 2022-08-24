<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Tempo music , trung tâm piano tại Thành Phố Pleiku , Tỉnh Gia Lai">
    <!-- keywords -->
    <meta name="keywords" content="tempo, music, piano, pleiku, gia lai">
    <!-- Page Title -->
    <title>Tempo music</title>
    <!-- Favicon -->
    <link href="<?php echo base_url() ?>public/corporate-agency/images/favicon.ico" rel="icon">
    <!-- Bundle -->
    <link href="<?php echo base_url() ?>public/vendor/css/bundle.min.css" rel="stylesheet">
    <!-- Plugin Css -->
    <link href="<?php echo base_url() ?>public/vendor/css/LineIcons.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>public/vendor/css/revolution-settings.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>public/vendor/css/jquery.fancybox.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>public/vendor/css/owl.carousel.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>public/vendor/css/cubeportfolio.min.css" rel="stylesheet">
    <!-- Style Sheet -->
    <link href="<?php echo base_url() ?>public/corporate-agency/css/navigation.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>public/corporate-agency/css/line-awesome.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>public/corporate-agency/css/style.css" rel="stylesheet">
</head>

<body data-spy="scroll" data-target=".navbar" data-offset="90">

<!-- Loader -->
<div class="loader-bg">
    <div class="loader"></div>
</div>
<!-- Loader ends -->

<!-- START HEADER -->
<header>
    <!--Navigation-->
    <nav class="navbar navbar-top-default navbar-expand-lg navbar-simple nav-line">
        <div class="container">
            <a href="index-<?php echo base_url() ?>trangchu" title="Logo" class="logo">
                <!--Logo Default-->
                <img src="<?php echo base_url() ?>public/corporate-agency/images/logo.png" alt="logo" class="ml-lg-3 m-0">
            </a>

            <!--Nav Links-->
            <div class="collapse navbar-collapse" id="megaone">
                <div class="navbar-nav ml-auto">
                    <a class="nav-link scroll line" href="#slider-section">Trang chủ</a>
                    <a class="nav-link scroll line" href="#about">Về chúng tôi</a>
                    <a class="nav-link scroll line" href="#portfolio">Khóa học</a>
                    <a class="nav-link line" href="<?php echo base_url() ?>sanpham">Hình ảnh</a>
                    <a class="nav-link scroll line" href="#blog">Tin tức</a>
                    <a href="#contact" class="btn btn-large btn-rounded btn-pink nav-button scroll">Liên hệ ngay</a>
                </div>
            </div>
        </div>

        <!--Side Menu Button-->
        <div class="navigation-toggle">
            <ul class="slider-social toggle-btn my-0">
                <li>
                    <a href="javascript:void(0);" class="sidemenu_btn" id="sidemenu_toggle">
                        <span></span>
                        <span></span>
                        <span></span>
                    </a>
                </li>
            </ul>
        </div>
    </nav>

    <!--Side Nav-->
    <div class="side-menu hidden">

        <div class="mega-title" id="mega-title"><h2 class="inner-mega-title">Tempo music</h2></div>

        <span id="btn_sideNavClose">
          <i class="las la-times btn-close"></i>
        </span>
        <div class="inner-wrapper">
            <nav class="side-nav w-100">
                <a href="index-<?php echo base_url() ?>public/corporate-agency.html" title="Logo" class="logo scroll navbar-brand">
                    <img src="<?php echo base_url() ?>public/corporate-agency/images/logo.png" alt="logo">
                </a>
                <ul class="navbar-nav text-capitalize">
                    <li class="nav-item">
                        <a class="nav-link scroll" href="#slider-section">Trang chủ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link scroll" href="#about">Về chúng tôi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link scroll" href="#portfolio">Khóa học</a>
                    </li>
                    <!-- <li class="nav-item">
                        <a class="nav-link scroll" href="#pricing">Pricing Plans</a>
                    </li> -->
                    <li class="nav-item">
                        <a class="nav-link scroll" href="#blog">Tin tức</a>
                    </li>
                    <li class="get-started-btn">
					<a class="nav-link scroll" href="#contact">Liên hệ</a>
                    </li>
                </ul>
            </nav>

            <div class="side-footer w-100">
                <ul class="social-icons-simple">
                    <li><a class="social-icon wow fadeInLeft" href="javascript:void(0)" data-wow-delay="300ms"><i class="fab fa-facebook-f"></i> </a> </li>
                    <li><a class="social-icon wow fadeInUp" href="javascript:void(0)" data-wow-delay="500ms"><i class="fab fa-instagram"></i> </a> </li>
                    <li><a class="social-icon wow fadeInRight" href="javascript:void(0)" data-wow-delay="300ms"><i class="fab fa-twitter"></i> </a> </li>
                </ul>
                <p>&copy; 2022 Tempo music</p>
            </div>
        </div>
    </div>
    <a id="close_side_menu" href="javascript:void(0);"></a>
    <!-- End side menu -->

    <!--Get Started Model Popup-->
    <div class="quote-content hidden animated-modal" id="animatedModal">
        <!--Heading-->
        <div class="pb-md-5 p-0 text-center">
            <span class="text-pink font-weight-200 font-20">We are MegaOne Company</span>
            <h2 class="main-font font-weight-600 text-white mt-2">Lets start your <span class="text-pink js-rotating">project, website</span></h2>
        </div>
        <!--Contact Form-->
        <form class="contact-form" id="modal-contact-form-data">
            <div class="row">
                <!--Result-->
                <div class="col-12" id="quote_result"></div>

                <!--Left Column-->
                <div class="col-md-6">
                    <div class="form-group">
                        <input class="form-control" id="quote_name" name="quoteName" placeholder="Name" required=""
                               type="text">
                    </div>
                    <div class="form-group">
                        <input class="form-control" id="quote_contact" name="userPhone" placeholder="Contact #" required=""
                               type="text">
                    </div>
                    <div class="form-group">
                        <input class="form-control" id="quote_type" name="projectType" placeholder="Project type" required=""
                               type="text">
                    </div>
                </div>

                <!--Right Column-->
                <div class="col-md-6">
                    <div class="form-group">
                        <input class="form-control" id="quote_email" name="userEmail" placeholder="Email" required=""
                               type="email">
                    </div>
                    <div class="form-group">
                        <input class="form-control" id="quote_address" name="userAddress" placeholder="City / Country"
                               required="" type="text">
                    </div>
                    <div class="form-group">
                        <input class="form-control" id="quote_budget" name="quoteBudget" placeholder="Budget" required=""
                               type="text">
                    </div>
                </div>

                <!--Full Column-->
                <div class="col-md-12">
                    <div class="form-group">
                        <textarea class="form-control" id="userMessage"
                                  name="userMessage"  placeholder="Please explain your project in detail."></textarea>
                    </div>
                </div>

                <!--Button-->
                <div class="col-md-12">
                    <div class="form-check">
                        <label class="checkbox-lable font-weight-200 font-16">Contact by phone is preferred
                            <input type="checkbox">
                            <span class="checkmark"></span>
                        </label>
                    </div>
                    <a href="javascript:void(0)" class="btn btn-medium btn-rounded btn-pink modal_contact_btn" id="quote_submit_btn">Submit Now</a>
                </div>
            </div>
        </form>
    </div>
</header>
<!-- END HEADER -->

<!-- START MAIN SLIDER -->
<div id="slider-section" class="slider-section">
    <div id="revo_main_wrapper" class="rev_slider_wrapper fullwidthbanner-container m-0 p-0 bg-dark" data-alias="classic4export" data-source="gallery">
        <!-- START REVOLUTION SLIDER 5.4.1 fullwidth mode -->
        <div id="vertical-bullets" class="rev_slider fullwidthabanner white vertical-tpb" data-version="5.4.1">
            <ul>
                <!-- SLIDE 1 -->
                <li data-index="rs-01" data-transition="fade" data-slotamount="default" data-easein="Power100.easeIn" data-easeout="Power100.easeOut" data-masterspeed="2000" data-fsmasterspeed="1500" data-param1="01">
                    <!-- MAIN IMAGE -->

                    <img src="<?php echo base_url() ?>public/corporate-agency/images/slider-1.png"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                    <div class="bg-overlay bg-black opacity-4"></div>
                    <!-- LAYER NR. 1 -->
                    <div class="tp-caption tp-resizeme"
                         data-x="['right','center','center','center']" data-hoffset="['0','0','0','0']"
                         data-y="['middle','middle','middle','middle']" data-voffset="['-80','-80','-65','-65']"
                         data-width="none" data-height="none" data-type="text"
                         data-textAlign="['center','center','center','center']"
                         data-responsive_offset="on"
                         data-beforeafter="before"
                         data-transform_idle="o:1;"
                         data-transform_in="x:-50px;opacity:0;s:2000;e:Power3.easeOut;"
                         data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"
                         data-start="1000" data-splitin="none" data-splitout="none">
                        <!-- <p class="text-white alt-font font-18">Lorem ipsum dolor sit amet purus.</p> -->
                    </div>
                    <!-- LAYER NR. 2 -->
                    <div class="tp-caption tp-resizeme"
                         data-x="['right','center','center','center']" data-hoffset="['0','0','0','0']"
                         data-y="['middle','middle','middle','middle']" data-voffset="['-30','-30','-10','-10']"
                         data-width="none" data-height="none" data-type="text"
                         data-textAlign="['center','center','center','center']"
                         data-responsive_offset="on"
                         data-beforeafter="before"
                         data-transform_idle="o:1;" data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;" data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                         data-start="1200" data-splitin="none" data-splitout="none">
                        <!-- <h1 class="text-white main-font font-weight-600 text-capitalize font-40">Corporate Design</h1> -->
                    </div>
                    <!-- LAYER NR. 3 -->
                    <div class="tp-caption tp-resizeme"
                         data-x="['right','center','center','center']" data-hoffset="['0','0','0','0']"
                         data-y="['middle','middle','middle','middle']" data-voffset="['20','20','30','30']"
                         data-width="none" data-height="none" data-type="text"
                         data-textAlign="['center','center','center','center']"
                         data-responsive_offset="on"
                         data-beforeafter="before"
                         data-transform_idle="o:1;" data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;" data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                         data-start="1200" data-splitin="none" data-splitout="none">
                        <!-- <h1 class="text-white main-font font-weight-600 text-capitalize font-40"><span class="font-weight-200">Agency in </span> <span>NewYork USA.</span> -->
                        </h1>
                    </div>
                    <!-- LAYER NR. 4 -->
                    <div class="tp-caption tp-resizeme"
                         data-x="['right','center','center','center']" data-hoffset="['0','0','0','0']"
                         data-y="['middle','middle','middle','middle']" data-voffset="['95','95','100','100']"
                         data-width="none" data-height="none" data-type="text"
                         data-textAlign="['right','center','center','center']"
                         data-responsive_offset="on"
                         data-beforeafter="before"
                         data-transform_idle="o:1;"
                         data-transform_in="x:-50px;opacity:0;s:2000;e:Power3.easeOut;"
                         data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"
                         data-start="1000" data-splitin="none" data-splitout="none">
                        <!-- <p class="text-white alt-font font-18">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vitae mi,<br> dapi bus diam. Mauris malesuada, nisl non rutrum commodo, magna.</p> -->
                    </div>
                    <!-- LAYER NR. 5 -->
                    <div class="tp-caption tp-resizeme"
                         data-x="['right','center','center','center']" data-hoffset="['0','0','0','0']"
                         data-y="['middle','middle','middle','middle']" data-voffset="['180','180','175','190']"
                         data-width="['500','500','500','500']" data-textalign="['right','center','center','center']" data-type="text"
                         data-frames='[{"delay":600,"speed":2000,"frame":"0","from":"sX:1;sY:1;opacity:0;fb:40px;","to":"o:1;fb:0;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'>
                        <a href="#contact" class="btn btn-medium btn-rounded btn-trans scroll">Về chúng tôi</a>
                    </div>
                </li>

				 <!-- SLIDE 4 -->
				 <li data-index="rs-04" data-transition="fade" data-slotamount="default" data-easein="Power100.easeIn" data-easeout="Power100.easeOut" data-masterspeed="2000" data-fsmasterspeed="1500" data-param1="03">
                    <!-- MAIN IMAGE -->
                    <!-- <img src="<?php echo base_url() ?>public/corporate-agency/images/slider-4.jpg" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="off" class="rev-slidebg" alt="slider-image" data-no-retina> -->
                    <div class="bg-overlay bg-black opacity-4"></div>
                    <div class="slider-overlay"></div>
                    <!-- Video -->
                    <div class="rs-background-video-layer"
                         data-forcerewind="on"
                         data-volume="mute"
                         data-videowidth="100%"
                         data-videoheight="100vh"
                         data-videomp4="<?php echo base_url() ?>public/corporate-agency/video/slider-video.mp4"
                         data-videopreload="auto"
                         data-videoloop="loopandnoslidestop"
                         data-forceCover="1"
                         data-aspectratio="16:9"
                         data-autoplay="true"
                         data-autoplayonlyfirsttime="false"></div>
                    <!-- LAYER NR. 1 -->
                    <div class="tp-caption tp-resizeme"
                         data-x="['left','center','center','center']" data-hoffset="['0','0','0','0']"
                         data-y="['middle','middle','middle','middle']" data-voffset="['-60','-60','-55','-55']"
                         data-whitespace="nowrap" data-responsive_offset="on"
                         data-width="['none','none','none','none']" data-type="text"
                         data-textalign="['left','center','center','center']"
                         data-transform_idle="o:1;"
                         data-frames='[{"delay":10,"speed":2000,"frame":"0","from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":280,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                         data-transform_in="x:-50px;opacity:0;s:2000;e:Power3.easeOut;"
                         data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"
                         data-start="1000" data-splitin="none" data-splitout="none">
                        <!-- <h1 class="text-white main-font font-weight-600 font-40">We have the </h1> -->
                    </div>
                    <!-- LAYER NR. 2 -->
                    <div class="tp-caption tp-resizeme"
                         data-x="['left','center','center','center']" data-hoffset="['0','0','0','0']"
                         data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']"
                         data-whitespace="nowrap" data-responsive_offset="on"
                         data-width="['none','none','none','none']" data-type="text"
                         data-textalign="['left','center','center','center']" data-fontsize="['48','48','20','26']"
                         data-transform_idle="o:1;"
                         data-frames='[{"delay":10,"speed":2000,"frame":"0","from":"z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power2.easeOut"},{"delay":"wait","speed":280,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                         data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                         data-transform_out="s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                         data-start="900" data-splitin="none" data-splitout="none">
                        <!-- <h1 class="text-white main-font font-weight-600 font-40"><span class="font-weight-200">Best</span> Plans for Clients</h1> -->
                    </div>
                    <!-- LAYER NR. 3 -->
                    <div class="tp-caption tp-resizeme"
                         data-x="['left','center','center','center']" data-hoffset="['0','0','0','0']"
                         data-y="['middle','middle','middle','middle']" data-voffset="['70','70','70','70']"
                         data-width="none" data-height="none" data-whitespace="nowrap" data-type="text"
                         data-textAlign="['left','center','center','center']"
                         data-responsive_offset="on" data-start="2000"
                         data-frames='[{"delay":10,"speed":2000,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":280,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                         data-transform_in="z:0;rX:0deg;rY:0;rZ:0;sX:2;sY:2;skX:0;skY:0;opacity:0;s:1000;e:Power2.easeOut;"
                         data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;">
                        <!-- <p class="text-white alt-font font-18">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vitae mi,<br> dapi bus diam. Mauris malesuada, nisl non rutrum commodo, magna.</p> -->
                    </div>
                    <!-- LAYER NR. 4 -->
                    <div class="tp-caption tp-resizeme"
                         data-frames='[{"delay":10,"speed":2000,"frame":"0","from":"x:-50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":280,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                         data-x="['left','center','center','center']" data-hoffset="['0','0','0','0']"
                         data-y="['middle','middle','middle','middle']" data-voffset="['155','155','150','150']"
                         data-width="['500','500','500','500']" data-textalign="['left','center','center','center']" data-type="text"
                         data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:1500;e:Power4.easeInOut;" data-transform_out="s:900;e:Power2.easeInOut;s:900;e:Power2.easeInOut;" data-start="1800" data-splitin="none" data-splitout="none" data-responsive_offset="on">
                        <!-- <a href="#contact" class="btn btn-medium btn-rounded btn-trans scroll">Learn More</a> -->
                    </div>
                </li>

                <!-- SLIDE 2 -->
                <li data-index="rs-02" data-transition="fade" data-slotamount="default" data-easein="Power100.easeIn" data-easeout="Power100.easeOut" data-masterspeed="2000" data-fsmasterspeed="1500" data-param1="02">
                    <!-- MAIN IMAGE -->
                    <img src="<?php echo base_url() ?>public/corporate-agency/images/slider-2.jpg"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                    <div class="bg-overlay bg-black opacity-5"></div>
                    <!-- LAYER NR. 1 -->
					<div class="tp-caption tp-resizeme"
                         data-x="['left','center','center','center']" data-hoffset="['0','0','0','0']"
                         data-y="['middle','middle','middle','middle']" data-voffset="['-60','-60','-55','-55']"
                         data-whitespace="nowrap" data-responsive_offset="on"
                         data-width="['none','none','none','none']" data-type="text"
                         data-textalign="['left','center','center','center']"
                         data-transform_idle="o:1;"
                         data-frames='[{"delay":10,"speed":2000,"frame":"0","from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":280,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                         data-transform_in="x:-50px;opacity:0;s:2000;e:Power3.easeOut;"
                         data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"
                         data-start="1000" data-splitin="none" data-splitout="none">
                        <h1 class="text-white main-font font-weight-600 font-40">Chúng tôi có</h1>
                    </div>
                    <!-- LAYER NR. 2 -->
                    <div class="tp-caption tp-resizeme"
                         data-x="['left','center','center','center']" data-hoffset="['0','0','0','0']"
                         data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']"
                         data-whitespace="nowrap" data-responsive_offset="on"
                         data-width="['none','none','none','none']" data-type="text"
                         data-textalign="['left','center','center','center']" data-fontsize="['48','48','20','26']"
                         data-transform_idle="o:1;"
                         data-frames='[{"delay":10,"speed":2000,"frame":"0","from":"z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power2.easeOut"},{"delay":"wait","speed":280,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                         data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                         data-transform_out="s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                         data-start="900" data-splitin="none" data-splitout="none">
                        <h1 class="text-white main-font font-weight-600 font-40"><span class="text-pink">Khóa học</span> cho nhiều đối tượng khác nhau.</h1>
                    </div>
                    <!-- LAYER NR. 3 -->
                    <div class="tp-caption tp-resizeme"
                         data-x="['left','center','center','center']" data-hoffset="['0','0','0','0']"
                         data-y="['middle','middle','middle','middle']" data-voffset="['70','70','70','70']"
                         data-width="none" data-height="none" data-whitespace="nowrap" data-type="text"
                         data-textAlign="['left','center','center','center']"
                         data-responsive_offset="on" data-start="2000"
                         data-frames='[{"delay":10,"speed":2000,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":280,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                         data-transform_in="z:0;rX:0deg;rY:0;rZ:0;sX:2;sY:2;skX:0;skY:0;opacity:0;s:1000;e:Power2.easeOut;"
                         data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;">
                        <!-- <p class="text-white alt-font font-18">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vitae mi,<br> dapi bus diam. Mauris malesuada, nisl non rutrum commodo, magna.</p> -->
                    </div>
                    <!-- LAYER NR. 4 -->
                    <div class="tp-caption tp-resizeme"
                         data-frames='[{"delay":10,"speed":2000,"frame":"0","from":"x:-50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":280,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                         data-x="['left','center','center','center']" data-hoffset="['0','0','0','0']"
                         data-y="['middle','middle','middle','middle']" data-voffset="['155','155','150','150']"
                         data-width="['500','500','500','500']" data-textalign="['left','center','center','center']" data-type="text"
                         data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:1500;e:Power4.easeInOut;" data-transform_out="s:900;e:Power2.easeInOut;s:900;e:Power2.easeInOut;" data-start="1800" data-splitin="none" data-splitout="none" data-responsive_offset="on">
                        <a href="#contact" class="btn btn-medium btn-rounded btn-trans scroll">Click!!</a>
                    </div>
                </li>

                <!-- SLIDE 3 -->
                <li data-index="rs-03" data-transition="fade" data-slotamount="default" data-easein="Power100.easeIn" data-easeout="Power100.easeOut" data-masterspeed="2000" data-fsmasterspeed="1500" data-param1="03">
                    <!-- MAIN IMAGE -->
                    <img src="<?php echo base_url() ?>public/corporate-agency/images/slider-3.jpg"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                    <div class="bg-overlay bg-black opacity-4"></div>
                    <!-- LAYER NR. 1 -->
                    <div class="tp-caption tp-resizeme"
                         data-x="['right','center','center','center']" data-hoffset="['0','0','0','0']"
                         data-y="['middle','middle','middle','middle']" data-voffset="['-60','-60','-55','-55']"
                         data-whitespace="nowrap" data-responsive_offset="on"
                         data-width="['none','none','none','none']" data-type="text"
                         data-textalign="['right','center','center','center']"
                         data-transform_idle="o:1;"
                         data-transform_in="x:-50px;opacity:0;s:2000;e:Power3.easeOut;"
                         data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"
                         data-start="1000" data-splitin="none" data-splitout="none">
                        <h1 class="text-white main-font font-weight-600 font-40">Liên hệ</h1>
                    </div>
                    <!-- LAYER NR. 2 -->
                    <div class="tp-caption tp-resizeme"
                         data-x="['right','center','center','center']" data-hoffset="['0','0','0','0']"
                         data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']"
                         data-whitespace="nowrap" data-responsive_offset="on"
                         data-width="['none','none','none','none']" data-type="text"
                         data-textalign="['right','center','center','center']" data-fontsize="['48','48','20','26']"
                         data-transform_idle="o:1;"
                         data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                         data-transform_out="s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                         data-start="900" data-splitin="none" data-splitout="none">
                        <h1 class="text-white main-font font-weight-600 font-40"><span class="text-pink">Ngay với </span> <span>Chúng tôi.</span></h1>
                    </div>
                    <!-- LAYER NR. 3 -->
                    <div class="tp-caption tp-resizeme"
                         data-x="['right','center','center','center']" data-hoffset="['0','0','0','0']"
                         data-y="['middle','middle','middle','middle']" data-voffset="['70','70','70','70']"
                         data-width="none" data-height="none" data-whitespace="nowrap" data-type="text"
                         data-textAlign="['right','center','center','center']"
                         data-responsive_offset="on" data-start="2000"
                         data-transform_in="z:0;rX:0deg;rY:0;rZ:0;sX:2;sY:2;skX:0;skY:0;opacity:0;s:1000;e:Power2.easeOut;"
                         data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;">
                        <p class="text-white alt-font font-18">Để được nhận thông tin về các khóa học</p>
                    </div>
                    <!-- LAYER NR. 4 -->
                    <div class="tp-caption tp-resizeme"
                         data-x="['right','center','center','center']" data-hoffset="['0','0','0','0']"
                         data-y="['middle','middle','middle','middle']" data-voffset="['155','155','150','150']"
                         data-width="['500','500','500','500']" data-textalign="['right','center','center','center']" data-type="text"
                         data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:1500;e:Power4.easeInOut;" data-transform_out="s:900;e:Power2.easeInOut;s:900;e:Power2.easeInOut;" data-start="1800" data-splitin="none" data-splitout="none" data-responsive_offset="on">
                        <a href="#contact" class="btn btn-medium btn-rounded btn-trans scroll">Click!!</a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <ul class="social-icons social-icons-simple revicon white d-none d-md-block d-lg-block">
        <li class="d-table"><a href="javascript:void(0)" class="social-icon"><i class="fab fa-facebook-f"></i></a> </li>
        <li class="d-table"><a href="javascript:void(0)" class="social-icon"><i class="fab fa-twitter"></i> </a> </li>
        <li class="d-table"><a href="javascript:void(0)" class="social-icon"><i class="fab fa-linkedin-in"></i> </a> </li>
        <li class="d-table"><a href="javascript:void(0)" class="social-icon"><i class="fab fa-instagram"></i> </a> </li>
    </ul>
</div>
<!--scroll down-->
<a href="#about" class="scroll-down link scroll main-font font-15 animate">Scroll Down <i class="fas fa-long-arrow-alt-down"></i></a>
<!-- END MAIN SLIDER -->

<!-- START ABOUT US -->
<section class="menu portfolio-three pb-0" id="menu">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-10 col-lg-8 offset-md-1 offset-lg-2 text-center wow fadeIn" style="visibility: visible; animation-name: fadeIn;">
                <div class="d-inline-block">
                    <h1 class="title main-font text-main my-5 text-gradient" ><strong>Hình ảnh lớp học</strong></h1>

                </div>
            </div>
        </div>
    </div>
        <div class="container-fluid">
			<div class="row m-0">
				<div class = "text-center pull-right">
                    <ul class ="pagination">
                      <?php echo $strphantrang; ?>
                    </ul>
                </div>
			</div>
            <div class="row m-0">
				<?php foreach ($list as $sp) :?>
					<div class="col-md-3 items graphic">
						<div class="item-img">
							<a href="<?php echo base_url() ?>/public/assets/images/<?php echo $sp['img']; ?>" data-fancybox="images">
								<img src="<?php echo base_url() ?>/public/assets/images/<?php echo $sp['img']; ?>" alt="image" style="height:300px; border-radius:20px">
								<div class="item-img-overlay valign">
									<div class="overlay-info text-center">
										<span class="image-hover mb-3"></span>
									</div>
								</div>
							</a>
						</div>
					</div>
				<!-- </div> -->
				<?php endforeach; ?>
                <!-- Menu Item 1 -->
            </div>

        </div>
</section>

<!-- START CONTACT-FORM -->
<section id="contact" class="contact-sec">
    <div class="container">
        <!--Heading-->
        <div class="row">
            <div class="col-12 col-md-8 offset-md-2 text-center">
                <p class="text-pink font-weight-200 font-20">Tempo music</p>
                <h1 class="main-font font-weight-600 text-white">Liên hệ với chúng tôi</h1>
            </div>
        </div>

        <!-- Contact-us -->
        <div class="row">
            <div class="col-12 col-lg-6 contact-details text-md-left">
                <div class="row mt-5 wow fadeIn" data-wow-delay="200ms">
                    <!-- Address-Box -->
                    <div class="col-12 col-md-6 text-center text-lg-left">
                        <h4 class="main-font text-pink font-16 font-weight-600">Địa chỉ</h4>
                        <p class="alt-font font-14 text-white mt-3">112 Phan Đình Phùng Pleiku, Gia Lai. </p>
                    </div>
                    <!-- Phone-Box -->
                    <div class="col-12 col-md-6 pt-5 pt-md-0 wow fadeIn text-center text-lg-left" data-wow-delay="400ms">
                        <h4 class="main-font text-pink font-16 font-weight-600">Số điện thoại</h4>
                        <p class="alt-font font-14 text-white mt-3">097 919 03 03</p>
                    </div>
                </div>

                <div class="row mt-5">
                    <!-- Email-Box -->
                    <div class="col-12 col-md-6 wow fadeIn text-center text-lg-left" data-wow-delay="600ms">
                        <h4 class="main-font text-pink font-16 font-weight-600">Email</h4>
                        <p class="alt-font font-14 text-white mt-3">tempomusic0403@gmail.com</p>
                    </div>
                    <!-- Support-Box -->
                    <div class="col-12 col-md-6 pt-5 pt-md-0 wow fadeIn text-center text-lg-left" data-wow-delay="800ms">
                        <h4 class="main-font text-pink font-16 font-weight-600">Facebook</h4>
                        <p class="alt-font font-14 text-white mt-3">facebook.com/tempogialai</p>
                    </div>
                </div>
            </div>

            <div class="col-12 col-lg-6 contact-form-box">
                <form class="contact-form" id="contact-form-data">
                    <div class="row">
                        <!-- Submission Popup -->
                        <div class="col-12">
                            <div class="col-sm-12 px-0" id="result"></div>
                        </div>

                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <input class="form-control" type="text" placeholder="First Name:" required="" id="first_name" name="firstName">
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="form-group">
								<select name="status" class="form-control" class="form-control" type="text" placeholder="Last Name:" required="" id="last_name" name="lastName">
										<option value="0">Ca 2-4-6</option>
										<option value="1">Ca 3-5-7</option>
										<option value="2">Ca nào cũng được</option>
								</select>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <input class="form-control" type="email" placeholder="Email:" required="" id="email" name="userEmail">
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <input class="form-control" type="tel" placeholder="Phone:" id="phone" name="userPhone">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <textarea class="form-control" placeholder="Message" id="message" name="userMessage"></textarea>
                            </div>
                        </div>
                        <div class="col-12">
                            <button type="button" class="btn btn-medium green-long-btn rounded-pill w-100 btn-pink mt-4 contact_btn" id="submit_btn">SUBMIT REQUEST</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- END CONTACT-FORM -->

<!-- START GOOGLE MAP -->
<section class="p-0">
    <div class="row">
        <div class="col-12">
            <div class="mapouter">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3871.59562847041!2d107.99802261431391!3d13.982658495670208!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x316c1f77e753ee69%3A0xf2a3f0accf424948!2zMTEyIFBoYW4gxJDDrG5oIFBow7luZywgUC5Uw6J5IFPGoW4sIFRow6BuaCBwaOG7kSBQbGVpa3UsIEdpYSBMYWkgNjAwMDAwLCBWaeG7h3QgTmFt!5e0!3m2!1svi!2s!4v1661330244864!5m2!1svi!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
</section>
<!-- END GOOGLE-MAP -->

<!-- START FOOTER -->
<footer class="footer">
    <div class="container">
        <div class="row align-items-center">
            <!--Social-->
            <div class="col-12 text-center">
                <div class="footer-social">
                    <ul class="list-unstyled social-icons social-icons-simple">
                        <li><a class="social-icon wow fadeInUp" href="javascript:void(0)"><i class="fab fa-facebook-f" aria-hidden="true"></i> </a> </li>
                        <li><a class="social-icon wow fadeInDown" href="javascript:void(0)"><i class="fab fa-twitter" aria-hidden="true"></i> </a> </li>
                        <li><a class="social-icon wow fadeInUp" href="javascript:void(0)"><i class="fab fa-google-plus-g" aria-hidden="true"></i> </a> </li>
                        <li><a class="social-icon wow fadeInDown" href="javascript:void(0)"><i class="fab fa-linkedin-in" aria-hidden="true"></i> </a> </li>
                        <li><a class="social-icon wow fadeInUp" href="javascript:void(0)"><i class="fab fa-instagram" aria-hidden="true"></i> </a> </li>
                        <li><a class="social-icon wow fadeInUp" href="javascript:void(0)"><i class="fab fa-pinterest-p" aria-hidden="true"></i> </a> </li>
                    </ul>
                </div>
                <!--Text-->
                <p class="company-about fadeIn text-white">© 2022 Tempo music</p>
            </div>
        </div>
    </div>
</footer>
<!-- END FOOTER -->

<!--START SCROLL TOP-->
<div class="go-top"><i class="fas fa-angle-up"></i><i class="fas fa-angle-up"></i></div>
<!--END SCROLL TOP-->

<!-- JavaScript -->
<script src="<?php echo base_url() ?>public/vendor/js/bundle.min.js"></script>
<!-- Plugin Js -->
<script src="<?php echo base_url() ?>public/vendor/js/jquery.appear.js"></script>
<script src="<?php echo base_url() ?>public/vendor/js/jquery.fancybox.min.js"></script>
<script src="<?php echo base_url() ?>public/vendor/js/owl.carousel.min.js"></script>
<script src="<?php echo base_url() ?>public/vendor/js/parallaxie.min.js"></script>
<script src="<?php echo base_url() ?>public/vendor/js/wow.min.js"></script>
<script src="<?php echo base_url() ?>public/vendor/js/jquery.cubeportfolio.min.js"></script>
<!-- REVOLUTION JS FILES -->
<script src="<?php echo base_url() ?>public/vendor/js/jquery.themepunch.tools.min.js"></script>
<script src="<?php echo base_url() ?>public/vendor/js/jquery.themepunch.revolution.min.js"></script>
<!-- SLIDER REVOLUTION EXTENSIONS -->
<script src="<?php echo base_url() ?>public/vendor/js/morphext.min.js"></script>
<script src="<?php echo base_url() ?>public/vendor/js/extensions/revolution.extension.actions.min.js"></script>
<script src="<?php echo base_url() ?>public/vendor/js/extensions/revolution.extension.carousel.min.js"></script>
<script src="<?php echo base_url() ?>public/vendor/js/extensions/revolution.extension.kenburn.min.js"></script>
<script src="<?php echo base_url() ?>public/vendor/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script src="<?php echo base_url() ?>public/vendor/js/extensions/revolution.extension.migration.min.js"></script>
<script src="<?php echo base_url() ?>public/vendor/js/extensions/revolution.extension.navigation.min.js"></script>
<script src="<?php echo base_url() ?>public/vendor/js/extensions/revolution.extension.parallax.min.js"></script>
<script src="<?php echo base_url() ?>public/vendor/js/extensions/revolution.extension.slideanims.min.js"></script>
<script src="<?php echo base_url() ?>public/vendor/js/extensions/revolution.extension.video.min.js"></script>
<!-- Map -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB4fusEY9kSwNHgtK8KOgyoTsyP5Tb2NXo"></script>
<script src="<?php echo base_url() ?>public/corporate-agency/js/map.js"></script>
<!-- CUSTOM JS -->
<script src="<?php echo base_url() ?>public/corporate-agency/js/isotope.pkgd.js"></script>
<script src="<?php echo base_url() ?>public/corporate-agency/js/modernizr.custom.97074.js"></script>
<script src="<?php echo base_url() ?>public/corporate-agency/js/jquery.hoverdir.js"></script>
<!-- custom script -->
<script src="<?php echo base_url() ?>public/vendor/js/contact_us.js"></script>
<script src="<?php echo base_url() ?>public/corporate-agency/js/script.js"></script>
</body>
</html>