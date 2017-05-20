<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Comment;

class CommentController extends Controller
{
public function store(Post $post)
    {
       
        Comment::create([
        	'author'=>request('author'),
        	 'email'=>request('email'),
        	 'website'=>request('website'),
        	'body'=>request('body'),
        	 'post_id'=>$post->id,
        	]);
     
        return redirect('/posts'); 

    }
}
