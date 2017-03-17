<?php define(THEME1, URL_ROOT.'theme1/') ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<!-- Latest Plugin/Framework CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/superslides.css">
	<link rel="stylesheet" href="css/colorbox.css" />
	<!-- Customized Style -->	
	<link rel="stylesheet" href="css/style.css">
</head>
<body class="page-default">
	<header>
		<nav class="navbar navbar-default">
		  <div class="container-fluid">
		    <!-- Brand and toggle get grouped for better mobile display -->
		    <div class="navbar-header">
		      <div class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false">
		        <span class="sr-only">Toggle navigation</span>
		        <i class="fa fa-bars fa-lg"></i>
		      </div>
		      <a class="navbar-brand" href="index.html">
		      	<img alt="Brand" src="http://pbt.wedstudios.com/public/uploads/PBT.png">
		      	<small>Pt Pan Brothers Tbk</small>
		      </a>
		    </div>
		
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="navbar-collapse">
			  <ul class="nav navbar-nav">
			    <li><a href="<?php echo THEME1; ?>blog">News &amp; Events</a></li>
			    <li><a href="<?php echo THEME1; ?>gallery">Gallery</a></li>
			    <li><a href="<?php echo THEME1; ?>about">About</a></li>
			    <li><a href="<?php echo THEME1; ?>single-page.html">Single Page</a></li>
			    <li><a href="<?php echo THEME1; ?>single-post.html">Single Post</a></li>
			    <li><a href="<?php echo THEME1; ?>contact.html">Contact</a></li>
			  </ul>
			</div><!-- /.navbar-collapse -->
		</nav>
	</header>
<!-- Class page default (use in tag body ) -->
	<section>
	<div class="marquee-mask" role="marquee">
		<div class="marquee">
			<div class="marquee-item" style="background-image: url('<?php echo THEME1.'asset/pbt_video.jpg'; ?>')">
				<video class="marquee-video" aria-label="video" poster="<?php echo THEME1.'asset/pbt_video.jpg'; ?>" preload="auto" loop autoplay>
					<source type="video/mp4" src="<?php echo THEME1.'asset/pbt_video.mp4'; ?>">
					<source type="video/webm" src="<?php echo THEME1.'asset/pbt_video.webm'; ?>">
				</video>
				<img src="<?php echo THEME1.'asset/pbt_video.jpg'; ?>" alt="marquee image" class="marquee-img">
			</div>
		</div>
	</div>
	<?php 
		$about = $data['post']->where('title','=','about us')->get();
		// print_r($home[0]['content']) ;
		echo $about[0]['content'];
	?>

<!-- 
	<div class="container">
		<div class="row">
			<div class="col-sm-3 text-right">
				<h1>About</h1>
			</div>
			<div class="col-sm-8">
				<h3 class="sub-title">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam consequatur expedita illo, est beatae, labore voluptate qui!
				</h3>
				<p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate harum sapiente dicta vero porro dolorem iste laborum, quod sit placeat soluta aliquid nulla rerum eos. Distinctio maxime consectetur, possimus eius. Suscipit porro dolorum necessitatibus quod nemo laudantium dicta incidunt sed veritatis possimus esse rem quasi rerum tempore corrupti illum corporis error repudiandae, in qui maiores deserunt magnam quam! Dolorum excepturi minima explicabo? Repellat, debitis, libero. Hic quasi nam nihil minus perferendis temporibus dolore numquam enim cupiditate ab beatae, necessitatibus at sapiente quia saepe, quisquam eaque ullam quos obcaecati. Eos assumenda, iusto aut pariatur nisi? Facilis aperiam obcaecati assumenda praesentium ipsa!</p>
			</div>
		</div>
	</div>
	<div class="container-fluid grey block">
		<div class="row">
			<div class="col-sm-3">
				<img class="pull-right" src="http://robpaulus.com/files/2014/08/DSC03969-768x1024.jpg" alt="" style="width:80%;">
			</div>
			<div class="col-sm-8">
				<h3>Lorem ipsum dolor sit amet.</h3>
				<p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. At corporis, sunt est repellat dolorem nobis! Totam earum veniam nisi minima soluta ipsam distinctio, quam natus? Ea vero dolores nemo id voluptatibus illum distinctio possimus sunt consectetur deleniti cupiditate, commodi corporis numquam voluptates eius delectus velit sequi repellat totam dolorum quos!</p>
				<p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur earum autem dolorum sed pariatur atque vero commodi accusantium vitae mollitia.</p>
			</div>
		</div>
	</div>
	<div class="container-fluid white block">
		<div class="row">
			<div class="col-sm-3">
				<img class="pull-right" src="http://robpaulus.com/files/2014/08/DSC03969-768x1024.jpg" alt="" style="width:80%;">
				<p class="pull-right text-right"><em>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius voluptatibus temporibus magnam, repudiandae ab fuga aliquam, aliquid praesentium enim, omnis maiores nam nisi! Nulla ducimus dolorum ullam vel facilis fuga.</em></p>
			</div>
			<div class="col-sm-8">
				<h3>Lorem ipsum dolor sit amet.</h3>
				<p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. At corporis, sunt est repellat dolorem nobis! Totam earum veniam nisi minima soluta ipsam distinctio, quam natus? Ea vero dolores nemo id voluptatibus illum distinctio possimus sunt consectetur deleniti cupiditate, commodi corporis numquam voluptates eius delectus velit sequi repellat totam dolorum quos!</p>
				<p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur earum autem dolorum sed pariatur atque vero commodi accusantium vitae mollitia.</p>
			</div>
		</div>
	</div>
 -->
	</section>
	<footer>
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-3">
					<address class="text-right">
						<strong>Pt Pan Brothers Tbk</strong><br>
						  	Jl. Siliwangi No.178 Jatiuwung<br>
							Tangerang - Banten 15133<br>
							Indonesia<br>
							Phone : (62)-21-5900718<br>
							Fax : (62)-21-5900706<br> 5900717 <br>
							Mail: office@pbrx.co.id
					</address>	
					<div class="find-us pull-right">
						<ul class="list-unstyled list-inline">
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
						</ul>
					</div>
					<div class="copyright clearfix text-right">
						©2015 Team IT Pt Pan Brothers Tbk
					</div>
				</div>
				<div class="col-sm-9">
				<h3>Where We Are ?</h3>
				</div>
			</div>
		</div>
	</footer>
	<!-- Latest Javascript/Jquery Plugin -->
	<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	<script src="http://cdn.jsdelivr.net/jquery.mixitup/latest/jquery.mixitup.min.js"></script>
	<script src="js/jquery.superslides.min.js"></script>
	<script src="js/jquery.colorbox-min.js"></script>
	<!-- Customized Javascript/Jquery -->
	<script src="js/script.js"></script>
	<script>
		$(function(){
		  $(".group1").colorbox({rel:'group1'});

		  if ($(window).width() <= 1024 ){
		  	$(".marquee-video")[0].pause();
		  }
		});
	</script>
</body>
</html>