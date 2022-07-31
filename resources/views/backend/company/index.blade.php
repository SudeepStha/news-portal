@extends('backend.app')

@section('content')
    
<div class="container-fluid">
    <div class="ro">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <span class="fw-bold fs-3">Company</span>
                    @if(empty($company)){
                        <a href="/company/create" class="btn btn-secondary float-end">Create</a>
                    }
                    @endif
                </div>
                @if (!empty($company))
                    <div class="card-body">
                        <div class="card">
                            <div class="card-header">
                                <span class="fw-bold fs-4">
                                    Company Details
                                    <a href="/company/{{$company->id}}/edit" class="btn btn-secondary float-end">Edit</a>
                                </span>
                            </div>
                            <div class="card-body">
                                <div class="d-flex justify-content-between">
                                    <div class="col-md-4">
                                        <span class="fw-bold fs-4">Name:</span><span class="fw-bold fs-5"> {{$company->name}}</span><br>
                                    </div>
                                    <div class="col-md-6">
                                        <span class="fw-bold fs-4">LOGO:  </span><img src="{{asset($company->image)}}" alt="" height="50">
                                    </div>
                                </div>
                            </div>
                        </div> 
                        <div class="card">
                            <div class="card-header">
                                <span class="fw-bold fs-4">Address</span>
                            </div>
                            <div class="card-body">
                                <span class="fw-bold fs-4"> Province:</span><span class="fw-bold fs-5"> {{$company->province}}</span><br>
                                    <span class="fw-bold fs-4"> District:</span><span class="fw-bold fs-5"> {{$company->district}}</span><br>
                                    <span class="fw-bold fs-4"> City:</span><span class="fw-bold fs-5"> {{$company->city}}</span><br>
                                    <span class="fw-bold fs-4"> Street:</span><span class="fw-bold fs-5"> {{$company->street}}</span><br>
                            </div>
                        </div> 
                        <div class="card">
                            <div class="card-header">
                                <span class="fw-bold fs-4">Further Details</span>
                            </div>
                            <div class="card-body">
                                <span class="fw-bold fs-4"> Contact Detail:</span><span class="fw-bold fs-5"> {{$company->contact}}</span><br>
                                <span class="fw-bold fs-4"> Email:</span><span class="fw-bold fs-5"> {{$company->email}}</span><br>
                                <span class="fw-bold fs-4"> Registration No.:</span><span class="fw-bold fs-5"> {{$company->reg_no}}</span><br>
                                <span class="fw-bold fs-4"> Pan No.:</span><span class="fw-bold fs-5"> {{$company->pan_no}}</span><br>
                            </div>
                        </div>  
                        <div class="card">
                            <div class="card-header">
                                <span class="fw-bold fs-4">ADS Details</span>
                            </div>
                            <div class="card-body">
                                <span class="fw-bold fs-4">Email:</span><span class="fw-bold fs-5"> {{$company->ads_email}}</span><br>
                                <span class="fw-bold fs-4">Contact:</span><span class="fw-bold fs-5"> {{$company->ads_contact}}</span><br>

                            </div>
                        </div>                
                    </div>
                 @endif
            </div>
        </div>
    </div>
</div>

@endsection