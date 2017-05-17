<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //protect $fillable=["title","body"];
    protected $guarded=[];

    public function comments()
    {
    	return $this->hasMany(Comment::class);
    }
}
