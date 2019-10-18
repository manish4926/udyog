@extends('layout.master')
    
@section('center-content')
<div class="row">
  <div class="col-12">
    <div class="white-card-directory">

          @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
                 @endif

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
                                         @foreach($company as $companys)
                                         @if($job_opening->company_id == $companys->c_id)
                                        <p>Company: <a href="{{route('microwebsite', ['site'=> $companys->slug ])}}"><u>{{ ucfirst($job_opening->company_name) }}</u></a> </p>
                                        @endif
                                        @endforeach

                                        <p>{{ $job_opening->job_desc }} </p>
                                    </div>
                                    <div class="col-md-4">
                                        @foreach($company as $companys)
                                          @if($job_opening->company_id == $companys->c_id)
                                        <img src="{{asset('microweb/images/logo/'.$companys->logo)}}" class="job-company-logo">
                                          @endif
                                        @endforeach

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
<br/>
            @endforeach

            <br/>
            {{--Latest Jobs End--}}
            {{ $jobs->links() }}

        </div>
    </div>
</div>
@endsection

@section('right-content')
  @include('partials.sidebar-search-job')
@endsection