<?php 
/*define('SERVER_NAME', 'http://'.$_SERVER['SERVER_NAME'].'/'.'pbt2/');
define( 'SERVER_PUBLIC', SERVER_NAME.'public/' );
define( 'SERVER_ADMIN', SERVER_PUBLIC.'admin/' );*/


// require_once "dashboard";

// library
require_once '../../library/library.php';
header("location:".SERVER_ADMIN."dashboard");
?>