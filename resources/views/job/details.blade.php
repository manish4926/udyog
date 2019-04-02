<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{config('app.name','UDYOGTV')}}</title>

        <style>
                    table 
                    {
                          display: table;
                          border-collapse: separate;

                    }
                    table, th, td 
                    {
                        border: 1px solid black;
                        padding:6px;
                        width: 50px;
                        color: blue;
                    }  

                    button{
                float:left;
                width:150px;
            }               
            </style>  

        
    </head>
    <body>
         <h1 align="center">DESCRIPTION</h1>
         <h2>Click Here to Apply....</h2>
        <button type="button">Apply Now</button>
         <table align="center" border-spacing= "2px" bgcolor="" order-color= "gray">
            <tr>
                <div>
                <th>JOBs ID</th>
                <th>JOB TITLE</th>
                <th>COMPANY NAME</th>
                <th>HR NAME</th>
                <th>EXPERIENCE</th>
                <th>SKILLS</th>
                <th>POST DATE</th>
                <th>END DATE</th>
                <th>LOCATION</th>
                <th>PACKAGE</th> 
                </div>  
            </tr>

            <br/>
            <br/>



		           @foreach($desc as $job_opening)
                           <tr>
        				    <td>{{$job_opening->job_id}}</td>
        				    <td>{{$job_opening->job_desc}}</td>
                            <td>{{$job_opening->company_name}}</td>
                            <td>{{$job_opening->hr_name}}</td>
                            <td>{{$job_opening->experience}}</td>
                            <td>{{$job_opening->skills}}</td>
                            <td>{{$job_opening->postdate}}</td>
                            <td>{{$job_opening->expdate}}</td>
                            <td>{{$job_opening->location}}</td>
                            <td>{{$job_opening->package}}</td>
                            </tr>
                            
                    @endforeach
		</table>
       

       <!-- <table align="center" border-spacing= "2px" bgcolor="" order-color= "gray" width="500">
            <tr><th width="500">Description</th>
            </tr>

        -->


           
        @foreach($desc as $job_opening)
                           
                            <br/>
                            <br/>
                            <tr height="300"><td>{{$job_opening->job_desc}}</td></tr>
                            @endforeach
        </table>
        
        
    </body>
</html>
=======
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
            }

            /* Create two equal columns that floats next to each other */
            .column {
              float: left;
              width: 20%;
              padding: 10px;
              height: 500px; /* Should be removed. Only for demonstration */
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
<div class="row">
<div class="col-8">
    <div class="white-card">
        <h1>{{ ucfirst($job_opening->job_title) }}</h1>

        <div class="row">
              <div class="column" style="background-color:#aaa;">
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
              <div class="column" style="background-color:#bbb;">
                       
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
                                <p>{{$job_opening->job_desc}}</p>  
                        
                        <button type="button" class="btn btn-success">Apply Now</button>
            </div>
        </div>
    </div>
</div>
<div class="col-4">
    <div class="white-card">
    Right Side Bar
    </div>
</div>
@endsection
       
