<?php

namespace HookahBox\Http\Controllers;

use HookahBox\Discount;
use Illuminate\Http\Request;

class DiscountController extends Controller
{
    public function create(Request $request) {
        $request->validate([
            'criteria' => 'required',
            'discount_price' => 'sometimes|integer',
            'discount_percentage' => 'sometimes|max:75'
        ]);
        Discount::create($request->all());
        return redirect(route('discount.index'));
    }

    public function index()
    {
        $discounts = Discount::all();
        return view('admin.discounts.view')->with(compact('discounts'));
    }

    public function update(Request $request, Discount $discount)
    {
        $request->validate([
            'criteria' => 'required',
            'discount_price' => 'sometimes|integer',
            'discount_percentage' => 'sometimes|max:75'
        ]);
        $discount->update($request->all());
        return redirect(route('discount.view'));
    }
}
