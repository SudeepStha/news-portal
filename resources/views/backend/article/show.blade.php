@extends('backend.app')

@section('content')
    
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <span class="fw-bold fs-3">Article Details</span>
                    <a href="/articles" class="btn btn-secondary float-end mx-2">Back</a>
                    <a href="/articles/{{$article->id}}/edit" class="btn btn-primary float-end">Edit</a>
                </div>
                <div class="card-body">
                    <div class="fw-bold fs-4 text-danger">Title:</div> 
                    <div class="fw-bold fs-1">{{$article->title}}</div> 
                    <div class="fw-bold fs-4 text-danger">Description:</div> 
                    <div class="fw-bold fs-5">{!! $article->description !!}</div> 
                    <div class="fw-bold fs-4 text-danger">Featured Image:</div> 
                    <div class=""> <img src="{{asset($article->image)}}" alt=""> </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection