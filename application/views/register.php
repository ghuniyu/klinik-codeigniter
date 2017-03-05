<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Login | Big Ben Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="author" content="Prakasam Mathaiyan">
    <meta name="description" content="">

    <!--[if IE]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/plugins/lib/modernizr.js"></script>
    <link rel="icon" href="<?php echo base_url(); ?>assets/images/favicon.png" type="image/gif">
    
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/plugins/bootstrap/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/plugins/animate-it/animate.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/lib/cmp-bs-checkbox.css">
    
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/lib/page-login.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/style-default.css">
    <style>body{ color: #363A5C;</style>
</head>

<body>
    <div class="container">
        
        <div class="animatedParent">
            <div class="row">
                
                <div class="col-xs-12 col-md-8 col-sm-8 col-lg-8 col-md-offset-2 col-sm-offset-2">
                    
                    <div class="blue-line sm normal"></div>
                    
                    <div class="signup-box">
                        <div class="logo"><img src="<?php echo base_url(); ?>assets/images/logo-c.svg" alt="" style="height: 40px;"></div>
                        
                        <form action="<?php echo base_url(); ?>index.php/login/do_register" method="post" enctype="multipart/form-data">
                            
							<div class="col-md-6">
								<div class="form-group">
									<input type="text" name="name" class="form-control" placeholder="Name" required>
									<i class="fa fa-envelope" aria-hidden="true"></i>
								</div>
								
								<div class="form-group">
									<input type="text" name="username" class="form-control" placeholder="Username" required>
									<i class="fa fa-user" aria-hidden="true"></i>
								</div>
								
								<div class="form-group">
									<input type="password" name="password" class="form-control" placeholder="Password"required>
									<i class="fa fa-lock" aria-hidden="true"></i>
								</div>
								
								<div class="form-group">
								<label><i class="fa fa-venus-mars" aria-hidden="true"></i>Gender : </label>
									<div class="radio-inline">
									  <label>
										<input type="radio" name="gender" id="optionsRadios1" value="L" checked>Male
									  </label>
									</div>
									<div class="radio-inline">
									  <label>
										<input type="radio" name="gender" id="optionsRadios2" value="P">Female
									  </label>
									</div>
								</div>
								
								<div class="form-group">
									<input type="text" name="phone" class="form-control" placeholder="Phone" required>
									<i class="fa fa-phone-square" aria-hidden="true"></i>
								</div>
							</div>
							<div class="col-md-6">
							
								<div class="form-group">
									<input type="text" name="npwp" class="form-control" placeholder="NPWP" required>
									<i class="fa fa-toggle-down" aria-hidden="true"></i>
								</div>
								
								<div class="form-group">
									<select class="form-control" placeholder="PTKP" name="ptkp">
										<option disabled>Choose PTKP</option>
										<?php foreach($PTKP as $data){ ?>
										<option value="<?php echo $data['idptkp']; ?>"><?php echo $data['name_status']; ?></option>
										<?php }?>
									</select>
									<i class="fa fa-toggle-down" aria-hidden="true"></i>
								</div>
								<div class="form-group">
									<select class="form-control" placeholder="Degree" name="degree">
										<option disabled>Choose Degree</option>
										<?php foreach($degree as $data){ ?>
										<option value="<?php echo $data['idsalary_type']; ?>"><?php echo $data['salaryname']; ?></option>
										<?php }?>
									</select>
									<i class="fa fa-envelope" aria-hidden="true"></i>
								</div>
								
								<!--
								<div class="form-group">
									<select class="form-control" placeholder="Status" name="status">
										<option disabled>Choose Status</option>
										<option value="5">Patient</option>
										<option value="4">Employee</option>
										
									</select>
									<i class="fa fa-user" aria-hidden="true"></i>
								</div>
								-->
								<div class="form-group">
									<!--<input type="text" name="address" class="form-control" placeholder="Address" required>-->
									<textarea class="form-control" placeholder="Address" name="address"></textarea>
									<i class="fa fa-toggle-down" aria-hidden="true"></i>
								</div>
								
								<div class="form-group">
									<input type="file" name="photo" class="form-control" placeholder="Photo" required>
									<i class="fa fa-camera" aria-hidden="true"></i>
								</div>
							</div>
                            
                            <button href="#" type="submit" class="btn btn-primary btn-block">Create account</button>

                        </form>
                    </div>
                    
                    <br>
                    <div class="signup-box">
                        <p class="signac animated flipInX">If you have an account? <a href="<?php echo base_url(); ?>index.php/login">Sign in</a></p>
                    </div>
                    
                    <div class="blue-line lg normal"></div>
                </div>
            </div>
        </div>
    </div>  <!-- Container End --> 
    
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/plugins/lib/jquery-2.2.4.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/plugins/lib/jquery-ui.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/plugins/bootstrap/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/plugins/animate-it/animate-it.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/plugins/animate-it/arrow-line.js"></script>
</body>
</html>