<?php

namespace App\Observers;

use App\Category;

class CategoryObserver
{
    public function deleted(Category $category)
    {
        $category->articles()->delete();
    }
}
