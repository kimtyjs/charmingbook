<?php

namespace App\Http\Controllers;

use App\Product;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Contracts\View\Factory;
use Illuminate\Foundation\Application;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Factory|Application|View
     */
    public function index() {

        $cartItems = Cart::content();
        $subtotal = Cart::subtotal();
        $tax = Cart::tax();
        $total = Cart::total();

        return view('pages.shopping_cart')->with([
            'cartItems' => $cartItems,
            'subtotal' => $subtotal,
            'tax' => $tax,
            'total' => $total
        ]);
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
     * @return void
     */
    public function store() {


    }

    public function addItem($id) {

        $product = Product::findOrFail($id);

        $duplicateItem = Cart::search(function($cartId, $rowId) use ($id) {
            return $cartId->id === $id;
        });

        if($duplicateItem->isNotEmpty()) {
            return redirect()->route('cart.index')->with('success_message', 'Item was already added to your cart!');
        }

        Cart::add([
            'id' => $id,
            'name' => $product->name,
            'qty' => 1,
            'price' => $product->price,
            'options' => [
                'totalPriceForEachProduct' => $product->price * 1,
                'productImage' => $product->image
            ]
        ]);
        return redirect()->route('cart.index')->with('success_message', 'Item was added to your cart');

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
     * @return RedirectResponse
     */
    public function update(Request $request, $id) {

        $qty = $request->qty;
        $productId = $request->proId;
        $product = Product::findOrFail($productId);
        $stock = $product->quantity;

        if($qty > $stock) {
            return back()->with('success_message', 'This product is limited number in your cart');
        }

        Cart::update(
            $id,
            ['qty' => $qty, 'options' => ['totalPriceForEachProduct' => $product->price * $qty, 'productImage' => $product->image]]

        );
        return back()->with('success_message', 'Quantity of product was changed in your cart');

    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return RedirectResponse
     */
    public function destroy($id)
    {
        Cart::remove($id);
        return back()->with('success_message', 'Your Item has been removed!');
    }
}
