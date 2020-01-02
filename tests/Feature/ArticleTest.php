<?php

namespace Tests\Feature;

use App\Article;
use App\Category;
use App\Tag;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ArticleTest extends TestCase
{
    use RefreshDatabase;

    public function testGetArticlesListResource()
    {
        $category = factory(Category::class)->create();
        $article = factory(Article::class)->create([
            'category_id' =>  $category->id,
        ]);

        $tag = factory(Tag::class)->create();
        $article->tags()->attach($tag->id);

        $this->get('/api/articles')
            ->assertOk()
            ->assertJsonStructure(['data' => []])
            ->assertJsonFragment(['data' => [
                [
                    'article_id' => $article->id,
                    'title' => $article->title,
                    'descript' => $article->descript,
                    'content' => $article->html_content,
                    'category' => [
                        'category_id' => $category->id,
                        'name' => $category->name,
                    ],
                    'tags' => [
                        [
                            'tag_id' => $tag->id,
                            'name' => $tag->name,
                        ]
                    ],
                ]
            ]]);
    }
}
