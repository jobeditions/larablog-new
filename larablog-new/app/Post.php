<?php
//use Illuminate\Database\Eloquent\Model;
namespace App;


class Post extends Model
{
    //protect $fillable=["title","body"];
    //protected $guarded=[];

   public function comments()
    {
    	return $this->hasMany('App\Comment');
    }

}
