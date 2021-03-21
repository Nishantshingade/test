@extends('adminlte::page')
@section('content')
<div class="container">
        <div class="card">
            <div class="card-header text-center bg-info">
            <b>QUESTION 6</b>
            </div>
            <div class="card-body">
                  <p>6. Explain any one of the challenging modules which you have built from scratch and what you have learned from it.</p>
                  <hr>
                  <p>
                        Answer : <br>
                     <ul class="list-group">
                      <li class="list-group-item">1 . I have created Entire Software Analytics CRM from scratch in Laravel 8 and still developing the same for current organisation. Got to learn various ERP concepts / Accounting concepts and GST knowledge and implementing the same in the software. Implemented Razorpay Subscription model in the system<br>
                      Link to project : - <a href="https://crm.blumart.co.in/" target="_blank" >Blumart</a>
                      </li>

                      <li class="list-group-item">2. I have developed Alexa Based Voice Reporting System which is integrated with Tableau Visualization tool</li>
                      <li class="list-group-item">3. Worked on Magento 1.9 based E-commerce website which is linked to Tally cloud for invoicing and stock management.</li>
                      <li class="list-group-item">4. Created Chatbot for US based organisation built in motion.ai platform</li>
                    </ul>
                  </p>      
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
