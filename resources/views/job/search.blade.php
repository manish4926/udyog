@extends('layout.master')
    
@section('content')

@push('topscript')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/job/jobsearch.css') }}">
    <!------ Include the above in your HEAD tag ---------->
@endpush

@section('center-content')
<div class="white-card">
    @if(count($searching)>0)
                          @foreach($searching as $job_opening)
                          <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-8">
                                        <h5 class="card-title"><i class="fas fa-bolt red"></i> <a href="{{ route('getdisplay',['job_id'=>$job_opening->job_id])}}">{{ ucfirst($job_opening->job_title) }}</a></h5>
                                        <p>Company: <a href="#"><u>{{ ucfirst($job_opening->company_name) }}</u></a> </p>
                                        <p>{{ $job_opening->job_desc }} Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                    </div>
                                    <div class="col-md-4">
                                        <img src="{{ asset('img/udyog_logo.png') }}" class="job-company-logo">
                                    </div>
                                    <div class="col-md-4">
                                        <p><i class="fas fa-pen"></i> Skills: {{$job_opening->skills}}</p>
                                    </div>
                                    <div class="col-md-4">
                                        <p><i class="fas fa-archive"></i> Experience: {{$job_opening->experience}}</p>
                                    </div>
                                     <div class="col-md-4">
                                    <a href="{{ route('getdisplay',['job_id'=>$job_opening->job_id])}}" class="btn btn-outline-primary lg-btn-padding" class="btn btn-sm"> Details</a>
                                    </div>
                                    <div class="col-md-4">
                                        <p><i class="fas fa-map-marker"></i> Location: {{$job_opening->location}}</p>
                                    </div>
                                    <div class="col-md-8">
                                        <p><i class="fas fa-rupee-sign"></i> Package: {{$job_opening->package}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

    @endforeach
                          @endif
      {{--  <table class="table table-hover table-striped table-bordered">
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
                  </table> --}}
                  {{ $searching->links() }}
  </div>
@endsection
@section('right-content')
  @include('partials.sidebar-search-job')
@endsection
@endsection