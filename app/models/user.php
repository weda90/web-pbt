<?php

use Illuminate\Database\Eloquent\Model as Eloquent;
class User extends Eloquent {
	public $name;
	protected $fillable = ['username','password','email','auth','menu','user_group'];
	protected $table = 'users';
	// protected $primaryKey = 'id';
	// public $timestamps = ['created_at','updated_at'];

	// protected $fillable = ['username','email'];
}