<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;
use App\Models\Post;
class PostController extends Controller
{
    public function add_post($id)
    {
        $author = Author::find($id);
        $post = new Post;
        $post->title = 'Title 3';
        $post->category = 'Cat 3';

        $author->post()->save($post);
    }

    //get post based on author id
    public function show_post($id)
    {
        $post = Author::find($id)->post;
        
        return $post;
    }
}
