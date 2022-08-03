{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @foreach ($menus as $menu)
        {{ $menu->title}}
    @endforeach
    <h1 class="bg-primary container">Home Page</h1>
</body>
</html> --}}

@extends('frontend.app')

@section('pages')
@foreach ($toparticles as $article)
    <div class="" style=" height: auto">

            {{-- <span class="fw-bold fs-3">{{$article->title}}</span> --}}
            <div class="">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card m-3">
                            <div class="fw-bold fs-3 text-center">
                                {{$article->title}}
                            </div>  
                            <div>
                                <img  class="justify-content-center" src="{{asset($article->image)}}" alt="Loading..." srcset="" style="height: 90vh; width: 100%">  
                            </div>      
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
        @endforeach


@endsection