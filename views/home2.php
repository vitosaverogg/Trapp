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
<link rel="shortcut icon" href="../favicon.ico"> 
        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/demo.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/style1.css" />
        <script type="text/javascript" src="<?php echo base_url();?>assets/js/modernizr.custom.86080.js"></script>




</head>

<body>

    <!--Start Header-->
    <?php 
        $this->load->view('_header', FALSE);
     ?>
        <!-- Navigation
        ================================================== -->
        <!-- <div class="navbar navbar-default navbar-static-top container" role="navigation"> -->
        <!--  <div class="container">-->
        <!--  <div class="row">
                <span class="nav-caption">Navigation Menu...</span>
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
            </div> -->
        <!--/.row -->
        <!--</div>-->
        <!--/.container -->
        <!-- </div> -->
    </header>

    <!--End Header-->
    <!--start wrapper-->
    <section class="wrapper">
         <ul class="cb-slideshow img-responsive">
            <li><span>Image 01</span><div></div></li>
            <li><span>Image 02</span><div></div></li>
            <li><span>Image 03</span><div></div></li>
            <li><span>Image 04</span><div></div></li>
            <li><span>Image 05</span><div></div></li>
            <li><span>Image 06</span><div></div></li>               
        </ul>
        <section class="content right_sidebar">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
                        <div class="blog_large">
                            <figure class="post_img">
                                <!-- Post Image Slider 
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
                                </div>-->
                            </figure>
                        </div>
                    </div>

                    <!--your trip planner-->
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
                                                <input type="number" name="country" id="autocomplete-custom-append" class="form-control col-md-10" style="float: left;" />
                                                <div id="autocomplete-container" style="position: relative; float: left; width: 400px; margin: 10px;">
                                                </div>
                                            </div>
                                        </div>
                                        <!-- daterangepicker -->
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Tanggal</label>
                                            <div class="col-md-9 col-sm-9 col-xs-12">
                                                <input style="padding-left: 45px;" type="text" class="form-control has-feedback-left" id="single_cal4" placeholder="DD/MM/YYYY" aria-describedby="inputSuccess2Status4">
                                                <span class="fa fa-calendar-o form-control-feedback left" aria-hidden="true"></span>
                                                <span id="inputSuccess2Status4" class="sr-only">(success)</span>
                                            </div>
                                        </div>

                                        <div class="radio-inline control-label col-md-3 col-sm-3 col-xs-12">
                                            <label>
                                                <input type="radio" checked="" value="option1 " id="optionsRadios1 " name="optionsRadios "> Custom
                                            </label>
                                        </div>
                                        <div class="radio-inline control-label col-md-3 col-sm-3 col-xs-12">
                                            <label>
                                                <input type="radio" value="option2" id="optionsRadios2 " name="optionsRadios "> Paket
                                            </label>
                                        </div>
                                        <p class="clearfix">
                                            <button type="submit" class="log-twitter">Submit</button>
                                            <input type="submit" name="submit" value="Log in ">
                                        </p>
                                    </form>​​
                                </div>
                                <!-- end site search -->
                            </div>
                            <div class="widget widget_categories ">
                            </div>
                        </div>
                        <!-- apapun -->
                    </div>
                    <!-- end your trip planner -->
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
    <!-- bootstrap-daterangepicker -->
    <script src="<?php echo base_url(); ?>assets/js/moment/moment.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/datepicker/daterangepicker.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script>
    $(document).ready(function() {
        var cb = function(start, end, label) {
            console.log(start.toISOString(), end.toISOString(), label);
            $('#reportrange_right span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
        };

        var optionSet1 = {
            startDate: moment().subtract(29, 'days'),
            endDate: moment(),
            minDate: '01/01/2012',
            maxDate: '12/31/2015',
            dateLimit: {
                days: 60
            },
            showDropdowns: true,
            showWeekNumbers: true,
            timePicker: false,
            timePickerIncrement: 1,
            timePicker12Hour: true,
            ranges: {
                'Today': [moment(), moment()],
                'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                'This Month': [moment().startOf('month'), moment().endOf('month')],
                'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
            },
            opens: 'right',
            buttonClasses: ['btn btn-default'],
            applyClass: 'btn-small btn-primary',
            cancelClass: 'btn-small',
            format: 'MM/DD/YYYY',
            separator: ' to ',
            locale: {
                applyLabel: 'Submit',
                cancelLabel: 'Clear',
                fromLabel: 'From',
                toLabel: 'To',
                customRangeLabel: 'Custom',
                daysOfWeek: ['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa'],
                monthNames: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
                firstDay: 1
            }
        };

        $('#reportrange_right span').html(moment().subtract(29, 'days').format('MMMM D, YYYY') + ' - ' + moment().format('MMMM D, YYYY'));

        $('#reportrange_right').daterangepicker(optionSet1, cb);

        $('#reportrange_right').on('show.daterangepicker', function() {
            console.log("show event fired");
        });
        $('#reportrange_right').on('hide.daterangepicker', function() {
            console.log("hide event fired");
        });
        $('#reportrange_right').on('apply.daterangepicker', function(ev, picker) {
            console.log("apply event fired, start/end dates are " + picker.startDate.format('MMMM D, YYYY') + " to " + picker.endDate.format('MMMM D, YYYY'));
        });
        $('#reportrange_right').on('cancel.daterangepicker', function(ev, picker) {
            console.log("cancel event fired");
        });

        $('#options1').click(function() {
            $('#reportrange_right').data('daterangepicker').setOptions(optionSet1, cb);
        });

        $('#options2').click(function() {
            $('#reportrange_right').data('daterangepicker').setOptions(optionSet2, cb);
        });

        $('#destroy').click(function() {
            $('#reportrange_right').data('daterangepicker').remove();
        });

    });
    </script>
    <script>
    $(document).ready(function() {
        var cb = function(start, end, label) {
            console.log(start.toISOString(), end.toISOString(), label);
            $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
        };

        var optionSet1 = {
            startDate: moment().subtract(29, 'days'),
            endDate: moment(),
            minDate: '01/01/2012',
            maxDate: '12/31/2015',
            dateLimit: {
                days: 60
            },
            showDropdowns: true,
            showWeekNumbers: true,
            timePicker: false,
            timePickerIncrement: 1,
            timePicker12Hour: true,
            ranges: {
                'Today': [moment(), moment()],
                'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                'This Month': [moment().startOf('month'), moment().endOf('month')],
                'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
            },
            opens: 'left',
            buttonClasses: ['btn btn-default'],
            applyClass: 'btn-small btn-primary',
            cancelClass: 'btn-small',
            format: 'MM/DD/YYYY',
            separator: ' to ',
            locale: {
                applyLabel: 'Submit',
                cancelLabel: 'Clear',
                fromLabel: 'From',
                toLabel: 'To',
                customRangeLabel: 'Custom',
                daysOfWeek: ['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa'],
                monthNames: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
                firstDay: 1
            }
        };
        $('#reportrange span').html(moment().subtract(29, 'days').format('MMMM D, YYYY') + ' - ' + moment().format('MMMM D, YYYY'));
        $('#reportrange').daterangepicker(optionSet1, cb);
        $('#reportrange').on('show.daterangepicker', function() {
            console.log("show event fired");
        });
        $('#reportrange').on('hide.daterangepicker', function() {
            console.log("hide event fired");
        });
        $('#reportrange').on('apply.daterangepicker', function(ev, picker) {
            console.log("apply event fired, start/end dates are " + picker.startDate.format('MMMM D, YYYY') + " to " + picker.endDate.format('MMMM D, YYYY'));
        });
        $('#reportrange').on('cancel.daterangepicker', function(ev, picker) {
            console.log("cancel event fired");
        });
        $('#options1').click(function() {
            $('#reportrange').data('daterangepicker').setOptions(optionSet1, cb);
        });
        $('#options2').click(function() {
            $('#reportrange').data('daterangepicker').setOptions(optionSet2, cb);
        });
        $('#destroy').click(function() {
            $('#reportrange').data('daterangepicker').remove();
        });
    });
    </script>
    <script>
    $(document).ready(function() {
        $('#single_cal1').daterangepicker({
            singleDatePicker: true,
            calender_style: "picker_1"
        }, function(start, end, label) {
            console.log(start.toISOString(), end.toISOString(), label);
        });
        $('#single_cal2').daterangepicker({
            singleDatePicker: true,
            calender_style: "picker_2"
        }, function(start, end, label) {
            console.log(start.toISOString(), end.toISOString(), label);
        });
        $('#single_cal3').daterangepicker({
            singleDatePicker: true,
            calender_style: "picker_3"
        }, function(start, end, label) {
            console.log(start.toISOString(), end.toISOString(), label);
        });
        $('#single_cal4').daterangepicker({
            singleDatePicker: true,
            calender_style: "picker_4"
        }, function(start, end, label) {
            console.log(start.toISOString(), end.toISOString(), label);
        });
    });
    </script>
    <script>
    $(document).ready(function() {
        $('#reservation').daterangepicker(null, function(start, end, label) {
            console.log(start.toISOString(), end.toISOString(), label);
        });
    });
    </script>
    <!-- /bootstrap-daterangepicker -->
</body>

</html>