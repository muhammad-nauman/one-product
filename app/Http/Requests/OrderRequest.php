<?php

namespace HookahBox\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OrderRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'customer_name' => 'required|string|max:50',
            'email' => 'required|email',
            'phone_number' => 'required|string|max:15',
            'product_count' => 'required|integer|min:1|max:20',
            'address' => 'required|max:200'
        ];
    }
}
