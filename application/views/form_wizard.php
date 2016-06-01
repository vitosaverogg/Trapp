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
    <!-- Custom Theme Style -->
    <link href="<?php echo base_url(); ?>assets/css/custom.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/style.css" media="screen" data-name="skins">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/layout/wide.css" data-name="layout">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/switcher.css" media="screen" />
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
   $this->load->view('header', FALSE);
    ?>
    <!--End Header-->
    <!--start wrapper-->
    <section class="wrapper">
        <section class="content right_sidebar">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="x_panel">
                                    <div class="x_title">
                                        <h2>Form Wizards <small>Sessions</small></h2>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="x_content">
                                        <!-- Smart Wizard -->
                                        <p>This is a basic form wizard example that inherits the colors from the selected scheme.</p>
                                        <div id="wizard" class="form_wizard wizard_horizontal">
                                            <ul class="wizard_steps">
                                                <li>
                                                    <a href="#step-1">
                                                        <span class="step_no">1</span>
                                                        <span class="step_descr">
                                      Step 1<br />
                                      <small>Transportasi</small>
                                  </span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#step-2">
                                                        <span class="step_no">2</span>
                                                        <span class="step_descr">
                                  Step 2<br />
                                  <small>Penginapan</small>
                              </span>
                                                    </a>
													
                                                </li>
                                                <li>
                                                    <a href="#step-3">
                                                        <span class="step_no">3</span>
                                                        <span class="step_descr">
                              Step 3<br />
                              <small>Destinasi Wisata</small>
                          </span>
								
																						</a>
                                                </li>
                                                <li>
                                                    <a href="#step-4">
                                                        <span class="step_no">4</span>
                                                        <span class="step_descr">
                          Step 4<br />
                          <small>Rental Kendaraan</small>
                      </span>
                                                    </a>
                                                </li>
                                            </ul>
                                            <div id="step-1">
                                                <p class="text-center">
                                                    -- Kosong --
                                                </p>
                                                <!-- <form class="form-horizontal form-label-left">
                                                     <div class="form-group">
                                                    </div>
                                                    
                                                </form> -->
                                                <p class="clearfix text-center">
                                                    <!-- <button class="buttonPrevious btn btn-add" data-toggle="modal" data-target="#myModal">Add</button> -->
                                                    <button class="buttonPrevious btn btn-add" data-toggle="modal" data-target="#myModal">Skip</button>
                                                    <button class="buttonPrevious btn btn-add" onclick="window.location = '<?php echo base_url(); ?>transportasi'">Add</button>
                                                </p>
                                            </div>
                                            <div id="step-2">
                                                <p class="text-center">
                                                    <form action="action_page.php">
																											
														<div class="container">
														<h2>PILIH HOTEL</h2>
														  <form class="form-horizontal" role="form">
															<div class="form-group">
															  <label class="col-sm-2 control-label">Lokasi</label>
															  <div class="col-sm-4">
																<input class="form-control" id="focusedInput" type="text" value="" placeholder="Lokasi">
															  </div>
															</div>
														</div>
														
														<div class="container">
															<form class="form-horizontal" role="form">
															<div class="form-group">
															  <label class="col-sm-2 control-label">Hotel</label>
															  <div class="col-sm-4">
																<input class="form-control" id="focusedInput" type="text" value="" placeholder="Hotel">
															  </div>
															</div>
														</div>
														
														<div class="container">
															<form class="form-horizontal" role="form">
															<div class="form-group">
																<label class="col-sm-2 control-label">Check In</label>
																<div class="col-sm-4">
																	<input style="padding-left: 40px;" type="text" class="form-control has-feedback-left" id="single_cal4" placeholder="MM/DD/YYYY" aria-describedby="inputSuccess2Status4">
																	<span class="fa fa-calendar-o form-control-feedback left" aria-hidden="true"></span>
																	<span id="inputSuccess2Status4" class="sr-only">(success)</span>
																</div>
															</div>
														</div>
														
														<div class="container">
															<form class="form-horizontal" role="form">
															<div class="form-group">
																<label class="col-sm-2 control-label">Check Out</label>
																<div class="col-sm-4">
																	<input style="padding-left: 40px;" type="text" class="form-control has-feedback-left" id="single_cal4" placeholder="MM/DD/YYYY" aria-describedby="inputSuccess2Status4">
																	<span class="fa fa-calendar-o form-control-feedback left" aria-hidden="true"></span>
																	<span id="inputSuccess2Status4" class="sr-only">(success)</span>
																</div>
															</div>
														</div>
														 
														  
													
													<br>
													<div class="col-md-5" align="right">	
														<input type="submit" value="Submit" style="background-color:orange">
													</div>
													</form> 
                                                </p>
                                                
                                            </div>
											
                                            <div id="step-3">
                                                <p class="text-center">
                                                    -- Kosong --
                                                </p>
                                                <p class="clearfix text-center">
                                                    <button class="buttonPrevious btn btn-add" data-toggle="modal" data-target="#myModal">Skip</button>
                                                    <button class="buttonPrevious btn btn-add">Add</button>
                                                </p>
                                            </div>
                                            <div id="step-4">
                                                <p class="text-center">
                                                    -- Kosong --
                                                </p>
                                                <p class="clearfix text-center">
                                                    <button class="buttonPrevious btn btn-add" data-toggle="modal" data-target="#myModal">Skip</button>
                                                    <button class="buttonPrevious btn btn-add">Add</button>
                                                </p>
                                            </div>
                                        </div>
                                        <!-- End SmartWizard Content -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        </figure>
                    </div>
                </div>
            </div>
            </div>
            </div>
            <!--/.row-->
            </div>
            <!--/.container-->  
        </section>
    </section>
    <!--end wrapper-->
    <section class="footer_bottom">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <p class="copyright">&copy; Copyright 2015 Everest | Powered by <a href="http://www.jqueryrain.com/">jQuery Rain</a></p>
                </div>
                <div class="col-sm-6 ">
                    <div class="footer_social">
                        <ul class="footbot_social">
                            <li><a class="fb" href="#." data-placement="top" data-toggle="tooltip" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                            <li><a class="twtr" href="#." data-placement="top" data-toggle="tooltip" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                            <li><a class="dribbble" href="#." data-placement="top" data-toggle="tooltip" title="Dribbble"><i class="fa fa-dribbble"></i></a></li>
                            <li><a class="skype" href="#." data-placement="top" data-toggle="tooltip" title="Skype"><i class="fa fa-skype"></i></a></li>
                            <li><a class="rss" href="#." data-placement="top" data-toggle="tooltip" title="RSS"><i class="fa fa-rss"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery-1.10.2.min.js"></script>
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
    <!-- jQuery -->
    <script src="<?php echo base_url(); ?>assets/vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="<?php echo base_url(); ?>assets/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="<?php echo base_url(); ?>assets/vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="<?php echo base_url(); ?>assets/vendors/nprogress/nprogress.js"></script>
    <!-- jQuery Smart Wizard -->
    <script src="<?php echo base_url(); ?>assets/vendors/jQuery-Smart-Wizard/js/jquery.smartWizard.js"></script>
    <!-- Custom Theme Scripts -->
    <script src="<?php echo base_url(); ?>assets/js/custom.js"></script>
    <!-- jQuery Smart Wizard -->
    <script>
    $(document).ready(function() {
        $('#wizard').smartWizard();

        $('#wizard_verticle').smartWizard({
            transitionEffect: 'slide'
        });

        $('.buttonNext').addClass('btn btn-success');
        $('.buttonPrevious').addClass('btn btn-primary');
        $('.buttonFinish').addClass('btn btn-default');
    });
    </script>
    <!-- /jQuery Smart Wizard -->
    <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h4 class="modal-title" id="myModalLabel">Pilihan Transportasi</h4>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </div>
    </div>
	<?php 
		$this->load->view('script/date_picker');
	?>
    <!-- End Modal -->
</body>

</html>
