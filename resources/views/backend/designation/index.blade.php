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
                    <span class="fw-bold fs-3">Designation</span>
                    <a href="{{ route('designation.create') }}" class="btn btn-secondary float-end">Create Designation</a>
                </div>
                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>S.N.</th>
                                <th>Title</th>
                                <th>More</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($designation as $designation)
                            <tr>
                                <td>{{$designation->id}}</td>
                                <td>{{$designation->title}}</td>
                                <td>
                                    <div class="d-flex">
                                        <a href="{{ route('designation.edit', $designation->id) }}" class="badge btn bg-primary me-2">Edit</a>
                                    <form action="{{ route('designation.destroy', $designation->id) }}" method="post">
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
    </div>
</div>

@endsection