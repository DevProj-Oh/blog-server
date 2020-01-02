<?php

namespace App\Http\Transformers;

use App\Article;
use League\Fractal\TransformerAbstract;

class ArticleTransformer extends TransformerAbstract
{
    public function transform(Article $article)
    {
        switch (request()->route()->getName()) {
            case 'articles.index':
                return [
                    'article_id' => $article->id,
                    'title' => $article->title,
                    'descript' => $article->descript,
                    'category' => [
                        'category_id' => $article->category->id,
                        'name' => $article->category->name,
                    ],
                    'updated_at' => $article->updated_at->diffForHumans(),
                ];
                break;

            case 'articles.show':
                $tags = $article->tags->map(function ($tag) {
                    return ['tag_id' => $tag->id, 'name' => $tag->name];
                })->toArray();
                return [
                    'article_id' => $article->id,
                    'title' => $article->title,
                    'descript' => $article->descript,
                    'content' => $article->html_content,
                    'category' => [
                        'category_id' => $article->category->id,
                        'name' => $article->category->name,
                    ],
                    'tags' => $tags,
                    'updated_at' => $article->updated_at->diffForHumans(),
                ];
            default:
                return [];
                break;
        }
    }
}
