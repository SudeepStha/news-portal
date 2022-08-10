@extends('backend.app')

@section('content')
    
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <span class="fw-bold fs-3"> Edit Designation Titles</span>
                    <a href="{{ route('designation.index') }}" class="btn btn-secondary float-end">Back</a>
                </div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">{{session('status')}}</div>
                    @endif
                    
                    <form action="{{ route('designation.update', $designation->id) }}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="title">Title<span class="text-danger">*</span></label>
                                <input class="form-control" id="title"  type="text" name="title" placeholder="Title" required value="{{$designation->title}}">
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