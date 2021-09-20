@extends('layouts.app')

@section('content')

<div class="container index">
  <a href="{{route('post.create')}}"><button class="btn btn-primary"><i class="fas fa-plus"></i> post</button></a>
    <table class="table">
        <thead class="position-sticky">
          <tr>
            <th scope="col">ID</th>
            <th scope="col">USER</th>
            <th scope="col">TEXT</th>
            <th scope="col">IMAGE URL</th>
            <th scope="col">SHOW</th>
            <th scope="col">EDIT</th>
            <th scope="col">DESTROY</th>

          </tr>
        </thead>
        <tbody>
            @foreach ($allPost as $item)
            <tr>
              <td scope="row">{{$item->id}}</td>
              <td>{{$item->user}}</td>
              <td>{{$item->text}}</td>
              <td>{{$item->img}}</td>
              <td> <a href="{{route('post.show', $item)}}"><button type="button" class="btn btn-primary"><i class="fas fa-search"></i></button></a></td>
              <td>
                @if (Auth::check())
                  <a href="{{route('post.edit', $item)}}"><button type="button" class="btn btn-primary"><i class="fas fa-edit"></i></button></a>
                @endif
              </td>
              <td>
                @if (Auth::check())
                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modal-{{$item->id}}">
                  <i class="fas fa-trash-alt"></i>
                </button>
                <div class="modal fade" id="modal-{{$item->id}}" tabindex="-1" aria-labelledby="{{$item->id}}Label" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="{{$item->id}}Label">DESTROY</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                        Are you sure?
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <form action="{{route('post.destroy', $item)}}" method="POST">
                          @csrf
                          @method('DELETE')
                          <button type="submit" class="btn btn-primary">Destroy</button>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              @endif
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
</div>
@endsection
