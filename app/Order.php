<?php

namespace HookahBox;

use HookahBox\Http\Requests\OrderRequest;
use HookahBox\Http\Requests\OrderStatusChangeRequest;
use HookahBox\Http\Requests\ShowOrdersRequest;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $guarded = [];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    static public $status = [
        0, //
        1, //
        2, //
        3, //
        4, //
        5 //
    ];

    public function details()
    {
        return $this->hasOne(OrderDetail::class);
    }

    public function saveDetails(OrderRequest $request)
    {
        $data = $request->only('customer_name', 'email', 'phone_number', 'product_count', 'restaurant_name', 'address');
        return $this->details()->save(new OrderDetail($data));
    }

    public function updateStatus(OrderStatusChangeRequest $request)
    {
        $this->status = $request->input('status');
        $this->save();
    }

    public function scopeWithFilters($query, ShowOrdersRequest $request)
    {
        $query->when($request->has('status'), function($query) use ($request){
            return $query->where('status', $request->input('status'));
        })
        ->when($request->has('sort'), function($query) use ($request) {
            return $query->orderBy('created_at', $request->input('sort'));
        }, function($query) {
            return $query->orderBy('created_at', 'desc');
        });
    }
}
