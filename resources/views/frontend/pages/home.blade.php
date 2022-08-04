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

    {{-- Top articles starts with limits 3 --}}
    @foreach ($toparticles as $article)
        <div class="row" style=" height: auto">
            <div class="col-md-12">
                <div class="card m-3 shadow-lg" style="">
                    <a href="">
                        <div class="fw-bold fs-3 text-center">
                            {{$article->title}}
                        </div>  
                        <div>
                            <img  class="justify-content-center" src="{{asset($article->image)}}" alt="Loading..." srcset="" style="height: 90vh; width: 100%">  
                        </div> 
                    </a>     
                </div>
            </div>
        </div>
    @endforeach
{{-- Top articles end  --}}

{{-- yesterday toparticles --}}
<div class=" container" style="height: 15vh">
    <div class="row justify-content-around">
        <div class="d-flex justify-content-between">
           @foreach ($yesterdayarticle as $article)
            <div class="col-md-3">
                <a href="#">
                    <div class="card" style="height: 15vh">
                        <div class="d-flex">
                            <div class="col-md-3 mt-3 ms-3">
                                <img  class="" src="{{asset($article->image)}}" alt="Loading..." style="width: 100%; border-radius: 50%; height: 70px">
                            </div>
                            <div>
                                <span class="fs-5 fw-bold">{{$article->title}}</span>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
           @endforeach
        </div>
    </div>
</div>
{{-- yesterdays toparticles ends --}}

{{-- Ads 4 starts --}}

<div class="bg-danger text-center" style="height: 20vh">
    <span class="">Ads 4 here</span>
</div>

{{-- Ads 4 ends --}}

{{-- menu/categories sections starts --}}

<div class=" mt-3">
    <div class="row justify-content-between">
        <div class="col-md-12">
            <div class="d-flex justify-content-between">
                <div class="col-md-7">
                    <div class="card shadow-lg">
                        <div class="card-header shadow-sm">
                            <span class="fs-3 fw-bold">Politics</span>
                            <a href=""><span class="fs-5 float-end">More..</span></a>
                        </div>
                        <div class="card-body">
                            <div class="d-flex">
                                <div class="col-md-6">
                                    <div class="card" style="height: 60vh">
                                        body 1 
                                    </div>
                                </div>
                                <div class="col-md-5 ms-5">
                                    @foreach ($category as $article)
                                    <div class="card">
                                        <div class="d-flex">
                                            <div class="row">
                                                <div class="col-md-5">
                                                    <div class="card bg-danger">
                                                        <img src="{{asset($article->image)}}" alt="">
                                                    </div>
                                                </div>
                                                <div class="col-md-7 bg-primary">
                                                    <span class="fs-5">{{$article->title}}</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div> 
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4" >
                    <div class="card" >
                        <div class="card text-center" style="height: 75vh">
                            <div class="card-header">
                              <ul class="nav nav-tabs card-header-tabs justify-content-between">
                                <li class="nav-item col-md-6">
                                  <a class="nav-link active" aria-current="true" href="#">New Update</a>
                                </li>
                                <li class="nav-item col-md-6">
                                  <a class="nav-link" href="#">More View</a>
                                </li>
                              </ul>
                            </div>
                            <div class="card-body">
                              
                            </div>
                          </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- menu/categories sections ends --}}

@endsection