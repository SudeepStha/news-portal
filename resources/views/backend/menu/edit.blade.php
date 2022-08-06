@extends('backend.app')

@section('content')
    
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                @if (session('status'))
                    <div class="alert alert-success">{{session('status')}}</div>
                @endif
                <div class="card-header">
                    <span class="fw-bold fs-3">Edit Menu</span>
                    <a href="/menu" class="btn btn-secondary float-end">Back</a>
                </div>
                <div class="card-body">
                    <form action="/menu/{{$menu->id}}" method="post">
                        @csrf
                        @method('put')
                        <div class="row">
                            <div class="col-md-12">    
                                <div class="form-group">
                                    <label for="title">Title <span class="text-danger">*</span></label>
                                    <input class="form-control" id="title"  type="text" name="title" placeholder="Title" required value="{{$menu->title}}">
                                </div>
                            </div>
                            <div class="col-md-12">    
                                <div class="form-group">
                                    <label for="slug">Slug <span class="text-danger">*</span></label>
                                    <input class="form-control" id="slug"  type="text" name="slug" placeholder="Slug" required value="{{$menu->slug}}">
                                </div>
                            </div>
                            <div class="col-md-12">    
                                <div class="form-group">
                                    <label for="position">Position <span class="text-danger">*</span></label>
                                    <input class="form-control" id="position"  type="text" name="position" placeholder="Position" required value="{{$menu->position}}">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <input id="status" type="checkbox" name="status" checked value="1">Active
                                </div>
                            </div>
                        </div>
    
                        <button type="submit" class="btn btn-primary float-end">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection