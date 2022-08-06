@extends('backend.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                @if (session('status'))
                            <div class="alert alert-success">{{session('status')}}</div>
                        @endif
                <div class="row">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header">
                                <span class="fw-bold fs-3">Menu List</span>
                            </div>
                            <div class="card-body">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>S.N.</th>
                                            <th>Title</th>
                                            <th>Slug</th>
                                            <th>Position</th>
                                            <th>Status</th>
                                            <th>More</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($menu as $index => $menu)
                                        <tr>
                                            <td>{{ ++$index }}</td>
                                            <td>{{$menu->title}}</td>
                                            <td>{{$menu->slug}}</td>
                                            <td>{{$menu->position}}</td>
                                            <td>
                                                <span class="{{ $menu->status == 1 ? 'badge rounded-pill bg-success' : 'badge rounded-pill bg-danger'}}">{{ $menu->status == 1 ? 'Acitve' : 'Inactive'}}</span>
                                            </td>
                                            <td>
                                                <div class="d-flex">
                                                    <a href="/menu/{{$menu->id}}/edit" class="badge bg-primary mx-2">Edit</a>
                                                    <form action="/menu/{{$menu->id}}" method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                        <button type="submit" class="badge btn bg-danger">Delete</button>
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-header">
                                <span class="fw-bold fs-3">Create Menu</span>
                            </div>
                            <div class="card-body">
                                <form action="/menu" method="post">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-12">    
                                            <div class="form-group">
                                                <label for="title">Title <span class="text-danger">*</span></label>
                                                <input class="form-control" id="title"  type="text" name="title" placeholder="Title" required>
                                            </div>
                                        </div>
                                        <div class="col-md-12">    
                                            <div class="form-group">
                                                <label for="slug">Slug <span class="text-danger">*</span></label>
                                                <input class="form-control" id="slug"  type="text" name="slug" placeholder="Slug" required>
                                            </div>
                                        </div>
                                        <div class="col-md-12">    
                                            <div class="form-group">
                                                <label for="position">Position <span class="text-danger">*</span></label>
                                                <input class="form-control" id="position"  type="text" name="position" placeholder="Position" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <input id="status" type="checkbox" name="status" value="1">Active
                                            </div>
                                        </div>
                                    </div>
                
                                    <button type="submit" class="btn btn-primary float-end">Add</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection