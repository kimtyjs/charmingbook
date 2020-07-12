<?php

namespace App\Http\Controllers;


use App\Http\Requests\CheckoutRequest;
use App\Order;
use App\OrderProduct;
use Cartalyst\Stripe\Exception\CardErrorException;
use Cartalyst\Stripe\Laravel\Facades\Stripe;
use Gloudemans\Shoppingcart\Facades\Cart;
use http\Exception;
use Illuminate\Contracts\View\Factory;
use Illuminate\Foundation\Application;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;

class CheckoutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Factory|Application|View
     */
    public function index() {

        return view('pages.checkout')->with([

            'discount' => $this->getNumbers()->get('discount'),
            'newSubtotal' => $this->getNumbers()->get('newSubtotal'),
            'newTax' => $this->getNumbers()->get('newTax'),
            'newTotal' => $this->getNumbers()->get('newTotal')

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
     *
     * @param CheckoutRequest $request
     * @return RedirectResponse
     */
    public function store(CheckoutRequest $request) {

        $content = Cart::content()->map(function ($item) {
            return $item->slug.','.$item->qty;
        })->values()->toJson();

        try{
            Stripe::setApiKey(env('STRIPE_SECRET'));
            Stripe::charges()->create([
                'amount' => Cart::total(),
                'currency' => 'USD',
                'source' => $request->stripeToken,
                'description' => 'Order',
                'receipt_email' => $request->email,
                'metadata' => [
                    'contents' => $content,
                    'quantity' => Cart::instance('default')->count(),
                    'discount' => collect(session()->get('coupon'))->toJson()
                ]
            ]);

            //insert into order_table
            $this->addToOrdersTable($request, null);

            //insert into order__product_table
            foreach(Cart::content() as $item) {

                OrderProduct::create([
                    'order_id' => $order->id,
                    'product_id' => $item->id,
                    'quantity' => $item->qty
                ]);
            }

            //success
            Cart::instance('default')->destroy();
            session()->forget('coupon');
            return redirect()->route('confirmation.index')->with('success_message', 'Thank you! Your purchase has been successful');

        } catch (CardErrorException $error) {
            $this->addToOrdersTable($request, $error->getMessage());
            return back()->withErrors('Error!' .''. $error->getMessage());
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
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
     * @param  \Illuminate\Http\Request  $request
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

    protected function addToOrdersTable($request, $error) {

        $order = Order::create([
            'user_id' => auth()->user() ? auth()->user()->id : null,
            'billing_name' => $request->name,
            'billing_email' => $request->email,
            'billing_country' => $request->country,
            'billing_city' => $request->city,
            'billing_address' => $request->address,
            'billing_postal_code' => $request->postalcode,
            'billing_phone' => $request->phonenumber,
            'billing_name_on_card' => $request->name_on_card,
            'billing_discount' => $this->getNumbers()->get('discount'),
            'billing_discount_code' => $this->getNumbers()->get('code'),
            'billing_subtotal' => $this->getNumbers()->get('newSubtotal'),
            'billing_tax' => $this->getNumbers()->get('newTax'),
            'billing_total' => $this->getNumbers()->get('newTotal'),
            'error' => $error
        ]);
    }

    private function getNumbers() {

        $tax = config('cart.tax') / 100;
        $discount = session()->get('coupon')['discount'] ?? 0;
        $code = session()->get('coupon')['name'] ?? null;
        $newSubtotal = (Cart::subtotal() - $discount);
        $newTax = $newSubtotal * $tax;
        $newTotal = $newSubtotal * (1 + $tax);

        return collect([
            'discount' => $discount,
            'code' => $code,
            'newSubtotal' => $newSubtotal,
            'newTax' => $newTax,
            'newTotal' => $newTotal
        ]);
    }

}
