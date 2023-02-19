@extends('layouts.app')

@section('content')
   <div class="container">
        <div class="container-img">
            <img src="{{$single['thumb']}}" alt="">
            <p>{{ $single['type']}}</p>
        </div>
   </div>

   <div class="container">
    <div class="row">
        <div class="col">
            <h1>{{ $single['title']}}</h1>
        </div>
    </div>

    <div class="info">
        <p>{{$single['description']}}</p>
    </div>
   </div>
@endsection