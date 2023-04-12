<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Author;
use App\Models\Post;

class IndexComtroller extends Controller
{
    public function index($id)
    {
        $author = Author::find($id);
        // dd($author->post);
        foreach ($author->post as $post) {
            echo $post->title.'<br>';
        }
    }
}
