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

        $this->clearDatabaseSchema();

        $this->artisan("cache:clear");
        $this->artisan("migrate");
    }

    public function clearDatabaseSchema($schema = 'laravel')
    {
        DB::unprepared("drop database {$schema}");
        DB::unprepared("CREATE DATABASE {$schema}");
        DB::unprepared("use {$schema}");
    }
}

