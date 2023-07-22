@extends('layouts.master')

@section('content')
    <form method="POST" action="{{ route('post.update' , $post->id) }}" class="d-flex j-center f-dir-col back-gray align-item-c">
        @csrf
        @method("put")
        
        <div>
            <p>image : </p>
            <input name="img" type="text" value="{{$post->image}}">
        </div>

        <div>
            <p>title: </p>
            <input name="title" type="text" value="{{$post->title}}">
        </div>

        <div>
            <p>description: </p>
            <textarea name="des" class="radius-10 p-5" name="" id="" cols="30" rows="5">{{$post->description}}</textarea>
        </div>

        <div>
            <p>body: </p>
            <textarea name="body" class="radius-10 p-5" name="" id="" cols="30" rows="10">{{$post->body}}</textarea>
        </div>

        <div>
            <p>status: </p>
            <input name="status" type="text" value="{{$post->status}}">
        </div>

        <div>
            <button class="back-green white radius-5 border-n p-10 mt-15">Submit</button>
        </div>
    </form>
@endsection