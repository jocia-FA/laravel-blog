<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index() { // get
        $post = "Laravel Tutorial Series One!";
        return view('posts.index', ['post'=>$post]);
    }
}
