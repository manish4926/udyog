@extends('layout.master')
    
@section('content')

    <style>
            * {
              box-sizing: border-box;
            }

            p{
                color:black;
                font-size: 15px;
                font-style: bold;
                align-content: center;
                border-bottom: solid 1px #ddd; 
            }

            /* Create two equal columns that floats next to each other */
            .column {
              float: left;
              width: 50%;
              padding: 10px;
              border: solid 1px #ccc;
              /* height: 500px; */
            }

            /* Clear floats after the columns */
            .row:after {
              content: "";
              display: table;
              clear: both;
            }
            button {
                float:left;
                width: :150px;
            }    

            .white-card {
                background: #fff;
                display: block;
                width: 100%;
                min-height: 200px;
                padding: 20px;
            }           
    </style>  

@section('center-content')
<div class="white-card">
         <h1>{{ ucfirst($job_opening->job_title) }}</h1>

        <div class="row">
              <div class="column" style="background-color:#eee;">
                    <p>JOBs ID</p>
                    <p>JOB TITLE</p>
                    <p>COMPANY NAME</p>
                    <p>HR NAME</p>
                    <p>EXPERIENCE</p>
                    <p>SKILLS</p>
                    <p>POST DATE</p>
                    <p>END DATE</p>
                    <p>LOCATION</p>
                    <p>PACKAGE</p>
                    <h2>Click Here to Apply....</h2>
              </div>
              <div class="column" style="">
                       
                                <p>{{$job_opening->job_id}}</p>
                                <p>{{$job_opening->job_title}}</p>
                                <p>{{$job_opening->company_name}}</p>
                                <p>{{$job_opening->hr_name}}</p>
                                <p>{{$job_opening->experience}}</p>
                                <p>{{$job_opening->skills}}</p>
                                <p>{{date('d M,Y', strtotime($job_opening->postdate))}}</p>
                                <p>{{$job_opening->expdate}}</p>
                                <p>{{$job_opening->location}}</p>
                                <p>{{$job_opening->package}}</p>
                                <p>{{$job_opening->job_desc}}</p> <br> 
                        @if(Auth::guest() == true) 

                            <a href="{{ route('login') }}?redirecturl=getdisplay&id={{$job_opening->job_id}}" class="btn btn-success">Apply Now</a>
                        @else
                            <a href="{{ route('application',['title'=> $job_opening->job_id]) }}" class="btn btn-success">Apply Now</a>
                        @endif
                        
            </div>
          </div>
    </div>
@endsection
<!-- @section('right-content')
@include('partials.sidebar-search-job')
@endsection -->

@endsection