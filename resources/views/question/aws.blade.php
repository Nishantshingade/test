@extends('adminlte::page')
@section('content')
<div class="container">
        <div class="card">
            <div class="card-header text-center bg-info">
            <b>AWS INSTALLATION</b>
            </div>
            <div class="card-body">
                  <p>6. AWS installation process</p>
                  <hr>
                  <p>
                      Answer : <br>
                     <ul class="list-group">
                      <li class="list-group-item">1. Create AWS account which requires credit card for account opening (1 year free program).<br>
                      Create Ec2 instance with tire size (eg. t2.small, t2.medium).download private Key pair and access your ec2 instance via ssh.<br>
                      Create RDS volume for database and S3 if dealing with image/file handling.<br>

                        
                      </li>
                      <li class="list-group-item">2. Install LAMP stack on the server. I normally prefer mysql_secure_installation</li>
                      <li class="list-group-item">3. Install composer for dependency management, npm for node packaging and git </li>
                      <li class="list-group-item">4. Clone your Project git repository on the server and make necessary changes for project running like database connection and environment variables.</li>
                      <li class="list-group-item">5. Point your domain to ec2 instance.</li>
                      <li class="list-group-item">6. If project is hosted on shared hosting server then point to public_html folder</li>
                      <li class="list-group-item">7.While pushing your local branch code to master branch we should make sure that local environment files are listed in git ignore listing</li>
                      <li class="list-group-item">8. Carefully set file permissions when required.</li>
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
