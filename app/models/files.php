<?php
use Illuminate\Database\Eloquent\Model as Eloquent;
class Files extends Eloquent {
	protected $fillable = ['name','link','type','size','tag','content'];
	protected $table = 'files';
	// protected $primaryKey = 'id';
	// protected $user;
	// public function author(){
	// 	return $this->hasOne('User','id')->with;
	// }
}