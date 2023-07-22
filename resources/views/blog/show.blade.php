@extends('layouts.master')
@section('content')


        <div style="flex-wrap:wrap;" class="d-flex j-center gap-20 align-item-c">

            <div style="width:500px;" class="d-flex back-purple white align-item-c radius-15 f-dir-col p-10 m-20">
                <div>
                    <img class="radius-10" src="{{asset($post->image)}}" width="400px" alt="">
                </div>
                <div class="title">
                    <h2>{{$post->title}}</h2>
                </div>

                <div class="decription">
                    <h3 class="t-align-center">{{$post->description}}</h3>
                </div>

                <div class="body">
                    <h2 class="t-align-center">{{$post->body}}</h2>
                </div>

                <div>
                    <p>{{$post->created_at}}</p>
                </div>

                <div>
                    <a href="{{ route('post.index') }}"><button class="back-green white radius-15 border-n p-10">Back to All</button></a>
                </div>
                <div>
                    <form method="POST" action="{{ route('post.destroy' , $post->id) }}">
                        @csrf
                        @method('DELETE ')
                        <button class="back-red  white radius-15 p-10 m-10">Delete</button>
                    </form>
                </div>
            </div>


        </div>
        @endsection
