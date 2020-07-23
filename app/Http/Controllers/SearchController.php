<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SearchController extends Controller {

    public function search(Request $request) {

        //fluffy search
        $searchFields = ['name', 'details', 'description'];

        if(!empty($request->input('query'))) {
            $items = Product::where(function ($query) use($request,$searchFields){
                $searchWildcard = '%' .$request->input('query'). '%';

                foreach($searchFields as $field) {
                    $query->orWhere($field, 'LIKE', $searchWildcard);
                }

            })->get();

            return view('pages.resultant_search')->with([
                'items' => $items,
            ]);
        }

       return view('pages.resultant_search')->with(['items' => collect([])]);
    }

}

