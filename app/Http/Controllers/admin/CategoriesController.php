<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Categories;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{

    public function categories()
    {
        $categories = categories::paginate(10);
        $no = 1;
        return view('admin.categories.categories', compact('categories', 'no'));
    }

    public function cat_add()
    {
        return view('admin.categories.category-add');
    }

    public function cat_store(Request $request)
    {
        Categories::create([
            'category' => $request->category
        ]);

        return redirect(route('admin.categories.show'))->with('success', 'Your category was added successfully!');
    }

    public function cat_edit($id)
    {
        $cat = Categories::where('id', $id)->first();

        return view('admin.categories.category-edit', compact('cat'));
    }

    public function cat_update(Request $request, $id)
    {
        Categories::find($id)->update([
            'category' => $request->category
        ]);

        return to_route('admin.categories.show');
    }

    public function cat_del($id)
    {
        Categories::find($id)->delete();
        return to_route('admin.categories.show');
    }
}
