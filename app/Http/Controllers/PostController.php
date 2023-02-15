<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        
        $maak = Post::latest()->get();
        return view('les2/post', compact('maak'));
    }
    public function maken()
    {

        return view('les2/maken');
    }
    public function opslaan()
    {
         $post = new Post;

         $post->title = Request('title');
         $post->body = Request('body');


         $post->save();


         return redirect('post');
    }

    public function zien(Post $kijk){

        return view('les2/postZien', compact('kijk'));
    }

}
