<?php
class Career extends Controller {
	
	protected $post;
	protected $file;
	protected $job;

	public function __construct(){
		$this->post = $this->model('post');
		$this->file = $this->model('files');
		$this->job = $this->model('jobs');
	}

	public function index(){
		$post = $this->post;
		$job = $this->job;
		$this->view('career',['job'=>$job]);
	}

}

?>