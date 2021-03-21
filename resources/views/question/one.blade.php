@extends('adminlte::page')
@section('content')
<div class="container">
        <div class="card">
            <div class="card-header text-center bg-info">
            <b>QUESTION 1</b>
            </div>
            <div class="card-body">
                  <div class="row">
                      1. Give a rating for the below stack out of 5 along with the relevant reason.OOPs, PHP, MySQL, Framework (Codeigniter or Laravel), AWS, Logical Concept, Business Concept

                      <p>
                        Answer : <br>
                     <ul class="list-group">
                      <li class="list-group-item">1 . <b>3.5/5</b> for above mentioned stack. when it comes to choosing the framework i will select laravel over codeigniter though codeigniter is light weight but laravel is more scalable than codeigniter with its latest version 8 release we get authentication scaffolding, Jetstream and fortify update with two factor authentication for user out of the box.<br>
                      </li>

                      <li class="list-group-item">2. nodejs / angular js would have made it more powerfull in terms of performance</li>
                      
                    </ul>
                  </p> 
                  </div>     
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
