@extends('adminlte::page')
@section('content')
<div class="container">
        <div class="card">
            <div class="card-header text-center bg-info">
            <b>QUESTION 3</b>
            </div>
            <div class="card-body">
            <div class="row">
                <p>3.  Given a one-dimension array, need to find the count of the unique set of elements.<BR>

                    Input: A= [3, 7, 4, 3, 3, 4]
A[0] = 3; A[1] = 7; A[2] = 4; A[3] = 3; A[4] = 3; A[5] = 4;
<br>
The first set of the index where values are the same (0, 3), (0,4),(3.4)
The second set of the index where values are the same (2,5)
Since value 7 didn't have a set, it won't be counted
<br>
Total sets = 4
                </p>
            </div>
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
            <form name="" method="post">
                <div class="row">
                    @csrf
                        <div class="col-12">
                            <input type="text" name="arrayAvalues" id="arrayAvalues" class="form-control" disabled>
                        </div>
                        <div class="col-12 p-2">
                            <a href="#" class="btn btn-success getAnsq3">Get Answer</a>
                        </div>  
                </div>
            </form>
            <hr>        
            </div>
            <div class="card-footer text-center">
                <img src="{{ asset('storage/images/impactguru.png') }}" style="width: 120px;" class="impactGuruLogo" alt="impactGuruLogo">
            </div>
        </div>

        <div class="row">
            <table class="table table-dark table-hover occuranceTable text-center">
                <thead>
                  <tr>
                    <th>Sr. No</th>
                    <th>Number</th>
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