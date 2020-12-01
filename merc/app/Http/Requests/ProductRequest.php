<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
            'productName' => 'required',
            'productPrice' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'productName.required' => 'Tên sản phẩm không được để trống',
            'productPrice.required' => 'Giá sản phẩm không được để trống',
        ];
    }
}
