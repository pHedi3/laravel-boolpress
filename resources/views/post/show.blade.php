@extends('layouts.app')

@section('content')
<div class="container show">
    <div class="row">
        <div class="col-6">
            <div class="row">
                <div class="col-6 user">{{$post->user}}</div>
                <div class="col-12">{{$post->text}}</div>
            </div>
        </div>
        <div class="col-6">
            <div class="row">
                <div class="col-6 offset-3"><img src="{{$post->img}}" alt=""></div>
            </div>
        </div>
        <div class="col-2 offset-10 button">
            <a href="{{route('post.index')}}"><button class="btn btn-primary">torna al index</button></a>
        </div>

    </div>
</div>
@endsection