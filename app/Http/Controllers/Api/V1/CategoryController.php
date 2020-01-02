<?php

namespace App\Http\Controllers\Api\V1;

use App\Category;
use App\Http\Transformers\CategoryTransformer;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::withCount('articles')->get();
        return $this->response->collection($categories, CategoryTransformer::class);
    }
}
