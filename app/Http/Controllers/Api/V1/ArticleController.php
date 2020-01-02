<?php

namespace App\Http\Controllers\Api\V1;

use App\Article;
use App\Http\Transformers\ArticleTransformer;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index(Request $request)
    {
        $articles = Article::with(['category', 'tags'])->get();

        return $this->response->collection($articles, ArticleTransformer::class);
    }

    public function show(Article $article)
    {
        $article->load(['category', 'tags']);

        return $this->response->item($article, ArticleTransformer::class);
    }
}
