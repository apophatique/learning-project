<?php

use \Illuminate\Http\Response;
use Tests\TestCase;

class FurnitureTest extends TestCase
{
    public function testCreate()
    {
        $furniture = $this->getJsonFixture('FurnitureTest', 'create_furniture.json');

        $response = $this->json('post', '/furniture', $furniture);

        $response->assertStatus(Response::HTTP_OK);
    }

    public function testUpdate()
    {
        $furniture = $this->getJsonFixture('FurnitureTest', 'update_furniture.json');

        $response = $this->json('put', '/furniture/1', $furniture);

        $response->assertStatus(Response::HTTP_NO_CONTENT);
    }

    public function testDelete()
    {
        $response = $this->json('delete', '/furniture/1');

        $response->assertStatus(Response::HTTP_OK);
    }

    public function testSearch()
    {
        $actual = $this->json('get', '/furniture');

        $expected = $this->getJsonFixture('FurnitureTest', 'search_furniture.json');

        $this->assertEquals($expected, $actual->json());
    }
}