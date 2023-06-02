<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{


    public function index()
    {
        $comment=Comment::all();

        return [
            $comment,
        ];
    }

    public function store(){
        $post=new Post();
        $post->title="Elon musk";
        $post->body="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
         ommodo consequat. Duis aute irure dolor in reprehenderit in";

        $post->save();

        $comment=new Comment();
        $comment->comment=" new comment";

        $post->comment()->save($comment);

        return [
            'success',
        ];
    }
}
