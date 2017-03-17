<?php
class Gallery extends Controller {
	
	protected $post;
	protected $file;

	public function __construct(){
		$this->post = $this->model('post');
		$this->file = $this->model('files');
	}

	public function index(){
		$post = $this->post;
		$img = $this->file;
		$cat = null;
		// print_r($_GET);
		if (isset($_GET['category'])) {
			$cat = $_GET['category'];
		}
		// echo "string";
		$this->view('gallery',['post'=>$post,'img'=>$img,'category'=>$cat]);
	}
}

?>