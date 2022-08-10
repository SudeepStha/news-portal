@extends('backend.app')

@section('content')
    
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <span class="fw-bold fs-3">Create Employee</span>
                    <a href="{{ route('employee.index') }}" class="btn btn-secondary float-end">Back</a>
                </div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">{{session('status')}}</div>
                    @endif
                    <form action="{{ route('employee.store') }}" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-md-12">    
                            <div class="form-group">
                                <label for="name">Name <span class="text-danger">*</span></label>
                                <input class="form-control" id="name"  type="text" name="name" placeholder="Name" required>
                            </div>
                        </div>
                        <div class="col-md-12">    
                            <div class="form-group">
                                <label for="designation_id">Designaiton <span class="text-danger">*</span></label>
                                <select class="form-select" id="designation_id" name="designation_id">
                                    <option>--- Select Designation ---</option>
                                    @foreach ($designation as $designation)
                                    <option value="{{$designation->id}}">{{$designation->title}}</option>
                                    @endforeach
                                </select>
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

@endsection