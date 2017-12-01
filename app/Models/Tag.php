<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
	protected $dates = ['last_time', 'created_at', 'updated_at'];
	
	public static function boot()
	{
		parent::boot();
		
		static::deleted(function ($tag) {
//			$tag->discussions()->detach();
		});
	}
}
