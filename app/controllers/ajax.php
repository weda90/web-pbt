<?php
class Ajax extends Controller {
	protected $user;
	protected $post;
	protected $page;
	protected $file;
	protected $category;
	protected $menu;
	protected $jobs;

	public function __construct(){
		$this->user = $this->model('user');
		$this->post = $this->model('post');
		$this->category = $this->model('category');
		$this->file = $this->model('files');
		$this->menu = $this->model('menu');
		$this->jobs = $this->model('jobs');
		if (isset($_POST['a'])) {
			$this->page = $_POST['a'];
		}
		
	}

	public function index(){
		$tblUser = $this->user;
		$tblPost = $this->post;
		$tblCategory = $this->category;
		$tblFile = $this->file;
		$tblMenu = $this->menu;
		$tblJobs = $this->jobs;
		$varA = strtolower($this->page);
		// var_dump($_POST);
		if (isset($_POST['b'])) {
			$varB = $_POST['b'];
		}
		if (isset($_POST['c'])) {
			$varC = $_POST['c'];
		}
		if (isset($_POST['d'])) {
			$varD = $_POST['d'];
		}
		if (isset($_POST['e'])) {
			$varE = $_POST['e'];
		}
		if (isset($_POST['f'])) {
			$varF = $_POST['f'];
		}
		if (isset($_POST['g'])) {
			$varG = $_POST['g'];
		}
		if (isset($_POST['h'])) {
			$varH = $_POST['h'];
		}
		if (isset($_POST['i'])) {
			$varI = $_POST['i'];
		}
		if (isset($_POST['j'])) {
			$varJ = $_POST['j'];
		}
		if (isset($_POST['k'])) {
			$varK = $_POST['k'];
		}
		if (isset($_POST['l'])) {
			$varL = $_POST['l'];
		}
		if (isset($_POST['m'])) {
			$varM = $_POST['m'];
		}
		$auth = 1;
		// var_dump($varA);
		switch ($varA) {
			case 'add-page':
				$this->addPost($tblPost, ['title'=>$varB,'content'=>$varC,'type'=>'page','category'=>0,'auth'=>$auth]);
				break;
			case 'add-post':
				$this->addPost($tblPost, ['title'=>$varB,'shortCont'=>$varC,'category'=>$varD,'imgFeat'=>$varE,'content'=>$varF,'type'=>'post','auth'=>$auth]);
				break;
			case 'edit-page':
				$this->editPost($tblPost, ['title'=>$varB,'content'=>$varC,'type'=>'page','category'=>0,'auth'=>$auth,'id'=>$varD]);
				break;
			case 'edit-post':
				// var_dump($_POST);
				$this->editPost($tblPost, ['title'=>$varB,'shortCont'=>$varC,'category'=>$varD,'imgFeat'=>$varE,'content'=>$varF,'id'=>$varG,'type'=>'post','auth'=>$auth]);
				break;
			case 'delete-page':
				// var_dump($_POST);
				$this->deletePost($tblPost,['id'=>$varB]);
				break;
			case 'delete-post':
				$this->deletePost($tblPost,['id'=>$varB]);
				break;
			case 'addcat':
				$this->addCat($tblCategory,['cat'=>$varB]);
				break;
			case 'editcat':
				$this->editCat($tblCategory,['id'=>$varB,'cat'=>$varC]);
				break;
			case 'delcat':
				$this->delCat($tblCategory,['id'=>$varB]);
				break;
			case 'addmenu':
				$this->addMenu($tblMenu,['menu'=>$varB,'link'=>$varC,'group'=>$varD]);
				break;
			case 'editmenu':
				// var_dump($_POST);
				$this->editMenu($tblMenu,['menu'=>$varB,'link'=>$varC,'group'=>$varD,'id'=>$varG]);
				break;
			case 'delmenu':
				$this->delMenu($tblMenu,['id'=>$varB]);
				break;
			case 'delete-media':
				$this->delFile($tblFile,['id'=>$varB]);
				break;
			case 'add-user':
				$this->addUser($tblUser,['user'=>$varB,'pass'=>$varC,'mail'=>$varD,'permission'=>$varE,'group'=>$varF]);
				break;
			case 'edit-user':
				// var_dump($_POST);
				$this->editUser($tblUser,['user'=>$varB,'pass'=>$varC,'mail'=>$varD,'permission'=>$varE,'group'=>$varF,'id'=>$varG]);
				break;
			case 'del-user':
				// var_dump($_POST);
				$this->delUser($tblUser,['id'=>$varB]);
				break;
			case 'add-job':
				$this->addJob($tblJobs,['pos'=>$varB,'loc'=>$varC,'closed'=>$varD,'req'=>$varE,'res'=>$varF]);
				break;
			case 'edit-job':
				$this->editJob($tblJobs,['pos'=>$varB,'loc'=>$varC,'closed'=>$varD,'req'=>$varE,'res'=>$varF,'id'=>$varG]);
				break;
			case 'delete-job':
				// var_dump($_POST);
				$this->delJob($tblJobs,['id'=>$varB]);
				break;
			case 'btn-login':
				// var_dump($_POST);
				$this->login($tblUser,['user'=>$varB,'pass'=>$varC]);
				break;
			case 'btn-logout':
				// var_dump($_POST);
				$this->logout();
				break;
			default:
				echo "default";
				break;
		}
	} /* END OF Function index*/

	public function login($tbl, $dataInsert = []){
		$exists = $tbl->where('username','=',$dataInsert['user'])->where('password','=',$dataInsert['pass'])->exists();
		// var_dump($check->exists());
		if ($exists) {
			session_start();
			$user = $tbl->where('username','=',$dataInsert['user'])->where('password','=',$dataInsert['pass'])->get();
			$_SESSION['user'] = $user[0]["username"];
			$_SESSION['permission'] = $user[0]["auth"];
			// var_dump($_SESSION);
			echo "success";
			exit();
		}
		echo "failed";
	}

	public function logout(){
		session_start();
		if (session_destroy()) {
			echo "success";
		}
		
	}
	
/*----------------------------------------- Function ajax to add, edit, delete Page/Post -----------------------------------------*/

	public function addPost($tbl, $dataInsert = []){
		// var_dump($dataInsert);
		$title = $dataInsert['title'];
		$content = $dataInsert['content'];
		$type = $dataInsert['type'];
		$auth = $dataInsert['auth'] ;

		$shortCont = "";
		$category = "";
		$imgFeat = "";
		if ($type == "post") {
			$shortCont = $dataInsert['shortCont'];
			$category = $dataInsert['category'];
			$imgFeat = $dataInsert['imgFeat'];
			$auth = $dataInsert['auth'];
		}
		if ($dataInsert['title'] == '') {
			$result = "failed";
		} else {
			$insert = $tbl->create([
				'title' => $title,
				'img_featured' => $imgFeat,
				'content' => $content,
				'short_content' => $shortCont,
				'type' => $type,
				'cat' => $category,
				'auth' => $auth
			]);
			if ($insert) {
				$result = "success";
			} else {
				$result = "failed";
			}
		}
		echo $result; 
	} /* End Function addPost*/

	public function editPost($tbl, $dataInsert = []){
		// var_dump($dataInsert);
		$title = $dataInsert['title'];
		$content = $dataInsert['content'];
		$type = $dataInsert['type'];
		$auth = $dataInsert['auth'] ;

		$shortCont = "";
		$category = "";
		$imgFeat = "";
		if ($type == "post") {
			$shortCont = $dataInsert['shortCont'];
			$category = $dataInsert['category'];
			$imgFeat = $dataInsert['imgFeat'];
			$auth = $dataInsert['auth'];
		}
		
		if ($dataInsert['title'] == '') {
			$result = "failed";
		} else {
			$update = $tbl->where('id','=', $dataInsert['id'])->update([
				'title' => $title,
				'img_featured' => $imgFeat,
				'content' => $content,
				'short_content' => $shortCont,
				'type' => $type,
				'cat' => $category,
				'auth' => $auth
			]);
			if ($update) {
				$result = "success";
			} else {
				$result = "failed";
			}
		}
		echo $result; 
	} /*End Function editPost*/

	public function deletePost($tbl, $dataInsert = []){
		// print_r($dataInsert);
		if ($dataInsert['id'] == '') {
			$result = "failed";
		} else {
			$delete = $tbl->where('id','=',$dataInsert['id'])->delete();
			if ($delete) {
				$result = "success";
			} else {
				$result = "failed";
			}
		}
		echo $result;
	}

	/*----------------------------------------- Function ajax to add, edit, delete User -----------------------------------------*/

	public function addUser($tbl, $dataInsert = []){
		// var_dump($dataInsert);

		$insert = $tbl->create([
				'username' => $dataInsert['user'],
				'password' => $dataInsert['pass'],
				'email' => $dataInsert['mail'],
				'auth' => $dataInsert['permission'],
				'user_group' => $dataInsert['group']
			]);
			if ($insert) {
				$result = "success";
			} else {
				$result = "failed";
			}
		echo $result; 
	} /* End Function addUser*/
	public function editUser($tbl, $dataInsert = []){
		// var_dump($dataInsert);
		/*$menu = '';
		if (!empty($dataInsert['menu'])) {
			$menu = implode(",",$dataInsert['menu'][0]);
		}*/

		if (empty($dataInsert['user'])) {
			$result = "failed";
		} else {
			$update = $tbl->where('id','=', $dataInsert['id'])->update([
				'username' => $dataInsert['user'],
				'password' => $dataInsert['pass'],
				'email' => $dataInsert['mail'],
				'auth' => $dataInsert['permission'],
				'user_group' => $dataInsert['group']
			]);
			if ($update) {
				$result = "success";
			} else {
				$result = "failed";
			}
		}
		echo $result; 
	} /*End Function editMenu*/
	public function delUser($tbl, $dataInsert = []){
		// var_dump($dataInsert);
		if ($dataInsert['id'] == '') {
			$result = "failed";
		} else {
			$delete = $tbl->where('id','=',$dataInsert['id'])->delete();
			// $delete = true;
			if ($delete) {
				$result = "success";
			} else {
				$result = "failed";
			}
		}

		echo $result;
	}
/*----------------------------------------- Function ajax to add, edit, delete Jobs -----------------------------------------*/

	public function addJob($tbl, $dataInsert = []){
		$closed_date = date_format( new DateTime($dataInsert['closed']), 'Y-m-d' );
		$insert = $tbl->create([
				'pos' => $dataInsert['pos'],
				'loc' => $dataInsert['loc'],
				'req' => $dataInsert['req'],
				'res' => $dataInsert['res'],
				'closed' => $closed_date
			]);
			if ($insert) {
				$result = "success";
			} else {
				$result = "failed";
			}
		echo $result; 
	} /* End Function addUser*/
	public function editJob($tbl, $dataInsert = []){
		// var_dump($dataInsert);
		$closed_date = date_format( new DateTime($dataInsert['closed']), 'Y-m-d' );
		if (empty($dataInsert['id'])) {
			$result = "failed";
		} else {
			$update = $tbl->where('id','=', $dataInsert['id'])->update([
				'pos' => $dataInsert['pos'],
				'loc' => $dataInsert['loc'],
				'req' => $dataInsert['req'],
				'res' => $dataInsert['res'],
				'closed' => $closed_date
			]);
			if ($update) {
				$result = "success";
			} else {
				$result = "failed";
			}
		}
		echo $result;
	} /*End Function editMenu*/
	public function delJob($tbl, $dataInsert = []){
		// var_dump($dataInsert);
		if ($dataInsert['id'] == '') {
			$result = "failed";
		} else {
			$delete = $tbl->where('id','=',$dataInsert['id'])->delete();
			// $delete = true;
			if ($delete) {
				$result = "success";
			} else {
				$result = "failed";
			}
		}

		echo $result;
	}

/*----------------------------------------- Function ajax to add, edit, delete Menu -----------------------------------------*/

	public function addMenu($tbl, $dataInsert = []){
		// var_dump($dataInsert);
		// var_dump($tbl);
		if (empty($dataInsert['menu'])) {
			$result = "failed";
		} else {
			$insert = $tbl->create([
				'menu' => $dataInsert['menu'],
				'link' => $dataInsert['link'],
				'group' => $dataInsert['group']
			]);
			if ($insert) {
				$result = "success";
			} else {
				$result = "failed";
			}
		}
		echo $result; 
	} /* End Function addMenu*/

	public function editMenu($tbl, $dataInsert = []){
		// var_dump($dataInsert);
		if (empty($dataInsert['menu'])) {
			$result = "failed";
		} else {
			$update = $tbl->where('id','=', $dataInsert['id'])->update([
				'menu' => $dataInsert['menu'],
				'link' => $dataInsert['link'],
				'group' => $dataInsert['group']
			]);
			if ($update) {
				$result = "success";
			} else {
				$result = "failed";
			}
		}
		echo $result; 
	} /*End Function editMenu*/
	public function delMenu($tbl, $dataInsert = []){
		if ($dataInsert['id'] == '') {
			$result = "failed";
		} else {
			$delete = $tbl->where('id','=',$dataInsert['id'])->delete();
			// $delete = true;
			if ($delete) {
				$result = "success";
			} else {
				$result = "failed";
			}
		}

		echo $result;
	}
/*----------------------------------------- Function ajax to add, edit, delete Category -----------------------------------------*/

	public function addCat($tbl, $dataInsert = []){
		if ($dataInsert['cat'] != '') {
			$insert = $tbl->create(['name'=>$dataInsert['cat']]);
			if ($insert) {
				$result = "success";
			} else {
				$result = "failed";
			}
		} else {
			$result = "failed";
		}
		echo $result;
		
	} /* End Function addCat*/

	public function editCat($tbl, $dataInsert = []){
		if ($dataInsert['cat'] != '') {
			$update = $tbl->where('id','=', $dataInsert['id'])->update([
				'name' => $dataInsert['cat']
			]);
			if ($update) {
				$result = "success";
			} else {
				$result = "failed";
			}
		} else {
			$result = "failed";
		}
		echo $result;
		
	} /* End Function addCat*/

	public function delCat($tbl, $dataInsert = []){
		if ($dataInsert['id'] != '') {
			$delete = $tbl->where('id','=',$dataInsert['id'])->delete();
			if ($delete) {
				$result = "success";
			} else {
				$result = "failed";
			}
		} else {
			$result = "failed";
		}
		echo $result;
		
	} /* End Function addCat*/

/*----------------------------------------- Function ajax to add, edit, delete Files -----------------------------------------*/

	public function uploadFile(){
		$tbl = $this->file;
		$upload_dir = "uploads/";
		$name = $_POST['name'];
		$tag = $_POST['tag'];

		if(isset($_FILES["data_files"])){
			// var_dump($_POST);
			// var_dump($_FILES);
			$fileName = $_FILES["data_files"]["name"];
            $ori_name = pathinfo($fileName,PATHINFO_FILENAME);
            $ext = pathinfo($fileName, PATHINFO_EXTENSION);

            $i = 1;
            while(file_exists($upload_dir.$fileName))
            {           
                $actual_name = (string)$ori_name.'('.$i.')';
                // $name = $actual_name.".".$extension;
                $fileName = $actual_name.'.'.$ext;
                $i++;
            }
            move_uploaded_file($_FILES["data_files"]["tmp_name"],$upload_dir.$fileName);

            $type = addslashes($_FILES["data_files"]["type"]);
            $size = $_FILES["data_files"]["size"];

            $insert = $tbl->create(['name'=>$name,'tag'=>$tag,'link'=>$fileName,'type'=>$type,'size'=>$size]);
			echo "success";
			exit();
		};
		echo "failed";
	}

	public function delFile($tbl, $dataInsert = []){
		$dir_uploads = "uploads/";
		$dir_thumbs = "uploads/thumbs/";
		$file = $tbl->where('id','=',$dataInsert['id'])->get();

		if ($dataInsert['id'] != '') {
			$delete = $tbl->where('id','=',$dataInsert['id'])->delete();
			if ($delete) {

				if (unlink($dir_uploads.$file[0]['link'])) {
					$result = "success";
				}
				
			} else {
				$result = "failed";
			}
		} else {
			$result = "failed";
		}
		echo $result;

	}

	
		
}