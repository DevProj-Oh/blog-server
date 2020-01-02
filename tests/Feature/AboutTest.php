<?php

namespace Tests\Feature;

use Artisan;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class AboutTest extends TestCase
{
    use RefreshDatabase;

    public function testGetAboutContent()
    {
        $exitCode = Artisan::call('db:seed --class=VoyagerDatabaseSeeder');

        $this->get('/api/about')
            ->assertOk()
            ->assertJsonStructure(['data' => []])
            ->assertJsonFragment(['data' => [
                'content' => setting('site.about'),
            ]]);
    }
}
