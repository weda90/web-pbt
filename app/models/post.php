<?php

use Illuminate\Database\Eloquent\Model as Eloquent;
class Post extends Eloquent {
	protected $fillable = ['title','img_featured','short_content','content','author','type','cat','auth'];
	protected $table = 'posts';
	// protected $primaryKey = 'id';
	// protected $user;
	// public function author(){
	// 	return $this->hasOne('User','id')->with;
	// }
}