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

        $this->get('/api/articles')
            ->assertOk()
            ->assertJsonStructure(['data' => []])
            ->assertJsonFragment(['data' => [
                [
                    'article_id' => $article->id,
                    'title' => $article->title,
                    'descript' => $article->descript,
                    'category' => [
                        'category_id' => $category->id,
                        'name' => $category->name,
                    ],
                    'updated_at' => $article->updated_at->diffForHumans(),
                ]
            ]]);
    }

    public function testGetAnArticleDetail()
    {
        $category = factory(Category::class)->create();
        $article = factory(Article::class)->create([
            'category_id' =>  $category->id,
        ]);

        $tag = factory(Tag::class)->create();
        $article->tags()->attach($tag->id);

        $this->get('/api/articles/' . $article->id)
            ->assertOk()
            ->assertJsonStructure(['data' => []])
            ->assertJsonFragment(['data' => [
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
                'updated_at' => $article->updated_at->diffForHumans(),
            ]]);
    }
}
