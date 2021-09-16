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
        <form action="{{route('post.store')}}" method="POST">
            @csrf
            <label for="user">User</label>
            <input type="text" name="user" id="user">
            <label for="text">Text</label>
            <input type="text" name="text" id="text">
            <label for="imgage">Image</label>
            <input type="text" name="img" id="img">
            <button type="submit" >Invia</button>
        </form>
    </div>
</div>
@endsection