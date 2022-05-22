<?php

namespace App\Http\Controllers;

use App\Item;
use App\User;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    function createNewOrder()
    {
        $user = User::get(['id', 'name']);
        $item = Item::all();
        $data = [
            "users" => $user,
            "items" => $item,
        ];

        return view('order.create', $data);
    }

    function storeNew(Request $request)
    {
        foreach ($request->input() as $key => $value) {
            if ($request->input($key) != null && $key != "_token") {
                $itemsRequest[] = [
                    "item_id" => $key,
                    "quantity_order" => $request->input($key),
                ];
            }
        }


        try {

            $data = [
                "itemsRequest" => $itemsRequest,
                "items" => Item::get(['id', 'name', 'price']),
            ];


            $request->session()->put(0, $itemsRequest);


        } catch (\Exception $e) {
            return "<h1>you didn't add any item</h1>";
        }

        return view('user.cart', $data);
    }
}
