<?php

namespace App\Http\Controllers;

use App\Models\Administrator;
use App\Models\Post;
use Illuminate\Http\Request;

class MyPlaceController extends Controller
{
    public function index(){

        $post = Administrator::find(1);
//        dd($post->role);
        return $post;

    }

    public function main(){
        return "1321321321";
    }
}
