@extends('layouts.app')

@section('content')
<div class="container">
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
              <td><a href="{{route('post.show', $item)}}">LINk</a></td>
            </tr>
                
            @endforeach
        </tbody>
      </table>
</div>
@endsection
