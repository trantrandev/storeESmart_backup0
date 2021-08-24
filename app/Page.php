<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
class Page extends Model
{

	function user(){
		return $this->belongsTo('App\User', 'user_id', 'id');
    								//foreign_key //local_key
	}

	protected $fillable = ['title', 'content', 'user_id', 'status'];
}
