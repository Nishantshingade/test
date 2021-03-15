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
                        <a href="#" class="btn btn-primary addNumber" data-id="0">0</a> 
                    </div>
                    <div class="col-1">
                        <a href="#" class="btn btn-primary addNumber" data-id="1">1</a> 
                    </div>
                    <div class="col-1">
                        <a href="#" class="btn btn-primary addNumber" data-id="2">2</a> 
                    </div>
                    <div class="col-1">
                        <a href="#" class="btn btn-primary addNumber" data-id="3">3</a> 
                    </div>
                    <div class="col-1">
                        <a href="#" class="btn btn-primary addNumber" data-id="4">4</a> 
                    </div>
                    <div class="col-1">
                        <a href="#" class="btn btn-primary addNumber" data-id="5">5</a> 
                    </div>
                    <div class="col-1">
                        <a href="#" class="btn btn-primary addNumber" data-id="6">6</a> 
                    </div>
                    <div class="col-1">
                        <a href="#" class="btn btn-primary addNumber" data-id="7">7</a> 
                    </div>
                    <div class="col-1">
                        <a href="#" class="btn btn-primary addNumber" data-id="8">8</a> 
                    </div>
                    <div class="col-1">
                        <a href="#" class="btn btn-primary addNumber" data-id="9">9</a> 
                    </div>
                    <div class="col-1">
                        <a href="#" class="btn btn-primary addNumber" data-id="10">10</a> 
                    </div>
                </div>
            <hr>
                <div class="row">
                    <div class="col-12">
                        <input type="text" name="arrayAvalues" id="arrayAvalues" class="form-control" disabled>
                    </div>
                    <div class="col-12 p-2">
                        <a href="#" class="btn btn-success getAns">Get Answer</a>
                    </div>
                </div>
            <hr>        
            </div>
            <div class="card-footer text-center">
            footer
            </div>
        </div>

        <div class="row">
            <table class="table table-dark table-hover occuranceTable text-center">
                <thead>
                  <tr>
                    <th>Number</th>
                    <th>Occurance</th>
                  </tr>
                </thead>
                <tbody>
                  
                </tbody>
              </table>
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
