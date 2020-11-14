<?php

namespace App\Http\Requests\Clothes;

use Illuminate\Foundation\Http\FormRequest;

class CreateClothingRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'size' => 'integer|required',
            'brand' => 'string|required',
            'type' => 'string|nullable',
            'name' => 'string|nullable'
        ];
    }
}
