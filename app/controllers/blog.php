<?php
class Blog extends Controller {
	
	protected $post;
	protected $file;

	public function __construct(){
		$this->post = $this->model('post');
		$this->file = $this->model('files');
	}

	public function index(){
		$post = $this->post;
		// print_r($_GET);
		if (isset($_GET['page'])) {
			$page = $_GET['page'];
			$this->single_page($page);
		} elseif (isset($_GET['post'])) {
			$id = $_GET['post'];
			// print_r($id);
			$this->single_post($id);
		}else {
			$this->view('blog',['post'=>$post]);
		}
	}
	public function single_page($title){
		$post = $this->post;
		$this->view('single-page',['post'=>$post,'page'=>$title]);
	}
	public function single_post($id){
		$post = $this->post;
		// print_r($id);
		$this->view('single-post',['post'=>$post,'id'=>$id]);
	}

}

?>