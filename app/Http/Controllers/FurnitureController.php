<?php

namespace App\Http\Controllers;

use App\Http\Requests\furniture\CreateFurnitureRequest;
use App\Http\Requests\furniture\DeleteFurnitureRequest;
use App\Http\Requests\furniture\SearchFurnitureRequest;
use App\Http\Requests\furniture\UpdateFurnitureRequest;
use App\Services\furnitureService;
use Symfony\Component\HttpFoundation\Response;

class FurnitureController extends Controller
{
    public function create(CreateFurnitureRequest $request, FurnitureService $service)
    {
        $result = $service->create($request->all());

        return response()->json($result);
    }

    public function update(UpdateFurnitureRequest $request, FurnitureService $service, $id)
    {
        $service->update(['id' => $id], $request->all());

        return response('', Response::HTTP_NO_CONTENT);
    }

    public function delete(DeleteFurnitureRequest $request, FurnitureService $service, $id)
    {
        $service->delete($id);

        return response('', Response::HTTP_OK);
    }

    public function search(SearchFurnitureRequest $request, FurnitureService $service)
    {
        $result = $service->search($request->all());

        return response()->json($result);
    }
}
