<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>404 page not found | Big Ben Admin</title>
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
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/bs-overide/bootstrap.buttons.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/lib/page-404.css">
</head>

<body class="page404">
    
    <div class="cont_principal">
        <div class="cont_error">
            <h1>Oops</h1>  
            <p>The Page you're looking for isn't here.</p> 
        </div>
        <div class="cont_aura_1"></div>
        <div class="cont_aura_2"></div>
    </div>
    
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/plugins/lib/jquery-2.2.4.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/plugins/bootstrap/bootstrap.min.js"></script>
    <script>
    window.onload = function(){
        document.querySelector('.cont_principal').className= "cont_principal cont_error_active"; 
    };
    </script>
</body>
</html>