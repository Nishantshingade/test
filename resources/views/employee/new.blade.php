@extends('adminlte::page')
@section('content')
<div class="container">
        <div class="card">
            <div class="card-header text-center bg-info">
            <b>ADD NEW COMPANY</b>
            </div>
            <div class="card-body">
                <form name="createCompanyForm" method="post" action="{{route('createEmployee')}}" class="createCompanyForm">
                @csrf
                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <label for="companyName">Company Name</label>
                            <input type="text" class="form-control" id="company_name" value="{{old('company_name')}}" name="company_name" aria-describedby="Company Name" placeholder="Enter Company Name">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="companyEmail">Company Email</label>
                            <input type="text" class="form-control" id="company_email" value="{{old('company_email')}}" name="company_email" aria-describedby="Company Email" placeholder="Enter Company Email">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="Address">Address</label>
                            <input type="text" class="form-control" id="comp_address" value="{{old('comp_address')}}" name="comp_address" aria-describedby="Employee Name" placeholder="Enter Company Address">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="Company Contact">contact No</label>
                            <input type="text" class="form-control" id="comp_contact" value="{{old('comp_contact')}}" name="comp_contact" aria-describedby="Company Contact" placeholder="Enter Contact Details ">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="Establishment Date">Establishment Year</label>
                            <input type="date" class="form-control" id="est_date" value="{{old('est_date')}}" name="est_date" aria-describedby="Company Contact">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="Establishment Date">Company Logo</label>
                            <input type="file" name="logo" class="form-control" accept="image/*" />
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <div id="toggles">
                                <label for="Company Status">Status</label>
                                <input type="checkbox" name="checkbox1" id="checkbox1" class="ios-toggle" checked/>
                                <label for="checkbox1" class="checkbox-label" data-off="Inactive" data-on="Active"></label>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="Company Contact">Created By</label>
                            <input type="text" class="form-control" id="created_by" name="created_by" data-id="{{ Auth::user()->id}}" value="{{ Auth::user()->name }}" aria-describedby="Created By" disabled>
                        </div>
                    </div>
                </div>
                    <input type="submit" name="submitForm" class="btn btn-success">
                </form>
            </div>
            <div class="card-footer text-center">
            footer
            </div>
        </div>
    </div>
@endsection

@section('css')
<link href="{{ asset('css/employee.css') }}" rel="stylesheet">
@endsection