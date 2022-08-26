<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        $categories = Category::all();
        $tags = Tag::all();
        return view('frontend.index', compact(['posts', 'categories', 'tags']));
    }

    public function show(Post $post)
    {
        $categories = Category::all();
        $tags = Tag::all();
        return view('frontend.single-post', compact(['categories', 'tags', 'post']));
    }
}
