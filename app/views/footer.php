	<footer style="position:relative;">
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
				<div class="col-sm-4">
				<h3>Where We Are ?</h3>
				</div>
				<iframe id="google-maps" class="col-sm-4" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.56626462448!2d106.57875399999999!3d-6.1887492999999925!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69fe5433f31815%3A0xb144f7c46440f285!2sPT.+Pan+Brothers%2C+Jl.+Siliwangi!5e0!3m2!1sid!2sid!4v1440386232946" allowfullscreen="" frameborder="0" height="250" width="600"></iframe>
			</div>
		</div>
	</footer>
	<style>
		/* .navbar-fixed-top {
			-webkit-transform: translateY(-100%);
			-ms-transform: translateY(-100%);
			-o-transform: translateY(-100%);
			transform: translateY(-100%);
		} */
		/* .navbar-in {
			-webkit-transform: translateY(0%);
			-ms-transform: translateY(0%);
			-o-transform: translateY(0%);
			transform: translateY(0%);
		} */
	</style>
	<style>
		/* .base-color a {
			  color: #333;
			}
			 */	</style>
	<!-- <div style="position: fixed; bottom: 0px;">
		<ul id="base-color" class="base-color list-unstyled list-inline">
			<li class="color-item"><a href="#" data-href="green">green</a></li>
			<li class="color-item"><a href="#" data-href="violet">violet</a></li>
			<li class="color-item"><a href="#" data-href="blue">blue</a></li>
			<li class="color-item"><a href="#" data-href="red">red</a></li>
			<li class="color-item"><a href="#" data-href="yellow">yellow</a></li>
		</ul>
	</div> -->
	<!-- Latest Javascript/Jquery Plugin -->
	<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	<script src="http://cdn.jsdelivr.net/jquery.mixitup/latest/jquery.mixitup.min.js"></script>
	<script src="js/jquery.superslides.min.js"></script>
	<script src="js/jquery.colorbox-min.js"></script>
	<!-- Customized Javascript/Jquery -->
	<script src="js/script.js"></script>
	<script>
		var x = $(document).scrollTop();
		$(window).scroll(function() {
				if ($(window).scrollTop() > 400) {
					$('nav.navbar').addClass('navbar-fixed-top');
					// setInterval(function(){ $('nav.navbar').addClass('navbar-in'); }, 3000);
					
					// $('.navbar-fixed-top').animate({
					// 	top : 0
					// }, 1500);
				} else {
					// $('.navbar-fixed-top').animate({
					// 	top : "-10px"
					// }, 1500);
					// $('nav.navbar').removeClass('navbar-out');
					$('nav.navbar').removeClass('navbar-fixed-top');
					// setInterval(function(){ $('nav.navbar').removeClass('navbar-fixed-top'); }, 3000);
					
				}
    
			});
	</script>
</body>
</html>
