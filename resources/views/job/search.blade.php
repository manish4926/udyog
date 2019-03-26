@extends('layout.master')
    
@section('content')

@push('topscript')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('css/job/jobsearch.css')}}">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
@endpush

  <div class="container" id="temp">
    <div class="row">
      <div class="col-md-4">
        <form method="post" action="{{ route('searchcontent') }}"> {{ csrf_field() }}
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
                <span class="input-status" data-toggle="tooltip" data-placement="top" title="Please Input Salary."> </span>
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
    