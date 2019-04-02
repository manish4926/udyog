<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{config('app.name','UDYOGTV')}}</title>

       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
* {box-sizing: border-box;}

body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color: #e9e9e9;
}

.topnav a {
  float: left;
  display: block;
  color: black;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #2196F3;
  color: white;
}

.topnav .search-container {
  float: right;
}

.topnav input[type=text] {
  padding: 6px;
  margin-top: 8px;
  font-size: 17px;
  border: none;
}

.topnav .search-container button {
  float: right;
  padding: 6px 10px;
  margin-top: 8px;
  margin-right: 16px;
  background: #ddd;
  font-size: 17px;
  border: none;
  cursor: pointer;
}

.topnav .search-container button:hover {
  background: #ccc;
}

@media screen and (max-width: 600px) {
  .topnav .search-container {
    float: none;
  }
  .topnav a, .topnav input[type=text], .topnav .search-container button {
    float: none;
    display: block;
    text-align: left;
    width: 100%;
    margin: 0;
    padding: 14px;
  }
  .topnav input[type=text] {
    border: 1px solid #ccc;  
  }
}
</style>

        
    </head>
    
    <body>
        <div class="topnav">
		  <a class="active" href="#home">Home</a>
		  <a href="#about">About</a>
		  <a href="#contact">Contact</a>
		  <div class="search-container">
        <form method="post" action="{{ route('searchcontent') }}"> 
           {{ csrf_field() }}
		 
		  	<input type="text" placeholder="Enter job title to search.." name="search">
       

        <select name="place" placeholder="Location">
            <option value="">Select Location</option>
            <option>DELHI</option> 
            <option>MUMBAI</option> 
            <option>LUCKNOW</option>
            <option>PUNJAB</option>
            </select>
        <select name="exp1">
            <option value="">Select Experience</option>
            <option>0 year</option> 
            <option>1 year</option> 
            <option>2 years</option> 
            <option>3 years</option>
            <option>4 years</option>
             <option>5 years</option>
              <option>6 years</option>
            </select>
            <select name="sal">
            <option value="">Select Salary</option>
            <option>30000</option> 
            <option>40000</option> 
            <option>500000</option> 
            <option>57788</option>
            <option>100000</option>
             <option>200000</option>
              <option>300000</option>
            </select>
		  <button type="submit"><i class="fa fa-search"></i></button>
    	</form>
  		</div>
		</div>
        
        
    </body>
</html>
=======
@extends('layout.master')
    
@section('content')

@push('topscript')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/job/jobsearch.css') }}">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
@endpush
<div class="row">
<div class="col-8">
    <div class="white-card">
       <table class="table table-hover table-striped table-bordered">
                        <thead class="thead-dark" align="center">
                          <tr>
                                <th>JOB TITLE</th>
                                <th>company name</th>
                                <th>hr name</th>
                                <th>experience</th>
                                <th>Skills</th>
                                <th>postdate</th>
                                <th>expirydate</th>
                                <th>location</th>
                                <th>package</th>
                                <th></th>
                          </tr>
                        </thead>
                        <tbody>
                          @if(count($searching)>0)
                          @foreach($searching as $job_opening)
                              <tr>
                                <td>{{$job_opening->job_title}}</td>
                                <td>{{$job_opening->company_name}}</td>
                                <td>{{$job_opening->hr_name}}</td>
                                <td>{{$job_opening->experience}}</td>
                                <td>{{$job_opening->skills}}</td>
                                <td>{{$job_opening->postdate}}</td>
                                <td>{{$job_opening->expdate}}</td>
                                <td>{{$job_opening->location}}</td>
                                <td>{{$job_opening->package}}</td>
                                <td><a href="{{ route('getdisplay',['job_id'=>$job_opening->job_id])}}">View details</a></td>  
                            </tr>
                          @endforeach
                          @endif
                      </tbody>
                  </table>
                  {{ $searching->links() }}
    </div>
</div>

<div class="col-4">
    <div class="white-card">
    <form method="post" action="{{ route('searchjob') }}"> {{ csrf_field() }}
            <div id="jobsearch-form" class="form-container" data-form-container>
              <div class="row">
                <div class="form-title">
                  <span>Search JOBS</span>
                </div>
              </div>
            <div class="input-container">
                <div class="row">
                  <span class="req-input" >
                    <span class="input-status" data-toggle="tooltip" data-placement="top" title="Input job title, company name or skills "> 
                    </span>
                    <input type="text" data-min-length="8" name="search" placeholder="Search job using title, company name or skills ">
                  </span>
                </div>    
            <div class="row">
              <span class="req-input">
                <span class="input-status" data-toggle="tooltip" data-placement="top" title="Please Input Experience"> </span>
                  <select name="exp1">
                    <option value="">Select Experience</option>
                    <option>0 year</option> 
                    <option>1 year</option> 
                    <option>2 years</option> 
                    <option>3 years</option>
                    <option>4 years</option>
                    <option>5 years</option>
                    <option>6 years</option>
                  </select>
              </span>
            </div>
            <div class="row">
              <span class="req-input">
                <span class="input-status" data-toggle="tooltip" data-placement="top" title="">
                    <option>200000</option>
                    <option>300000</option>
                  </select>
              </span>
            </div>
            <div class="row submit-row">
              <button type="submit" class="btn btn-block submit-form">Submit</button>
            </div>
          </div>
        </div>
      </form>
    </div>
</div>

</div>
@endsection
