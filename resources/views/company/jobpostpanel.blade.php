@extends('layout.master')

@section('content')
<div class="row">
    @include('company.sidemenu')

    <div class="col-md-8">
        <div class="white-card">
          <div class="row">
           <h3 class="title-blue">Posted jobs</h3>
             <div class="col-md-8">
           <a href="{{route('postjob')}}" class="btn btn-outline-primary lg-btn-padding"> Post New Job</a>
         </div>
       </div>
            @foreach($jobs as $job_opening)
          <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-8">
                                        <h5 class="card-title"><i class="fas fa-bolt red"></i> <a href="{{ route('getdisplay',['job_id'=>$job_opening->job_id])}}">{{ ucfirst($job_opening->job_title) }}</a></h5>
                                        <p>Company: <a href="{{route('microwebsite', ['site'=> $company->slug ])}}"><u>{{ ucfirst($job_opening->company_name) }}</u></a> </p>
                                        <p>{{ $job_opening->job_desc }} </p>
                                    </div>
                                    <div class="col-md-4">
                                        <img src="{{asset('microweb/images/logo/'.$company->logo)}}" class="job-company-logo">                                   
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
                                    <div class="col-md-8">
                                        <p><i class="fas fa-eye"></i> Status: @if($job_opening->status == 1) Active </p>
                                        </div>
                                    <div class="col-md-8">
                                       <a href="{{route('applicantslist', ['job_id'=> $job_opening->job_id])}}" class="btn btn-outline-primary lg-btn-padding"> List of applicants </a>
                                    </div>
                                        @else Pending.. 
                                    </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                     </div>
                </div>
            </div>
            @endforeach
            {{ $jobs->links() }}

        </div>
    </div>

</div>

@push('bottomscript')
@endpush
@endsection




