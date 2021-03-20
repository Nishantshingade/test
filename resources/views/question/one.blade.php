@extends('adminlte::page')
@section('content')
<div class="container">
        <div class="card">
            <div class="card-header text-center bg-info">
            <b>ADD NEW COMPANY</b>
            </div>
            <div class="card-body">
                       
            </div>
            <div class="card-footer text-center">
                    <img src="{{ asset('storage/images/impactguru.png') }}" style="width: 120px;" class="impactGuruLogo" alt="impactGuruLogo">
            </div>
        </div>
    </div>
@endsection

@section('css')
<link href="{{ asset('css/question.css') }}" rel="stylesheet">
@endsection

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript" src="{{ URL::asset('js/question.js') }}"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<!-- <script src="{{ asset('js/question.js') }}" type="text/javascript"></script> -->
