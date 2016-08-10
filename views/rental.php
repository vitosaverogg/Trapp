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
    <section class="wrapper">
        <section class="content">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="col-md-8 col-sm-8 col-xs-12" style="padding-right: 0">
                            <div class="x_panel">
								<div class="col-md-4 col-sm-4 col-xs-12">
									<img src="<?php echo base_url(); ?>assets/images/rental/hondacity.jpg" style="width: 200px; height: 125px">
								</div>
								<div class="col-md-4 col-sm-4 col-xs-12">
									<h2 style="margin: 0">HONDA CITY</h2>
									<p>X passengers</p>
									<p>X bags</p>
									<p>Include : </p>
									<ol>
										<li>Driver</li>
										<li>Fuel</li>
									</ol>
								</div>
                            </div>
                        </div>
						<div class="col-md-4 col-sm-4 col-xs-12" style="padding-left: 0">
                            <div class="x_panel">
                                <div class="x_content">
									<h1 style="margin: 0; text-align: right">Rp. 750.000</h1>
									<h3 style="margin: 0; text-align: right">per 12 hours</h3>
									<button class="btn btn-success">Book Now</button>
                                </div>
                            </div>
                        </div>
						<div class="col-md-8 col-sm-8 col-xs-12" style="padding-right: 0">
                            <div class="x_panel">
								<div class="col-md-4 col-sm-4 col-xs-12">
									<img src="<?php echo base_url(); ?>assets/images/rental/hondacity.jpg" style="width: 200px; height: 125px">
								</div>
								<div class="col-md-4 col-sm-4 col-xs-12">
									<h2 style="margin: 0">HONDA CITY</h2>
									<p>X passengers</p>
									<p>X bags</p>
									<p>Include : </p>
									<ol>
										<li>Driver</li>
										<li>Fuel</li>
									</ol>
								</div>
                            </div>
                        </div>
						<div class="col-md-4 col-sm-4 col-xs-12" style="padding-left: 0">
                            <div class="x_panel">
                                <div class="x_content">
									<h1 style="margin: 0; text-align: right">Rp. 750.000</h1>
									<h3 style="margin: 0; text-align: right">per 12 hours</h3>
									<button class="btn btn-success">Book Now</button>
                                </div>
                            </div>
                        </div>
						<div class="col-md-8 col-sm-8 col-xs-12" style="padding-right: 0">
                            <div class="x_panel">
								<div class="col-md-4 col-sm-4 col-xs-12">
									<img src="<?php echo base_url(); ?>assets/images/rental/hondacity.jpg" style="width: 200px; height: 125px">
								</div>
								<div class="col-md-4 col-sm-4 col-xs-12">
									<h2 style="margin: 0">HONDA CITY</h2>
									<p>X passengers</p>
									<p>X bags</p>
									<p>Include : </p>
									<ol>
										<li>Driver</li>
										<li>Fuel</li>
									</ol>
								</div>
                            </div>
                        </div>
						<div class="col-md-4 col-sm-4 col-xs-12" style="padding-left: 0">
                            <div class="x_panel">
                                <div class="x_content">
									<h1 style="margin: 0; text-align: right">Rp. 750.000</h1>
									<h3 style="margin: 0; text-align: right">per 12 hours</h3>
									<button class="btn btn-success">Book Now</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </section>
    
	<?php
		$this->load->view('_footer');
	?>
	
   <!-- jQuery -->
    <script src="<?php echo base_url(); ?>assets/vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="<?php echo base_url(); ?>assets/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
   
    <?php 
        $this->load->view('script/date_picker');
     ?>
    <!-- <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/autocompleted/jquery-1.8.2.min.js"></script> -->
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/autocompleted/jquery.mockjax.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/autocompleted/jquery.autocomplete.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/autocompleted/countries.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/autocompleted/demo.js"></script>
</body>
</html>