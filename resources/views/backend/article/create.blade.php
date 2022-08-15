@extends('backend.app')

@section('content')
    
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <span class="fw-bold fs-3">Create Article</span>
                    <a href="{{route('articles.index') }}" class="btn btn-secondary float-end">Back</a>
                </div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">{{session('status')}}</div>
                    @endif
                    <form action="{{route('articles.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="title">Title<span class="text-danger">*</span></label>
                                <input class="form-control" id="title"  type="text" name="title" placeholder="Title" required>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="slug">Slug<span class="text-danger">*</span></label>
                                <input class="form-control" id="slug"  type="text" name="slug" placeholder="Slug" required>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="menu_id">Menu<span class="text-danger">*</span></label>
                                <select class="form-select select2" id="menu_id" name="menu_id[]" multiple='multiple'>
                                    <option value="">--- Select Menu ---</option>
                                    @foreach ($menu as $menu)
                                        <option value="{{$menu->id}}">{{$menu->title}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="description">Description<span class="text-danger">*</span></label>
                                <textarea class="form-control" id="editor" rows="10" cols="80"  type="text" name="description" placeholder="Description"></textarea>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="image">Featured Image <span class="text-danger">*</span></label>
                                <input class="form-control" id="image"  type="file" name="image" required>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary float-end">Post</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection