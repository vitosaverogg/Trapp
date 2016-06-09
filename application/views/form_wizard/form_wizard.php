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
    <!-- css file -->
    <?php 
        $this->load->view('_css');
     ?>
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
   $this->load->view('_header', FALSE);
    ?>
    <!--End Header-->
    <!--start wrapper-->
    <section class="wrapper">
        <!-- container -->
        <div class="container">
        <div class="content">
        <!-- col 8 -->
            <div class="col-md-8 col-sm-8 col-xs-12">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_content">
                        <!-- Smart Wizard -->
                        <div id="wizard" class="form_wizard wizard_horizontal">
                            <ul class="wizard_steps">
                                <li>
                                    <a href="#step-transportasi">
                                        <span class="step_no">1</span>
                                        <small>Transportasi</small>
                                    </a>
                                </li>
                                <li>
                                    <a href="#step-penginapan">
                                        <span class="step_no">2</span>
                                        <small>Penginapan</small>
                                    </a>
                                </li>
                                <li>
                                    <a href="#step-destinasi-wisata">
                                        <span class="step_no">3</span>
                                        <small>Destinasi Wisata</small>
                                    </a>
                                </li>
                                <li>
                                    <a href="#step-rental-kendaraan">
                                        <span class="step_no">4</span>
                                        <small>Rental Kendaraan</small>
                                    </a>
                                </li>
                            </ul>
                            <div id="step-transportasi">
                                <?php 
                                    $this->load->view('form_wizard/transportasi');
                                 ?>
                            </div>
                            <div id="step-penginapan">
                                <?php 
                                    $this->load->view('form_wizard/penginapan');
                                 ?>
                            </div>
                            <div id="step-destinasi-wisata">
                                <?php 
                                    $this->load->view('form_wizard/destinasi_wisata');
                                 ?>
                            </div>
                            <div id="step-rental-kendaraan">
                                <?php 
                                    $this->load->view('form_wizard/rental_kendaraan');
                                 ?>
                            </div>
                        </div>
                        <!-- End SmartWizard Content -->
                    </div>
                </div>
            </div>
            <!-- end col -->
            <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Detil Order</h2>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            </div>
            <!-- end content -->
        </div>
        <!--/.container-->
    </section>
    <!--end wrapper-->
    <?php 
        $this->load->view('_footer');
     ?>
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
        $this->load->view('scripts/date_picker');
        $this->load->view('scripts/auto_completed');
        $this->load->view('scripts/smart_wizard');
    ?>
    
</body>

</html>
