@extends('backend.app')

@section('content')
    
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <span class="fw-bold fs-3">Article Details</span>
                    <a href="/article" class="btn btn-secondary float-end mx-2">Back</a>
                    <a href="/article/{{$article->id}}/edit" class="btn btn-primary float-end">Edit</a>
                </div>
                <div class="card-body">
                    <span class="fw-bold fs-4 text-danger">Title:</span> <br>
                    <span class="fw-bold fs-5">{{$article->title}}</span> <br>
                    <span class="fw-bold fs-4 text-danger">Slug:</span> <br>
                    <span class="fw-bold fs-5">{{$article->slug}}</span> <br>
                    <span class="fw-bold fs-4 text-danger">Description:</span> <br>
                    <span class="fw-bold fs-5">{!! $article->description !!}</span> <br>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection