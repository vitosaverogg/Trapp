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

<body>
    <!--Start Header-->
    <?php 
        $this->load->view('header');
     ?>
    <!--End Header-->
    <!--start wrapper-->
    <section class="wrapper">
        <section class="content right_sidebar">
            <!-- container -->
            <div class="container">
                <!-- row -->
                <div class="row">
                    <!-- col -->
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <!-- x_panel -->
                        <div class="x_panel">
                            <!-- x_title -->
                            <div class="x_title">
                                <h2><i class="fa fa-bars"></i> Transportasi<small>Float left</small></h2>
                                <div class="clearfix"></div>
                            </div>
                            <!-- end x_title -->
                            <!-- x_content -->
                            <div class="x_content">
                                <!-- tab panel -->
                                <div class="" role="tabpanel" data-example-id="togglable-tabs">
                                    <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                                        <li role="presentation" class="active"><a href="#pesawat" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true"><span class="fa fa-plane fa-rotate-45 col-md-2 col-sm-2 col-xs-12 "></span>Pesawat</a>
                                        </li>
                                        <li role="presentation" class=""><a href="#kereta" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false"><span class="fa fa-train col-md-5 col-sm-5 col-xs-12"></span>Kereta</a>
                                        </li>
                                        <li role="presentation" class=""><a href="#tab_content3" role="tab" id="profile-tab2" data-toggle="tab" aria-expanded="false">dll</a>
                                        </li>
                                    </ul>
                                    <!-- tab content -->
                                    <div id="myTabContent" class="tab-content">
                                        <!-- content pesawat -->
                                        <div role="tabpanel" class="tab-pane fade active in" id="pesawat" aria-labelledby="home-tab">
                                            <!-- tujuan penerbangan -->
                                            <div class="col-md-4 col-sm-4 col-xs-12">
                                                <!-- x_panel -->
                                                <div class="x_panel">
                                                    <!-- x_title -->
                                                    <div class="x_title">
                                                        <h2>Tujuan Penerbangan</h2>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                    <!-- end x_title -->
                                                    <!-- x_content -->
                                                    <div class="x_content">
                                                        <!-- form group -->
                                                        <div class="form-group">
                                                            <label class="control-label col-md-12 col-sm-12 col-xs-12">Kota Asal</label>
                                                            <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
                                                                <input type="text" class="form-control has-feedback-left" id="inputSuccess2" placeholder="Bandung">
                                                                <span class="fa fa-plane form-control-feedback left" aria-hidden="true"></span>
                                                            </div>
                                                        </div>
                                                        <!-- end from group -->
                                                        <!-- from group -->
                                                        <div class="form-group">
                                                            <label class="control-label col-md-12 col-sm-12 col-xs-12">Kota Tujuan</label>
                                                            <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
                                                                <input type="text" class="form-control has-feedback-left" id="inputSuccess2" placeholder="Jakarta">
                                                                <span class="fa fa-plane fa-rotate-90 form-control-feedback left" aria-hidden="true"></span>
                                                            </div>
                                                        </div>
                                                        <!-- end from group -->
                                                    </div>
                                                    <!-- end x_content -->
                                                </div>
                                            </div>
                                            <!-- end tujuan penerbangan -->
                                            <!-- waktu penerbangan -->
                                            <div class="col-md-4 col-sm-4 col-xs-12">
                                                <!-- x_panel -->
                                                <div class="x_panel">
                                                    <!-- x_title -->
                                                    <div class="x_title">
                                                        <h2>Waktu Penerbangan</h2>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                    <!-- end x_title -->
                                                    <!-- x_content -->
                                                    <div class="x_content">
                                                        <!-- tanggal -->
                                                        <div class="form-group">
                                                            <label class="control-label col-md-12 col-sm-12 col-xs-12">Tanggal Berangkat</label>
                                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                                <input style="padding-left: 40px;" type="text" class="form-control has-feedback-left" id="single_cal4" placeholder="DD/MM/YYYY" aria-describedby="inputSuccess2Status4">
                                                                <span class="fa fa-calendar-o form-control-feedback left" aria-hidden="true"></span>
                                                                <span id="inputSuccess2Status4" class="sr-only">(success)</span>
                                                            </div>
                                                        </div>
                                                        <!-- end tanggal -->
                                                    </div>
                                                    <!-- end x_content -->
                                                </div>
                                                <!-- end x_panel -->
                                            </div>
                                            <!-- end waktu penerbangan -->
                                            <!-- cari tiket -->
                                            <div class="col-md-4 col-sm-4 col-xs-12">
                                                <!-- x_panel -->
                                                <div class="x_panel">
                                                    <!-- x_title -->
                                                    <div class="x_title">
                                                        <h2>Cari Tiket</h2>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                    <!-- end x_title -->
                                                    <!-- x_content -->
                                                    <div class="x_content">
                                                        <!-- form group -->
                                                        <div class="form-group">
                                                            <label class="control-label col-md-12 col-sm-12 col-xs-12">Jumlah Penumpang</label>
                                                            <div class="col-md-4 col-sm-4 col-xs-12 form-group has-feedback">
                                                                <input type="text" class="form-control has-feedback-left" id="inputSuccess2" placeholder="0">
                                                                <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                                                            </div>
                                                            <div class="col-md-4 col-sm-4 col-xs-12 form-group has-feedback">
                                                                <input type="text" class="form-control has-feedback-left" id="inputSuccess2" placeholder="0">
                                                                <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                                                            </div>
                                                            <div class="col-md-4 col-sm-4 col-xs-12 form-group has-feedback">
                                                                <input type="text" class="form-control has-feedback-left" id="inputSuccess2" placeholder="0">
                                                                <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                                                            </div>
                                                        </div>
                                                        <!-- end from group -->
                                                        <div class="col-md-4 col-sm-4 col-xs-12 text-center">
                                                            <button class="btn btn-success">Cari Tiket</button>
                                                        </div>
                                                    </div>
                                                    <!-- end x_content -->
                                                </div>
                                                <!-- end x_panel -->
                                            </div>
                                            <!-- end cari tiket -->
                                            <div class="clearfix"></div>
                                        </div>
                                        <!-- end content pesawat -->
                                        <div role="tabpanel" class="tab-pane fade" id="kereta" aria-labelledby="profile-tab">
                                            <p>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo booth letterpress, commodo enim craft beer mlkshk aliquip</p>
                                        </div>
                                        <div role="tabpanel" class="tab-pane fade" id="tab_content3" aria-labelledby="profile-tab">
                                            <p>xxFood truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo booth letterpress, commodo enim craft beer mlkshk </p>
                                        </div>
                                    </div>
                                    <!-- end tab content -->
                                </div>
                                <!-- end tab panel -->
                            </div>
                            <!-- end x_content -->
                        </div>
                        <!-- end x_panel -->
                    </div>
                    <!-- end col -->
                </div>
                <!--/.row-->
            </div>
            <!--/.container-->
        </section>
    </section>
    <!--end wrapper-->
    <!--start footer-->
    <footer class="footer ">
        <div class="container ">
        </div>
    </footer>
    <!--end footer-->
    <section class="footer_bottom ">
        <div class="container ">
            <div class="row ">
                <div class="col-sm-6 ">
                    <p class="copyright ">&copy; Copyright 2015 Everest | Powered by <a href="http://www.jqueryrain.com/ ">jQuery Rain</a></p>
                </div>
                <div class="col-sm-6 ">
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