<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie ie8" class="no-js" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html class="no-js" lang="en"> <!--<![endif]-->
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Trapp</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

    <!-- CSS FILES -->
    <!-- Custom Theme Style -->
    <link href="<?php echo base_url(); ?>assets/css/custom.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css"/>
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
    <header id="header">
        <div id="top-bar">
            <div class="container">
                <div class="row">
                    <div class="col-sm-3">
                        <div id="logo">
                            <h1><a href="index.html"><img src="<?php echo base_url(); ?>assets/images/logo.png" alt="Everest"/></a></h1>
                        </div>
                    </div>
                    <div class="col-sm-9 top-info">
                        <ul>
                            <li><a href="" class="my-tweet"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="" class="my-facebook"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="" class="my-skype"><i class="fa fa-skype"></i></a></li>
                            <li><a href="" class="my-pint"><i class="fa fa-pinterest"></i></a></li>
                            <li><a href="" class="my-rss"><i class="fa fa-rss"></i></a></li>
                            <li><a href="" class="my-google"><i class="fa fa-google-plus"></i></a></li>
                        </ul>
                        <span class="hidden-xs"><i class="fa fa-phone"></i>Phone: (123) 456-7890</span>
                        <span class="hidden-xs"><i class="fa fa-envelope"></i>Email: mail@example.com</span>
                    </div>

                </div>
            </div>
        </div>
        <div class="pixel-header">

        </div>

        <!-- Navigation
        ================================================== -->
        <div class="navbar navbar-default navbar-static-top container" role="navigation">
            <!--  <div class="container">-->
            <div class="row">
                <span class="nav-caption">Navigation Menu...</span>
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
            </div><!--/.row -->
            <!--</div>--><!--/.container -->
        </div>
    </header>
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
                              <small>Step 1 description</small>
                          </span>
                      </a>
                  </li>
                  <li>
                      <a href="#step-2">
                        <span class="step_no">2</span>
                        <span class="step_descr">
                          Step 2<br />
                          <small>Step 2 description</small>
                      </span>
                  </a>
              </li>
              <li>
                  <a href="#step-3">
                    <span class="step_no">3</span>
                    <span class="step_descr">
                      Step 3<br />
                      <small>Step 3 description</small>
                  </span>
              </a>
          </li>
          <li>
              <a href="#step-4">
                <span class="step_no">4</span>
                <span class="step_descr">
                  Step 4<br />
                  <small>Step 4 description</small>
              </span>
          </a>
      </li>
  </ul>
  <div id="step-1">
    <form class="form-horizontal form-label-left">

      <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">First Name <span class="required">*</span>
        </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
          <input type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12">
      </div>
  </div>
  <div class="form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Last Name <span class="required">*</span>
    </label>
    <div class="col-md-6 col-sm-6 col-xs-12">
      <input type="text" id="last-name" name="last-name" required="required" class="form-control col-md-7 col-xs-12">
  </div>
</div>
<div class="form-group">
    <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Middle Name / Initial</label>
    <div class="col-md-6 col-sm-6 col-xs-12">
      <input id="middle-name" class="form-control col-md-7 col-xs-12" type="text" name="middle-name">
  </div>
</div>
<div class="form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12">Gender</label>
    <div class="col-md-6 col-sm-6 col-xs-12">
      <div id="gender" class="btn-group" data-toggle="buttons">
        <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
          <input type="radio" name="gender" value="male"> &nbsp; Male &nbsp;
      </label>
      <label class="btn btn-primary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
          <input type="radio" name="gender" value="female"> Female
      </label>
  </div>
</div>
</div>
<div class="form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12">Date Of Birth <span class="required">*</span>
    </label>
    <div class="col-md-6 col-sm-6 col-xs-12">
      <input id="birthday" class="date-picker form-control col-md-7 col-xs-12" required="required" type="text">
  </div>
</div>

</form>

</div>
<div id="step-2">
    <h2 class="StepTitle">Step 2 Content</h2>
    <p>
      do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
      fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
  </p>
  <p>
      Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
      in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
  </p>
</div>
<div id="step-3">
    <h2 class="StepTitle">Step 3 Content</h2>
    <p>
      sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore
      eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
  </p>
  <p>
      Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
      in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
  </p>
</div>
<div id="step-4">
    <h2 class="StepTitle">Step 4 Content</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
      Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
  </p>
  <p>
      Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
      in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
  </p>
  <p>
      Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
      in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
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
</div><!--/.row-->
</div> <!--/.container-->
</section>
</section>
<!--end wrapper-->

<section class="footer_bottom">
  <div class="container">
     <div class="row">
        <div class="col-sm-6">
            <p class="copyright">&copy; Copyright 2015 Everest | Powered by  <a href="http://www.jqueryrain.com/">jQuery Rain</a></p>
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
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.cookie.js"></script> <!-- jQuery cookie -->
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/styleswitch.js"></script> <!-- Style Colors Switcher -->
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
</body>
</html>