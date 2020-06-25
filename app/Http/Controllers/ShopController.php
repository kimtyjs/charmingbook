<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Contracts\View\Factory;
use Illuminate\Foundation\Application;
use Illuminate\Http\Request;
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
        $products = Product::take(12)->paginate(6)->OnEachSide(3);
        $categories = Category::getParentCategory();



        return view('pages.shop')->with([
            'products' => $products,
            'parentCategories' => $categories
            ]
        );
    }

    public function shopFeatured($catId, $catSlug) {

        $subCats = Category::getDescendants(Category::find($catId));
        $categories = Category::all();
        $categoryName = $categories->where('slug', $catSlug)->first()->name;

        return view('pages.shopFeatured')->with([
            'subCats' => $subCats,
            'categoryName' => $categoryName

        ]);
    }

    public function shopByCategory($categoryId, $categorySlug) {

        if(request()->categorySlug) {
            $products = Product::with('categories')->whereHas('categories', function($query) {
                $query->where('slug', request()->categorySlug);
            })->paginate(6);

        }

        $secondCategories = Category::getDescendants(Category::find($categoryId));
        return view('pages.shopByCategory')->with([
                'secondCategories' => $secondCategories,
                'products' => $products
            ]
        );

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
        return view('pages.product_detail', compact('product'));
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
