@extends('layout.master')
    
@section('content')

@push('topscript')
   
@endpush

@section('center-content')

<div class="row">
  <div class="col-12">
    <div class="white-card-main-search">

       <h3 class="center">Search Result</h3><br />
       @foreach($results as $file)
        <h5> {{$file->id->videoId}} </h5>
        <a href="{{ asset('https://www.youtube.com/watch?v='.$file->id->videoId) }}" class="hover-posts">
					                            <span><i class="fa fa-play"></i>Watch Video</span>
					                        </a>
       @endforeach
         <div class="table-responsive">
          <table >

           <tbody>
                    <tr>
                        <div class="card mb-3">
                            <div class="row no-gutters">
                              <div class="col-md-8">
                                <div class="card-body">
                                
                                   <!-- @foreach($videos as $file)
					                    <div class="item">
					                        <figure class="premium-img">
					                            <img src="{{ asset('video/thumbs/'.$file->thumbnail) }}" alt="carousel">
					                            <figcaption>
					                                <h5>{{ $file->title }}</h5>
					                                <p>{{ $file->category }}</p>
					                            </figcaption>
					                        </figure>
					                        <a href="{{ route('videothumb',['id' => $file->id, 'slug' => $file->slug]) }}" class="hover-posts">
					                            <span><i class="fa fa-play"></i>Watch Video</span>
					                        </a>
					                    </div>
					                @endforeach -->


    <!-- {{dd($results[0]->id->videoId)}} -->
                                    <!-- @foreach($results as $file)
					                    <div class="item">
					                        <figure class="premium-img">
					                            <img src="{{ asset('video/thumbs/'.$file->thumbnail) }}" alt="carousel">
					                            <figcaption>
					                                <h5>{{ $file->title }}</h5>
					                                <p>{{ $file->description }}</p>
					                            </figcaption>
					                        </figure>
					                        <a href="{{ route('videothumb',['id' => $file->id, 'slug' => $file->slug]) }}" class="hover-posts">
					                            <span><i class="fa fa-play"></i>Watch Video</span>
					                        </a>
					                    </div>
					                @endforeach -->

<!-- 
					                <div class="large-12 medium-7 medium-centered columns event-section">
									    <div class="widgetBox">
									        <div class="widgetTitle">
									            <h5>Events</h5>
									        </div>
									        @foreach($event as $events)
									        <div class="widgetContent">
									            <div class="media-object stack-for-small">
									                <div class="media-object-section">
									                    <div class="recent-img">
									                        <img src= {{ asset('eventphoto/'.$events->photo)}}>
									                    </div>
									                </div>
									                <div class="media-object-section">
									                    <div class="media-content">
									                        <h5><a href="#">{{ ucfirst($events->title) }}</a></h5>
									                        <h6>{{$events->description}}</h6>
									                        <p><i class="fa fa-clock-o"></i><span>{{$events->date}}</span></p>
									                    </div>
									                </div>
									            </div>
									        </div>
									        @endforeach
									    </div>
									</div>


									<div class="row list-group">
                                                @foreach($jobs as $job_opening)
                                                <div class="col-12">
                                                    <div class="card">
                                                        <div class="">
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
                                                </div>

                                                @endforeach
                                            </div>
                                        </div>


                             <div class="row">
                                <div class="large-12 columns">
                                    <div class="tabs-content" data-tabs-content="newVideos">
                                        <div class="tabs-panel is-active" id="new-all">
                                            <div class="row list-group">
                                                @foreach($directory as $list)
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
                                                
                                                
                                                @endforeach
                                            </div>
                                        </div>
                                        
                                    </div>

                              <div class="main-image">
                                <div class="image 1">
                                    
                                    <video id="live-video" class="live-video" autoplay="" controls>
                                        {{-- <source src="{{ asset('upload/live-video.mp4')}}" type="video/mp4"> --}}
                                        @if($live_videos)<source src="{{ asset('video/upload/'.$live_videos->filename)}}" type="video/mp4">@endif
                                    </video>
                                </div>
                            </div>

                                </div>
                            </div>
                          </div>
                        </div> -->
            </tr>
          </tbody>
        </table>
      </div>
     

    </div>    
  </div>
</div>
@endsection
@section('right-content')
  @include('job.companyjobsearch')
@endsection
@endsection