<?php

namespace App\Http\Controllers;

use App\Models\Posts;
use Illuminate\Http\Request;

use function Termwind\render;

class PostsController extends Controller
{
    public function index()
    {
        $see_post_page = Posts::where('page_name', 'page_see_post')->get();
        return view('posts.index', ['see_post_page' => $see_post_page]);
    }

    // public function hehe()
    // {
    //     $hehe_page = Posts::where('page_name', 'page_hehe')->get();
    //     return render('posts.moreTopics', ['hehe_page' => $hehe_page]);
    // }
}
