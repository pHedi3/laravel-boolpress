@extends('layouts.app')

@section('content')

<div class="container">
  <a href="{{route('post.create')}}"><button><i class="fas fa-plus"></i> post</button></a>
    <table class="table">
        <thead class="position-sticky">
          <tr>
            <th scope="col">id</th>
            <th scope="col">user</th>
            <th scope="col">text</th>
            <th scope="col">imgage</th>
            <th scope="col">link</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($allPost as $item)
            <tr>
              <th scope="row">{{$item->id}}</th>
              <td>{{$item->user}}</td>
              <td>{{$item->text}}</td>
              <td>{{$item->img}}</td>
              <td>
                <a href="{{route('post.show', $item)}}"><i class="fas fa-search"></i></a>
                <a href="{{route('post.edit', $item)}}"><i class="fas fa-edit"></i></a>
                <form action="{{route('post.destroy', $item)}}" method="POST">
                  @csrf
                  @method('DELETE')
                  <button type="submit"><i class="fas fa-trash-alt"></i></button>
                </form>
              </td>
            </tr>
                
            @endforeach
        </tbody>
      </table>
</div>
@endsection
