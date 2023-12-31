<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'category_id'=>[
                'required',
                'integer'
            ],
            'name'=>[
                'required',
                'string'

            ],
            'small_description'=>[
                'required',
                'string'
            ],
            'description'=>[
                'required',
                'string'
            ],
            'original_price'=>[
                'required',
                'integer'
            ],
            'selling_price'=>[
                'required',
                'integer'
            ],
            'status'=>[
                'required',
                'nullable'

            ],
            // 'image' => [
            //     'nullable',
            //     'array',
            //     'max:5',
            //     'mimes:jpeg,png,jpg',
            // ],
            // 'image.*' => [
            //     'image',
            //     'mimes:jpeg,png,jpg',
            // ],
            'image.*' => [
                'required',
                'image',
                'mimes:jpeg,png,jpg',
            ],



        ];
    }
}
