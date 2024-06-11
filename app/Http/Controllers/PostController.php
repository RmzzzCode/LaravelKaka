<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Post;
use App\Models\PostTag;
use App\Models\Tag;
use Illuminate\Http\Request;


class PostController extends Controller
{
    public function index(){
        $posts = Post::all();
        return view('post.index', compact('posts'));
    }

    public function create()
    {
        $categories = Categories::all();
        $tags = Tag::all();
        return view('post.create', compact('categories','tags'));
    }

    public function store()
    {
        $data = request()->validate([
           'title' => 'required|string',
           'content' => 'required|string',
           'image' => 'required|string',
           'category_id'=> 'required',
           'tags' => 'required',

        ]);
        $tags = $data['tags'];
        unset($data['tags']);

        $post = Post::create($data);
        $post->tags()->attach($tags);
        return redirect()->route('post.index');
    }

    public function show(Post $post)
    {
        return view('post.show', compact('post'));
    }

    public function edit(Post $post)
    {
        $categories = Categories::all();
        $tags = Tag::all();
        return view('post.edit', compact('post','categories','tags'));
    }
    public function update(Post $post)
    {
        $data = request()->validate([
            'title' => 'string',
            'content' => 'string',
            'image' => 'string',
            'category_id'=> '',
            'tags'=> '',
        ]);
        $tags = $data['tags'];
        unset($data['tags']);
        $post->update($data);
        $post->tags()->sync($tags);
      return redirect()->route('post.show',$post->id);
    }

    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('post.index');
    }

//
//    public function delete(){
//        $post = Post::withTrashed()->find(1);
//
//        $post->restore();
//        dd("deleted");
//    }
//
//    public function firstcreate(){
//        $post = Post::firstOrCreate([
//           'title' => 'title of post from phpstorm123'
//        ],[
//            'title' => 'title of post from phpstorm123',
//            'content' => 'some more intresting information',
//            'image' => 'imageblala.png',
//            'likes' => 20,
//            'is_published' => 1,
//            ]
//        );
//        var_dump($post->title);
//    }
//
//    public function updatecreate(){
//        $post = Post::updateOrCreate([
//            'likes' => 20000
//        ],[
//            'title' => 'Какой-то пост!',
//            'content' => 'some more intresting information',
//            'image' => 'imageblala.png',
//            'likes' => 2000,
//            'is_published' => 1,
//            'description' => "I love life",
//            ]
//        );
//        var_dump($post->likes);
//        dd("good");
//    }
}
