<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Contracts\View\Factory;
use Illuminate\Foundation\Application;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;

class CategoryController extends Controller
{

    public function __construct() {

        $this->middleware('auth:admin');
    }

    /**
     * Display a listing of the resource.
     *
     * @return Factory|Application|View
     */
    public function index()
    {
        $category = Category::find(1);
        $categories = Category::getDescendants($category);

        return view('pages.test')->with([
            'categories' => $categories,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Factory|Application|View
     */
    public function create() {


    }




    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Factory|Application|View
     */
    public function store(Request $request)
    {
        return view('pages.dashboard.categoryForm');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return void
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
