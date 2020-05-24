<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recipies extends Model
{
    protected $fillable = ['title','description','ingredients','method','quantity','preptime','baking','waittime','price','dificulty'];

    public function user() 
	{
		return $this->belongsTo(User::class);
	}
	public function categories() {
        return $this->belongsToMany(categories::class);
    }
}
