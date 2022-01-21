<?php

namespace App\Http\Controllers;
use App\Post;

use Illuminate\Http\Request;

class PostController extends Controller {
    function index() {  
    $postList = Post::with("category")->get();
		return $postList;
    }
}