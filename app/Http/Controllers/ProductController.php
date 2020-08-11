<?php

namespace App\Http\Controllers;

use App\Author;
use App\Category;
use App\Language;
use App\Product;
use App\Publication;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use RealRashid\SweetAlert\Facades\Alert;

class ProductController extends Controller
{
    public function __construct() {

        $this->middleware('auth:admin');
    }

    public function index() {

        if(session('success_message')) {
            Alert::success('Success!', session('success_message'));
        }
        //print cat with no parent
        $categories = DB::table('categories')
            ->where('category_id', '!=', null)->get();

        //returning the slug of category
        $categoryId = DB::table('categories')->where('slug', request()->view_by)->value('id');

        //let there be the place for checking condition for querying product according to the 'category'
        if(request()->view_by) {
            //query item by cat selecting
            $products = Product::with('categories')->where('category_id', $categoryId)->orderBy('price')->paginate(6);
        } else {
            $products = Product::with('categories')->orderBy('price')->paginate(6);
        }

        return view('pages.dashboard.product.productList')->with([
            'products' => $products,
            'categories' => $categories
        ]);

    }

    public function returnProductForm() {

        //getting only children category
        $categories = Category::whereNotNull('category_id')->pluck('name', 'id');
        //getting all the author list
        $authors = Author::pluck('name', 'id');
        $publishers = Publication::pluck('publisher', 'id');
        $languages = Language::pluck('name', 'id');

        return view('pages.dashboard.product.productForm')->with([
            'categories' => $categories,
            'authors' => $authors,
            'publishers' => $publishers,
            'languages' => $languages
        ]);
    }

    public function store(Request $request) {

        $validator = Validator::make($request->all(),[
            'name' => ['required', 'string', 'min:5', 'unique:products'],
            'details' => ['required', 'string', 'min:7', 'max:100'],
            'price' => ['required', 'numeric', 'min:1'],
            'format' => ['required', 'string'],
            'dimensions' => ['required', 'string'],
            'publication_date' => ['required', 'date'],
            'quantity' => ['required', 'numeric', 'min:0'],
            'image' => ['required', 'mimes:jpeg,jpg,png','max:10000'],
            'description' => ['required', 'max:5000']
        ]);


        if($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        $formInput = $request->except(['slug','codes', 'image', 'isbn']);

        $formInput['slug'] = wordwrap(strtolower($request->input('name')), 1, '-', 0);
        $formInput['codes'] = random_strings(8);
        $formInput['isbn'] = generateISBN(1000000000000, 9999999999999);

        $category_id = $request->category_id;
        $image = $request->image;

        if($image) {
            $imageName = $image->getClientOriginalName();
            $image->move('img/product',$imageName);
            $formInput['image'] = $imageName;
        }

        Product::create($formInput)->categories()->attach($category_id);
        return redirect()->route('product.index')->withSuccessMessage('Product has been added.');

    }

    public function show($productId, $productSlug) {

        $product = Product::where('slug', $productSlug)->firstOrFail();

        return view('pages.dashboard.product.productEdit', compact('product'));

    }

    public function edit(Request $request, $productId) {

        $rule = [
            'image' => ['sometimes', 'image', 'mimes:jpg,png,jpeg,gif', 'max:2048'],
            'slug' => ['sometimes', 'string', Rule::unique('products')->ignore($productId)],
            'name' => ['sometimes', 'min:5', 'string', Rule::unique('products')->ignore($productId)],
            'description' => ['sometimes', 'string', 'max:5000'],
            'codes' => ['sometimes', 'min:5', Rule::unique('products')->ignore($productId)],
            'price' => ['sometimes'],
            'quantity' => ['sometimes']

        ];
        $validator = Validator::make($request->all(), $rule);
        if ($validator->fails()) {

            return back()
                ->withErrors($validator)
                ->withInput();

        }

        //getting input from inputting form
        $slug = $request->input('slug');
        $name = $request->input('name');
        $description = $request->input('description');
        $codes = $request->input('codes');
        $price = $request->input('price');
        $quantity = $request->input('quantity');
        $updated_at = new DateTime;

        //Use Eloquent to grab the product record that we want to update,
        $product = Product::find($productId);

        if($request->hasFile('image')) {

            //let delete old image before storing new image
            $imagePath = Product::select('image')->where('id', $productId)->first();

            $filePath = public_path('img/product'). "/" .$imagePath->image;
            if(file_exists($filePath)) {
                @unlink($filePath);
            }

            //storing the very new image
            $image = $request->file('image'); //get the new image from inputting form
            $updated_at = new DateTime;

            $imageName = md5($image->getClientOriginalName() . time()) . "." . $image->getClientOriginalExtension();
            $image->move(public_path('img/product'), $imageName);

            //updating data in database, the same as $product->save();
            DB::table('products')->where('id', $productId)->update([
                'image' => $imageName,
                'updated_at' => $updated_at
            ]);
        }

        $product->slug = $slug ?: $product->slug;
        $product->name = $name ?: $product->name;   //==$product->name = $name ? $name: $product->name;
        $product->description = $description ?: $product->description;
        $product->codes = $codes ?: $product->codes;
        $product->price = $price ?: $product->price;
        $product->quantity = $quantity ?: $product->quantity;
        $product->updated_at = $updated_at ?: $product->updated_at;

        $product->save();   //save into database

        return redirect()->route('product.index')->with('success_message', 'Product has been updated');
    }

    public function deleteProduct($productId) {

        $product = Product::findOrFail($productId);
        $product->categories()->detach($productId);
        $product->delete();

        return redirect()->route('product.index')->with('success_message', 'Product has been deleted!');

    }

}
