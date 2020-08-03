<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

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

    public function store(Request $request) {

        $validator = Validator::make($request->all(), [
            'name' => ['required', 'unique:categories', 'min:5', 'string', 'alpha'],
            'slug' => ['required', 'string', 'min:5', 'unique:categories']
        ]);

        //get the input-field as the 'id' for selecting category, parent === null
        $categoryId = $request->input('inputCat');

        if($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        if($categoryId  === "null") {  //we insert the root parent category
           Category::create($request->all());
        }

        //we insert the sub category into parent root category
        $parentCategory = Category::findOrFail((int)$categoryId);

        //store the children to parent root category
        $parentCategory->parent()->save(Category::create($request->all()));

        return back()->with('success_message', 'Category has been added');

    }

}

