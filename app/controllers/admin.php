<?php
class Admin extends Controller {
	protected $user;
	protected $post;
	protected $category;
	protected $files;
	protected $menu;
	protected $jobs;

	public function __construct(){
		session_start();
		// var_dump($_SESSION);
		$this->user = $this->model('user');
		$this->post = $this->model('post');
		$this->category = $this->model('category');
		$this->files = $this->model('files');
		$this->menu = $this->model('menu');
		$this->jobs = $this->model('jobs');
	}

	public function index(){
		$session = $_SESSION;
		$user = $this->user;
		$logged_in = logged_in($user, $session);
		if ($logged_in === false) {
			return $this->login();
		}
		return $this->dashboard();
	}

	public function login(){
		$session = $_SESSION;
		$user = $this->user;
		$logged_in = logged_in($user, $session);
		if ($logged_in === true) {
			return $this->dashboard();
		}
		$this->view('admin/login',[]);
	}

	public function dashboard(){
		$session = $_SESSION;
		$user = $this->user;
		$logged_in = logged_in($user, $session);
		// var_dump($_SESSION);
		// var_dump($logged_in);
		if ($logged_in === false) {
			return $this->login();
		}
		$this->view('admin/dashboard',['user'=>$user]);
	}

	public function posts(){
		$user = $this->user;
		$post = $this->post;
		$category = $this->category;
		// var_dump($_SESSION);
		// var_dump(is_admin());
		// var_dump(is_user($user,'editor'));
		if (is_admin() === false AND is_user($user,'editor') === false) {
			return $this->index();
		}
		$this->view('admin/post',['post'=>$post, 'category'=>$category,'user'=>$user]);
	}

	public function pages(){
		$user = $this->user;
		$post = $this->post;
		// var_dump($_SESSION);
		// var_dump(is_admin());
		// var_dump(is_user($user,'editor'));
		if (is_admin() === false AND is_user($user,'editor') === false) {
			return $this->index();
		}
		$this->view('admin/page',['post'=>$post,'user'=>$user]);
	}

	public function career(){
		$user = $this->user;
		$post = $this->post;
		$career = $this->jobs;
		// var_dump(is_user($user,'hrm'));
		if (is_admin() === false AND is_user($user,'hrm') === false) {
			return $this->index();
		}
		$this->view('admin/career',['career' => $career,'user'=>$user]);
	}

	public function media(){
		$user = $this->user;
		$post = $this->post;
		$files = $this->files;
		// var_dump(is_user($user,'hrm'));
		if (is_admin() === false AND is_user($user,'editor') === false) {
			return $this->index();
		}
		$this->view('admin/media',['files'=>$files,'user'=>$user]);
	}

	public function user(){
		$user = $this->user;
		// var_dump(is_user($user,'hrm'));
		if (is_admin() === false ) {
			return $this->index();
		}
		$this->view('admin/user',['user'=>$user,'user'=>$user]);
	}

	public function setting(){
		if (is_admin() === false ) {
			return $this->index();
		}
		$this->view('admin/setting',[]);

	}

}