@extends('layout.master')
    
@section('center-content')
<div class="row">
  <div class="col-12">
    <div class="white-card-directory">

        <h3 class="title-blue">LATEST JOBS</h3>
            @foreach($jobs as $job_opening)

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-8">
                                        <h5 class="card-title"><i class="fas fa-bolt red"></i> <a href="{{ route('getdisplay',['job_id'=>$job_opening->job_id])}}">{{ ucfirst($job_opening->job_title) }}</a></h5>
                                        <p>Company: <a href="#"><u>{{ ucfirst($job_opening->company_name) }}</u></a> </p>
                                        <p>{{ $job_opening->job_desc }} </p>
                                    </div>
                                    <div class="col-md-4">
                                        <img src="{{ asset('img/udyog_logo.png') }}" class="job-company-logo">
                                    </div>
                                    <div class="col-md-4">
                                        <p><i class="fas fa-pen"></i> Skills: {{$job_opening->skills}}</p>
                                    </div>
                                    <div class="col-md-8">
                                        <p><i class="fas fa-archive"></i> Experience: {{$job_opening->experience}}</p>
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
            {{--Latest Jobs End--}}
            {{ $jobs->links() }}

        </div>
    </div>
</div>
@endsection

@section('right-content')
  @include('partials.sidebar-search-job')
@endsection