<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>PT. Pan Brothers Tbk</title>
	<!-- Latest Bootstrap CSS -->
	<link rel="stylesheet" href="<?php echo SERVER_CSS; ?>bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php echo SERVER_CSS; ?>superslides.css">
	<link rel="stylesheet" href="<?php echo SERVER_CSS; ?>colorbox.css" />
	<!-- Customized Style -->	
	<link id="style" rel="stylesheet" href="<?php echo SERVER_CSS; ?>style.css">
	<style>
		/* .dropdown.open {
		  background: #555;
		}
		.navbar-default .navbar-nav > .open > a, .navbar-default .navbar-nav > .open > a:focus, .navbar-default .navbar-nav > .open > a:hover{
		  color: #fff;
		  background: none;
		}
		.dropdown-menu > li > a:focus, .dropdown-menu > li > a:hover {
		    background: none;
		}
		
		.navbar-nav > li > .dropdown-menu {
		    border-radius: 0px;
		}
		.page-default .dropdown-menu {
		    background: rgba(0, 0, 0, 0.2);
		}
		
		.navbar-nav > li > .dropdown-menu li{
			padding: 10px 0px;
		}
		.dropdown-toggle .caret {
			margin-left: 10px;
		}
		.navbar-default.navbar-fixed-top {
			position: fixed;
			background: #fff;
			z-index: 4;
			top: -100%;
		} */
		/* .navbar-default.navbar-fixed-top.in {
			-webkit-transform: translateY(0%);
			-ms-transform: translateY(0%);
			-o-transform: translateY(0%);
			transform: translateY(0%);
		} */
/*
		.navbar-default.navbar-fixed-top:hover {
			background: #000;
		}*/

		/* .navbar-default.navbar-fixed-top .navbar-brand{
			background: #333;
		}
		.page-default .navbar-default.navbar-fixed-top {
			position: fixed;
			background: #000;
		}
		.page-default .navbar-default.navbar-fixed-top:hover {
			background: #000;
		}
		 */
	</style>
</head>
<?php 
// $url = explode('/', $_GET['url']);
// print_r($url);
if(!isset($_GET['url'])):
?>
	<body class="page-default">
<?php //elseif(isset($_GET['page'])): ?>
	<!-- <body class="page-default single-page"> -->
<?php 
else:
	$url = explode('/', $_GET['url']);
	if (end($url) == 'index') :
?>
	<body class="page-default">
	<?php else: ?>
	<body>
	<?php endif; ?>
<?php endif; ?>
	<header>
		<nav class="navbar navbar-default">
		  <div class="container-fluid">
		    <!-- Brand and toggle get grouped for better mobile display -->
		    <div class="navbar-header">
		      <div class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false">
		        <span class="sr-only">Toggle navigation</span>
		        <i class="fa fa-bars fa-lg"></i>
		      </div>
		      <a class="navbar-brand" href="<?php echo SERVER_PUBLIC; ?>">
		      	<img alt="Brand" src="http://panbrotherstbk.com/uploads/PBT.png">
<!-- 		      	<small>Pt Pan Brothers Tbk</small> -->
				PT Pan Brothers Tbk.
		      </a>
		    </div>
		
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="navbar-collapse">
			  <ul class="nav navbar-nav">
			    <li><a href="<?php echo SERVER_PUBLIC; ?>blog">News &amp; Events</a></li>
			    <!-- <li><a href="<?php echo SERVER_PUBLIC; ?>gallery">Gallery</a></li> -->
			    <li class="dropdown">
			    	<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Gallery<span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="<?php echo SERVER_PUBLIC . 'gallery?category=product'; ?>">Product</a></li>
						<li><a href="<?php echo SERVER_PUBLIC . 'gallery?category=client'; ?>">Clients</a></li>
						<li><a href="<?php echo SERVER_PUBLIC . 'gallery?category=award'; ?>">Awards</a></li>
					</ul>
			    </li>
			    <!-- <li><a href="<?php echo SERVER_PUBLIC; ?>about">About</a></li> -->
			    <li class="dropdown">
			    	<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">About<span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="<?php echo SERVER_PUBLIC . 'blog?page=financial info'; ?>">Financial Info</a></li>
						<li><a href="<?php echo SERVER_PUBLIC . 'blog?page=corporate information'; ?>">Corporate Info</a></li>
						<li><a href="<?php echo SERVER_PUBLIC . 'blog?page=facilities'; ?>">Facilities</a></li>
						<li><a href="<?php echo SERVER_PUBLIC . 'blog?page=Holding and Subsidiary Company'; ?>">Holding & Subsidiary Company</a></li>
						<li><a href="<?php echo SERVER_PUBLIC . 'blog?page=GCG (Good Corporate Governance)'; ?>">GCG (Good Corporate Governance)</a></li>
						<li><a href="<?php echo SERVER_PUBLIC . 'blog?page=CSR (Corporate Social Responsibility) Program'; ?>">CSR (Corporate Social Responsibility) Program</a></li>
						
					</ul>
			    </li>
			    <!-- <li><a href="<?php echo SERVER_PUBLIC; ?>single-page">Single Page</a></li> -->
			    <!-- <li><a href="<?php echo SERVER_PUBLIC; ?>single-post">Single Post</a></li> -->
			    <li><a href="<?php echo SERVER_PUBLIC . 'career'; ?>">Career</a></li>
			    <li><a href="<?php echo SERVER_PUBLIC . 'blog?page=contact us'; ?>">Contact Us</a></li>
			  </ul>
			</div><!-- /.navbar-collapse -->
		</nav>
	</header>