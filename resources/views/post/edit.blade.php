@extends('layouts.app')

@section('content')
<div class="container edit">
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
            <br>
            <label for="text">Text</label>
            <textarea name="text" id="text" >{{$post->text}} </textarea>
            <br>
            <label for="imgage">Image</label>
            <input type="text" name="img" id="img" value="{{$post->img}}" >
            <br>
            <select class="form-select" aria-label="Default select example" name="category_id">
                <option selected value="{{$post->post_categories_id}}">{{$post->postCategory->tag}}</option>
                @foreach ($category as $item)
                    @if ($item != $post->postCategory )
                        <option value="{{$item->id}}">{{$item->tag}}</option>
                    @endif  
                @endforeach
            </select>
            <br>
            <button type="submit" class="btn btn-primary" >Invia</button>
        </form>
    </div>
</div>
@endsection