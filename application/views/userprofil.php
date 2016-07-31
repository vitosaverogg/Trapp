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
				<h1>Profil</h2>
				<hr>
			</div>
			<div class="container">
				<div class="col-sm-12" style="min-height: 40px">
				
					<!--Data user-->
					<div class="col-sm-6" style="min-height: 150px;">
						<div class="col-sm-12" style="border: 2px solid; border-radius: 5px; padding: 7px 0 7px 0; margin: 2px; min-height: 400px;">
							<div class="col-sm-12" style="padding: 10px">
								<label class="control-label col-sm-6" style="padding: 7px 7px 7px 10px">E-mail</label>
								<div class="col-sm-6">
									<input class="form-control" id="focusedInput" type="text" value="" placeholder="Lokasi">
								</div>
							</div>
							<div class="col-sm-12" style="padding: 10px">
								<label class="control-label col-sm-6" style="padding: 7px 7px 7px 10px">Nama Lengkap</label>
								<div class="col-sm-6">
									<input class="form-control" id="focusedInput" type="text" value="" placeholder="Lokasi">
								</div>
							</div>
							<div class="col-sm-12" style="padding: 10px">
								<label class="control-label col-sm-6" style="padding: 7px 7px 7px 10px">Tempat Lahir</label>
								<div class="col-sm-6">
									<input class="form-control" id="focusedInput" type="text" value="" placeholder="Lokasi">
								</div>
							</div>
							<div class="col-sm-12" style="padding: 10px">
								<label class="control-label col-sm-6" style="padding: 7px 7px 7px 10px">Tanggal Lahir</label>
								<div class="col-sm-6">
									<input class="form-control" id="focusedInput" type="text" value="" placeholder="Lokasi">
								</div>
							</div>
							<div class="col-sm-12" style="padding: 10px">
								<label class="control-label col-sm-6" style="padding: 7px 7px 7px 10px">Nomor Identitas</label>
								<div class="col-sm-6">
									<input class="form-control" id="focusedInput" type="text" value="" placeholder="Lokasi">
								</div>
							</div>
							<div class="col-sm-12" style="padding: 10px">
								<label class="control-label col-sm-6" style="padding: 7px 7px 7px 10px">Tipe Identitas</label>
								<div class="col-sm-6">
									<input class="form-control" id="focusedInput" type="text" value="" placeholder="Lokasi">
								</div>
							</div>
							<div class="col-sm-12" style="padding: 10px">
								<label class="control-label col-sm-6" style="padding: 7px 7px 7px 10px">Nomor Telpon</label>
								<div class="col-sm-6">
									<input class="form-control" id="focusedInput" type="text" value="" placeholder="Lokasi">
								</div>
							</div>
							
							<div class="btn-group" role="group" style="float: right; margin-right: 5px;">
								<button class="btn btn-default" data-toggle="modal" data-target="#changepass">Edit</button>
								<button class="btn btn-default" data-toggle="modal" data-target="#changepass">Change Password</button>
							</div>
							
						</div>
					</div>
					
					<div class="col-sm-2" style="min-height: 50px"></div>
					
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
	
	<!--Modal-->
		<!--Edit Modal-->
		
		
		<!--Change Password-->
		<div class="modal fade" tabindex="-1" role="dialog" id="changepass">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
				
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title">Change Password</h4>
					</div>
					
					<div class="modal-body">
						<div class="container">
							<div class="col-sm-12" style="padding: 10px">
								<label class="control-label col-sm-6" style="padding: 7px 7px 7px 10px">Old Password</label>
								<div class="col-sm-6">
									<input class="form-control" id="focusedInput" type="text" value="" placeholder="Lokasi">
								</div>
							</div>
							<div class="col-sm-12" style="padding: 10px">
								<label class="control-label col-sm-6" style="padding: 7px 7px 7px 10px">New Password</label>
								<div class="col-sm-6">
									<input class="form-control" id="focusedInput" type="text" value="" placeholder="Lokasi">
								</div>
							</div>
							<div class="col-sm-12" style="padding: 10px">
								<label class="control-label col-sm-6" style="padding: 7px 7px 7px 10px">Retype New Password</label>
								<div class="col-sm-6">
									<input class="form-control" id="focusedInput" type="text" value="" placeholder="Lokasi">
								</div>
							</div>
						</div>
					</div>
					
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						<button type="button" class="btn btn-primary">Save changes</button>
					</div>
				</div><!-- /.modal-content -->
			</div><!-- /.modal-dialog -->
		</div><!-- /.modal -->
</body>
</html>