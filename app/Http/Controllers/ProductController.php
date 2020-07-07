<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    public function __construct() {

        $this->middleware('auth:admin');
    }

    public function index() {

        $products = Product::all();
        return view('pages.dashboard.productList', compact('products'));

    }

    public function returnProductForm() {

        $categories = Category::pluck('name', 'id');
        return view('pages.dashboard.productForm', compact('categories'));
    }

    public function store(Request $request) {

        $validator = Validator::make($request->all(),[
            'name' => ['required', 'string', 'alpha', 'min:5', 'unique:products'],
            'slug' => ['required', 'string', 'min:5', 'unique:products'],
            'codes' => ['required', 'string', 'min:5', 'unique:products'],
            'details' => ['required', 'string', 'min:7'],
            'price' => ['required'],
            'quantity' => ['required'],
            'image' => ['required', 'mimes:jpeg,jpg,png','max:10000'],
            'description' => ['required', 'max:1000']
        ]);

        if($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        $formInput = $request->except('image');
        $category_id = $request->category_id;
        $image = $request->image;

        if($image) {
            $imageName = $image->getClientOriginalName();
            $image->move('img/product',$imageName);
            $formInput['image'] = $imageName;
        }

        Product::create($formInput)->categories()->attach($category_id);
        return redirect()->back()->with('success_message', 'Product has been added');

    }

}
