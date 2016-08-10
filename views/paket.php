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
                        <div class="col-md-3 col-sm-3 col-xs-12">
                            <div class="x_panel">
								<div class="x_content">
									<img src="<?php echo base_url(); ?>assets/images/paket/kawahputih.jpg" style="width: 100%; height: 100%">
								</div>
                                <div class="x_title">
                                    <h2>Paket 1</h2>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">
                                    <h3>Pesawat</h3>
                                    <p>Lion Air</p>
                                    <p>Bandung - Jakarta</p>
                                    <h3>Hotel</h3>
                                    <p>Ibis Hotel</p>
                                    <h3>Event</h3>
                                    <p>Java Jazz</p>
                                    <h2>Rp. 5.500.000</h2>
                                    <div style="text-align: center; width: 100%;">
                                        <button class="buttonPrevious btn btn-add" data-toggle="modal" data-target="#myModal">Detail</button>
										<button class="buttonPrevious btn btn-add">Bayar</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-12">
                            <div class="x_panel">
								<div class="x_content">
									<img src="<?php echo base_url(); ?>assets/images/paket/tangkubanperahu.jpg" style="width: 100%; height: 139.097px">
								</div>
                                <div class="x_title">
                                    <h2>Paket 2</h2>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">
                                    <h3>Pesawat</h3>
                                    <p>Lion Air</p>
                                    <p>Bandung - Jakarta</p>
                                    <h3>Hotel</h3>
                                    <p>Ibis Hotel</p>
                                    <h3>Event</h3>
                                    <p>Java Jazz</p>
                                    <h2>Rp. 5.500.000</h2>
                                    <div style="text-align: center; width: 100%;">
                                        <button class="buttonPrevious btn btn-add" data-toggle="modal" data-target="#myModal">Detail</button>
										<button class="buttonPrevious btn btn-add">Bayar</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-12">
                            <div class="x_panel">
								<div class="x_content">
									<img src="<?php echo base_url(); ?>assets/images/paket/gedungsate.jpg" style="width: 100%; height: 139.097px">
								</div>
                                <div class="x_title">
                                    <h2>Paket 3</h2>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">
                                    <h3>Pesawat</h3>
                                    <p>Lion Air</p>
                                    <p>Bandung - Jakarta</p>
                                    <h3>Hotel</h3>
                                    <p>Ibis Hotel</p>
                                    <h3>Event</h3>
                                    <p>Java Jazz</p>
                                    <h2>Rp. 5.500.000</h2>
                                    <div style="text-align: center; width: 100%;">
                                        <button class="buttonPrevious btn btn-add" data-toggle="modal" data-target="#myModal">Detail</button>
										<button class="buttonPrevious btn btn-add">Bayar</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-12">
                            <div class="x_panel">
								<div class="x_content">
									<img src="<?php echo base_url(); ?>assets/images/paket/ciater.jpg" style="width: 100%; height: 139.097px">
								</div>
                                <div class="x_title">
                                    <h2>Paket 4</h2>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">
                                    <h3>Pesawat</h3>
                                    <p>Lion Air</p>
                                    <p>Bandung - Jakarta</p>
                                    <h3>Hotel</h3>
                                    <p>Ibis Hotel</p>
                                    <h3>Event</h3>
                                    <p>Java Jazz</p>
                                    <h2>Rp. 5.500.000</h2>
                                    <div style="text-align: center; width: 100%;">
                                        <button class="buttonPrevious btn btn-add" data-toggle="modal" data-target="#myModal">Detail</button>
										<button class="buttonPrevious btn btn-add">Bayar</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </section>
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
    <!-- jQuery -->
    <script src="<?php echo base_url(); ?>assets/vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="<?php echo base_url(); ?>assets/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    
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
                    <h2 class="modal-title" id="myModalLabel" style="text-align: center">Detail Paket</h2>
                </div>
                <div class="modal-body">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent viverra leo lacinia luctus rutrum. Morbi id placerat leo. Maecenas eu sem erat. Integer imperdiet viverra purus vitae eleifend. Duis laoreet ultricies mauris elementum ultrices. Ut vel elit sodales turpis rutrum vehicula tristique in velit. Quisque et dolor nibh. Cras scelerisque tortor ac urna venenatis, ac feugiat sem ornare. Vestibulum ullamcorper at est at dictum. Pellentesque nec elementum velit. Nullam et lacus congue tellus aliquam pretium a eu felis. Suspendisse potenti. Integer pretium urna lorem, elementum pretium felis dapibus ut. Duis et metus sit amet metus convallis laoreet. Morbi volutpat nisl ac sagittis rutrum. 
                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </div>
    </div>
    <!-- End Modal -->
</body>

</html>
