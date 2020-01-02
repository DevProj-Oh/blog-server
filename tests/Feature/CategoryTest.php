<?php

namespace Tests\Feature;

use App\Category;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class CategoryTest extends TestCase
{
    use RefreshDatabase;

    public function testGetCategoriesListResource()
    {
        $category = factory(Category::class)->create();

        $response = $this->get('/api/categories');

        $response->assertOk()
            ->assertJsonStructure(['data' => []])
            ->assertJsonFragment(['data' => [
                [
                    'category_id' => $category->id,
                    'name' => $category->name,
                    'articles_count' => $category->articles->count(),
                ]
            ]]);
    }
}
