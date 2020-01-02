<?php

namespace App\Http\Controllers\Api\V1;

class OtherController extends Controller
{
    public function about()
    {
        return ['data' => ['content' => setting('site.about')]];
    }
}
