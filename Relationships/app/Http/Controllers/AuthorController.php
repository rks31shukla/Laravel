<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Author;
use App\Models\Post;

class AuthorController extends Controller
{
    public function add_author()
    {
        $author = new Author;
        $author->username= "kunal";
        $author->password= "kunal123";
        $author->save();
    }

    //get authors on post id
    public function get_author($id)
    {
        $author = Post::find($id)->author;
        return $author;
    }
}
