@extends('layouts.master')
@section('content')

@if ($message = Session::get('success'))
    <p class="t-align-center back-green white p-15 radius-15">{{ $message }}</p>
@endif
    <div style="flex-wrap:wrap;" class="d-flex j-center gap-20 align-item-c">
    @foreach($posts as $post)
        @if($post->status)


                <div style="width:500px;" class="d-flex back-pink align-item-c radius-15 f-dir-col p-10 m-20">
                    <div>
                        <img class="radius-10" src="{{asset($post->image)}}" width="400px" alt="">
                    </div>
                    <div class="title">
                        <h2>{{$post->title}}</h2>
                    </div>

                    <div class="decription">
                        <h2 class="t-align-center">{{$post->description}}</h2>
                    </div>

                    <div>
                        <p>{{$post->created_at}}</p>
                    </div>

                    <div>
                        <a href="{{ route('post.show' , $post->id) }}"><button class="back-green white radius-15 border-n p-10">Read more</button></a>
                    </div>
                </div>

        @endif
    @endforeach
            </div>
@endsection
