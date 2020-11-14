<?php

namespace App\Services;

use App\Models\Clothes;

class ClothesService
{
    protected $clothingModel;

    public function __construct()
    {
        $this->clothingModel = app(Clothes::class);
    }

    public function create($data)
    {
        return $this->clothingModel->create($data);
    }

    public function update($where, $data)
    {
        return $this->clothingModel->update($where, $data);
    }

    public function delete($id)
    {
        return $this->clothingModel->delete($id);
    }

    public function search($filters)
    {
        return $this->clothingModel
            ->all()
            ->toArray();
    }

    public function exists($where)
    {
        return $this->clothingModel
            ->where($where)
            ->exists();
    }
}
