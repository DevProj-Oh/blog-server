<?php

namespace App\Http\Transformers;

use App\Article;
use League\Fractal\TransformerAbstract;

class ArticleTransformer extends TransformerAbstract
{
    public function transform(Article $article)
    {
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
        ];
    }
}
