<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

    <body>  
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
    </body>
</html>