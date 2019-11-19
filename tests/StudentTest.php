<?php

use \Illuminate\Http\Response;
use Tests\TestCase;

class StudentTest extends TestCase
{
    public function testCreate()
    {

        $student = $this->getJsonFixture('create_student.json');

        $response = $this->json('post', '/student', $student);

        $response->assertStatus(Response::HTTP_OK);
    }

    public function getJsonFixture($name)
    {
        $path = base_path("tests/fixtures/Student/{$name}");

        if (file_exists($path)) {
            return json_decode(file_get_contents($path), true);
        }

        //todo: add exception
    }
}