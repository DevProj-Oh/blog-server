<?php

namespace App\Http\Transformers;

use App\Category;
use League\Fractal\TransformerAbstract;

class CategoryTransformer extends TransformerAbstract
{
    public function transform(Category $category)
    {
        return [
            'category_id' => $category->id,
            'name' => $category->name,
            'articles_count' => (int) $category->articles_count,
        ];
    }
}
