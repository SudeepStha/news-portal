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
                    <span class="fw-bold fs-3">Employee</span>
                    <a href="{{ route('employee.create') }}" class="btn btn-secondary float-end">Add Employee</a>
                </div>
                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>S.N.</th>
                                <th>Name</th>
                                <th>Designation</th>
                                <th>More</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($employee as $employee)
                            <tr>
                                <td>{{$employee->id}}</td>
                                <td>{{$employee->name}}</td>
                                <td>{{$employee->designation->title}}</td>
                                <td>
                                    <div class="d-flex">
                                        <a href="/employee/{{$employee->id}}/edit" class="badge bg-primary mx-2">Edit</a>
                                        <form action="/employee/{{$employee->id}}" method="post">
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