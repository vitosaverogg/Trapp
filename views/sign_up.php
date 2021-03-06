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
        $this->load->view('_header');
     ?>
    <!--End Header-->
    <!--start wrapper-->
    <section class="wrapper">
        <section class="content right_sidebar">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
                        <div class="x_panel">
                            <div class="x_title">
                                <p>
                                    Keuntungan menjadi member trapp
                                </p>
                            </div>
                            <div class="x_content">
                                <p>1. Anda mendapatkan penawaran yang spesial</p>
                                <p>2. Terdapat promo khusus untuk Anda sebagai member</p>
                                <p>3. Anda mendapatkan poin untuk transaksi yang Anda lakukan</p>
                            </div>
                        </div>
                    </div>
                    <div class="margin:0;padding:0;display:inline">
                        <div class="sidebar-widget">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2>Sign Up <small>make your new account</small></h2>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">
                                    <br />
                                    <form class="form-horizontal form-label-left input_mask"  method=" post " action="<?php echo base_url(); ?>#">
                                        <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
                                            <input name="namaLengkap_register" type="text" class="form-control has-feedback-left" id="inputSuccess2" placeholder="Nama Lengkap">
                                            <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                                        </div>
                                        <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
                                            <input name="email_register" type="text" class="form-control has-feedback-left" id="inputSuccess2" placeholder="Email">
                                            <span class="fa fa-envelope form-control-feedback left" aria-hidden="true"></span>
                                        </div>
                                        <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
                                            <input name="password_register" type="text" class="form-control has-feedback-left" id="inputSuccess4" placeholder="Password">
                                            <span class="fa fa-lock form-control-feedback left" aria-hidden="true"></span>
                                        </div>
										<div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
                                            <input name="passwordAgain_register" type="text" class="form-control has-feedback-left" id="inputSuccess4" placeholder="Repeat Password">
                                            <span class="fa fa-lock form-control-feedback left" aria-hidden="true"></span>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                                                <button type="submit" class="btn btn-success">Register</button>
                                                <button type="submit" class="btn btn-primary">Cancel</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
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
    <?php 
        $this->load->view('_footer');
     ?>
    <!-- jQuery -->
    <script src="<?php echo base_url(); ?>assets/vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="<?php echo base_url(); ?>assets/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
   
</body>

</html>
