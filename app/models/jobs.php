<?php
use Illuminate\Database\Eloquent\Model as Eloquent;
class Jobs extends Eloquent {
	protected $fillable = ['pos','loc','req','res','closed'];
	protected $table = 'jobs';
	// protected $primaryKey = 'id';
	// protected $user;
	// public function author(){
	// 	return $this->hasOne('User','id')->with;
	// }
}