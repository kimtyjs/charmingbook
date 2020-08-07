<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NotFoundPageController extends Controller {

    public function index() {

        return view('pages.pagenotfound');

    }

}
