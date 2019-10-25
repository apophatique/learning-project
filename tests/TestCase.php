<?php

namespace Tests;

use Illuminate\Foundation\Testing\TestCase as BaseTestCase;
use Illuminate\Support\Facades\DB;

abstract class TestCase extends BaseTestCase
{
    use CreatesApplication;


    public function setUp(): void
    {
        parent::setUp();

        //$this->clearDatabaseSchema();

        $this->artisan("cache:clear");
        $this->artisan('migrate', ['--path' => '/database/migrations/*']);
    }

    public function clearDatabaseSchema($schema = 'public')
    {
        //DB::unprepared("DROP DATABASE IF EXISTS {$schema} cascade");
        //DB::unprepared("CREATE DATABASE {$schema}");
    }
}

