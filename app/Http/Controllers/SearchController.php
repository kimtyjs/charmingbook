<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class SearchController extends Controller {

    public function search(Request $request) {

        //fluffy search
        $searchFields = ['name', 'details', 'description'];

        if(!empty($request->input('query'))) {
            $products = Product::where(function ($query) use($request,$searchFields){
                $searchWildcard = '%' .$request->input('query'). '%';

                foreach($searchFields as $field) {
                    $query->orWhere($field, 'LIKE', $searchWildcard);
                }

            });

            //let there be the place for querying here
            if(request()->sort === 'low_to_high') {
                $items = $products->orderBy('price')->paginate(6);
            }
            if(request()->sort === 'high_to_low') {
                $items = $products->orderBy('price', 'desc')->paginate(6);
            } else {
                //otherwise
                $items = $products->paginate(6);
            }

            return view('pages.resultant_search')->with([
                'items' => $items,
            ]);
        }


       return view('pages.resultant_search')->with(['items' => collect([])]);
    }

}

