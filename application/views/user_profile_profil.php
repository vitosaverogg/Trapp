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
    <header id="header">
        <div id="top-bar">
            <div class="container">
                <div class="row">
                    <div class="col-sm-3">
                        <div id="logo">
                            <h1><a href=""><img src="<?php echo base_url(); ?>assets/images/logo.png" alt="Everest"/></a></h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="pixel-header continer-fluid" >  
        </div>
    </header>
    <div id="menu">
        <nav class="navbar-wrapper navbar-default" role="navigation">
            <div class="container">
                  <div id="navbar-scroll" class="collapse navbar-collapse navbar-backyard navbar-right">
                    <ul class="nav navbar-nav">
                        <li><a href="user_profile">Your Plan</a></li>
                        <li><a href="user_profile_profil">Profile</a></li>
                        <li><a href="#download">History</a></li>
                    </ul>
                  </div>
            </div>
        </nav>
    </div>
    <br>
    <br>
    <div class="col-md-7 col-sm-7 col-lg-8">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>IDENTITAS </h2>
                        <div class="clearfix"></div>
                    </div>
                        <ul>
                            <li> Nama </li>
                            <br>
                            <li> Tempat Tanggal Lahir </li>
                            <br>
                            <li> Asal  </li>
                            <br>
                            <li> Nomor Telpon Genggam </li>
                            <br>
                            <li> Harga Perjalanan </li>
                            <br>  
                        </ul> 
                </div>
    </div>

    <div class = "col-md 6 col-lg 4">
            sdadsa
    </div>


</body>
</html>