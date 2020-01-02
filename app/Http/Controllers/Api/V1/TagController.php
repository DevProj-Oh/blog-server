<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Transformers\TagTransformer;
use App\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    public function index()
    {
        $tags = Tag::all();

        return $this->response->collection($tags, TagTransformer::class);
    }
}
