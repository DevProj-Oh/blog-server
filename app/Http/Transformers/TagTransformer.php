<?php

namespace App\Http\Transformers;

use App\Tag;
use League\Fractal\TransformerAbstract;

class TagTransformer extends TransformerAbstract
{
    public function transform(Tag $tag)
    {
        return [
            'tag_id' => $tag->id,
            'name' => $tag->name,
            'articles_count' => (int) $tag->articles_count,
        ];
    }
}
