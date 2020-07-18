<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class LandingPageController extends Controller {

    public function index() {

        //query all Parent_category
        $parentCategories = Category::getParentCategory();
        $randomCategories = Category::inRandomOrder()->take(6)->get();

        return view('pages.landing_page', compact(['parentCategories', 'randomCategories']));

    }


}

