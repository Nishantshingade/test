@extends('adminlte::page')
@section('content')
<div class="container">
        <div class="card">
            <div class="card-header text-center bg-info">
            <b>ADD NEW COMPANY</b>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-1">
                        <a href="#" class="btn btn-primary addNumber">1</a> 
                    </div>
                </div>
                    <input type="submit" name="submitForm" class="btn btn-success">
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