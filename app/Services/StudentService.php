<?php

namespace App\Services;

use App\Models\Student;
use Tymon\JWTAuth\JWTAuth;

class StudentService
{
    protected $auth;
    protected $studentModel;

    public function __construct()
    {
        $this->auth = app(JWTAuth::class);

        $this->studentModel = app(Student::class);
    }

    public function create($data)
    {
        return $this->studentModel->create($data);
    }

    public function update($where, $data)
    {
        return $this->studentModel->update($where, $data);
    }
}