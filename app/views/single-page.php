<?php require_once 'header.php'; ?>
<!-- Class page default (use in tag body ) -->
	<section style="background: rgba(255, 255, 255, 0.7) none repeat scroll 0% 0%;">
	<?php 

		$page = $data['post']->where('type','=','page')->where('title','=',$data['page'])->get();
		// echo THEME1.'asset/pbt_video.jpg';
	?>
	<!-- <div class="marquee-mask" role="marquee">
		<div class="marquee">
			<div class="marquee-item" style="background-image: url('http://robpaulus.com/files/2014/08/placeholder.jpg')">
			<div class="marquee-item" style="background-image: url('<?php echo THEME1.'asset/pbt_video.jpg'; ?>')">
				<video class="marquee-video" aria-label="video" poster="http://robpaulus.com/files/2014/08/placeholder.jpg" preload="auto" loop autoplay>
					<source type="video/mp4" src="http://robpaulus.com/files/2014/08/990_office.mp4">
					<source type="video/webm" src="http://robpaulus.com/files/2014/08/990_office.webm">
				</video>
				<img src="<?php echo THEME1.'asset/pbt_video.jpg'; ?>" alt="marquee image" class="marquee-img">
			</div>
		</div>
	</div> -->
	<style>
		.page-default section a {
			color: #000;
		}
		.gallery-mix img {
			width: 100%;
		}
	</style>
	<div class="container single-page">
		<?php echo $page[0]['content']; ?>
	</section>
	<?php require_once 'footer.php'; ?>