@extends('layout.master')
    
@section('content')

@push('topscript')
   
@endpush

{{-- @section('center-content') --}}

<div class="row">
  <div class="col-12">
    <div class="white-card-main-search">
        <br>
       <h3 class="center">Search Result</h3><br />
       <div class="row">
        @foreach($videos as $file)
         <div class="col-md-10">
            <div class="card">
            <a target="_blank" href="{{ route('videothumb',['id' => $file->id, 'slug' => $file->slug]) }}">
                <img class="card-img-top" src="{{ asset('video/thumbs/'.$file->thumbnail) }}" alt="{{ $file->title }}">
                <div class="card-body">
                    <h4 class="card-title">{{ $file->title }}</h4>
                       <p>{{ $file->category }}</p>
                </div>
            </a>
            </div>
        </div> 
         @endforeach
     </div>
     <br/>
     <div class="row">
         @foreach($results as $ytvideo)
         <div class="col-md-6">
        <iframe src="https://www.youtube.com/embed/{{ $ytvideo->id->videoId }}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
       @endforeach
     </div>
     <br/>
<div class="row">
     @foreach($jobs as $job_opening)
                                                <div class="col-10">
                                                    <div class="card">
                                                        
                                                            <div class="card-body">
                                                                <div class="row">
                                                                    <div class="col-md-8">
                                                                        <h5 class="card-title"><i class="fas fa-bolt red"></i> <a href="{{ route('getdisplay',['job_id' => $job_opening->job_id]) }}">{{ ucfirst($job_opening->job_title) }}</a></h5>
                                                                        <p>Company: <a class="link-red" href="{{ route('getdisplay',['job_id' => $job_opening->job_id]) }}"><u>{{ ucfirst($job_opening->company_name) }}</u></a> </p>
                                                                        <p>{{ $job_opening->job_desc }} Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
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

                                                @endforeach
                                            </div>
                                            <br/>
                                        <div class="row">
                                              @foreach($directory as $list)
                                                <div class="col-10">

                                                <div class="card">
                                                    <div class="row ">
                                                        <div class="col-md-4">
                                                            <img src="https://cdn.shopify.com/s/files/1/0252/1347/products/IMG_3420.JPG?v=1486859233" class="card-img card-img-padding" alt="{{ ucfirst($list->cname) }}">
                                                        </div>
                                                        <div class="col-md-8 px-3">
                                                            <div class="card-block card-info">
                                                                <h4 class="card-title"><a href="#"> {{ ucfirst($list->cname) }} </a></h4>
                                                                <a href="#" class="btn btn-link"><u>{{ $list->material }}</u></a>
                                                                <div class="card-desc">Approx 3 Lines of Text</div>
                                                                <hr>
                                                                <div class="col-md-12">
                                                                <div class="row">
                                                                <div class="col-md-6 no-padding">
                                                                    <div><i class="fa fa-map-marker-alt red"></i><span class="card-head-span"> {{ $list->block}} {{ $list->sector }} {{ $list->area}} </span></div>
                                                                    @if(!empty($list->email))<div><i class="fa fa-envelope blue" ></i><span> {{ $list->email }}</span></div>@endif
                                                                    @if(!empty($list->phoneno))<div><i class="fa fa-phone green" ></i><span> {{ $list->phoneno }}</span></div>@endif
                                                                </div>
                                                                <div class="col-md-6 no-padding">
                                                                    <a href="{{route('microwebsite', ['site'=> $list->slug ])}}" class="btn btn-outline-primary lg-btn-padding" class="btn btn-sm"> Visit Site</a>
                                                                </div>
                                                                </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                </div>
                                                
                                                @endforeach
                                            </div>
                                            <br/>
    </div>    
  </div>
</div>
@endsection
