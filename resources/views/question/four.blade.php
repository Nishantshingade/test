@extends('adminlte::page')
@section('content')

        <div class="card" style="width: 1400px; margin-left: 0px">
            <div class="card-header text-center bg-info">
            <b>Employee Database Schema</b>
            </div>
            <div class="card-body">
                <img src="{{ asset('storage/images/dbschema.png') }}" style="width: 1300px; height: 700px" class="impactGuruLogo" alt="impactGuruLogo">
            </div>
            <div class="card-footer text-center">
                <img src="{{ asset('storage/images/impactguru.png') }}" style="width: 120px;" class="impactGuruLogo" alt="impactGuruLogo">
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
