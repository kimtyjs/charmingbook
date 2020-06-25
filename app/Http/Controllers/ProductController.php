<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index() {

        return view('pages.dashboard.productForm');

    }

    public function store() {

        return view('pages.dashboard.productList');

    }

}
