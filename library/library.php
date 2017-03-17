<?php 
define('SERVER_NAME', 'http://'.$_SERVER['SERVER_NAME']);
define( 'SERVER_PUBLIC', SERVER_NAME.'/' );
define( 'SERVER_UPLOAD', SERVER_PUBLIC.'uploads/' );
define( 'SERVER_ADMIN', SERVER_PUBLIC.'admin/' );
define( 'SERVER_CSS', SERVER_PUBLIC.'css/' );
define( 'SERVER_JS', SERVER_PUBLIC.'js/' );

// Turn off error reporting
// error_reporting(0);

// **PREVENTING SESSION HIJACKING**
// Prevents javascript XSS attacks aimed to steal the session ID
// ini_set('session.cookie_httponly', 1);

// **PREVENTING SESSION FIXATION**
// Session ID cannot be passed through URLs
// ini_set('session.use_only_cookies', 1);

// Uses a secure connection (HTTPS) if possible
// ini_set('session.cookie_secure', 1);

session_start();

function this_header(){
	require_once 'header.php';
}

function this_footer(){
	require_once 'footer.php';
}

function logged_in($conn = null, $a = null){
	if (isset($_SESSION['permission']) === false OR isset($_SESSION['user']) === false) {
		return false;
	}

	if ($conn != null AND $a != null) {
		// var_dump($a);
		$exists = $conn->where('username','=',$a['user'])->where('auth','=',$a['permission'])->exists();
		if ($exists) {
			return true;
		}
		return false;
	}

	return true;
} 


function is_admin(){
	// var_dump($_SESSION);
	if (isset($_SESSION['user']) === false OR isset($_SESSION['permission']) === false) {
		return false;
	}
	if($_SESSION['permission'] == 0){
		return true;
	} else {
		return false;
	}
}

function is_user($conn = null, $a = null){
	if (isset($_SESSION['permission']) === false) {
		return false;
	}

	if (empty($a)) {
		if($_SESSION['permission'] == 'user'){
			return true;
		} else {
			return false;
		}
	}

	$user = $_SESSION['user'];
	// var_dump($conn);
	// var_dump($a);
	$exists = $conn->where('username','=',$user)->where('user_group','=',$a)->exists();
	if ($exists) {
		return true;
	}
	return false;
}


?>