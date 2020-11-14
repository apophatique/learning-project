<?php

namespace App\Http\Requests\Clothes;

use App\Services\ClothesService;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class UpdateClothingRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'size' => 'integer',
            'brand' => 'string',
            'type' => 'string|nullable',
            'name' => 'string|nullable'
        ];
    }

    public function validateResolved()
    {
        parent::validateResolved();

        $service = app(ClothesService::class);

        if (!$service->exists(['id' => $this->route('id')])) {
            throw new NotFoundHttpException('Student does not exist');
        }
    }
}
