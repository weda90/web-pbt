<?php require_once 'header.php'; ?>
<!-- Class page default (use in tag body ) -->

	<section>
		<div class="container-fluid">
			<!-- <div class="row">
				<div class="controls col-sm-12">
				  <label>Filter:</label>
				  
				  <button class="filter btn btn-default" data-filter="all">All</button>
				  <button class="filter btn btn-default" data-filter=".category-1">Category 1</button>
				  <button class="filter btn btn-default" data-filter=".category-2">Category 2</button>
				
				</div>
			</div> -->
		</div>
		<div class="container-fluid">
			<div class="row">
				<div id="gallery-mix" class="gallery-mix">
					<?php 
						$cat = $data['category'];
						if ($cat == null) {
							$img = $data['img']->where('tag','=','product')->get();
						} else {
							$img = $data['img']->where('tag','=',$cat)->get();
						}
						
						// print_r($img);
						foreach($img as $key => $value):
					?>
					<div class="mix category-1 category-2 col-sm-3" data-myorder="1">
						<a class="group1" title="<?php echo $value['name']; ?>" href="<?php echo SERVER_UPLOAD . $value['link']; ?>">
							<span class="img">
								<img src="<?php echo SERVER_UPLOAD . $value['link']; ?>" alt="">
							</span>
							<?php //echo $value['name']; ?>
						</a>
					</div>
					<?php endforeach; ?>
					<!-- <div class="mix category-1 col-sm-3" data-myorder="2">
						<a class="group1" href="http://image.shutterstock.com/display_pic_with_logo/137002/233757100/stock-photo-different-clothes-on-hangers-close-up-233757100.jpg">
							<span class="img"><img src="http://image.shutterstock.com/display_pic_with_logo/137002/233757100/stock-photo-different-clothes-on-hangers-close-up-233757100.jpg" alt=""></span>
							first picture
						</a>
					</div>
					<div class="mix category-1 category-2 col-sm-3" data-myorder="1">
						<a class="group1" href="http://image.shutterstock.com/display_pic_with_logo/1711990/224528182/stock-photo-winter-clothes-hanged-on-a-clothes-rack-224528182.jpg">
							<span class="img"><img src="http://image.shutterstock.com/display_pic_with_logo/1711990/224528182/stock-photo-winter-clothes-hanged-on-a-clothes-rack-224528182.jpg" alt=""></span>
							first picture
						</a>
					</div>
					<div class="mix category-1 category-2 col-sm-3" data-myorder="1">
						<a class="group1" title="Me and my grandfather on the Ohoopee." href="http://image.shutterstock.com/display_pic_with_logo/1500320/138828500/stock-photo-clothes-hang-on-a-shelf-in-a-designer-clothes-store-in-melbourne-australia-138828500.jpg">
							<span class="img"><img src="http://image.shutterstock.com/display_pic_with_logo/1500320/138828500/stock-photo-clothes-hang-on-a-shelf-in-a-designer-clothes-store-in-melbourne-australia-138828500.jpg" alt=""></span>
							first picture
						</a>
					</div>
					<div class="mix category-1 col-sm-3" data-myorder="2">
						<a class="group1" href="http://image.shutterstock.com/display_pic_with_logo/137002/233757100/stock-photo-different-clothes-on-hangers-close-up-233757100.jpg">
							<span class="img"><img src="http://image.shutterstock.com/display_pic_with_logo/137002/233757100/stock-photo-different-clothes-on-hangers-close-up-233757100.jpg" alt=""></span>
							first picture
						</a>
					</div>
					<div class="mix category-1 category-2 col-sm-3" data-myorder="1">
						<a class="group1" href="http://image.shutterstock.com/display_pic_with_logo/1711990/224528182/stock-photo-winter-clothes-hanged-on-a-clothes-rack-224528182.jpg">
							<span class="img"><img src="http://image.shutterstock.com/display_pic_with_logo/1711990/224528182/stock-photo-winter-clothes-hanged-on-a-clothes-rack-224528182.jpg" alt=""></span>
							first picture
						</a>
					</div> -->
				  <div class="gap"></div>
				  <div class="gap"></div>
				</div>
			</div>
		</div>
	</section>
	<?php require_once 'footer.php'; ?>
