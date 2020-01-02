<?php

namespace Tests\Feature;

use App\Tag;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class TagTest extends TestCase
{
    use RefreshDatabase;

    public function testGetTagsListResource()
    {

        $tag = factory(Tag::class)->create();
        $response = $this->get('/api/tags');

        $response->assertOk()
            ->assertJsonStructure(['data' => []])
            ->assertJsonFragment(['data' => [
                ['name' => $tag->name]
            ]]);
    }

}
