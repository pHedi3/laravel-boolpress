@extends('layouts.app')

@section('content')
<div class="container create">
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
            <br>
            <label for="text">Text</label>
            <textarea type="text" name="text" id="text"></textarea>
            <br>

            <label for="imgage">Image</label>
            <input type="text" name="img" id="img">
            <br>

            <button type="submit" class="btn btn-primary" >Invia</button>
        </form>
    </div>
</div>
@endsection