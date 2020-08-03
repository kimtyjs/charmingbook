<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Contracts\View\Factory;
use Illuminate\Foundation\Application;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;


class ShopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Factory|Application|View
     */
    public function index()
    {
        $paginatedNumPerPage = 6;
        $categories = Category::getParentCategory();
        $products = DB::table('products');

        //set condition to query
        if(request()->sort === 'low_to_high') {
            $products = $products->orderBy('price')->paginate($paginatedNumPerPage);
            $products->withPath('shop?sort=low_to_high');
        } elseif (request()->sort === 'high_to_low') {
            $products = $products->orderBy('price', 'desc')->paginate($paginatedNumPerPage);
            $products->withPath('shop?sort=high_to_low');
        } else {
            $products =DB::table('products')->paginate($paginatedNumPerPage);
        }

        return view('pages.shop')->with([
            'products' => $products,
            'parentCategories' => $categories
            ]
        );
    }

    public function shopFeatured($catId, $catSlug) {

        $subCategoryId = Category::find($catId);
        $subCats = Category::getDescendants($subCategoryId);
        $categories = Category::all();
        $categoryName = $categories->where('slug', $catSlug)->first()->name;

        return view('pages.shopFeatured')->with([
            'subCats' => $subCats,
            'categoryName' => $categoryName

        ]);
    }

    public function shopByCategory($categoryId, $categorySlug) {

        $paginated = 6;
        $secondCategories = Category::getDescendants(Category::find($categoryId));

        if(request()->categorySlug) {
            $products =  $this->queryItems(request()->categorySlug)->paginate($paginated);
        }

        if(request()->sort === 'low_to_high') {
            $products = $this->queryItems(request()->categorySlug)->orderBy('price')->paginate($paginated);
        }

        if(request()->sort === 'high_to_low') {
            $products = $this->queryItems(request()->categorySlug)->orderBy('price', 'desc')->paginate($paginated);
        }

        return view('pages.shopByCategory')->with([
                'secondCategories' => $secondCategories,
                'products' => $products
            ]
        );

    }

    private function queryItems($slug) {
        return Product::with('categories')->whereHas('categories', function($query) use ($slug) {
            $query->where('slug', $slug);
        });
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return void
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return void
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     * @param $slug
     * @return Factory|Application|View
     */
    public function show($slug)
    {
        $product = Product::where('slug', $slug)->firstOrFail();

        return view('pages.product_detail')->with([
            'product' => $product,
            'stockLevel' => getStockLevel($product->quantity)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return void
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param int $id
     * @return void
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return void
     */
    public function destroy($id)
    {
        //
    }
}
