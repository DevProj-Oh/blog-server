<?php

namespace Tests\Feature;

use App\Tag;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class TagTest extends TestCase
{
    use RefreshDatabase;

    public function testGetTagsListResource()
    {
        $tag = factory(Tag::class)->create();
        $tag->load('articles');

        $response = $this->get('/api/tags');

        $response->assertOk()
            ->assertJsonStructure(['data' => []])
            ->assertJsonFragment(['data' => [
                [
                    'tag_id' => $tag->id,
                    'name' => $tag->name,
                    'articles_count' => $tag->articles->count(),
                ]
            ]]);
    }
}
