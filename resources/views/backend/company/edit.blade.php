@extends('backend.app')

@section('content')
    
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <span class="fw-bold fs-3">Edit Company</span>
                    <a href="/company" class="btn btn-secondary float-end">Back</a>
                </div>
                <div class="card-body">
                    
                    @if (session('status'))
                        <div class="alert alert-success">{{session('status')}}</div>
                    @endif

                    <form action="/company/{{$company->id}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="row">
                            <div class="col-md-5">
                                <div class="form-group">
                                    <label for="name">Company Name <span class="text-danger">*</span></label>
                                    <input class="form-control" id="name"  type="text" name="name" placeholder="Company Name" value="{{$company->name}}" required>
                                </div>
                            </div>
                            <div class="col-md-7">
                                <div class="form-group">
                                    <label for="image">Company Logo <span class="text-danger">*</span></label>
                                    <input class="form-control" id="image"  type="file" name="image">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="province">Province <span class="text-danger">*</span></label>
                                    <select class="form-select" id="province"  type="text" name="province" required>
                                        <option value="">--- Select Province No. ---</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">    
                                <div class="form-group">
                                    <label for="district">District <span class="text-danger">*</span></label>
                                    <input class="form-control" id="district"  type="text" name="district" placeholder="District" value="{{$company->district}}" required>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="city">City <span class="text-danger">*</span></label>
                                    <input class="form-control" id="city"  type="text" name="city" placeholder="City" value="{{$company->city}}" required>
                                </div>
                            </div>
                            <div class="col-md-3"> 
                                <div class="form-group">
                                    <label for="street">Street <span class="text-danger">*</span></label>
                                    <input class="form-control" id="street"  type="text" name="street" placeholder="Street" value="{{$company->street}}" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="contact">Contact Detail <span class="text-danger">*</span></label>
                                    <input class="form-control" id="contact"  type="text" name="contact" placeholder="Contact" value="{{$company->contact}}" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="email">Email <span class="text-danger">*</span></label>
                                    <input class="form-control" id="email"  type="text" name="email" placeholder="Email" value="{{$company->email}}" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="reg_no">Registration No.<span class="text-danger">*</span></label>
                                    <input class="form-control" id="reg_no"  type="text" name="reg_no" placeholder="Registration Number" value="{{$company->reg_no}}" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="pan_no">Pan No. <span class="text-danger">*</span></label>
                                    <input class="form-control" id="pan_no"  type="text" name="pan_no" placeholder="Pan Number" value="{{$company->pan_no}}" required>
                                </div>
                            </div>
                        </div>
                        <hr class="bg-danger">
                        <span class="fw-bold fs-4">Detail For ADS</span>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="ads_email">Email<span class="text-danger">*</span></label>
                                    <input class="form-control" id="ads_email"  type="text" name="ads_email" placeholder="Email for ADS" value="{{$company->ads_email}}" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="ads_contact">Contact<span class="text-danger">*</span></label>
                                    <input class="form-control" id="ads_contact"  type="text" name="ads_contact" placeholder="Contact for ADS" value="{{$company->ads_contact}}" required>
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