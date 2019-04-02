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