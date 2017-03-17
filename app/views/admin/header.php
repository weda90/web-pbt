<!DOCTYPE html>
<html lang="en">
    <head>        
        <!-- meta section -->
        <title>PBT CMS V.0.2</title>
        
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" >
        <meta http-equiv="X-UA-Compatible" content="IE=edge" >
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" >
        
        <link rel="icon" href="favicon.ico" type="image/x-icon" >
        <!-- /meta section -->        
        
        <!-- css styles -->
        
        <link rel="stylesheet" type="text/css" href="css/blue-white.css" id="dev-css">

       
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <!-- ./css styles -->                                  
                
        <!--[if lte IE 9]>
        <link rel="stylesheet" type="text/css" href="css/dev-other/dev-ie-fix.css">
        <![endif]-->
        
        <!-- javascripts -->
        <script type="text/javascript" src="js/plugins/modernizr/modernizr.js"></script>
        <!-- ./javascripts -->
        
        <style>.dev-page{visibility: hidden;}</style>
    </head>
    <body>

<?php 
// $admin2 = new admin;
//// var_dump($admin2->user); 

if (logged_in()) :
?>
<!-- set loading layer -->
<div class="dev-page-loading preloader"></div>
<!-- ./set loading layer -->       

<!-- page wrapper -->
<div class="dev-page">
    
    <!-- page header -->    
    <div class="dev-page-header">
        
        <div class="dph-logo">
            <a href="index.html">Pan Brothers Tbk.</a>
            <a class="dev-page-sidebar-collapse">
                <div class="dev-page-sidebar-collapse-icon">
                    <span class="line-one"></span>
                    <span class="line-two"></span>
                    <span class="line-three"></span>
                </div>
            </a>
        </div>

        <ul class="dph-buttons pull-right">                    
            <!-- <li class="dph-button-stuck">
                <a href="#" class="dev-page-rightbar-toggle">
                    <div class="dev-page-rightbar-toggle-icon">
                        <span class="line-one"></span>
                        <span class="line-two"></span>
                    </div>
                </a>
            </li> -->
            <li class="dph-button-stuck">
                <a href="javascript:void(0)" id="btn-logout" class="dev-page-logout-toggle">
                    <i class="fa fa-power-off"></i>
                </a>
            </li>
        </ul>                                                
        
    </div>
    <!-- ./page header -->

<!-- <a id="btn-logout" href="#">Logout</a> -->
<?php endif; ?>

