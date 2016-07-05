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
	<?php 
        $this->load->view('_header', FALSE);
    ?>
    <div id="menu">
        <nav class="navbar-wrapper navbar-default" role="navigation">
            <div class="container">
                  <div id="navbar-scroll" class="collapse navbar-collapse navbar-backyard navbar-right">
                    <br><br><br>
                  </div>
            </div>
        </nav>
    </div>
    <br>
    <br>
	
	<div class= "container">
	<div class= "row">
		
		<!-------------------------------------------Navigasi---------------------------------------------------------->
		<div class = "col-md-2 col-lg-2 nav_container ">
				<nav ><!--container navigasi-->
					
						<ul class="nav nav-pills nav-stacked">
							<li role="presentation"><a href="#">Menu 1</a></li>
							<li role="presentation"><a href="#">Menu 2</a></li>
							<li role="presentation"><a href="#">Menu 3</a></li>
						</ul>
					
				</nav>
		</div>
		
		<!-------------------------------------------Content----------------------------------------------------------->
		<div class="col-md-9 col-sm-9 col-lg-9">
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
								<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>a  
							</ul> 
					</div>
		</div>

	</div>
	</div>


</body>
</html>