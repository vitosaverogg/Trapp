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
                  <div class="blog_large">
                        <figure class="post_img">
                           <!-- Post Image Slider -->
                           <div id="slider" class="swipe">
                              <ul class="swipe-wrap">
                                 <li><img src="<?php echo base_url(); ?>assets/images/blog/blog_2.png" alt="blog post"></li>
                                 <li><img src="<?php echo base_url(); ?>assets/images/blog/blog_1.png" alt="blog post"></li>
                                 <li><img src="<?php echo base_url(); ?>assets/images/blog/blog_3.png" alt="blog post"></li>
                             </ul>
                             <div class="swipe-navi">
                                <div class="swipe-left" onclick="mySwipe.prev()"><i class="fa fa-chevron-left"></i></div> 
                                <div class="swipe-right" onclick="mySwipe.next()"><i class="fa fa-chevron-right"></i></div>
                            </div>
                        </div>
                    </figure>
            </div>
        </div>

        <!--Sidebar Form-->
        <div class="col-lg-4 col-md-4 col-sm-4">
          <div class="sidebar">
             <div class="widget widget_search">
                <div class="site-search-area">
                   <form class="form-2" method="post" action="<?php echo base_url(); ?>form_wizard">
                    <h1><span class="log-in">your</span> TRIP <span class="sign-up">plan</span></h1>
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

                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Budget</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" name="country" id="autocomplete-custom-append" class="form-control col-md-10" style="float: left;" />
                          <div id="autocomplete-container" style="position: relative; float: left; width: 400px; margin: 10px;"></div>
                        </div>
                      </div>

                      <div class="radio control-label col-md-3 col-sm-3 col-xs-12"">
                            <label>
                              <input type="radio" checked="" value="option1" id="optionsRadios1" name="optionsRadios"> Custom
                            </label>
                          </div>
                          <div class="radio control-label col-md-3 col-sm-3 col-xs-12"">
                            <label>
                              <input type="radio" value="option2" id="optionsRadios2" name="optionsRadios"> Paket
                            </label>
                          </div>

                    <p class="clearfix"> 
                        <button type="submit" class="log-twitter">Submit</button>  
                        <input type="submit" name="submit" value="Log in">
                    </p>
                </form>​​
            </div><!-- end site search -->
        </div>

        <div class="widget widget_categories">

        </div>
    </div>
</div>
</div><!--/.row-->
</div> <!--/.container-->
</section>
</section>
<!--end wrapper-->

<!--start footer-->
<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-md-3 col-lg-3">
                <div class="widget_title">
                    <h4><span>About Us</span></h4>
                </div>
                <div class="widget_content">
                    <p>Donec earum rerum hic tenetur ans sapiente delectus, ut aut reiciendise voluptat maiores alias consequaturs aut perferendis doloribus asperiores.</p>
                    <ul class="contact-details-alt">
                        <li><i class="fa fa-map-marker"></i> <p><strong>Address</strong>: #2021 Lorem Ipsum</p></li>
                        <li><i class="fa fa-user"></i> <p><strong>Phone</strong>:(+91) 9000-12345</p></li>
                        <li><i class="fa fa-envelope"></i> <p><strong>Email</strong>: <a href="#">mail@example.com</a></p></li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-6 col-md-3 col-lg-3">
                <div class="widget_title">
                    <h4><span>Recent Posts</span></h4>
                </div>
                <div class="widget_content">
                  <ul class="links">
                    <li><a href="#">Aenean commodo ligula eget dolor<span>November 07, 2015</span></a></li>
                    <li><a href="#">Temporibus autem quibusdam <span>November 05, 2015</span></a></li>
                    <li><a href="#">Debitis aut rerum saepe <span>November 03, 2015</span></a></li>
                    <li><a href="#">Et voluptates repudiandae <span>November 02, 2015</span></a></li>
                </ul>
            </div>
        </div>
        <div class="col-sm-6 col-md-3 col-lg-3">
            <div class="widget_title">
                <h4><span>Twitter</span></h4>
            </div>
            <div class="widget_content">
                <ul class="tweet_list">
                    <li class="tweet_content item">
                        <p class="tweet_link"><a href="#">@jquery_rain </a> Lorem ipsum dolor et, consectetur adipiscing eli</p>
                        <span class="time">29 September 2015</span>
                    </li>
                    <li class="tweet_content item">
                        <p class="tweet_link"><a href="#">@jquery_rain </a> Lorem ipsum dolor et, consectetur adipiscing eli</p>
                        <span class="time">29 September 2015</span>
                    </li>
                    <li class="tweet_content item">
                        <p class="tweet_link"><a href="#">@jquery_rain </a> Lorem ipsum dolor et, consectetur adipiscing eli</p>
                        <span class="time">29 September 2015</span>
                    </li>
                </ul>
            </div>
            <div class="widget_content">
                <div class="tweet_go"></div>
            </div>
        </div>
        <div class="col-sm-6 col-md-3 col-lg-3">
            <div class="widget_title">
                <h4><span>Flickr Gallery</span></h4>
            </div>
            <div class="widget_content">
                <div class="flickr">
                    <ul id="flickrFeed" class="flickr-feed"></ul>
                </div>
            </div>
        </div>
    </div>
</div>
</footer>
<!--end footer-->

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

</body>
</html>