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
	
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/main.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/style-default.css">
</head>

<body>
    
    <div class="wrapper has-footer">
        
        
        <div class="main-container">    <!-- START: Main Container -->
            
            <div class="content-wrap">  <!--START: Content Wrap-->
                <table class="table table-bordered table-dataTable">
					<thead>
						<tr>
							<th>ID Registrasi</th>
							<th>Patient Name</th>
							<th>Employee Name</th>
							<th>Service</th>
							<th>Date</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach($registrasi as $data){ ?>
						<tr>
							<td><?php echo $data['idregistration'];?></td>
							<td><?php echo $data['patientname'];?></td>
							<td><?php echo $data['name'];?></td>
							<td><?php echo $data['servicename'];?></td>
							<td><?php echo $data['reg_date'];?></td>
						</tr>
						<?php } ?>
					</tbody>
				</table>
                
            </div>  <!--END: Content Wrap-->
            
        </div>  <!-- END: Main Container -->
        
    </div>  <!-- END: wrapper -->

    <script type="text/javascript" src="<?php echo base_url();?>assets/plugins/lib/jquery-2.2.4.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/plugins/lib/jquery-ui.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/plugins/bootstrap/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/plugins/lib/plugins.js"></script>
    
    <script type="text/javascript" src="<?php echo base_url();?>assets/plugins/lib/sparklines.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/plugins/lib/jquery.knob.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/plugins/monthly/js/monthly.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/plugins/emojionearea/emojionearea.min.js"></script>

    <script type="text/javascript" src="<?php echo base_url();?>assets/js/app.base.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/cmp-todo.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/page-dashboard.js"></script>
	
	<script type="text/javascript" src="<?php echo base_url();?>assets/plugins/lib/jquery-2.2.4.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/plugins/lib/jquery-ui.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/plugins/bootstrap/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/plugins/lib/plugins.js"></script>
    
    <script type="text/javascript" src="<?php echo base_url();?>assets/plugins/datatable/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/plugins/datatable/dataTables.bootstrap.min.js"></script>

    <script type="text/javascript" src="<?php echo base_url();?>assets/js/app.base.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/page-table.js"></script>
    <script>
        jQuery(document).ready(function () {
            DataTableBasic.init();
        });
    </script>
	
</body>
</html>