<?php
use Illuminate\Database\Eloquent\Model as Eloquent;
class Menu extends Eloquent {
	protected $fillable = ['menu','link','group'];
	protected $table = 'menu';
	// protected $primaryKey = 'id';
	// protected $user;
	// public function author(){
	// 	return $this->hasOne('User','id')->with;
	// }
}