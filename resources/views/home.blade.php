@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    @for ($i = 0; $i < 10; $i++)
                    <div>
                        <h3>{{$allPost[$i]->user}} </h3>
                        <p>{{$allPost[$i]->text}}</p>   
                        <img src="{{$allPost[$i]->img}}" alt="">               
                    </div>
                    
                    @endfor
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}

                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
