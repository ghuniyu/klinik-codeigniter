<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Dashboard | Big Ben Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="author" content="Prakasam Mathaiyan">
    <meta name="description" content="">

    <!--[if IE]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script type="text/javascript" src="<?php echo base_url();?>assets/plugins/lib/modernizr.js"></script>
    <link rel="icon" href="<?php echo base_url();?>assets/images/favicon.png" type="image/gif">
    
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/plugins/bootstrap/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/plugins/monthly/css/monthly.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/plugins/emojionearea/emojionearea.min.css">

    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/plugins/datatable/dataTables.bootstrap.min.css">
	
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/plugins/bootstrap/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/plugins/date-picker/css/bootstrap-datepicker3.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/plugins/dateTime-picker/css/bootstrap-datetimepicker.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/plugins/customselect/customselect.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/plugins/select2/css/select2.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/plugins/jasny-bootstrap/css/jasny-bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/plugins/emojionearea/emojionearea.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/plugins/timepicker/bootstrap-timepicker.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/plugins/colorpicker/css/bootstrap-colorpicker.min.css">
	
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/main.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/style-default.css">
</head>

<body>
    
    <div class="wrapper has-footer">
        
        <!-- START : HEADER -->
		<?php include('header.php'); ?>
		<!-- END : HEADER -->
        
        <?php if($this->session->userdata('status') != 3){
				include('side_bar_user.php');
			}else{
				include('side_bar.php');
			}
		?>
        
        <div class="main-container">    <!-- START: Main Container -->
            
            <div class="page-header">
                <h1>Dashboard <small>Welcome back <span class="text-primary"><?php echo $this->session->userdata('name'); ?></span></small></h1>
                <ol class="breadcrumb">
                    <li><a href="index.php">Home</a></li>
                    <li class="active">Dashboard</li>
                </ol>
            </div>
            
            <div class="content-wrap">  <!--START: Content Wrap-->
                
                <!-- Content Here! -->
				
				<?php
				switch($this->uri->segment(1)){
					case "jadwal":
					if($this->uri->segment(2)=="input"){
						include('input_jadwal.php');
					}else{
						include('jadwal.php');
					}
					break;
					
					case "registrasi":
					if($this->uri->segment(2)=="input"){
						include('input_registrasi.php');
					}else{
						include('registrasi.php');
					}
					break;
					
					case "kehadiran":
					if($this->uri->segment(2)=="rekap_kehadiran"){
						include('rekap_kehadiran.php');
					}else{
						include('kehadiran.php');
					}
					break;
					
					case "gaji":
					if($this->uri->segment(2)=="detail"){
						include('detail_gaji.php');
					}else{
						include('gaji.php');
					}
					break;
					
					case "karyawan":
					include('karyawan.php');
					break;
					
					case "patient":
					if($this->uri->segment(2)=="input"){
						include('input_patient.php');
					}else{
						include('patient.php');
					}
					break;
					
					case "ptkp":
					include('ptkp.php');
					break;
				}
				?>
                
            </div>  <!--END: Content Wrap-->
            
        </div>  <!-- END: Main Container -->
        
        <footer class="footer"> <!-- START: Footer -->
            &copy; 2016 <b>Big Ben</b> Admin
        </footer>   <!-- END: Footer -->
        
    </div>  <!-- END: wrapper -->

    <script type="text/javascript" src="<?php echo base_url();?>assets/plugins/lib/jquery-2.2.4.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/plugins/lib/jquery-ui.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/plugins/bootstrap/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/plugins/lib/plugins.js"></script>
    
    <script type="text/javascript" src="<?php echo base_url();?>assets/plugins/flot/excanvas.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/plugins/flot/jquery.flot.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/plugins/flot/jquery.flot.tooltip.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/plugins/flot/jquery.flot.resize.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/plugins/flot/jquery.flot.crosshair.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/plugins/flot/jquery.flot.pie.min.js"></script>
    
    <script type="text/javascript" src="<?php echo base_url();?>assets/plugins/lib/sparklines.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/plugins/lib/jquery.knob.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/plugins/monthly/js/monthly.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/plugins/emojionearea/emojionearea.min.js"></script>

	<script type="text/javascript" src="<?php echo base_url();?>assets/plugins/datatable/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/plugins/datatable/dataTables.bootstrap.min.js"></script>
	
	<script type="text/javascript" src="<?php echo base_url();?>assets/plugins/date-picker/js/bootstrap-datepicker.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/plugins/dateTime-picker/js/bootstrap-datetimepicker.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/plugins/customselect/jquery.customselect.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/plugins/select2/js/select2.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/plugins/jasny-bootstrap/js/jasny-bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/plugins/lib/characterCounter.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/plugins/emojionearea/emojionearea.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/plugins/timepicker/bootstrap-timepicker.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/plugins/colorpicker/js/bootstrap-colorpicker.min.js"></script>
	
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/app.base.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/cmp-todo.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/page-table.js"></script>

    <script>
        jQuery(document).ready(function () {
            DataTableBasic.init();
        });
    </script>
	
</body>
</html>