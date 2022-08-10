@extends('backend.app')

@section('content')
    
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <span class="fw-bold fs-3">Edit Article</span>
                    <a href="{{route('articles.index') }}" class="btn btn-secondary float-end">Back</a>
                </div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">{{session('status')}}</div>
                    @endif
                    <form action="{{route('articles.update', $article->id)}}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="title">Title<span class="text-danger">*</span></label>
                                <input class="form-control" id="title"  type="text" name="title" placeholder="Title" value="{{$article->title}}" required>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="slug">Slug<span class="text-danger">*</span></label>
                                <input class="form-control" id="slug"  type="text" name="slug" placeholder="Slug" value="{{$article->slug}}" required>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="menu_id">Menu<span class="text-danger">*</span></label>
                                <select class="form-select select2" id="menu_id[]" name="menu_id[]" multiple='multiple'>
                                    @foreach ($menu as $menu)
                                        <option value="{{$menu->id}}"
                                            @foreach ($article->menus as $item)
                                              {{ $menu->id == $item->id ? 'selected' : '' }}
                                            @endforeach>
                                            {{$menu->title}}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                       
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="description">Description<span class="text-danger">*</span></label>
                                <div id="toolbar-container"></div>
                                <textarea class="form-control" id="editor" row="5"  type="text" name="description" placeholder="Description">{{$article->description}}</textarea>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="image">Featured Image <span class="text-danger">*</span></label>
                                <input class="form-control" id="image"  type="file" name="image" >
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