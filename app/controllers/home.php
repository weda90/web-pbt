<?php

class Home extends Controller {
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
		$this->view('index',['post'=>$post,'file'=>$file]);

	}
}