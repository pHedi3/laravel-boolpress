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
                @if (Auth::check())
                <a href="{{route('post.edit', $item)}}"><i class="fas fa-edit"></i></a>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#{{$item->id}}">
                  <i class="fas fa-trash-alt"></i>
                </button>
                <div class="modal fade" id="{{$item->id}}" tabindex="-1" aria-labelledby="{{$item->id}}Label" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="{{$item->id}}Label">destroy</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                        are you sure?
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Destroy</button>
                      </div>
                    </div>
                  </div>
                </div>
                {{-- <form action="{{route('post.destroy', $item)}}" method="POST">
                  @csrf
                  @method('DELETE')
                  <button type="submit"><i class="fas fa-trash-alt"></i></button>
                </form> --}}
                    
                @endif
              </td>
            </tr>
                
            @endforeach
        </tbody>
      </table>
</div>
@endsection
