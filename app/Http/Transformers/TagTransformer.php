<?php

namespace App\Http\Transformers;

use App\Tag;
use League\Fractal\TransformerAbstract;

class TagTransformer extends TransformerAbstract
{
    public function transform(Tag $tag)
    {
        return [
            'name' => $tag->name,
        ];
    }
}
