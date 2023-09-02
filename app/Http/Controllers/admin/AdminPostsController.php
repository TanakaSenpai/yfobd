<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Posts;
use Illuminate\Http\Request;

class AdminPostsController extends Controller
{
    public function index()
    {
        $posts = Posts::paginate(10);
        $no = 1;
        return view('admin.posts.index', compact('posts', 'no'));
    }

    public function posts()
    {
        return view('admin.posts.add');
    }

    public function store(Request $request)
    {
        Posts::create([
            'page_name' => $request->page_name,
            'page_title' => $request->page_title,
            'page_slug' => $request->page_slug,
            'content_one' => $request->content_one,
            'content_two' => $request->content_two,
            'content_three' => $request->content_three,
            'status' => $request->status,
        ]);

        return to_route('admin.posts.show');
    }

    public function edit($id)
    {
        $post = Posts::where('id', $id)->first();

        return view('admin.posts.edit', compact('post'));
    }

    public function update_post(Request $request, $id)
    {
        Posts::where('id', $id)->update([
            'page_name' => $request->page_name,
            'page_title' => $request->page_title,
            'page_slug' => $request->page_slug,
            'content_one' => $request->content_one,
            'content_two' => $request->content_two,
            'content_three' => $request->content_three,
            'status' => $request->status,
        ]);

        return to_route('admin.posts.show');
    }

    public function delete_post($id)
    {
        Posts::where('id', $id)->delete();

        return to_route('admin.posts.show');
    }
}
