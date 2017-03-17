<?php
use Illuminate\Database\Eloquent\Model as Eloquent;
class Category extends Eloquent {
	protected $fillable = ['name'];
	protected $table = 'category';
	// protected $primaryKey = 'id';
	// protected $user;
	// public function author(){
	// 	return $this->hasOne('User','id')->with;
	// }
}