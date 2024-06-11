@extends('layouts.main')
@section('content')
    <div>
        <form action="{{route('post.update', $post->id)}}" method="post">
            @csrf
            @method('patch')
            <div class="mb-3">
                <label for="Title" class="form-label">Title</label>
                <input type="Text" name="title" class="form-control" id="Title" value="{{$post->title}}">
            </div>
            <div class="mb-3">
                <label for="post-content">Content</label>
                <textarea class="form-control" name="content" id="content">{{$post->content}}</textarea>
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">image</label>
                <input type="Text" name="image" class="form-control" id="image" value="{{$post->image}}">
            </div>
            <div class="form-group mb-3">
                <label for="category">Category</label>
                <select class="form-control" id="category" name="category_id">
                    @foreach($categories as $category)
                        <option
                            {{$category->id === $post->category?->id ? 'selected ': ""}}
                            value="{{$category->id}}">{{$category->title}}</option>

                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="tags">Tags</label>
                <select multiple class="form-control" id="tags" name="tags[]">
                    @foreach($tags as $tag)
                        <option
                            @foreach($post->tags as $posttag)
                                {{$tag->id === $posttag->id ? 'selected ': ""}}
                            @endforeach
                                value="{{$tag->id}}">{{$tag->title}}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection
