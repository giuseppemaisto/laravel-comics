@extends('layouts.app')

@section('content')

   
       

        <div class="jumbotron">
             <img src="{{Vite::asset('resources/images/jumbotron.jpg')}}" alt="">
         </div>
        <div class="container">
          <div class="row">
          @foreach ($comics as $item)

            <div class="col-2">
                <div class="card">
                
                    <img class="card-img-top img-fluid" src="{{ print_r( $item['thumb'])}}" alt="{{ $item['series']}}">
                    <div class="card-body">
                        <h6>{{ $item['series']}}</h6>
                    </div>
                </div>
            </div>
               
            @endforeach
          
          </div>

            
        </div>
     @endsection   
 