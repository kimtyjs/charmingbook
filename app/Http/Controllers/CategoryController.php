<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller {

    public function __construct() {

        $this->middleware('auth:admin');
    }

    public function categoryList() {

        $categories = Category::all();
        return view('pages.dashboard.categoryList')->with([
            'categories' => $categories,
        ]);
    }

    public function categoryForm() {

        $categories = Category::pluck('name', 'id');
        return view('pages.dashboard.categoryForm', compact('categories'));
    }

    public function categoryFormAdding(Request $request) {

        request()->validate([
            'name' => 'required',
            'slug' => 'required',
        ]);

        //$inputId = $request->get('inputCat');

        //find the parent Category via Id
        $parentCategory = Category::findOrFail($request->category_id);

        //save the new Sub-category into relationship
        $parentCategory->parent()->save(Category::create($request->all()));

        return back()->with('success_message', 'Category has been added');
    }

}

