<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        
        $maak = Post::all();
        return view('les2/post', compact('maak'));
    }
    public function maken()
    {

        return view('les2/maken');
    }
    public function opslaan()
    {
         $post = new Post;

         $post->title = request('title');
         $post->body = Request('body');


         $post->save();


         return redirect('post');
    }
}
