<?php

namespace App\Http\Controllers;

use App\Http\Requests\Clothes\CreateClothingRequest;
use App\Http\Requests\Clothes\DeleteClothingRequest;
use App\Http\Requests\Clothes\SearchClothingRequest;
use App\Http\Requests\Clothes\UpdateClothingRequest;
use App\Services\ClothesService;
use Symfony\Component\HttpFoundation\Response;

class ClothesController extends Controller
{
    public function create(CreateClothingRequest $request, ClothesService $service)
    {
        $result = $service->create($request->all());

        return response()->json($result);
    }

    public function update(UpdateClothingRequest $request, ClothesService $service, $id)
    {
        $service->update(['id' => $id], $request->all());

        return response('', Response::HTTP_NO_CONTENT);
    }

    public function delete(DeleteClothingRequest $request, ClothesService $service, $id)
    {
        $service->delete($id);

        return response('', Response::HTTP_OK);
    }

    public function get(SearchClothingRequest $request, ClothesService $service)
    {
        $result = $service->search($request->all());

        return response()->json($result);
    }

    public function getAll(SearchClothingRequest $request, ClothesService $service)
    {
        $result = $service->search($request->all());

        return response()->json($result);
    }
}
