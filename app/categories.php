<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class categories extends Model
{
    protected $fillable = ['name','user_id'];

    public function user() 
	{
		return $this->belongsTo(User::class);
	}
	public function recipies() {
        return $this->belongsToMany(recipies::class);
    }
}
