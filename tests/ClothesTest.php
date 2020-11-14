<?php

use \Illuminate\Http\Response;
use Tests\TestCase;

class ClothesTest extends TestCase
{
    public function testCreate()
    {
        $student = $this->getJsonFixture('ClothesTest', 'create_clothing.json');

        $response = $this->json('post', '/clothes', $student);

        $response->assertStatus(Response::HTTP_OK);
    }

    public function testUpdate()
    {
        $student = $this->getJsonFixture('ClothesTest', 'update_clothing.json');

        $response = $this->json('put', '/clothes/2', $student);

        $response->assertStatus(Response::HTTP_NO_CONTENT);
    }

    public function testDelete()
    {
        $response = $this->json('delete', '/clothes/1');

        $response->assertStatus(Response::HTTP_OK);
    }

    public function testSearch()
    {
        $actual = $this->json('get', '/clothes');

        $expected = $this->getJsonFixture('ClothesTest', 'search_clothes.json');
        $this->assertEquals($expected, $actual->json());
    }
}
