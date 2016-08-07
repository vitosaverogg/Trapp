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
<body background="<?php echo base_url(); ?>assets/images/wallpapers-minimalistic-fog-sandbox-simple-backgrounds-abstract-wallpaper-retro.jpg" opacity= "0.3"style='position:absolute;z-index:0;left:0;top:0;width:100%;height:100%'>
    <div class = "container-fluid">
        <div class="row">
            <!-- <div class="col-sm-3" style="background-color:blue;">
            </div> -->
            <div class="col-sm-6">
                 <form class="form-2" method="post" action="<?php echo base_url(); ?>form_wizard" style="background-color:">
                            <h1><span class="log-in">your</span> TRIP <span class="sign-up">plan</span></h1>
                            <div class="form-group">
                                <label class="label col-md-3 col-sm-3 col-xs-12">Asal</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                    <input type="text" name="country" id="asal" />
                                    <!-- <input type="text" name="country" id="autocomplete-ajax-x" disabled="disabled"/> -->
                                </div>
                            </div>
                            <!-- end asal -->
                            <!-- tujuan -->
                            <div class="form-group">
                                <label class="label col-md-3 col-sm-3 col-xs-12">Tujuan</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                    <input type="text" name="country" id="tujuan" />
                                    <!-- <input type="text" name="country" id="autocomplete-ajax-x" disabled="disabled"/> -->
                                </div>
                            </div>
                            <!-- end tujuan -->
                            <!-- tanggal -->
                            <div class="form-group">
                                <label class="label col-md-3 col-sm-3 col-xs-12">Tanggal</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                    <input style="padding-left: 40px;" type="text" class="form-control has-feedback-left" id="single_cal4" placeholder="DD/MM/YYYY" aria-describedby="inputSuccess2Status4">
                                    <span class="fa fa-calendar-o form-control-feedback left" aria-hidden="true"></span>
                                    <span id="inputSuccess2Status4" class="sr-only">(success)</span>
                                </div>
                            </div>
                            <!-- end tanggal -->
                            <!-- budget -->
                            <div class="form-group">
                                <label class="label col-md-3 col-sm-3 col-xs-12">Budget</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                    <input type="number" name="money" id="autocomplete-custom-append" placeholder="ex Rp 50.000" class="form-control col-md-10" style="float: left;" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="label col-md-3 col-sm-3 col-xs-12">Pilihan</label>
                                <div class="col-md-4 col-sm-4 col-xs-12">
                                    <label>
                                        <input type="radio" checked="" value="option1 " id="optionsRadios1 " name="optionsRadios "> Custom
                                    </label>
                                </div>
                                <div class="col-md-4 col-sm-4 col-xs-12">
                                    <label>
                                        <input type="radio" value="option2" id="optionsRadios2 " name="optionsRadios "> Paket
                                    </label>
                                </div>
                            </div>
                            <!-- end budget -->
                            <!-- tombol -->
                            <div class="text-center">
                                <button type="submit" class="log-twitter">Submit</button>
                                <!-- <input type="submit" value="Beli Tiket" onclick="window.location = '<?php echo base_url(); ?>transportasi'"> -->
                            </div>
                            <!-- end tombol -->
                        </form>​​
            </div>
            <!-- <div class="col-sm-3" style="background-color:red;">
            </div> -->
         </div>
    </div>    
    <!-- jQuery -->
    <script src="<?php echo base_url(); ?>assets/vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="<?php echo base_url(); ?>assets/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- Slider -->
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jflickrfeed.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.magnific-popup.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/swipe.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/main.js"></script>
    <!---->
    <?php 
    $this->load->view('scripts/date_picker');
    $this->load->view('scripts/auto_completed');
    ?>
</body>
</html>