<?php

class Home2 extends Controller {
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
		$file = $this->file;
		$this->view('home2',['post'=>$post,'file'=>$file]);

	}
}