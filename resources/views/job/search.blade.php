@extends('layout.master')
    
@section('content')

@push('topscript')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/job/jobsearch.css') }}">
    <!------ Include the above in your HEAD tag ---------->
@endpush

@section('center-content')
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
@endsection
@section('right-content')
  @include('partials.sidebar-search-job')
@endsection
@endsection