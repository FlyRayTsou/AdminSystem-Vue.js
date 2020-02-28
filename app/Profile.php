<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
	protected $guarded = [];

	public function profileImage()
	{
		$imagePath = ($this->image) ? $this->image : 'profile/1lF1FehVESxgz8c8HuYQkwlBqD6bqOcXeUCQutr4.jpeg';
		return '/storage/'.$imagePath;
	}

    public function user()
    {
    	return $this->belongsTo(User::class);
    }
}
