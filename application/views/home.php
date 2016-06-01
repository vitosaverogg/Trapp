<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie ie8" class="no-js" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Trapp</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <!-- CSS FILES -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/style.css" media="screen" data-name="skins">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/layout/wide.css" data-name="layout">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/switcher.css" media="screen" />
    <!-- Custom Theme Style -->
    <link href="<?php echo base_url(); ?>assets/css/custom.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body background="<?php echo base_url(); ?>assets/images/border.png">
    <!--Start Header-->
    <?php 
        $this->load->view('header', FALSE);
     ?>
    </header>
    <!--End Header-->
    <!--start wrapper-->
    <section class="wrapper">
        <section class="content right_sidebar">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
                        <div class="blog_large">
                            <figure class="post_img">
                                <div id="slider" class="swipe">
                                    <ul class="swipe-wrap">
                                        <li><img src="<?php echo base_url(); ?>assets/images/11.jpg" alt="blog post"></li>
                                        <li><img src="<?php echo base_url(); ?>assets/images/12.jpg" alt="blog post"></li>
                                        <li><img src="<?php echo base_url(); ?>assets/images/13.jpg" alt="blog post"></li>
                                    </ul>
                                    <div class="swipe-navi">
                                        <div class="swipe-left" onclick="mySwipe.prev()"><i class="fa fa-chevron-left"></i></div>
                                        <div class="swipe-right" onclick="mySwipe.next()"><i class="fa fa-chevron-right"></i></div>
                                    </div>
                                </div>
                            </figure>
                        </div>
                    </div>
                    <!--your trip planner-->
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <div class="sidebar">
                            <form class="form-2" method="post" action="<?php echo base_url(); ?>form_wizard">
                                <h1><span class="log-in">your</span> TRIP <span class="sign-up">plan</span></h1>
                                <!-- asal -->
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Asal</label>
                                    <div class="col-md-9 col-sm-9 col-xs-12">
                                        <select class="form-control">
                                            <option>Choose option</option>
                                            <option>Option one</option>
                                            <option>Option two</option>
                                            <option>Option three</option>
                                            <option>Option four</option>
                                        </select>
                                    </div>
                                </div>
                                <!-- end asal -->
                                <!-- tujuan -->
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Tujuan</label>
                                    <div class="col-md-9 col-sm-9 col-xs-12">
                                        <select class="form-control">
                                            <option>Choose option</option>
                                            <option>Option one</option>
                                            <option>Option two</option>
                                            <option>Option three</option>
                                            <option>Option four</option>
                                        </select>
                                    </div>
                                </div>
                                <!-- end tujuan -->
                                <!-- tanggal -->
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Tanggal</label>
                                    <div class="col-md-9 col-sm-9 col-xs-12">
                                        <input style="padding-left: 40px;" type="text" class="form-control has-feedback-left" id="single_cal4" placeholder="DD/MM/YYYY" aria-describedby="inputSuccess2Status4">
                                        <span class="fa fa-calendar-o form-control-feedback left" aria-hidden="true"></span>
                                        <span id="inputSuccess2Status4" class="sr-only">(success)</span>
                                    </div>
                                </div>
                                <!-- end tanggal -->
                                <!-- budget -->
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Budget</label>
                                    <div class="col-md-9 col-sm-9 col-xs-12">
                                        <input type="number" name="money" id="autocomplete-custom-append" placeholder="ex Rp 50.000" class="form-control col-md-10" style="float: left;" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Pilihan</label>
                                    <div class="control-label col-md-4 col-sm-4 col-xs-12">
                                        <label>
                                            <input type="radio" checked="" value="option1 " id="optionsRadios1 " name="optionsRadios "> Custom
                                        </label>
                                    </div>
                                    <div class="control-label col-md-4 col-sm-4 col-xs-12">
                                        <label>
                                            <input type="radio" value="option2" id="optionsRadios2 " name="optionsRadios "> Paket
                                        </label>
                                    </div>
                                </div>
                                <!-- end budget -->
                                <!-- tombol -->
								<div class="text-center">
									<button type="submit" class="log-twitter">Submit</button>
								</div>
								<h1></h1>
								<div class="text-center">
                                    <input type="submit"  value="Beli Tiket" onclick="window.location = '<?php echo base_url(); ?>transportasi'">
								</div>
                                <!-- end tombol -->
                            </form>​​
                        </div>
                        <!-- sidebar -->
                    </div>
                    <!-- end your trip planner -->
                </div>
                <!--/.row-->
            </div>
            <!--/.container-->
        </section>
    </section>
    <!--end wrapper-->
    <!--start footer-->
    <footer class="footer">
        <div class="container ">
            <div class="row sub_content ">
                <div class="rs_box wow fadeInLeft ">
                    <div class="col-sm-3 col-md-3 col-lg-3 ">
                        <div class="serviceBox_1 ">
                            <div class="icon_service ">
                                <i class="fa fa-laptop "></i>
                                <h3>Modern Design</h3>
                            </div>
                            <div class="service_1_detail ">
                                <p>Lorem ipsum dolor sit amet, cons adipiscing elit. Aenean commodo ligula eget dolor. Cum sociis natoque penatibus mag dis parturient.</p>
                                <a class="read " href="# ">Read more</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3 col-md-3 col-lg-3 ">
                        <div class="serviceBox_1 ">
                            <div class="icon_service ">
                                <i class="fa fa-heart "></i>
                                <h3>Clean &amp; Minimal</h3>
                            </div>
                            <div class="service_1_detail ">
                                <p>Lorem ipsum dolor sit amet, cons adipiscing elit. Aenean commodo ligula eget dolor. Cum sociis natoque penatibus mag dis parturient.</p>
                                <a class="read " href="# ">Read more</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3 col-md-3 col-lg-3 ">
                        <div class="serviceBox_1 ">
                            <div class="icon_service ">
                                <i class="fa fa-trophy "></i>
                                <h3>Branding Theme</h3>
                            </div>
                            <div class="service_1_detail ">
                                <p>Lorem ipsum dolor sit amet, cons adipiscing elit. Aenean commodo ligula eget dolor. Cum sociis natoque penatibus mag dis parturient.</p>
                                <a class="read " href="# ">Read more</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3 col-md-3 col-lg-3 ">
                        <div class="serviceBox_1 ">
                            <div class="icon_service ">
                                <i class="fa fa-trophy "></i>
                                <h3>Artikel</h3>
                            </div>
                            <div class="service_1_detail ">
                                <p>Lorem ipsum dolor sit amet, cons adipiscing elit. Aenean commodo ligula eget dolor. Cum sociis natoque penatibus mag dis parturient.</p>
                                <a class="read " href="# ">Read more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--end footer-->
    <section class="footer_bottom ">
        <div class="container ">
            <div class="row ">
                <div class="col-sm-6 col-md-6 col-lg-6 ">
                    <p class="copyright ">&copy; Copyright 2015 Everest | Powered by <a href="http://www.jqueryrain.com/ ">jQuery Rain</a></p>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-6 ">
                    <div class="footer_social ">
                        <ul class="footbot_social ">
                            <li><a class="fb " href="#. " data-placement="top " data-toggle="tooltip " title="Facebook "><i class="fa fa-facebook "></i></a></li>
                            <li><a class="twtr " href="#. " data-placement="top " data-toggle="tooltip " title="Twitter "><i class="fa fa-twitter "></i></a></li>
                            <li><a class="dribbble " href="#. " data-placement="top " data-toggle="tooltip " title="Dribbble "><i class="fa fa-dribbble "></i></a></li>
                            <li><a class="skype " href="#. " data-placement="top " data-toggle="tooltip " title="Skype "><i class="fa fa-skype "></i></a></li>
                            <li><a class="rss " href="#. " data-placement="top " data-toggle="tooltip " title="RSS "><i class="fa fa-rss "></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script type="text/javascript " src="<?php echo base_url(); ?>assets/js/jquery-1.10.2.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/jquery.easing.1.3.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/retina-1.1.0.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.cookie.js"></script>
    <!-- jQuery cookie -->
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/styleswitch.js"></script>
    <!-- Style Colors Switcher -->
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.smartmenus.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.smartmenus.bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.jcarousel.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jflickrfeed.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.magnific-popup.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.isotope.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/swipe.js"></script>
    <!---->
    <script src="<?php echo base_url(); ?>assets/js/main.js"></script>
    <?php 
        $this->load->view('script/date_picker');
     ?>
</body>

</html>
