<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Models\Categories;
use App\Models\Post;
use App\Models\Tag;


class CreateController extends BaseController
{
    public function __invoke()
    {
        $categories = Categories::all();
        $tags = Tag::all();
        return view('post.create', compact('categories','tags'));
    }
}

