<?php

namespace HookahBox\Http\Controllers;

use HookahBox\Http\Requests\OrderRequest;
use HookahBox\Http\Requests\OrderStatusChangeRequest;
use HookahBox\Http\Requests\ShowOrdersRequest;
use HookahBox\Order;
use HookahBox\Product;

class OrderController extends Controller
{
    public function create(OrderRequest $request)
    {
        $product = Product::first();
        $data['order_number'] = random_int(99999, 1000000);
        $data['total_amount'] = $request->input('product_count') * $product->price;
        $data['order_notes'] = $request->input('order_notes', '');
        return response()->json(Order::create($data)->saveDetails($request), 201);
    }

    public function changeStatus(OrderStatusChangeRequest $request, Order $order)
    {
        $order->updateStatus($request);
        return redirect()->back()->with('success', 'Order status has been changed successfully');
    }

    public function show(ShowOrdersRequest $request)
    {
        $orders = Order::withFilters($request)->with('details')->get();

        return view('admin.orders.view')->with(compact('orders'));
    }
}
