<?php
namespace App\Services;

use App\Models\Furniture;
use Tymon\JWTAuth\JWTAuth;

class FurnitureService
{
    protected $auth;
    protected $furnitureModel;

    public function __construct()
    {
        $this->auth = app(JWTAuth::class);

        $this->furnitureModel = app(Furniture::class);
    }

    public function create($data)
    {
        return $this->furnitureModel->create($data);
    }

    public function update($where, $data)
    {
        return $this->furnitureModel->update($where, $data);
    }

    public function delete($id)
    {
        return $this->furnitureModel->delete($id);
    }

    public function search($filters)
    {
        return $this->furnitureModel
            ->all()
            ->toArray();
    }

    public function exists($where)
    {
        return $this->furnitureModel
            ->where($where)
            ->exists();
    }
}