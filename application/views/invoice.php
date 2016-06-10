<html>
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
	<style>
		th, td {
			font-size: 12px;
		}
		th {
			text-align: center;
		}
		p {
			margin: 0;
		}
	</style>
</head>

<body style="background: #f1f1f1">
	<section class="wrapper">
		<section class="content">
			<div class="container">
				<div class="row">
					<div class="col-sm-8 col-md-8 col-xs-12" style="margin: auto; float: none">
						<div class="x_panel" style="box-shadow: 0 2px 4px 0 rgba(0,0,0,0.16),0 2px 10px 0 rgba(0,0,0,0.12)">
							<div class="x_title">
								<h1>Trapp Invoice</h1>
								<div class="clearfix"></div>
							</div>
							<div class="x_content">
								<div class="col-sm-4 col-md-4 col-xs-12" style="float: right">
									<table style="width: 100%">
										<tr style="background: #f1f1f1">
											<td>Invoice</td>
											<td>0000001</td>
										</tr>
										<tr>
											<td>Tanggal</td>
											<td>10-06-2016</td>
										</tr>
										<tr style="background: #f1f1f1">
											<td>Total</td>
											<td>Rp. 5.500.000</td>
										</tr>
									</table>
								</div>
							</div>
							<div class="x_content">
								<table style="width: 100%">
									<tr>
										<th></th>
										<th>Deskripsi</th>
										<th>Harga</th>
										<th>Kuantitas</th>
										<th>Total</th>
									</tr>
									<tr style="background: #f1f1f1">
										<td>Pesawat</td>
										<td>
											<p>Lion Air</p>
											<p>Bandung - Jakarta</P>
											<p>29-02-2017</p>
											<p>Check in : 07.00</p>
											<p>07.30 - 08.15</P>
										</td>
										<td style="text-align: center">Rp. 750.000</td>
										<td style="text-align: center">1</td>
										<td style="text-align: center">Rp. 750.000</td>
									</tr>
									<tr>
										<td>Hotel</td>
										<td>
											<p>Ibis Hotel</p>
											<p>29-02-2017</p>
											<p>Check in : 10.00</p>
											<p>Selama 1 malam</p>
										</td>
										<td style="text-align: center">Rp. 750.000</td>
										<td style="text-align: center">1</td>
										<td style="text-align: center">Rp. 750.000</td>
									</tr>
									<tr  style="background: #f1f1f1">
										<td>Event</td>
										<td>
											<p>Java Jazz</p>
											<p>29-02-2017</p>
											<p>Open Gate : 19.00</p>
										</td>
										<td style="text-align: center">Rp. 4.000.000</td>
										<td style="text-align: center">1</td>
										<td style="text-align: center">Rp. 4.000.000</td>
									</tr>
									<tr style="text-align: center">
										<td colspan="3" style="text-align: center"></td>
										<td>Total</td>
										<td>Rp. 5.500.000</td>
									</tr>
								</table>
							</div>
							<div class="x_content">
								<div class="col-sm-4 col-md-4 col-xs-12">
									<p>Metode Pembayaran</p>
									<p> </p>
									<p> </p>
									<p> </p>
									<p> </p>
								</div>
							</div>
							<div class="x_content"><hr>
								<div class="col-sm-7 col-md-7 col-xs-12" style="margin: auto; float: none">
									<p>Ketentuan</p>
									<p style="font-size: 8px">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent viverra leo lacinia luctus rutrum. Morbi id placerat leo. Maecenas eu sem erat. Integer imperdiet viverra purus vitae eleifend. Duis laoreet ultricies mauris elementum ultrices. Ut vel elit sodales turpis rutrum vehicula tristique in velit. Quisque et dolor nibh. Cras scelerisque tortor ac urna venenatis, ac feugiat sem ornare. Vestibulum ullamcorper at est at dictum. Pellentesque nec elementum velit. Nullam et lacus congue tellus aliquam pretium a eu felis. Suspendisse potenti. Integer pretium urna lorem, elementum pretium felis dapibus ut. Duis et metus sit amet metus convallis laoreet. Morbi volutpat nisl ac sagittis rutrum. </p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	</section>
	
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
</body>
</html>