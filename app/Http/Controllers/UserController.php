<?php

namespace App\Http\Controllers;

use App\Order;
use App\User;
use phpDocumentor\Reflection\DocBlock\Serializer;

class UserController extends Controller
{
    public function __construct() {

        $this->middleware('auth:admin');
    }

    private $userOrderedInfo = [];
    private $userOrderedProduct = [];

    private function countProduct($userData) {

        foreach($userData->orders as $order) {

            $this->userOrderedInfo[] = $order;
            $this->userOrderedProduct[] = $order->products->sum('pivot.quantity');
        }

        $product['order'] = $this->userOrderedInfo;
        $product['sumProduct'] = array_sum($this->userOrderedProduct);

        return $product;
    }


    public function index() {

        $users = User::all();
        return view('pages.dashboard.user.userList', compact('users'));

    }

    public function checkUserDetail($id, $name) {

        $user = User::where('id', $id)->firstOrFail();

        return view('pages.dashboard.user.userDetailProfile')->with([
            'user' => $user,
            'product' => $this->countProduct($user)['sumProduct']
        ]);
    }

    public function checkOrderHistory($userId, $username) {

        $user = User::where('id', $userId)->firstOrFail();

        return view('pages.dashboard.user.userOrdering')->with([
            'orders' => $this->countProduct($user)['order']
        ]);
    }

    public function getInvoice($userId, $userName, $orderId) {

        $orderInfo = Order::with('products')->find($orderId);

        return view('pages.dashboard.user.invoice')->with([
            'order' => $orderInfo
        ]);
    }


}
