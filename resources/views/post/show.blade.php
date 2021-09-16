@extends('layouts.app')

@section('content')
<div class="container show">
    <div class="row">
        <div class="col-12">hai selezionato</div>
        <div class="col-2">{{$post->id}}</div>
        <div class="col-4">{{$post->user}}</div>
        <div class="col-6">{{$post->text}}</div>
        <div class="col-6 offset-3"><img src="{{$post->img}}" alt=""></div>
        <div class="col-2 offset-10">
            <a href="{{route('post.index')}}"><button>torna al index</button></a>

        </div>

    </div>
</div>
@endsection