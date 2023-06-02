<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreDressRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => 'required|unique:dresses|min:3|max:256',
            'type' => 'required|min:3|max:256',
            'brand' => 'nullable',
            'size' => 'required|max:5',
            'color' => 'required|max:100',
            'description' => 'nullable',
            'price' => 'nullable',
            'purchase_date' => 'nullable',
            'season' => 'nullable',
            'image' => 'nullable'

        ];
    }
}
