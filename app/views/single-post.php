<?php require_once 'header.php'; ?>
<!-- Class page default (use in tag body ) -->
	<section style="background: rgba(255, 255, 255, 0.7) none repeat scroll 0% 0%;">
	<?php 

		$post = $data['post']->where('type','=','post')->where('id','=',$data['id'])->get();
		// print_r($post);
	?>

	<div class="container single-post">
		<h1 class="page-header"><?php echo $post[0]['title']; ?></h1>
		<?php 
// 		echo $post[0]['content']; 
// 		$a = str_replace('[pdf]', 'pdf', $post[0]['content']);
// 		echo $a;
		$string = $post[0]['content']	;
		$regex = "/\[pdf](.*?)\[pdf]/";
		preg_match_all($regex, $string, $matches);
// 		var_dump($matches[1]);
		for($i = 0; $i < count($matches[1]); $i++)
		{
		    $match = $matches[1][$i];
		    $array = explode('~', $match);
// 		    $newValue = $array[0] . " - " . $array[1] . " - " . $array[2] . " - " . $array[3];
			$newValue = '<object data="'.$array[0].'" type="application/pdf" width="100%" height="500px" title="Print"><embed src="'.$array[0].'" type="application/pdf"> </object>';
			$newValue2 = '<p>Download <a href="'.$array[0].'" target="_blank" download>click here</a></p>';
		    $string = str_replace($matches[0][$i], $newValue.$newValue2, $string);
		}
		
// 		$newValue = '<object data="'..'" type="application/pdf" internalinstanceid="41" width="100%" height="500px" title="Print">        <embed src="http://www.pdf995.com/samples/pdf.pdf" type="application/pdf"> </object>';
		
		echo $string;
// 		echo ini_get('upload_max_filesize');
		?>
	</section>
<?php require_once 'footer.php'; ?>