<?php require_once 'header2.php'; ?>
<!-- Class page default (use in tag body ) -->
	<section>
		<div id="slides">
		  <ul class="slides-container">
			<?php 
			var_dump($data);
			$img = $data['file']->where('tag','=','slideshow')->get();
			// print_r($img);
			foreach ($img as $key => $val):
			?>
			<li>
		      <img src="<?php echo SERVER_UPLOAD.$val['link']; ?>" alt="">
		      <div class="container">
		        <a class="slides-title" href="#"><h1><?php echo $val['name']; ?></h1></a>
		      </div>
		    </li>
			<?php endforeach; ?>
		  </ul>
		  <nav class="slides-navigation">
		    <a href="#" class="next"><i class="fa fa-angle-double-right fa-3x"></i></a>
		    <a href="#" class="prev"><i class="fa fa-angle-double-left fa-3x"></i></a>
		  </nav>
		</div>
		<?php 
			$home = $data['post']->where('title','=','home')->get();
			echo $home[0]['content'];
		?>
	</section>
<?php require_once 'footer.php'; ?>