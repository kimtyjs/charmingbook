<?php

namespace App\Http\Controllers;
use App\Category;
use Illuminate\Support\Facades\DB;


class LandingPageController extends Controller {

    public function index() {

        $parentCategories = Category::getParentCategory();
        $randomCategories = Category::inRandomOrder()->take(6)->get();

        return view('pages.landingPage.home', compact(['parentCategories', 'randomCategories']));

    }

    public function wishlist() {

        $productWishlists = DB::table('wishlists')
            ->leftJoin('products', 'wishlists.product_id', '=', 'products.id')
            ->get();

        return view('pages.wishlist', compact('productWishlists'));

    }

}

