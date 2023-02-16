<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\comment;
use Illuminate\Http\Request;

class CommentsController extends Controller
{
    public function opslaan(Post $post){
        // dd(request('post_id'));
        
        $post->commentoevogen(request('body'), request('post_id'));
        return back();
    }
}
