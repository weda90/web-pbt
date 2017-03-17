<?php require_once 'header.php'; ?>
<!-- Class page default (use in tag body ) -->
	<section style="background: rgba(255, 255, 255, 0.7) none repeat scroll 0% 0%;">
	<div class="container blog">
		<div class="row">
			<h1 class="page-header">News &amp; Events</h1>
		</div>
		<div class="row">
		<?php 
			$post = $data['post']->where('type','=','post')->orderby('created_at',desc)->get();

			foreach ($post as $key => $value):
				// echo $value['title'];
		?>
		<div class="blog-item col-sm-4">
				<div class="img">
				<?php if (empty($value['img_featured'])): ?>
					<img src="https://placeholdit.imgix.net/~text?txtsize=33&txt=350%C3%97150&w=350&h=200" alt="">
				<?php else: ?>
					<img src="<?php echo $value['img_featured']; ?>" alt="">
				<?php endif; ?>
					
				</div>
				<h3 class="blog-title">
					<?php echo $value['title']; ?>
				</h3>
				<p class="text-justify"><?php echo substr($value['short_content'], 0,150); ?> ....</p>
				<p><a href="<?php echo SERVER_PUBLIC . 'blog?post=' . $value['id']; ?>">read more</a></p>
				<hr>
			</div>
		<?php
			endforeach;
			// print_r($)
		?>
		</div>
		<style>
		.blog-item a{
			color: #555;
			}
		.blog-item .img {
		  overflow: hidden;
		  height: 200px;
		}
		.blog-item h3.blog-title {
		  height: 55px;
		}
		.blog-item p.text-justify {
		  height: 62px;
		}
		</style>
		<!-- <div class="row">
		<hr>
			<nav class="text-right">
			  <ul class="pagination">
			    <li>
			      <a href="#" aria-label="Previous">
			        <span aria-hidden="true">&laquo;</span>
			      </a>
			    </li>
			    <li class="active"><a href="#">1</a></li>
			    <li><a href="#">2</a></li>
			    <li><a href="#">3</a></li>
			    <li><a href="#">4</a></li>
			    <li><a href="#">5</a></li>
			    <li>
			      <a href="#" aria-label="Next">
			        <span aria-hidden="true">&raquo;</span>
			      </a>
			    </li>
			  </ul>
			</nav>
		</div> -->
	</div>
	</section>
	<?php require_once 'footer.php'; ?>
