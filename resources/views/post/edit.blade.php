@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
        </div>
        <form action="{{route('post.update', $post)}}" method="POST">
            @csrf
            @method('PUT')
            <label for="user">User</label>
            <input type="text" name="user" id="user" value="{{$post->user}}" >
            <label for="text">Text</label>
            <input type="textarea" name="text" id="text" value="{{$post->text}}" >
            <label for="imgage">Image</label>
            <input type="text" name="img" id="img" value="{{$post->img}}" >
            <button type="submit" >Invia</button>
        </form>
    </div>
</div>
@endsection