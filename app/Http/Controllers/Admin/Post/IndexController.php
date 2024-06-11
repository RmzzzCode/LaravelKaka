<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use App\Http\Controllers\PostController;
use App\Models\Post;



class IndexController extends Controller
{
    public function __invoke()
    {
        return view('admin.post.index');
    }
}

