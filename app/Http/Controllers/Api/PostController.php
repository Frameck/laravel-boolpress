<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Post;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Exception\HttpException;

class PostController extends Controller 
{
    public function index(Request $request) 
	{  
		$postList = Post::with("category")->with("tags")->paginate(3);
		return response()->json($postList);
    }

	public function show($slug)
    {
        $post = Post::where('slug', $slug)
                    ->with('category')
                    ->with('tags')
                    ->first();
        
        if (!$post) {
            throw new HttpException('Post not found');
        }

        return response()->json($post);
    }
}