<?php

namespace App\Http\Controllers;

use App\Http\Requests\Student\CreateStudentRequest;
use App\Http\Requests\Student\DeleteStudentRequest;
use App\Http\Requests\Student\SearchStudentRequest;
use App\Http\Requests\Student\UpdateStudentRequest;
use App\Services\StudentService;
use Symfony\Component\HttpFoundation\Response;

class StudentController extends Controller
{
    public function create(CreateStudentRequest $request, StudentService $service)
    {
        $result = $service->create($request->all());

        return response()->json($result);
    }

    public function update(UpdateStudentRequest $request, StudentService $service, $id)
    {
        $service->update(['id' => $id], $request->all());

        return response('', Response::HTTP_NO_CONTENT);
    }

    public function delete(DeleteStudentRequest $request, StudentService $service, $id)
    {
        $service->delete($id);

        return response('', Response::HTTP_OK);
    }

    public function search(SearchStudentRequest $request, StudentService $service)
    {
        $result = $service->search($request->all());

        return response()->json($result);
    }
}
