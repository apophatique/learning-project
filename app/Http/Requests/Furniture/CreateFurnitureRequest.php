<?php

namespace App\Http\Requests\Furniture;

use Illuminate\Foundation\Http\FormRequest;

class CreateFurnitureRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'type' => 'string|required',
            'name' => 'string|required',
            'manufacturer' => 'string|nullable'
        ];
    }
}